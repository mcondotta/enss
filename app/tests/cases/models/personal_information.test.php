<?php
/* PersonalInformation Test cases generated on: 2011-05-14 18:55:50 : 1305410150*/
App::import('Model', 'PersonalInformation');

class PersonalInformationTestCase extends CakeTestCase {
	var $fixtures = array('app.personal_information', 'app.abstract', 'app.user');

	function startTest() {
		$this->PersonalInformation =& ClassRegistry::init('PersonalInformation');
	}

	function endTest() {
		unset($this->PersonalInformation);
		ClassRegistry::flush();
	}

}
?>