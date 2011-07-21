<div class="grid_16" id="admin_menu">
    <h1 style="text-align:center;color:yellow;">Administra&ccedil;&atilde;o</h1>
    <div>
    <ul id="admin-menu">
        <li class="has-sub-menu"><h3 style="text-align:center;"><?php echo $html->link(__('Events', true), array('controller'=>'events', 'action'=>'index')); ?></h3>
          <ul><li class="first-item"><?php echo $html->link(__('Add New Event', true), array('controller'=>'events', 'action'=>'add')); ?></li></ul>
        </li>
        <li><h3 style="text-align:center;"><?php echo $html->link(__('Users', true), array('controller'=>'users', 'action'=>'index')); ?></h3></li>
        <li><h3 style="text-align:center;"><?php echo $html->link(__('Pages', true), array('controller'=>'pages', 'action'=>'index')); ?></h3></li>
        <li><h3 style="text-align:center;"><?php echo $html->link(htmlentities(__('Subpages', true)), array('controller'=>'subpages', 'action'=>'index')); ?></h3></li>
        <li><h3 style="text-align:center;"><?php echo $html->link(htmlentities(__('News', true)), array('controller'=>'new_infos', 'action'=>'news_list')); ?></h3></li>
    </ul>
    </div>
</div>
<div class="grid_2"></br></div>
<div class="grid_12">
<div class="blue_box"  style="width:600px; display: block; margin-left: auto; margin-right: auto;">
	<h1 style="text-align:center;color:yellow;"><?php  __('News');?></h1>
  <h2 style="text-align:center;"><?php echo $this->Html->link(__('Add news', true), array('controller' => 'new_infos', 'action' => 'add')); ?></h2>
</div>
	<table cellpadding="0" cellspacing="0">
    <?php $tableHeaders = $html->tableHeaders(array($paginator->sort('id'),$paginator->sort('event_id'),$paginator->sort('date'),$paginator->sort('text'),__('Actions', true),));
echo '<thead>'.$tableHeaders.'</thead>'; ?>

<?php
	$i = 0;
	foreach ($new_infos as $new_info):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		<td><?php echo $new_info['NewInfo']['id']; ?>&nbsp;</td>
		<td><?php echo $new_info['NewInfo']['event_id']; ?>&nbsp;</td>
		<td><?php echo $new_info['NewInfo']['date']; ?>&nbsp;</td>
		<td><?php echo $new_info['NewInfo']['text']; ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('Edit', true), array('action' => 'edit', $new_info['NewInfo']['id'])); ?>
			<?php echo ' | ' . $this->Html->link(__('Delete', true), array('action' => 'delete', $new_info['NewInfo']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $new_info['NewInfo']['id'])); ?>
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

