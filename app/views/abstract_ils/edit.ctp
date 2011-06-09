<div class="grid_4">	
	<div class="box">			
				<h2>
			<a href="#" id="toggle-admin-actions">Actions</a>
		</h2>
		<div class="block" id="admin-actions">			
			<h5>Abstract</h5>
			<ul class="menu">
								<li><?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $this->Form->value('AbstractIl.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $this->Form->value('AbstractIl.id'))); ?></li>
								<li><?php echo $this->Html->link(sprintf(__('List %s', true), __('Abstracts', true)), array('action' => 'index'));?></li>
			</ul>
			
			<h5>Events</h5>
			<ul class="menu">
				<li><?php echo $this->Html->link(sprintf(__('List %s', true), __('Events', true)), array('controller' => 'events', 'action' => 'index')); ?> </li>
				<li><?php echo $this->Html->link(sprintf(__('New %s', true), __('Event', true)), array('controller' => 'events', 'action' => 'add')); ?> </li>
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
    <h2 id="page-heading"><?php printf(__('Edit %s', true), __('Abstract', true)); ?></h2>
    
	<div class="abstractIls form">
	<?php echo $this->Form->create('AbstractIl');?>
		<fieldset>
	 		<legend><?php printf(__('Abstract Record', true)); ?></legend>
		<?php
		echo $this->Form->input('id');
		echo $this->Form->input('aproved');
		echo $this->Form->input('event_id');
		echo $this->Form->input('user_id');
		echo $this->Form->input('abstract');
		echo $this->Form->input('intention_letter');
	?>
		</fieldset>
	<?php echo $this->Form->end(__('Submit', true));?>
	</div>

</div>
<div class="clear"></div>
