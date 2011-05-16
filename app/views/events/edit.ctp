<div class="grid_4">	
	<div class="box">			
				<h2>
			<a href="#" id="toggle-admin-actions">Actions</a>
		</h2>
		<div class="block" id="admin-actions">			
			<h5>Events</h5>
			<ul class="menu">
								<li><?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $this->Form->value('Event.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $this->Form->value('Event.id'))); ?></li>
								<li><?php echo $this->Html->link(sprintf(__('List %s', true), __('Events', true)), array('action' => 'index'));?></li>
			</ul>
			
			<h5>Abstracts</h5>
			<ul class="menu">
				<li><?php echo $this->Html->link(sprintf(__('List %s', true), __('Abstracts', true)), array('controller' => 'abstracts', 'action' => 'index')); ?> </li>
				<li><?php echo $this->Html->link(sprintf(__('New %s', true), __('Abstract', true)), array('controller' => 'abstracts', 'action' => 'add')); ?> </li>
			</ul>

			<h5>Pages</h5>
			<ul class="menu">
				<li><?php echo $this->Html->link(sprintf(__('List %s', true), __('Pages', true)), array('controller' => 'pages', 'action' => 'index')); ?> </li>
				<li><?php echo $this->Html->link(sprintf(__('New %s', true), __('Page', true)), array('controller' => 'pages', 'action' => 'add')); ?> </li>
			</ul>
		</div>
	</div>
</div>

<div class="grid_12">
    <h2 id="page-heading"><?php printf(__('Edit %s', true), __('Event', true)); ?></h2>
    
	<div class="events form">
	<?php echo $this->Form->create('Event');?>
		<fieldset>
	 		<legend><?php printf(__('Event Record', true)); ?></legend>
		<?php
		echo $this->Form->input('id');
		echo $this->Form->input('year');
	?>
		</fieldset>
	<?php echo $this->Form->end(__('Submit', true));?>
	</div>

</div>
<div class="clear"></div>
