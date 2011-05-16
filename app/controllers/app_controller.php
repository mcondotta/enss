<?php
class AppController extends Controller {
    var $components = array('Auth', 'Session');
    var $helpers = array('Html', 'Form', 'Session');

    function beforeFilter() {
        //Configure AuthComponent
        Security::setHash('sha256');
        $this->Auth->allow('*');
        #$this->Auth->authorize = array('index', 'actions');
        $this->Auth->authError = 'Area Restrita! Efetue login!';
        $this->Auth->loginError = 'Nome de usuario ou senha não conferem!';
        $this->Auth->userScope = array('User.active' => true);
        $this->Auth->loginAction = array('controller' => 'users', 'action' => 'login');
        #$this->Auth->logoutRedirect = array('controller' => 'users', 'action' => 'logout');
        #$this->Auth->loginRedirect = array('controller' => 'posts', 'action' => 'add');
        $this->set('admin', $this->_isAdmin());
        $this->loadModel('Page');
        $this->loadModel('Subpage');
        $pages = $this->Page->find('all');
        $subpages = $this->Subpage->find('all');
        debug($pages);
        debug($subpages);
    }

    function afterFilter() {
        # Update User last_access datetime
       if ($this->Auth->user()) {
            $this->loadModel('User');
            $this->User->id = $this->Auth->user('id');
            $this->User->saveField('last_access', date('Y-m-d H:i:s'));
        }
    }

    function _isAdmin() {
      $admin = FALSE;
      if ($this->Auth->user('role') == 'admin') {
        $admin = TRUE;
      }
      return $admin;
    }
}
?>
