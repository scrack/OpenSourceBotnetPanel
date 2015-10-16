<?php
App::uses('Loot', 'Model');

/**
 * Loot Test Case
 */
class LootTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.loot'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Loot = ClassRegistry::init('Loot');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Loot);

		parent::tearDown();
	}

}
