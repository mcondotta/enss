<?php
class PagesController extends AppController {

  var $name = 'Pages';

  function beforeFilter() {
    parent::beforeFilter();
    $this->Page->locale = 'eng';
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
  }

  function city() {
  }

}
?>
