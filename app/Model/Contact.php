<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Contact
 *
 * @author Bruce
 */
class Contact extends AppModel {
    public $belongsTo = 'Category';
	public $hasMany = 'Note';
	
	public $validate = array(
	'category_id' => 'numeric',
	'name' => 'notEmpty',
	'title' => 'alphaNumerica',
	'organization' => 'alphaNumerica',
	'street_address_1' => 'alphaNumerica',
	'street_address_2' => 'alphaNumerica',
	'zip' => 'postal',
	'email' => 'email',
	'home_phone' => 'phone',
	'work_phone' => 'phone',
	'phone_other' => 'phone',
	'fax' => 'phone',
	'website' => 'url'
	);
}
