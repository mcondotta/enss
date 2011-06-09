<?php
class PersonalInformationsController extends AppController {

	var $name = 'PersonalInformations';

	function index() {
		$this->PersonalInformation->recursive = 0;
		$this->set('personalInformations', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid personal information', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('personalInformation', $this->PersonalInformation->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->PersonalInformation->create();
			if ($this->PersonalInformation->save($this->data)) {
				$this->Session->setFlash(__('The personal information has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The personal information could not be saved. Please, try again.', true));
			}
		}
		$users = $this->PersonalInformation->User->find('list');
		$this->set(compact('users'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid personal information', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->PersonalInformation->save($this->data)) {
				$this->Session->setFlash(__('The personal information has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The personal information could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->PersonalInformation->read(null, $id);
		}
		$users = $this->PersonalInformation->User->find('list');
		$this->set(compact('users'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for personal information', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->PersonalInformation->delete($id)) {
			$this->Session->setFlash(__('Personal information deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Personal information was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
}
?>