<?php
class Subpage extends AppModel {
  var $name = 'Subpage';
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
    'page_id' => array(
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
    'Page' => array(
      'className' => 'Page',
      'foreignKey' => 'page_id',
      'conditions' => '',
      'fields' => '',
      'order' => ''
    )
  );

  function beforeSave($options) {
    if (empty($this->data['Subpage']['location'])) {
      $this->data['Subpage']['location'] = 'pages/' . strtolower(implode('_', preg_split("/( |\/)/", Sanitize::paranoid($this->data['Subpage']['name']))));
    }
    return true;
  }

}
?>
