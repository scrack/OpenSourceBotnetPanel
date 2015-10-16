<?php
/**
 * Checkin Fixture
 */
class CheckinFixture extends CakeTestFixture {

/**
 * Table name
 *
 * @var string
 */
	public $table = 'checkin';

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'name' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 256, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'ip' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 16, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'timestamp' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'uuid' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 256, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1)
		),
		'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_swedish_ci', 'engine' => 'MyISAM')
	);

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'id' => 1,
			'name' => 'Lorem ipsum dolor sit amet',
			'ip' => 'Lorem ipsum do',
			'timestamp' => '2015-10-16 10:00:25',
			'uuid' => 'Lorem ipsum dolor sit amet'
		),
	);

}
