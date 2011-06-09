<div class="grid_4">	
	<div class="box">			
				<h2>
			<a href="#" id="toggle-admin-actions">Actions</a>
		</h2>
		<div class="block" id="admin-actions">			
			<h5>Personal Informations</h5>
			<ul class="menu">
								<li><?php echo $this->Html->link(sprintf(__('List %s', true), __('Personal Informations', true)), array('action' => 'index'));?></li>
			</ul>
			
			<h5>Users</h5>
			<ul class="menu">
				<li><?php echo $this->Html->link(sprintf(__('List %s', true), __('Users', true)), array('controller' => 'users', 'action' => 'index')); ?> </li>
				<li><?php echo $this->Html->link(sprintf(__('New %s', true), __('User', true)), array('controller' => 'users', 'action' => 'add')); ?> </li>
			</ul>
		</div>
	</div>
</div>

<div class="grid_12">
    <h2 id="page-heading"><?php printf(__('Add %s', true), __('Personal Information', true)); ?></h2>
    
	<div class="personalInformations form">
	<?php echo $this->Form->create('PersonalInformation');?>
		<fieldset>
	 		<legend><?php printf(__('Personal Information Record', true)); ?></legend>
		<?php
		echo $this->Form->input('first_name');
		echo $this->Form->input('last_name');
		echo $this->Form->input('scientific_name');
		echo $this->Form->input('city_state');
		echo $this->Form->input('university');
		echo $this->Form->input('department');
		echo $this->Form->input('address');
		echo $this->Form->input('user_id');
		echo $this->Form->input('current_position');
		echo $this->Form->input('lattes');
	?>
		</fieldset>
	<?php echo $this->Form->end(__('Submit', true));?>
	</div>

</div>
<div class="clear"></div>
