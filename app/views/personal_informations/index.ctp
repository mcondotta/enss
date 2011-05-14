<div class="personalInformations index">
	<h2><?php __('Personal Informations');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('name');?></th>
			<th><?php echo $this->Paginator->sort('email');?></th>
			<th><?php echo $this->Paginator->sort('CPF');?></th>
			<th><?php echo $this->Paginator->sort('country');?></th>
			<th><?php echo $this->Paginator->sort('university');?></th>
			<th><?php echo $this->Paginator->sort('course');?></th>
			<th><?php echo $this->Paginator->sort('abstract_id');?></th>
			<th><?php echo $this->Paginator->sort('birth');?></th>
			<th><?php echo $this->Paginator->sort('user_id');?></th>
			<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($personalInformations as $personalInformation):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		<td><?php echo $personalInformation['PersonalInformation']['id']; ?>&nbsp;</td>
		<td><?php echo $personalInformation['PersonalInformation']['name']; ?>&nbsp;</td>
		<td><?php echo $personalInformation['PersonalInformation']['email']; ?>&nbsp;</td>
		<td><?php echo $personalInformation['PersonalInformation']['CPF']; ?>&nbsp;</td>
		<td><?php echo $personalInformation['PersonalInformation']['country']; ?>&nbsp;</td>
		<td><?php echo $personalInformation['PersonalInformation']['university']; ?>&nbsp;</td>
		<td><?php echo $personalInformation['PersonalInformation']['course']; ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($personalInformation['Abstract']['id'], array('controller' => 'abstracts', 'action' => 'view', $personalInformation['Abstract']['id'])); ?>
		</td>
		<td><?php echo $personalInformation['PersonalInformation']['birth']; ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($personalInformation['User']['id'], array('controller' => 'users', 'action' => 'view', $personalInformation['User']['id'])); ?>
		</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View', true), array('action' => 'view', $personalInformation['PersonalInformation']['id'])); ?>
			<?php echo $this->Html->link(__('Edit', true), array('action' => 'edit', $personalInformation['PersonalInformation']['id'])); ?>
			<?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $personalInformation['PersonalInformation']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $personalInformation['PersonalInformation']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page %page% of %pages%, showing %current% records out of %count% total, starting on record %start%, ending on %end%', true)
	));
	?>	</p>

	<div class="paging">
		<?php echo $this->Paginator->prev('<< ' . __('previous', true), array(), null, array('class'=>'disabled'));?>
	 | 	<?php echo $this->Paginator->numbers();?>
 |
		<?php echo $this->Paginator->next(__('next', true) . ' >>', array(), null, array('class' => 'disabled'));?>
	</div>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Personal Information', true), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Abstracts', true), array('controller' => 'abstracts', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Abstract', true), array('controller' => 'abstracts', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users', true), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User', true), array('controller' => 'users', 'action' => 'add')); ?> </li>
	</ul>
</div>