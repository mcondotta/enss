<div class="grid_4">	
	<div class="box">			
				<h2>
			<a href="#" id="toggle-admin-actions">Actions</a>
		</h2>
		<div class="block" id="admin-actions">			
			<h5>Users</h5>
			<ul class="menu">
								<li><?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $this->Form->value('User.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $this->Form->value('User.id'))); ?></li>
								<li><?php echo $this->Html->link(sprintf(__('List %s', true), __('Users', true)), array('action' => 'index'));?></li>
			</ul>
			
			<h5>Abstracts</h5>
			<ul class="menu">
				<li><?php echo $this->Html->link(sprintf(__('List %s', true), __('Abstracts', true)), array('controller' => 'abstracts', 'action' => 'index')); ?> </li>
				<li><?php echo $this->Html->link(sprintf(__('New %s', true), __('Abstract', true)), array('controller' => 'abstracts', 'action' => 'add')); ?> </li>
			</ul>

			<h5>Personal Informations</h5>
			<ul class="menu">
				<li><?php echo $this->Html->link(sprintf(__('List %s', true), __('Personal Informations', true)), array('controller' => 'personal_informations', 'action' => 'index')); ?> </li>
				<li><?php echo $this->Html->link(sprintf(__('New %s', true), __('Personal Information', true)), array('controller' => 'personal_informations', 'action' => 'add')); ?> </li>
			</ul>
		</div>
	</div>
</div>

<div class="grid_12">
    <h2 id="page-heading"><?php printf(__('Edit %s', true), __('User', true)); ?></h2>
    
	<div class="users form">
	<?php echo $this->Form->create('User');?>
		<fieldset>
	 		<legend><?php printf(__('User Record', true)); ?></legend>
		<?php
		echo $this->Form->input('id');
		echo $this->Form->input('password');
		echo $this->Form->input('role');
		echo $this->Form->input('email');
		echo $this->Form->input('status');
		echo $this->Form->input('clear_password');
		echo $this->Form->input('last_login');
		echo $this->Form->input('last_access');
	?>
		</fieldset>
	<?php echo $this->Form->end(__('Submit', true));?>
	</div>

</div>
<div class="clear"></div>
