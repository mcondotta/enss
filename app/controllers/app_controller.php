<?php
class AppController extends Controller {
    var $components = array('Auth', 'Session');
    var $helpers = array('Html', 'Form', 'Session', 'MenuBuilder.MenuBuilder');

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
        $menu = array('main-menu' => array());
        $submenu = array();
        foreach ($pages as $page) {
          $menu_entry = array('title' => $page['Page']['name']);
          if (!empty($page['Page']['location'])) {
            $url_string = explode('/', $page['Page']['location']);
            $url = array('controller' => $url_string[0], 'action' => $url_string[1]);
          }
          else {
            $action = strtolower(implode('_', explode(' ', $page['Page']['name'])));
            $url = array('controller' => 'pages', 'action' => $action);
          }
          $menu_entry['url'] = $url;
          #debug($page['Page']);
          if (!empty($page['Subpage'])) {
            $menu_entry['submenu'] = array();
            foreach ($page['Subpage'] as $subpage) {
              $submenu = array('title' => $subpage['name']);
              if (!empty($subpage['location'])) {
                $url_string = explode('/', $subpage['location']);
                $url = array('controller' => $url_string[0], 'action' => $url_string[1]);
              }
              else {
                $action = strtolower(implode('_', explode(' ', $subpage['name'])));
                $url = array('controller' => 'pages', 'action' => $action);
              }
              $submenu['url'] = $url;
              array_push($menu_entry['submenu'], $submenu);
            }
            #debug($page['Subpage']);
          }
          array_push($menu['main-menu'], $menu_entry);
        }
        #debug($menu);
        $this->set(compact('menu'));
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
