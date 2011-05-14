<div class="personalInformations view">
<h2><?php  __('Personal Information');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $personalInformation['PersonalInformation']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Name'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $personalInformation['PersonalInformation']['name']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Email'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $personalInformation['PersonalInformation']['email']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('CPF'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $personalInformation['PersonalInformation']['CPF']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Country'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $personalInformation['PersonalInformation']['country']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('University'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $personalInformation['PersonalInformation']['university']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Course'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $personalInformation['PersonalInformation']['course']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Abstract'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $this->Html->link($personalInformation['Abstract']['id'], array('controller' => 'abstracts', 'action' => 'view', $personalInformation['Abstract']['id'])); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Birth'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $personalInformation['PersonalInformation']['birth']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('User'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $this->Html->link($personalInformation['User']['id'], array('controller' => 'users', 'action' => 'view', $personalInformation['User']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Personal Information', true), array('action' => 'edit', $personalInformation['PersonalInformation']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Delete Personal Information', true), array('action' => 'delete', $personalInformation['PersonalInformation']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $personalInformation['PersonalInformation']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Personal Informations', true), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Personal Information', true), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Abstracts', true), array('controller' => 'abstracts', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Abstract', true), array('controller' => 'abstracts', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users', true), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User', true), array('controller' => 'users', 'action' => 'add')); ?> </li>
	</ul>
</div>
