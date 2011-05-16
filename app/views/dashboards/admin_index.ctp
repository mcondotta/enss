<div class="grid_4">
	<div class="box menu">
		<?php echo $this->element('admin/admin_left_menu'); ?>
	</div>
</div>

<div class="grid_12">
	<h2 id="page-heading">Welcome <?php echo $full_name; ?></h2>    
	<div class="box">
		<p>Your last login was <?php echo $this->Time->timeAgoInWords($last_login); ?>.</p>
	</div>	    
</div>
<div class="clear"></div>

