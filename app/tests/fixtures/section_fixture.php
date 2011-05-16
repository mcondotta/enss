<?php
/* Section Fixture generated on: 2011-05-16 11:28:55 : 1305556135 */
class SectionFixture extends CakeTestFixture {
	var $name = 'Section';

	var $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
		'name' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 45, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'page_id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
		'location' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 100, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'indexes' => array('PRIMARY' => array('column' => array('id', 'page_id'), 'unique' => 1), 'fk_sections_pages1' => array('column' => 'page_id', 'unique' => 0)),
		'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_swedish_ci', 'engine' => 'InnoDB')
	);

	var $records = array(
		array(
			'id' => 1,
			'name' => 'Lorem ipsum dolor sit amet',
			'page_id' => 1,
			'location' => 'Lorem ipsum dolor sit amet'
		),
	);
}
?>