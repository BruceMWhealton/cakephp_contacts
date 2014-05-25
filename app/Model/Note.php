<?php
App::uses('AppModel', 'Model');
/**
 * Note Model
 *
 */
class Note extends AppModel {

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'note';
	public $belongsTo = 'Contact';
}
