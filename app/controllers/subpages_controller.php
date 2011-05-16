<?php
class SubpagesController extends AppController {

	var $name = 'Subpages';

	function index() {
		$this->Subpage->recursive = 0;
		$this->set('subpages', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid subpage', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('subpage', $this->Subpage->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->Subpage->create();
			if ($this->Subpage->save($this->data)) {
				$this->Session->setFlash(__('The subpage has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The subpage could not be saved. Please, try again.', true));
			}
		}
		$pages = $this->Subpage->Page->find('list');
		$this->set(compact('pages'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid subpage', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Subpage->save($this->data)) {
				$this->Session->setFlash(__('The subpage has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The subpage could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Subpage->read(null, $id);
		}
		$pages = $this->Subpage->Page->find('list');
		$this->set(compact('pages'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for subpage', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Subpage->delete($id)) {
			$this->Session->setFlash(__('Subpage deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Subpage was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
}
?>