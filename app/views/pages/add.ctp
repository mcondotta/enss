<div class="grid_4">	
	<div class="box">			
				<h2>
			<a href="#" id="toggle-admin-actions">Actions</a>
		</h2>
		<div class="block" id="admin-actions">			
			<h5>Pages</h5>
			<ul class="menu">
								<li><?php echo $this->Html->link(sprintf(__('List %s', true), __('Pages', true)), array('action' => 'index'));?></li>
			</ul>
			
			<h5>Events</h5>
			<ul class="menu">
				<li><?php echo $this->Html->link(sprintf(__('List %s', true), __('Events', true)), array('controller' => 'events', 'action' => 'index')); ?> </li>
				<li><?php echo $this->Html->link(sprintf(__('New %s', true), __('Event', true)), array('controller' => 'events', 'action' => 'add')); ?> </li>
			</ul>

			<h5>Sections</h5>
			<ul class="menu">
				<li><?php echo $this->Html->link(sprintf(__('List %s', true), __('Sections', true)), array('controller' => 'sections', 'action' => 'index')); ?> </li>
				<li><?php echo $this->Html->link(sprintf(__('New %s', true), __('Section', true)), array('controller' => 'sections', 'action' => 'add')); ?> </li>
			</ul>

			<h5>Subpages</h5>
			<ul class="menu">
				<li><?php echo $this->Html->link(sprintf(__('List %s', true), __('Subpages', true)), array('controller' => 'subpages', 'action' => 'index')); ?> </li>
				<li><?php echo $this->Html->link(sprintf(__('New %s', true), __('Subpage', true)), array('controller' => 'subpages', 'action' => 'add')); ?> </li>
			</ul>
		</div>
	</div>
</div>

<div class="grid_12">
    <h2 id="page-heading"><?php printf(__('Add %s', true), __('Page', true)); ?></h2>
    
	<div class="pages form">
	<?php echo $this->Form->create('Page');?>
		<fieldset>
	 		<legend><?php printf(__('Page Record', true)); ?></legend>
		<?php
		echo $this->Form->input('name');
		echo $this->Form->input('event_id', array('type' => 'select'));
		echo $this->Form->input('location');
	?>
		</fieldset>
	<?php echo $this->Form->end(__('Submit', true));?>
	</div>

</div>
<div class="clear"></div>
