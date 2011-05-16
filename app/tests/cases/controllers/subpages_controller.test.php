<?php
/* Subpages Test cases generated on: 2011-05-16 13:52:04 : 1305564724*/
App::import('Controller', 'Subpages');

class TestSubpagesController extends SubpagesController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class SubpagesControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.subpage', 'app.page', 'app.event', 'app.abstract', 'app.section', 'app.content');

	function startTest() {
		$this->Subpages =& new TestSubpagesController();
		$this->Subpages->constructClasses();
	}

	function endTest() {
		unset($this->Subpages);
		ClassRegistry::flush();
	}

	function testIndex() {

	}

	function testView() {

	}

	function testAdd() {

	}

	function testEdit() {

	}

	function testDelete() {

	}

}
?>