<?php
/* Subpage Test cases generated on: 2011-05-16 13:08:50 : 1305562130*/
App::import('Model', 'Subpage');

class SubpageTestCase extends CakeTestCase {
	var $fixtures = array('app.subpage', 'app.page', 'app.event', 'app.abstract', 'app.section', 'app.content');

	function startTest() {
		$this->Subpage =& ClassRegistry::init('Subpage');
	}

	function endTest() {
		unset($this->Subpage);
		ClassRegistry::flush();
	}

}
?>