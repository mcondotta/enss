<?php
/* Section Test cases generated on: 2011-05-16 11:28:55 : 1305556135*/
App::import('Model', 'Section');

class SectionTestCase extends CakeTestCase {
	var $fixtures = array('app.section', 'app.page', 'app.event', 'app.abstract', 'app.content');

	function startTest() {
		$this->Section =& ClassRegistry::init('Section');
	}

	function endTest() {
		unset($this->Section);
		ClassRegistry::flush();
	}

}
?>