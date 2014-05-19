<?php
App::uses('AppModel', 'Model');
/**
 * Category Model
 *
 */
class Category extends AppModel {

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'category_name';
	public $hasMany = 'Contact';
	
	public $validate = array(
		'category_name' => 'notEmpty',
	);

}
