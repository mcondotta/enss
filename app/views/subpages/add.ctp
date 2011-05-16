<div class="grid_4">	
	<div class="box">			
				<h2>
			<a href="#" id="toggle-admin-actions">Actions</a>
		</h2>
		<div class="block" id="admin-actions">			
			<h5>Subpages</h5>
			<ul class="menu">
								<li><?php echo $this->Html->link(sprintf(__('List %s', true), __('Subpages', true)), array('action' => 'index'));?></li>
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
    <h2 id="page-heading"><?php printf(__('Add %s', true), __('Subpage', true)); ?></h2>
    
	<div class="subpages form">
	<?php echo $this->Form->create('Subpage');?>
		<fieldset>
	 		<legend><?php printf(__('Subpage Record', true)); ?></legend>
		<?php
		echo $this->Form->input('name');
		echo $this->Form->input('location');
		echo $this->Form->input('page_id');
	?>
		</fieldset>
	<?php echo $this->Form->end(__('Submit', true));?>
	</div>

</div>
<div class="clear"></div>
