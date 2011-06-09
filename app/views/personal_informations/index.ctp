<div class="grid_4">	
	<div class="box">			
				<h2>
			<a href="#" id="toggle-admin-actions">Actions</a>
		</h2>
		<div class="block" id="admin-actions">			
			<h5>Personal Informations</h5>
			<ul class="menu">
				<li><?php echo $this->Html->link(sprintf(__('New %s', true), __('Personal Information', true)), array('action' => 'add')); ?></li>
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
    <h2 id="page-heading"><?php __('Personal Informations');?></h2>
	
		
	<table cellpadding="0" cellspacing="0">
    <?php $tableHeaders = $html->tableHeaders(array($paginator->sort('id'),$paginator->sort('first_name'),$paginator->sort('last_name'),$paginator->sort('scientific_name'),$paginator->sort('city_state'),$paginator->sort('university'),$paginator->sort('department'),$paginator->sort('address'),$paginator->sort('user_id'),$paginator->sort('current_position'),$paginator->sort('lattes'),__('Actions', true),));
echo '<thead>'.$tableHeaders.'</thead>'; ?>

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
		<td><?php echo $personalInformation['PersonalInformation']['first_name']; ?>&nbsp;</td>
		<td><?php echo $personalInformation['PersonalInformation']['last_name']; ?>&nbsp;</td>
		<td><?php echo $personalInformation['PersonalInformation']['scientific_name']; ?>&nbsp;</td>
		<td><?php echo $personalInformation['PersonalInformation']['city_state']; ?>&nbsp;</td>
		<td><?php echo $personalInformation['PersonalInformation']['university']; ?>&nbsp;</td>
		<td><?php echo $personalInformation['PersonalInformation']['department']; ?>&nbsp;</td>
		<td><?php echo $personalInformation['PersonalInformation']['address']; ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($personalInformation['User']['id'], array('controller' => 'users', 'action' => 'view', $personalInformation['User']['id'])); ?>
		</td>
		<td><?php echo $personalInformation['PersonalInformation']['current_position']; ?>&nbsp;</td>
		<td><?php echo $personalInformation['PersonalInformation']['lattes']; ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View', true), array('action' => 'view', $personalInformation['PersonalInformation']['id'])); ?>
			<?php echo ' | ' . $this->Html->link(__('Edit', true), array('action' => 'edit', $personalInformation['PersonalInformation']['id'])); ?>
			<?php echo ' | ' . $this->Html->link(__('Delete', true), array('action' => 'delete', $personalInformation['PersonalInformation']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $personalInformation['PersonalInformation']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
<?php echo '<tfoot class=\'dark\'>'.$tableHeaders.'</tfoot>'; ?>    </table>
    
          
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page %page% of %pages%, showing %current% records out of %count% total, starting on record %start%, ending on %end%', true)
	));
	?>	</p>

	<div class="paging">
		<?php echo $this->Paginator->prev('<< '.__('previous', true), array(), null, array('class'=>'disabled'));?>
	 | 	<?php echo $this->Paginator->numbers();?>
 |
		<?php echo $this->Paginator->next(__('next', true).' >>', array(), null, array('class' => 'disabled'));?>
	</div>
		
</div>
<div class="clear"></div>
