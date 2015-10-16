<?php
/**
 * UpdatesLog Fixture
 */
class UpdatesLogFixture extends CakeTestFixture {

/**
 * Table name
 *
 * @var string
 */
	public $table = 'updates_log';

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'update_id' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false),
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
			'update_id' => 1,
			'timestamp' => '2015-10-16 10:00:45',
			'uuid' => 'Lorem ipsum dolor sit amet'
		),
	);

}
