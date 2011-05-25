<?php
/* Page Test cases generated on: 2011-05-25 10:44:33 : 1306331073*/
App::import('Model', 'Page');

class PageTestCase extends CakeTestCase {
	var $fixtures = array('app.page', 'app.event', 'app.abstract', 'app.subpage');

	function startTest() {
		$this->Page =& ClassRegistry::init('Page');
	}

	function endTest() {
		unset($this->Page);
		ClassRegistry::flush();
	}

}
?>