<?php
class Page extends AppModel {
  var $name = 'Page';
  var $actsAs = array('Translate' => array('name'));
  var $validate = array(
    'name' => array(
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

  var $hasMany = array(
    'Subpage' => array(
      'className' => 'Subpage',
      'foreignKey' => 'page_id',
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

  function beforeSave($options) {
    if (empty($this->data['Page']['location'])) {
      $this->data['Page']['location'] = 'pages/' . strtolower(implode('_', preg_split("/( |\/)/", Sanitize::paranoid($this->data['Page']['name']))));
    }
    return true;
  }

}
?>
