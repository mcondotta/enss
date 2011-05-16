<?php
/* Pages Test cases generated on: 2011-05-16 13:39:12 : 1305563952*/
App::import('Controller', 'Pages');

class TestPagesController extends PagesController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class PagesControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.page', 'app.event', 'app.abstract', 'app.section', 'app.subpages', 'app.content', 'app.subpage');

	function startTest() {
		$this->Pages =& new TestPagesController();
		$this->Pages->constructClasses();
	}

	function endTest() {
		unset($this->Pages);
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