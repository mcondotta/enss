<div class="grid_4">	
	<div class="box">			
				<h2>
			<a href="#" id="toggle-admin-actions">Actions</a>
		</h2>
		<div class="block" id="admin-actions">
			<h5>Users</h5>
			<ul class="menu">				
				<li><?php echo $this->Html->link(sprintf(__('Edit %s', true), __('User', true)), array('action' => 'edit', $user['User']['id'])); ?> </li>
				<li><?php echo $this->Html->link(sprintf(__('Delete %s', true), __('User', true)), array('action' => 'delete', $user['User']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $user['User']['id'])); ?> </li>
				<li><?php echo $this->Html->link(sprintf(__('List %s', true), __('Users', true)), array('action' => 'index')); ?> </li>
				<li><?php echo $this->Html->link(sprintf(__('New %s', true), __('User', true)), array('action' => 'add')); ?> </li>
			</ul>			
				
			<h5>Abstracts</h5>
			<ul class="menu">
				<li><?php echo $this->Html->link(sprintf(__('List %s', true), __('Abstracts', true)), array('controller' => 'abstract_ils', 'action' => 'index')); ?> </li>
				<li><?php echo $this->Html->link(sprintf(__('New %s', true), __('Abstract', true)), array('controller' => 'abstract_ils', 'action' => 'add')); ?> </li>
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

<div class="box">
	<div class="users view">
	<h2><?php  __('User');?></h2>
		<div class="block">
			<dl><?php $i = 0; $class = ' class="altrow"';?>
						<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $user['User']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Password'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $user['User']['password']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Role'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $user['User']['role']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Email'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $user['User']['email']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Status'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $user['User']['status']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Clear Password'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $user['User']['clear_password']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Last Login'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $user['User']['last_login']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Last Access'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $user['User']['last_access']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Created'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $user['User']['created']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Modified'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $user['User']['modified']; ?>
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
			<?php if (!empty($user['Abstract'])):?>
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
				foreach ($user['Abstract'] as $abstract):
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
			<h3><?php printf(__('Related %s', true), __('Personal Informations', true));?></h3>
			<?php if (!empty($user['PersonalInformation'])):?>
			<table cellpadding = "0" cellspacing = "0">
				<thead>
					<tr>
								<th><?php __('Id'); ?></th>
		<th><?php __('First Name'); ?></th>
		<th><?php __('Last Name'); ?></th>
		<th><?php __('CPF'); ?></th>
		<th><?php __('Country'); ?></th>
		<th><?php __('University'); ?></th>
		<th><?php __('Course'); ?></th>
		<th><?php __('Birth'); ?></th>
		<th><?php __('User Id'); ?></th>
						<th class="actions"><?php __('Actions');?></th>
					</tr>
				</thead>
			<?php
				$i = 0;
				foreach ($user['PersonalInformation'] as $personalInformation):
					$class = null;
					if ($i++ % 2 == 0) {
						$class = ' class="altrow"';
					}
				?>
		<tr<?php echo $class;?>>
			<td><?php echo $personalInformation['id'];?></td>
			<td><?php echo $personalInformation['first_name'];?></td>
			<td><?php echo $personalInformation['last_name'];?></td>
			<td><?php echo $personalInformation['CPF'];?></td>
			<td><?php echo $personalInformation['country'];?></td>
			<td><?php echo $personalInformation['university'];?></td>
			<td><?php echo $personalInformation['course'];?></td>
			<td><?php echo $personalInformation['birth'];?></td>
			<td><?php echo $personalInformation['user_id'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View', true), array('controller' => 'personal_informations', 'action' => 'view', $personalInformation['id'])); ?>
				<?php echo ' | '. $this->Html->link(__('Edit', true), array('controller' => 'personal_informations', 'action' => 'edit', $personalInformation['id'])); ?>
				<?php echo ' | '. $this->Html->link(__('Delete', true), array('controller' => 'personal_informations', 'action' => 'delete', $personalInformation['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $personalInformation['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
			</table>
		<?php endif; ?>

			<div class="actions">
				<ul>
					<li><?php echo $this->Html->link(sprintf(__('New %s', true), __('Personal Information', true)), array('controller' => 'personal_informations', 'action' => 'add'));?> </li>
				</ul>
			</div>
		</div>
			</div>
</div>

</div>
<div class="clear"></div>
