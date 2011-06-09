<?php
class AbstractIlsController extends AppController {

	var $name = 'AbstractIls';

	function index() {
		$this->AbstractIl->recursive = 0;
		$this->set('abstractIls', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid abstract il', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('abstractIl', $this->AbstractIl->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->AbstractIl->create();
			if ($this->AbstractIl->save($this->data)) {
				$this->Session->setFlash(__('The abstract il has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The abstract il could not be saved. Please, try again.', true));
			}
		}
		$events = $this->AbstractIl->Event->find('list');
		$users = $this->AbstractIl->User->find('list');
		$this->set(compact('events', 'users'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid abstract il', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->AbstractIl->save($this->data)) {
				$this->Session->setFlash(__('The abstract il has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The abstract il could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->AbstractIl->read(null, $id);
		}
		$events = $this->AbstractIl->Event->find('list');
		$users = $this->AbstractIl->User->find('list');
		$this->set(compact('events', 'users'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for abstract il', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->AbstractIl->delete($id)) {
			$this->Session->setFlash(__('Abstract il deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Abstract il was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
}
?>