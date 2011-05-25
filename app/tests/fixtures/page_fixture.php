<?php
/* Page Fixture generated on: 2011-05-25 10:44:32 : 1306331072 */
class PageFixture extends CakeTestFixture {
	var $name = 'Page';

	var $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
		'name' => array('type' => 'string', 'null' => false, 'default' => NULL, 'key' => 'unique', 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'event_id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
		'location' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 100, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'indexes' => array('PRIMARY' => array('column' => array('id', 'event_id'), 'unique' => 1), 'name_UNIQUE' => array('column' => 'name', 'unique' => 1), 'fk_pages_events1' => array('column' => 'event_id', 'unique' => 0)),
		'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'InnoDB')
	);

	var $records = array(
		array(
			'id' => 1,
			'name' => 'Lorem ipsum dolor sit amet',
			'event_id' => 1,
			'location' => 'Lorem ipsum dolor sit amet'
		),
	);
}
?>