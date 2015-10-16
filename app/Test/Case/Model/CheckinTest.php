<?php
App::uses('Checkin', 'Model');

/**
 * Checkin Test Case
 */
class CheckinTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.checkin'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Checkin = ClassRegistry::init('Checkin');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Checkin);

		parent::tearDown();
	}

}
