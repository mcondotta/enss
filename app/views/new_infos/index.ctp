</br></br>
<div class="grid_16">
<h1 style="text-align:center;"><?php __("News"); ?></h1>
</div>

<div class="grid_3"></br></div>
<div class="grid_10">
	<table cellpadding="0" cellspacing="0">
<?php
	foreach ($new_infos as $new_info):
	?>
	<tr>
		<td width=100><p id="welc_text"><?php echo $new_info['NewInfo']['date']; ?>&nbsp;</p></td>
		<td><p id="welc_text"><?php echo nl2br(htmlspecialchars($new_info['NewInfo']['text'])); ?>&nbsp;</p></td>
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
		<?php echo $this->Paginator->prev('<< '.__('previous', true), array(), null, array('class'=>'disabled'));?>
	 | 	<?php echo $this->Paginator->numbers();?>
 |
		<?php echo $this->Paginator->next(__('next', true).' >>', array(), null, array('class' => 'disabled'));?>
	</div>
		
</div>
</br></br>


