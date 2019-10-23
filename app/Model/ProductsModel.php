<?php

App::uses('AppModel', 'Model');

class CategoryModel extends AppModel {
    
   
    public $useTable    = 'products';

    public $validate = array(

        'name'  => array(
            'rule'       => 'notNull',
            'required'   => true,
            'allowEmpty' => false,
            'on'         => 'create',
            'message'    => 'Please enter the name.'
        ),
        'description'    => array(
        	'rule'       => 'notBlank',
        	'allowEmpty' => false,
            'on'         => 'create',
            'required'   => true,
            'message'    => 'Please enter the product description.'
        ),
        'price'  => array(
            'rule'       => 'notBlank',
            'allowEmpty' => false,
            'on'         => 'create',
            'required'   => true,
            'message'    => 'Please enter the product description.'
        ),
        'discount' => array(
            'rule'       => 'notBlank',
            'allowEmpty' => false,
            'on'         => 'create',
            'required'   => true,
            'message'    => 'Please enter the product description.'
        ),
    );
}

