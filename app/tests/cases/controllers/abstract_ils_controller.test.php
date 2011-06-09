<?php
/* AbstractIls Test cases generated on: 2011-06-09 13:40:37 : 1307637637*/
App::import('Controller', 'AbstractIls');

class TestAbstractIlsController extends AbstractIlsController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class AbstractIlsControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.abstract_il', 'app.event', 'app.page', 'app.subpage', 'app.user', 'app.personal_information');

	function startTest() {
		$this->AbstractIls =& new TestAbstractIlsController();
		$this->AbstractIls->constructClasses();
	}

	function endTest() {
		unset($this->AbstractIls);
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