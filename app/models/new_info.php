<?php
class NewInfo extends AppModel {
  var $name = 'NewInfo';
  var $actsAs = array('Translate' => array('text'));
  var $validate = array(
    'text' => array(
      'notempty' => array(
        'rule' => array('notempty'),
        //'message' => 'Your custom message here',
        //'allowEmpty' => false,
        //'required' => false,
        //'last' => false, // Stop validation after this rule
        //'on' => 'create', // Limit validation to 'create' or 'update' operations
      ),
    ),
    'event_id' => array(
      'numeric' => array(
        'rule' => array('numeric'),
        //'message' => 'Your custom message here',
        //'allowEmpty' => false,
        //'required' => false,
        //'last' => false, // Stop validation after this rule
        //'on' => 'create', // Limit validation to 'create' or 'update' operations
      ),
    ),
  );
  //The Associations below have been created with all possible keys, those that are not needed can be removed

  var $belongsTo = array(
    'Event' => array(
      'className' => 'Event',
      'foreignKey' => 'event_id',
      'conditions' => '',
      'fields' => '',
      'order' => ''
    )
  );

}
?>
