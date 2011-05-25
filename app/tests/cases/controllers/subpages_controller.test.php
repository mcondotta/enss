<?php
/* Subpages Test cases generated on: 2011-05-25 10:42:28 : 1306330948*/
App::import('Controller', 'Subpages');

class TestSubpagesController extends SubpagesController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class SubpagesControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.subpage', 'app.page', 'app.event', 'app.abstract');

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