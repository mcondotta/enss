<?php
App::import('Sanitize');
class AppController extends Controller {
    var $components = array('Auth', 'Session', 'Cookie');
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
        $this->_setLanguage();
        $this->loadModel('Page');
        $this->loadModel('Subpage');
        $this->Page->locale = $this->Session->read('Config.language');
        $this->Subpage->locale = $this->Session->read('Config.language');
        $pages = $this->Page->find('all', array('order' => array('Page.id ASC', 'I18n__name.foreign_key ASC')));
        $subpages = $this->Subpage->find('all', array('order' => 'Subpage.id ASC'));
        #debug($pages);
        #debug($subpages);
        $menu = array('main-menu' => array());
        $submenu = array();
        foreach ($pages as $page) {
          $menu_entry = array('title' => $page['Page']['name']);
          if (!empty($page['Page']['location'])) {
            $url_string = explode('/', $page['Page']['location']);
            $url = array('controller' => $url_string[0], 'action' => $url_string[1]);
          }
          else {
            $action = strtolower(implode('_', preg_split("/( |\/)/", Sanitize::paranoid($page['Page']['name']))));
            $url = array('controller' => 'pages', 'action' => $action);
          }
          $menu_entry['url'] = $url;
          #debug($page['Page']);
          if (!empty($page['Subpage'])) {
            $menu_entry['submenu'] = array();
            foreach ($page['Subpage'] as $subpage) {
              $loc_subpage = $this->Subpage->find('all', array ('conditions' => array('Subpage.id' => $subpage['id'])));
              $subpage = $loc_subpage[0]['Subpage'];
              #debug($loc_subpage);
              $submenu = array('title' => $subpage['name']);
              if (!empty($subpage['location'])) {
                $url_string = explode('/', $subpage['location']);
                $url = array('controller' => $url_string[0], 'action' => $url_string[1]);
              }
              else {
                $action = strtolower(implode('_', preg_split("/( |\/)/", Sanitize::paranoid($subpage['name']))));
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
        // $menu = array('main-menu' => array(
        //                                    array('title' => __('Home', true), 'url' => 'pages/display'),
        //                                    array('title' => __('Information', true), 'url' => 'pages/information'),
        //                                   )
        //              );
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

  function _setLanguage() {
    if ($this->Cookie->read('lang') && !$this->Session->check('Config.language')) {
      $this->Session->write('Config.language', $this->Cookie->read('lang'));
    }
    else if (isset($this->params['language']) && ($this->params['language']
             !=  $this->Session->read('Config.language'))) {
      $this->Session->write('Config.language', $this->params['language']);
      $this->Cookie->write('lang', $this->params['language'], false, '20 days');
    }
  }
}
?>
