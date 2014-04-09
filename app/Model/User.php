<!-- Helps set up user validation and security-->

<?php

App::uses('Security', 'Utility');

class User extends AppModel{

	//Here we validate any form fields
	public $validate = array(
		'firstname' => array(
			'notempty' => array(
				'rule' => '/^[^%#\/*@!]+$/',  
       			'message' => 'Only letters and integers, min 3 characters'
			),
			),

		'lastname' => array(
			'notempty' => array(
				'rule' => '/^[^%#\/*@!]+$/',  
       			'message' => 'Only letters and integers, min 3 characters'
			),
			),

		'email' => array(
        	'correctemail' => array(
   			    'rule' => 'email',
       			'message' => 'Please make sure your email is entered correctly.'
       		),
       		),
		'passwd' => array(
     		'min' => array(
      			'rule' => array('minLength', 6),
       			'message' => 'Usernames must be at least 6 characters.'
       		),
      		),

      	'required' => array(
        	'rule' => 'notEmpty',
        	'message'=>'Please enter a password.'
      ),

	);

		//Add a assetion statement here to include symbols numbers etc. look up cakephp docs
	
	//right here we make the passwords secure in case anybody wants to hack this offline website -_-
	public function beforeSave( $options = array() ){

		if (isset($this->data[$this->alias]['password'])) {
            $this->data[$this->alias]['password'] = AuthComponent::password($this->data[$this->alias]['password']);
        }
        return true;

		$this->data['User']['password'] = Security::hash($this->data['User']['password'], 'sha1', true);

		return true;

	}
}

?>