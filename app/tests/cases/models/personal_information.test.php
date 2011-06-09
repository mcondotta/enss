<?php
/* PersonalInformation Test cases generated on: 2011-06-09 12:45:30 : 1307634330*/
App::import('Model', 'PersonalInformation');

class PersonalInformationTestCase extends CakeTestCase {
	var $fixtures = array('app.personal_information', 'app.user', 'app.abstract');

	function startTest() {
		$this->PersonalInformation =& ClassRegistry::init('PersonalInformation');
	}

	function endTest() {
		unset($this->PersonalInformation);
		ClassRegistry::flush();
	}

}
?>