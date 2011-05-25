<?php
/* Subpage Test cases generated on: 2011-05-25 10:42:28 : 1306330948*/
App::import('Model', 'Subpage');

class SubpageTestCase extends CakeTestCase {
	var $fixtures = array('app.subpage', 'app.page', 'app.event', 'app.abstract');

	function startTest() {
		$this->Subpage =& ClassRegistry::init('Subpage');
	}

	function endTest() {
		unset($this->Subpage);
		ClassRegistry::flush();
	}

}
?>