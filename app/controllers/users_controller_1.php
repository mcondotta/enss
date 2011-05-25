<?php
class UsersController extends AppController {
  var $name = 'Users';
  var $paginate = array(
    'User' => array(
      'limit' => 20,
      'order' => array(
          'User.username' => 'asc',
      ),
    ),
  );

  function beforeFilter() {
    parent::beforeFilter();
    $this->Auth->allow('*');
  }

  /**
   * Set this to false if you don't want to store clear passwords in the database
   * @var bool
   * @access private
   */
  var $_store_clear_password = false;

  function index() {
    $users = $this->paginate('User');
    $this->set(compact('users'));
  }

  function add() {
    if (!empty($this->data)) {
      $this->User->set($this->data);
      if ($this->User->validates()) {
        $this->data['User']['password'] = $this->data['User']['clear_password'];
        $this->data = $this->Auth->hashPasswords($this->data);
        if (!$this->_store_clear_password) {
            unset($this->data['User']['clear_password']);
        }
        $this->User->save($this->data, false);
        $this->Session->setFlash(__('User successfully registered!'));
        $this->redirect('index');
      }
    }
  }

  function view($id = null) {
    if (!$id) {
      $this->Session->setFlash(__('Invalid user', true));
      $this->redirect(array('action' => 'index'));
    }
    $this->set('user', $this->User->read(null, $id));
  }

  function edit($id = null) {
    if (!empty($this->data)) {
      $fields = array_keys($this->data['User']);
      if (!empty($this->data['User']['clear_password']) || !empty($this->data['User']['confirm_password'])) {
        $fields[] = 'password';
      } else {
        $fields = array_diff($fields, array('clear_password', 'confirm_password'));
      }
      $this->User->set($this->data);
      if ($this->User->validates()) {
        if (!empty($this->data['User']['clear_password'])) {
          $this->data['User']['password'] = $this->data['User']['clear_password'];
        }
        $this->data = $this->Auth->hashPasswords($this->data);
        if (!$this->_store_clear_password) {
          unset($this->data['User']['clear_password']);
        }
        $this->User->save($this->data, false, $fields);
        $this->Session->setFlash('User Updated');
        $this->redirect('index');
      }
    } else {
      $user = $this->User->findById($id);
      if (empty($user)) {
        $this->Session->setFlash(__('Invalid User ID'));
        $this->redirect('add');
      } else {
        unset($user['User']['clear_password']);
        $this->data = $user;
      }
    }
  }

  function delete() {
    $delete_count = 0;
    if (!empty($this->data['User']['delete'])) {
      foreach($this->data['User']['delete'] as $id => $delete) {
        if ($delete == 1) {
          if ($this->User->delete($id)) {
            $delete_count++;
          }
        }
      }
    }
    $this->Session->setFlash(__($delete_count . ' User' . (($delete_count == 1) ? ' was' : 's were') . ' deleted'));
    $this->redirect('index');
  }

  function login() {
    if (!empty($this->data) && $this->Auth->user()) {
      $this->User->id = $this->Auth->user('id');
      $this->User->saveField('last_login', date('Y-m-d H:i:s'));
      $this->redirect($this->Auth->redirect());
    }
  }

  function logout() {
    $this->Session->setFlash(__('You are now logged out'));
    $this->redirect($this->Auth->logout());
  }
}
?>
