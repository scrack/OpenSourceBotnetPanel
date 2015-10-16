<?php
/**
 * Work Fixture
 */
class WorkFixture extends CakeTestFixture {

/**
 * Table name
 *
 * @var string
 */
	public $table = 'work';

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'name' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 256, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'work' => array('type' => 'text', 'null' => true, 'default' => null, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'timestamp' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'counter' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false),
		'max' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false),
		'alive' => array('type' => 'boolean', 'null' => true, 'default' => '1'),
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
			'work' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'timestamp' => '2015-10-16 10:01:15',
			'counter' => 1,
			'max' => 1,
			'alive' => 1
		),
	);

}
