<?php
/* PersonalInformations Test cases generated on: 2011-05-14 18:55:50 : 1305410150*/
App::import('Controller', 'PersonalInformations');

class TestPersonalInformationsController extends PersonalInformationsController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class PersonalInformationsControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.personal_information', 'app.abstract', 'app.user');

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