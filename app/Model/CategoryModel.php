<?php

App::uses('AppModel', 'Model');

class CategoryModel extends AppModel {
    
   
    public $useTable    = 'categories';

     
    
    public $validate = array(
        'category_name'  => array(
            'rule'       => 'notNull',
            'required'   => true,
            'allowEmpty' => false,
            'on'         => 'create',
            'message'    => 'Please enter the name.'
        ),
        'category_description' => array(
        	'rule'       => 'notBlank',
        	'allowEmpty' => false,
            'on'         => 'create',
            'required'   => true,
            'message'    => 'Please enter the category description.'
        )
    );

    public function setValidationRules($type = 'someDefault') {
        switch($type){
            case SendMode::GROUP_FIELDS:
            $this->validate = array(

        'category_name'  => array(
            'rule'       => 'notNull',
            'required'   => true,
            'allowEmpty' => false,
            'on'         => 'create',
            'message'    => 'Please enter the name.'
        ),
        'category_description' => array(
            'rule'       => 'notBlank',
            'allowEmpty' => false,
            'on'         => 'create',
            'required'   => true,
            'message'    => 'Please enter the category description.'
        )
    );
  }
}


public function validateApiCall($data) {
    $this->setValidationRules($data['type']);
    return $this->validate($data);
 }
}

