<?php
App::uses('UpdatesLog', 'Model');

/**
 * UpdatesLog Test Case
 */
class UpdatesLogTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.updates_log',
		'app.update'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->UpdatesLog = ClassRegistry::init('UpdatesLog');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->UpdatesLog);

		parent::tearDown();
	}

}
