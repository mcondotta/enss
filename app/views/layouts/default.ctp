<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<?php echo $this->Html->charset(); ?>
	<title><?php echo $title_for_layout; ?></title>
	<?php
		echo $this->Html->meta('icon');
		//echo $this->Html->css('cake.generic');
		echo $this->Html->css(array('reset', 'text', 'grid', 'layout', 'main_menu'));
		echo '<!--[if IE 6]>'.$this->Html->css('ie6').'<![endif]-->';
		echo '<!--[if IE 7]>'.$this->Html->css('ie').'<![endif]-->';
		echo $this->Html->script(array('jquery-1.3.2.min.js', 'jquery-ui.js', 'jquery-fluid16.js'));
		echo $scripts_for_layout;
	?>
</head>
<body>
  <div class="container_16">
    <div class="grid_12">
      <?php echo $this->Html->image('logo.png', array('alt' => 'Excitoxicity and Neuroprotection Spring School 2011')); ?>
    </div>
    <div class="grid_4" id="capes">
      <?php echo $this->Html->image('capes1.png', array('alt' => 'CAPES')); ?>
    </div>
    <div class="grid_16">
      </br><h4 style="float: right;"><?php __("Porto Alegre, RS, Brazil, 2nd-8th of October 2011"); ?></h4>
    </div>
    <div class="clear"></div>
    <div class="grid_16" id="menubar">
      <?php echo $menuBuilder->build('main-menu'); ?>
      <div id="lang">
        <?php __("Language selector") ?></br>
        <?php echo $this->Html->image('en.gif', array('alt' => 'Change language to English', 'url' => array('language'=>'eng'))); ?>
        <?php echo $this->Html->image('brazil.gif', array('alt' => 'Mudar linguagem para Portugues', 'url' => array('language'=>'por'))); ?>
      </div>
    </div>
    <div class="grid_16" id="city">
      <div class="city_pics"><?php echo $this->Html->image('city_pic1n.png', array('alt' => 'Change language to English')); ?></div>
      <div class="city_pics"><?php echo $this->Html->image('city_pic2n.png', array('alt' => 'Change language to English')); ?></div>
      <div class="city_pics"><?php echo $this->Html->image('city_pic3n.png', array('alt' => 'Change language to English')); ?></div>
      <div class="city_pics"><?php echo $this->Html->image('city_pic4n.png', array('alt' => 'Change language to English')); ?></div>
      <div class="city_pics"><?php echo $this->Html->image('city_pic5n.png', array('alt' => 'Change language to English')); ?></div>
      <div class="city_pics"><?php echo $this->Html->image('city_pic6n.png', array('alt' => 'Change language to English')); ?></div>
    </div>

		<div class="clear" style="height: 10px; width: 100%;"></div>

  	<div class="grid_16"><?php echo $this->Session->flash(); ?></div>

  	<?php echo $content_for_layout; ?>

		<div class="clear"></div>
		<div class="clear" style="height: 300px; width: 100%;"></div>
	</div>
	<?php #echo $this->element('sql_dump'); ?>
</body>
</html>
