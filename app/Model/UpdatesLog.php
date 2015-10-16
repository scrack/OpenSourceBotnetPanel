<?php
App::uses('AppModel', 'Model');
/**
 * UpdatesLog Model
 *
 * @property Update $Update
 */
class UpdatesLog extends AppModel {

/**
 * Use table
 *
 * @var mixed False or table name
 */
	public $useTable = 'updates_log';


	// The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'Update' => array(
			'className' => 'Update',
			'foreignKey' => 'update_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
