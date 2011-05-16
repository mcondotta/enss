<?php
/* Page Test cases generated on: 2011-05-16 11:07:22 : 1305554842*/
App::import('Model', 'Page');

class PageTestCase extends CakeTestCase {
	var $fixtures = array('app.page', 'app.event', 'app.abstract', 'app.section');

	function startTest() {
		$this->Page =& ClassRegistry::init('Page');
	}

	function endTest() {
		unset($this->Page);
		ClassRegistry::flush();
	}

}
?>