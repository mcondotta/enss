<div class="grid_4">	
	<div class="box">			
				<h2>
			<a href="#" id="toggle-admin-actions">Actions</a>
		</h2>
		<div class="block" id="admin-actions">
			<h5>Events</h5>
			<ul class="menu">				
				<li><?php echo $this->Html->link(sprintf(__('Edit %s', true), __('Event', true)), array('action' => 'edit', $event['Event']['id'])); ?> </li>
				<li><?php echo $this->Html->link(sprintf(__('Delete %s', true), __('Event', true)), array('action' => 'delete', $event['Event']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $event['Event']['id'])); ?> </li>
				<li><?php echo $this->Html->link(sprintf(__('List %s', true), __('Events', true)), array('action' => 'index')); ?> </li>
				<li><?php echo $this->Html->link(sprintf(__('New %s', true), __('Event', true)), array('action' => 'add')); ?> </li>
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

<div class="box">
	<div class="events view">
	<h2><?php  __('Event');?></h2>
		<div class="block">
			<dl><?php $i = 0; $class = ' class="altrow"';?>
						<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $event['Event']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Year'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $event['Event']['year']; ?>
			&nbsp;
		</dd>
			</dl>
		</div>
	</div>
</div>

<div class="box">
	<h2>
		<a href="#" id="toggle-related-records"><?php echo (__('Related', true)); ?></a>
	</h2>
	<div class="block" id="related-records">
				<div class="related">
			<h3><?php printf(__('Related %s', true), __('Abstracts', true));?></h3>
			<?php if (!empty($event['Abstract'])):?>
			<table cellpadding = "0" cellspacing = "0">
				<thead>
					<tr>
								<th><?php __('Id'); ?></th>
		<th><?php __('File'); ?></th>
		<th><?php __('Location'); ?></th>
		<th><?php __('Aproved'); ?></th>
		<th><?php __('Event Id'); ?></th>
		<th><?php __('User Id'); ?></th>
						<th class="actions"><?php __('Actions');?></th>
					</tr>
				</thead>
			<?php
				$i = 0;
				foreach ($event['Abstract'] as $abstract):
					$class = null;
					if ($i++ % 2 == 0) {
						$class = ' class="altrow"';
					}
				?>
		<tr<?php echo $class;?>>
			<td><?php echo $abstract['id'];?></td>
			<td><?php echo $abstract['file'];?></td>
			<td><?php echo $abstract['location'];?></td>
			<td><?php echo $abstract['aproved'];?></td>
			<td><?php echo $abstract['event_id'];?></td>
			<td><?php echo $abstract['user_id'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View', true), array('controller' => 'abstracts', 'action' => 'view', $abstract['id'])); ?>
				<?php echo ' | '. $this->Html->link(__('Edit', true), array('controller' => 'abstracts', 'action' => 'edit', $abstract['id'])); ?>
				<?php echo ' | '. $this->Html->link(__('Delete', true), array('controller' => 'abstracts', 'action' => 'delete', $abstract['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $abstract['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
			</table>
		<?php endif; ?>

			<div class="actions">
				<ul>
					<li><?php echo $this->Html->link(sprintf(__('New %s', true), __('Abstract', true)), array('controller' => 'abstracts', 'action' => 'add'));?> </li>
				</ul>
			</div>
		</div>
				<div class="related">
			<h3><?php printf(__('Related %s', true), __('Pages', true));?></h3>
			<?php if (!empty($event['Page'])):?>
			<table cellpadding = "0" cellspacing = "0">
				<thead>
					<tr>
								<th><?php __('Id'); ?></th>
		<th><?php __('Name'); ?></th>
		<th><?php __('Event Id'); ?></th>
						<th class="actions"><?php __('Actions');?></th>
					</tr>
				</thead>
			<?php
				$i = 0;
				foreach ($event['Page'] as $page):
					$class = null;
					if ($i++ % 2 == 0) {
						$class = ' class="altrow"';
					}
				?>
		<tr<?php echo $class;?>>
			<td><?php echo $page['id'];?></td>
			<td><?php echo $page['name'];?></td>
			<td><?php echo $page['event_id'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View', true), array('controller' => 'pages', 'action' => 'view', $page['id'])); ?>
				<?php echo ' | '. $this->Html->link(__('Edit', true), array('controller' => 'pages', 'action' => 'edit', $page['id'])); ?>
				<?php echo ' | '. $this->Html->link(__('Delete', true), array('controller' => 'pages', 'action' => 'delete', $page['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $page['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
			</table>
		<?php endif; ?>

			<div class="actions">
				<ul>
					<li><?php echo $this->Html->link(sprintf(__('New %s', true), __('Page', true)), array('controller' => 'pages', 'action' => 'add'));?> </li>
				</ul>
			</div>
		</div>
			</div>
</div>

</div>
<div class="clear"></div>
