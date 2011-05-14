<div class="personalInformations form">
<?php echo $this->Form->create('PersonalInformation');?>
	<fieldset>
		<legend><?php __('Add Personal Information'); ?></legend>
	<?php
		echo $this->Form->input('name');
		echo $this->Form->input('email');
		echo $this->Form->input('CPF');
		echo $this->Form->input('country');
		echo $this->Form->input('university');
		echo $this->Form->input('course');
		echo $this->Form->input('abstract_id');
		echo $this->Form->input('birth');
		echo $this->Form->input('user_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Personal Informations', true), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Abstracts', true), array('controller' => 'abstracts', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Abstract', true), array('controller' => 'abstracts', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users', true), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User', true), array('controller' => 'users', 'action' => 'add')); ?> </li>
	</ul>
</div>