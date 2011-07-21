<?php
class NewInfosController extends AppController {

  var $name = 'NewInfos';
  var $paginate = array('order' => array('date' => 'desc'));

  function beforeFilter() {
    parent::beforeFilter();
    $this->Auth->deny('add, news_list');
    $this->Auth->allow('index');
    $this->NewInfo->locale = 'eng';
  }

  function index() {
    $this->NewInfo->locale = $this->Session->read('Config.language');
    $this->NewInfo->recursive = 0;
    $this->set('new_infos', $this->paginate());
  }

  function news_list() {
    $this->NewInfo->recursive = 0;
    $this->set('new_infos', $this->paginate());
  }

  function add() {
    if (!empty($this->data)) {
      $this->NewInfo->create();
      if ($this->NewInfo->save($this->data)) {
        $this->NewInfo->locale = 'por';
        $this->data['NewInfo']['text'] = $this->data['NewInfo']['texto'];
        $this->NewInfo->save($this->data);
        $this->Session->setFlash(__('The page has been saved', true));
        $this->redirect(array('action' => 'news_list'));
      } else {
        $this->Session->setFlash(__('The page could not be saved. Please, try again.', true));
      }
    }
    $events = $this->NewInfo->Event->find('list', array('fields' => array('Event.year')));
    $this->set(compact('events'));
  }

  function edit($id = null) {
    if (!$id && empty($this->data)) {
      $this->Session->setFlash(__('Invalid page', true));
      $this->redirect(array('action' => 'index'));
    }
    if (!empty($this->data)) {
      if ($this->NewInfo->save($this->data)) {
        $this->Session->setFlash(__('The page has been saved', true));
        $this->redirect(array('action' => 'index'));
      } else {
        $this->Session->setFlash(__('The page could not be saved. Please, try again.', true));
      }
    }
    if (empty($this->data)) {
      $this->data = $this->NewInfo->read(null, $id);
    }
    $events = $this->NewInfo->Event->find('list', array('fields' => array('Event.year')));
    $this->set(compact('events'));
  }

  function delete($id = null) {
    if (!$id) {
      $this->Session->setFlash(__('Invalid id for page', true));
      $this->redirect(array('action'=>'index'));
    }
    if ($this->NewInfo->delete($id)) {
      $this->Session->setFlash(__('News deleted', true));
      $this->redirect(array('action'=>'index'));
    }
    $this->Session->setFlash(__('News was not deleted', true));
    $this->redirect(array('action' => 'index'));
  }

}
?>
