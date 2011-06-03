<?php
class PagesController extends AppController {

  var $name = 'Pages';
  var $components = array('Email');

  function beforeFilter() {
    parent::beforeFilter();
    $this->Page->locale = 'eng';
    //$this->loadModel('Contact');
  }

  function index() {
    $this->Page->recursive = 0;
    $this->set('pages', $this->paginate());
  }

  function view($id = null) {
    if (!$id) {
      $this->Session->setFlash(__('Invalid page', true));
      $this->redirect(array('action' => 'index'));
    }
    $this->set('page', $this->Page->read(null, $id));
  }

  function add() {
    if (!empty($this->data)) {
      $this->Page->create();
      if ($this->Page->save($this->data)) {
        $this->Page->locale = 'por';
        $this->data['Page']['name'] = $this->data['Page']['nome'];
        $this->Page->save($this->data);
        $this->Session->setFlash(__('The page has been saved', true));
        $this->redirect(array('action' => 'index'));
      } else {
        $this->Session->setFlash(__('The page could not be saved. Please, try again.', true));
      }
    }
    $events = $this->Page->Event->find('list', array('fields' => array('Event.year')));
    $this->set(compact('events'));
  }

  function edit($id = null) {
    if (!$id && empty($this->data)) {
      $this->Session->setFlash(__('Invalid page', true));
      $this->redirect(array('action' => 'index'));
    }
    if (!empty($this->data)) {
      if ($this->Page->save($this->data)) {
        $this->Session->setFlash(__('The page has been saved', true));
        $this->redirect(array('action' => 'index'));
      } else {
        $this->Session->setFlash(__('The page could not be saved. Please, try again.', true));
      }
    }
    if (empty($this->data)) {
      $this->data = $this->Page->read(null, $id);
    }
    $events = $this->Page->Event->find('list', array('fields' => array('Event.year')));
    $this->set(compact('events'));
  }

  function delete($id = null) {
    if (!$id) {
      $this->Session->setFlash(__('Invalid id for page', true));
      $this->redirect(array('action'=>'index'));
    }
    if ($this->Page->delete($id)) {
      $this->Session->setFlash(__('Page deleted', true));
      $this->redirect(array('action'=>'index'));
    }
    $this->Session->setFlash(__('Page was not deleted', true));
    $this->redirect(array('action' => 'index'));
  }

  function home() {
    $this->set('title_for_layout','ENSS');
  }

  function information() {
    $this->set('title_for_layout',__('ENSS - Information', true));
  }

  function city() {
    $this->set('title_for_layout',__('ENSS - City', true));
  }

  function accomodation() {
    $this->set('title_for_layout',__('ENSS - Accomodation', true));
  }

  function venue_meeting() {
    $this->set('title_for_layout',__('ENSS - Venue Meeting', true));
  }

  function speakers() {
    $this->set('title_for_layout',__('ENSS - Speakers', true));
  }

  function scientific_programme() {
    $this->set('title_for_layout',__('ENSS - Scientific Programme', true));
  }

  function financial_support() {
    $this->set('title_for_layout',__('ENSS - Financial Support', true));
  }

  function contacts() {
    $this->set('title_for_layout',__('ENSS - Contacts', true));
    if(isset($this->data)) {
      //$this->Email->delivery = 'debug';
      $name = $this->data['Contact']['first_name'] . ' ' . $this->data['Contact']['last_name'];
      $from = $this->data['Contact']['email'];
      $subject = 'Contato do Site do ENSS';
      $msg = $this->data['Contact']['message'];

      $this->Email->sendAs = 'both'; // html, text, both
      $this->set('content_for_layout', $msg); // especifica variavel da mensagem para o template
      $this->Email->layout = 'contact'; // views/elements/email/html/contact.ctp
      $this->Email->template = 'contact';

      // set view variables as normal
      $this->set('from', $name);
      $this->set('msg', $msg);

      $this->Email->to = 'enss2011@gmail.com';
      $this->Email->subject = $subject;
      $this->Email->replyTo = $from;
      $this->Email->from = $name . '<' . $from .'>';

      if ( $this->Email->send($msg) ) {
        $this->Session->setFlash(__('E-mail sent.', true));
      } else {
        $this->Session->setFlash(__('E-mail not sent.', true));
      }
      $this->redirect('/');
    }

  }

  function organizing_committee() {
    $this->set('title_for_layout',__('ENSS - Organizing Committee', true));
  }

  function francisco_ciruela() {
    $this->set('title_for_layout',__('ENSS - Francisco Ciruela', true));
  }

  function helmut_kettenmann() {
    $this->set('title_for_layout',__('ENSS - Helmut Kettenmann', true));
  }

  function james_w_simpkins() {
    $this->set('title_for_layout',__('ENSS - James W. Simpkins', true));
  }

  function jeffrey_rothstein() {
    $this->set('title_for_layout',__('ENSS - Jeffrey Rothstein', true));
  }

  function michael_robinson() {
    $this->set('title_for_layout',__('ENSS - Michael Robinson', true));
  }

  function nicolas_g_bazan() {
    $this->set('title_for_layout',__('ENSS - Nicolas G. Bazan', true));
  }

  function rafael_gutierrez_aguilar() {
    $this->set('title_for_layout',__('ENSS - Rafael Guti&#233;rrez Aguilar', true));
  }

  function renata_ciccarelli() {
    $this->set('title_for_layout',__('ENSS - Renata Ciccarelli', true));
  }

  function rosalia_mentez_otero() {
    $this->set('title_for_layout',__('ENSS - Ros&#225;lia Mendez-Otero', true));
  }

  function vladimir_parpura() {
    $this->set('title_for_layout',__('ENSS - Vladimir Parpura', true));
  }
}
?>
