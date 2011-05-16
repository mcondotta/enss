<div class="users form">
<?php echo $this->Form->create('User');?>
	<fieldset>
		<legend><?php __('Register New User'); ?></legend>
	<?php
    echo $session->flash('auth');
    echo $session->flash();
		echo $this->Form->input('username');
    echo $this->Form->input('clear_password', array('type' => 'password', 'label' => 'Password'));
    echo $this->Form->input('confirm_password', array('type' => 'password'));
    if ($admin) {
      echo $this->Form->input('role', array('options' => array('default' => 'Default', 'admin' => 'Admin')));
      echo $this->Form->input('status', array('options' => array(1 => 'Active', 0 => 'Inactive')));
    }
		echo $this->Form->input('email');
	?>
	</fieldset>
<?php
  echo $this->Form->submit('Submit', array('after' => ' ' . $html->link('Cancel', array('action' => 'index'))));
  echo $this->Form->end();
?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Users', true), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Personal Informations', true), array('controller' => 'personal_informations', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Personal Information', true), array('controller' => 'personal_informations', 'action' => 'add')); ?> </li>
	</ul>
</div>
