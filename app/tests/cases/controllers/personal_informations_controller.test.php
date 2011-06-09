<?php
/* PersonalInformations Test cases generated on: 2011-06-09 12:45:30 : 1307634330*/
App::import('Controller', 'PersonalInformations');

class TestPersonalInformationsController extends PersonalInformationsController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class PersonalInformationsControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.personal_information', 'app.user', 'app.abstract');

	function startTest() {
		$this->PersonalInformations =& new TestPersonalInformationsController();
		$this->PersonalInformations->constructClasses();
	}

	function endTest() {
		unset($this->PersonalInformations);
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