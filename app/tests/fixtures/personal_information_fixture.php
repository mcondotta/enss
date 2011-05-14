<?php
/* PersonalInformation Fixture generated on: 2011-05-14 18:55:50 : 1305410150 */
class PersonalInformationFixture extends CakeTestFixture {
	var $name = 'PersonalInformation';

	var $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
		'name' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 45, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'email' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 45, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'CPF' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 45, 'key' => 'unique', 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'country' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 45, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'university' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 45, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'course' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 45, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'abstract_id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
		'birth' => array('type' => 'date', 'null' => false, 'default' => NULL),
		'user_id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
		'indexes' => array('PRIMARY' => array('column' => array('id', 'abstract_id', 'user_id'), 'unique' => 1), 'id_UNIQUE' => array('column' => 'id', 'unique' => 1), 'CPF_UNIQUE' => array('column' => 'CPF', 'unique' => 1), 'fk_users_abstracts' => array('column' => 'abstract_id', 'unique' => 0), 'fk_personal_informations_users1' => array('column' => 'user_id', 'unique' => 0)),
		'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_swedish_ci', 'engine' => 'InnoDB')
	);

	var $records = array(
		array(
			'id' => 1,
			'name' => 'Lorem ipsum dolor sit amet',
			'email' => 'Lorem ipsum dolor sit amet',
			'CPF' => 'Lorem ipsum dolor sit amet',
			'country' => 'Lorem ipsum dolor sit amet',
			'university' => 'Lorem ipsum dolor sit amet',
			'course' => 'Lorem ipsum dolor sit amet',
			'abstract_id' => 1,
			'birth' => '2011-05-14',
			'user_id' => 1
		),
	);
}
?>