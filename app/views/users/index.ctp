<div class="grid_16"><h1 style="text-align:center;">Administra&ccedil;&atilde;o</h1></div>
<div class="grid_6"></br></div>
<div class="grid_4">
    <table>
      <tr><td class="actions"><h3 style="text-align:center;"><?php echo $html->link(__('Events', true), array('controller'=>'events', 'action'=>'index')); ?></h3></td></tr>
      <tr><td class="actions"><h3 style="text-align:center;"><?php echo $html->link(__('Users', true), array('controller'=>'users', 'action'=>'index')); ?></h3></td></tr>
      <tr><td><h3 style="text-align:center;"><?php echo $html->link(__('Pages', true), array('controller'=>'pages', 'action'=>'index')); ?></h3></td></tr>
      <tr><td><h3 style="text-align:center;"><?php echo $html->link(__('Subpages', true), array('controller'=>'subpages', 'action'=>'index')); ?></h3></td></tr>
    </table>
</div>
<div class="grid_6"></br></div>
<div class="grid_16">
    <h2 id="page-heading"><?php __('Users');?></h2>
	<table cellpadding="0" cellspacing="0">
    <?php $tableHeaders = $html->tableHeaders(array($paginator->sort('id'),$paginator->sort('role'),$paginator->sort('email'),$paginator->sort('status'),$paginator->sort('last_login'),$paginator->sort('last_access'),$paginator->sort('created'),$paginator->sort('modified'),__('Actions', true),));
echo '<thead>'.$tableHeaders.'</thead>'; ?>

<?php
	$i = 0;
	foreach ($users as $user):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		<td><?php echo $user['User']['id']; ?>&nbsp;</td>
		<td><?php echo $user['User']['role']; ?>&nbsp;</td>
		<td><?php echo $user['User']['email']; ?>&nbsp;</td>
		<td><?php echo $user['User']['status']; ?>&nbsp;</td>
		<td><?php echo $user['User']['last_login']; ?>&nbsp;</td>
		<td><?php echo $user['User']['last_access']; ?>&nbsp;</td>
		<td><?php echo $user['User']['created']; ?>&nbsp;</td>
		<td><?php echo $user['User']['modified']; ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View', true), array('action' => 'view', $user['User']['id'])); ?>
			<?php echo ' | ' . $this->Html->link(__('Edit', true), array('action' => 'edit', $user['User']['id'])); ?>
			<?php echo ' | ' . $this->Html->link(__('Delete', true), array('action' => 'delete', $user['User']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $user['User']['id'])); ?>
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
