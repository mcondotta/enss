<?php
class User extends AppModel {
    var $name = 'User';
    var $validate = array(
        'username' => array(
            'empty' => array(
                'rule' => 'notEmpty',
                'required' => true,
                'allowEmpty' => false,
                'message' => 'Username is required',
            ),
            'minlength' => array(
                'rule' => array('minLength', 5),
                'required' => true,
                'allowEmpty' => true,
                'message' => 'Usernames must be at least 5 characters long',
            ),
            'maxlength' => array(
                'rule' => array('maxLength', 20),
                'required' => true,
                'allowEmpty' => true,
                'message' => 'Usernames may not be more than 20 characters long',
            ),
            'alphanum' => array(
                'rule' => 'alphaNumeric',
                'required' => true,
                'allowEmpty' => true,
                'message' => 'Usernames may only contain letters and numbers',
            ),
            'unique' => array(
                'rule' => 'isUnique',
                'required' => true,
                'allowEmpty' => true,
                'message' => 'That username is already in use',
            ),
        ),
        'clear_password' => array(
            'empty' => array(
                'rule' => 'notEmpty',
                'required' => true,
                'allowEmpty' => false,
                'on' => 'create',
                'message' => 'Password is required',
            ),
            'length' => array(
                'rule' => array('minLength', 6),
                'required' => true,
                'allowEmpty' => true,
                'message' => 'Passwords must be at least 6 characters long',
            ),
        ),
        'confirm_password' => array(
            'empty_create' => array(
                'rule' => 'notEmpty',
                'required' => true,
                'allowEmpty' => false,
                'on' => 'create',
                'message' => 'Please confirm the password 1',
            ),
            'empty_update' => array(
                'rule' => 'validateConfirmPasswordEmptyUpdate',
                'required' => true,
                'allowEmpty' => true,
                'on' => 'update',
                'message' => 'Please confirm the password 2',
            ),
            'match' => array(
                'rule' => 'validateConfirmPasswordMatch',
                'required' => true,
                'allowEmpty' => true,
                'message' => 'The passwords do not match',
            ),
        ),
        'email' => array(
            'empty' => array(
                'rule' => 'notEmpty',
                'required' => true,
                'allowEmpty' => false,
                'message' => 'Email is required',
            ),
            'valid' => array(
                'rule' => 'email',
                'required' => true,
                'allowEmpty' => true,
                'message' => 'Please enter a valid email address',
            ),
        ),
    );

    /**
     * Callback function for confirm_password
     * Used to check the confirm_password field is not empty on update
     * @return bool
     */
    function validateConfirmPasswordEmptyUpdate() {
        return !empty($this->data['User']['clear_password']) && !empty($this->data['User']['confirm_password']);
    }

    /**
     * Callback function for confirm_password
     * Used to check if clear_password and confirm_password match
     * @return bool
     */
    function validateConfirmPasswordMatch() {
        return $this->data['User']['clear_password'] == $this->data['User']['confirm_password'];
    }

	var $hasMany = array(
		'PersonalInformation' => array(
			'className' => 'PersonalInformation',
			'foreignKey' => 'user_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		)
	);
}
?>
