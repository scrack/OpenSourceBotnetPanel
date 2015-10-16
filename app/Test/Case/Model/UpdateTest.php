<?php
App::uses('Update', 'Model');

/**
 * Update Test Case
 */
class UpdateTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.update'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Update = ClassRegistry::init('Update');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Update);

		parent::tearDown();
	}

}
