<?php

App::uses('AppModel', 'Model');

class CartsModel extends AppModel {
    
   
    public $useTable    = 'carts';

     
    
    public $validate = array(
        
        'name'  => array(
            'rule'       => 'notNull',
            'required'   => true,
            'allowEmpty' => false,
            'on'         => 'create',
            'message'    => 'Please enter the name.'
        ),
        'Total' => array(
        	'rule'       => 'notBlank',
        	'allowEmpty' => false,
            'on'         => 'create',
            'required'   => true,
            'message'    => 'Please enter the total.'
        ),
        'total_discount' => array(
            'rule'       => 'notBlank',
            'allowEmpty' => false,
            'on'         => 'create',
            'required'   => true,
            'message'    => 'Please enter the total discount.'
        ),
        'total_tax'      => array(
            'rule'       => 'notBlank',
            'allowEmpty' => false,
            'on'         => 'create',
            'required'   => true,
            'message'    => 'Please enter the total tax.'
        ),
        'total_with_tax' => array(
            'rule'       => 'notBlank',
            'allowEmpty' => false,
            'on'         => 'create',
            'required'   => true,
            'message'    => 'Please enter the total tax.'
        ),
        'grand_total'    => array(
            'rule'       => 'notBlank',
            'allowEmpty' => false,
            'on'         => 'create',
            'required'   => true,
            'message'    => 'Please enter the total tax.'
        ),
    );
}

