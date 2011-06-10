<?php
class UsersController extends AppController {

  var $name = 'Users';

  /**
   * Set this to false if you don't want to store clear passwords in the database
   * @var bool
   * @access private
   */
  var $_store_clear_password = false;

  function beforeFilter() {
    parent::beforeFilter();
    Configure::write('Config.language', 'por');
    $this->Auth->allow('add');
    $this->Auth->autoRedirect = false;
    //$this->loadModel('Contact');
  }

	function index() {
    if ($this->Auth->user('role') != 'admin') {
      $this->Session->setFlash(__('Only administrator can access this page.', true));
      $this->redirect(array('controller' => 'pages', 'action'=>'home'));
    }
		$this->User->recursive = 0;
		$this->set('users', $this->paginate());
	}

	function view($id = null) {
    if ($this->Auth->user('role') != 'admin') {
      $this->Session->setFlash(__('Only administrator can access this page.', true));
      $this->redirect(array('controller' => 'pages', 'action'=>'home'));
    }
		if (!$id) {
			$this->Session->setFlash(__('Invalid user', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('user', $this->User->read(null, $id));
	}

	function admin_add() {
    if ($this->Auth->user('role') != 'admin') {
      $this->Session->setFlash(__('Only administrator can access this page.', true));
      $this->redirect(array('controller' => 'pages', 'action'=>'home'));
    }
    if (!empty($this->data)) {
      $this->User->set($this->data);
      if ($this->User->validates()) {
        $this->data['User']['password'] = $this->data['User']['clear_password'];
        $this->data = $this->Auth->hashPasswords($this->data);
        unset($this->data['User']['clear_password']);
        $this->data['User']['clear_password'] = NULL;
        $this->data['User']['status'] = TRUE;
        $user = $this->User->save($this->data);
        $this->Session->setFlash(__('User successfully registered!', true));
        $this->redirect(array('controller' => 'pages', 'action' => 'home'));
      }
    }
	}

  function edit($id = null) {
    if ($this->Auth->user('role') != 'admin') {
      $this->Session->setFlash(__('Only administrator can access this page.', true));
      $this->redirect(array('controller' => 'pages', 'action'=>'home'));
    }
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid user', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->User->save($this->data)) {
				$this->Session->setFlash(__('The user has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The user could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->User->read(null, $id);
		}
	}

	function delete($id = null) {
    if ($this->Auth->user('role') != 'admin') {
      $this->Session->setFlash(__('Only administrator can access this page.', true));
      $this->redirect(array('controller' => 'pages', 'action'=>'home'));
    }
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for user', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->User->delete($id)) {
			$this->Session->setFlash(__('User deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('User was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}

  function login() {
    if (!empty($this->data) && $this->Auth->user()) {
      $this->User->id = $this->Auth->user('id');
      $this->User->saveField('last_login', date('Y-m-d H:i:s'));
      $this->Session->setFlash(__('Welcome', true));
      $this->redirect($this->Auth->redirect());
    }
    else {
      if (empty($this->data)) {
        $this->Session->setFlash(__('Need to be logged in to access this page.', true));
      }
      else {
        $this->Session->setFlash(__('Wrong email or password!', true));
      }
    }
    $this->set('title_for_layout',__('ENSS - Login', true));
  }

  function forgot() {
  }

  function register() {
    if ($this->Auth->user()) {
      $this->Session->setFlash(__('You are already logged in, please log out to register.', true));
      $this->redirect(array('controller' => 'pages', 'action' => 'home'));
    }
    if (!empty($this->data)) {
      $this->User->set($this->data);
      if ($this->User->validates()) {
        $this->data['User']['password'] = $this->data['User']['clear_password'];
        $this->data = $this->Auth->hashPasswords($this->data);
        unset($this->data['User']['clear_password']);
        $this->data['User']['clear_password'] = NULL;
        $this->data['User']['status'] = TRUE;
        $user = $this->User->save($this->data);
        if (!empty($user)) {
          $this->data['PersonalInformation']['user_id'] = $this->User->id;
          if (!$this->User->PersonalInformation->save($this->data)) {
            $this->User->delete($this->User->id);
            $this->Session->setFlash(__('User not registered!', true));
            $this->redirect('register');
          }
          $this->data['AbstractIl']['user_id'] = $this->User->id;
          $this->data['AbstractIl']['event_id'] = 1;
          if (!$this->User->AbstractIl->save($this->data)) {
            $this->User->PersonalInformation->delete($this->User->PersonalInformation->id);
            $this->User->delete($this->User->id);
            $this->Session->setFlash(__('User not registered!', true));
            $this->redirect('register');
          }
        }
        $this->Session->setFlash(__('User successfully registered!', true));
        $this->redirect(array('controller' => 'pages', 'action' => 'home'));
      }
    }
    $this->set('title_for_layout',__('ENSS - Abstract/Register', true));
  }

  function logout() {
    $this->Session->setFlash(__('You are now logged out', true));
    $this->redirect($this->Auth->logout());
  }

  function informations() {
    $this->set('user', $this->User->read(null, $this->Auth->user('id')));
    $this->set('title_for_layout',__('ENSS - User Information', true));
  }

  function edit_info() {
    if (!empty($this->data)) {
      $user = $this->User->save($this->data);
			if ($user) {
        $this->data['PersonalInformation'] = $this->data['PersonalInformation'][0];
        $this->data['PersonalInformation']['user_id'] = $this->User->id;
        if (!$this->User->PersonalInformation->save($this->data)) {
          $this->Session->setFlash(__('Changes not saved!', true));
          $this->redirect('edit_info');
        }
        $this->data['AbstractIl'] = $this->data['AbstractIl'][0];
        $this->data['AbstractIl']['user_id'] = $this->User->id;
        $this->data['AbstractIl']['event_id'] = 1;
        if (!$this->User->AbstractIl->save($this->data)) {
          $this->Session->setFlash(__('Changes not saved!', true));
          $this->redirect('edit_info');
        }
				$this->Session->setFlash(__('The changes have been saved', true));
				$this->redirect(array('action' => 'informations'));
			} else {
				$this->Session->setFlash(__('The user could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->User->read(null, $this->Auth->user('id'));
		}
    $this->set('title_for_layout',__('ENSS - Edit User Information', true));
  }
}
?>
