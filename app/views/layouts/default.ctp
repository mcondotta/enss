<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<?php echo $this->Html->charset(); ?>
	<title><?php echo $title_for_layout; ?></title>
	<?php
		echo $this->Html->meta('icon');
		//echo $this->Html->css('cake.generic');
		echo $this->Html->css(array('reset', 'text', 'grid', 'layout', 'main_menu', 'nav'));
		echo '<!--[if IE 6]>'.$this->Html->css('ie6').'<![endif]-->';
		echo '<!--[if IE 7]>'.$this->Html->css('ie').'<![endif]-->';
		echo $this->Html->script(array('jquery-1.3.2.min.js', 'jquery-ui.js', 'jquery-fluid16.js'));
		echo $scripts_for_layout;
	?>
</head>
<body>
  <div class="container_16">
    <div class="grid_16">
      <div class="pics">
      <?php echo $this->Html->image('logo.png', array('alt' => 'Excitoxicity and Neuroprotection Spring School 2011', 'style' => 'float:left;')); ?>
      <?php echo $this->Html->image('capes.png', array('alt' => 'CAPES')); ?>
      <?php // echo $this->Html->image('cnpq1.png', array('alt' => 'CNPQ')); ?>
      <?php //echo $this->Html->image('fapergs1.png', array('alt' => 'FAPERGS')); ?>
      </div>
    </div>
    <div class="grid_16"><h4 style="float: right;"><?php __("Porto Alegre, RS, Brazil, 2<sup>nd</sup> to 8<sup>th</sup> of October, 2011"); ?></h4></div>
    <div class="clear"></div>
    <div class="grid_16" id="menubar">
      <?php echo $menuBuilder->build('main-menu'); ?>
      <div id="lang">
        <?php __("Language selector") ?></br>
        <?php echo $this->Html->image('en.gif', array('alt' => 'Change language to English', 'url' => array('language'=>'eng'))); ?>
        <?php echo $this->Html->image('brazil.gif', array('alt' => 'Mudar linguagem para Portugues', 'url' => array('language'=>'por'))); ?>
      </div>
    </div>
    <div class="grid_16" id="city_pics">
      <div class="city">
        <?php echo $this->Html->image('city_pic1.png', array('alt' => '')); ?>
        <?php echo $this->Html->image('city_pic2.png', array('alt' => '')); ?>
        <?php echo $this->Html->image('city_pic3.png', array('alt' => '')); ?>
        <?php echo $this->Html->image('city_pic4.png', array('alt' => '')); ?>
        <?php echo $this->Html->image('city_pic5.png', array('alt' => '')); ?>
        <?php echo $this->Html->image('city_pic6.png', array('alt' => '')); ?>
      </div>
    </div>

		<div class="clear" style="height: 10px; width: 100%;"></div>

    <div class="grid_16">
<?php //echo $this->Session; ?>
      <?php echo $this->Session->flash(); ?>
      <?php // echo $this->Session->flash('email'); ?>
    </div>

  	<?php echo $content_for_layout; ?>

		<div class="grid_16" ></br></br></div>
    <div class="grid_16" style="text-align:center;">
      <h1><?php __('Sponsors'); ?></h1>
      <div class="pics1">
      <?php echo $this->Html->image('lab_sul.png', array('alt' => '')); ?>
      <?php echo $this->Html->image('reboh.png', array('alt' => '')); ?>
      <?php echo $this->Html->image('bang.jpg', array('alt' => '')); ?>
      <?php echo $this->Html->image('incten.png', array('alt' => '')); ?>
      <?php echo $this->Html->image('ufrgs.gif', array('alt' => '')); ?>
      <?php echo $this->Html->image('capes601.jpg', array('alt' => 'CAPES')); ?>
      <?php echo $this->Html->image('fapergs1.png', array('alt' => 'FAPERGS')); ?>
      <?php echo $this->Html->image('cnpq1.gif', array('alt' => 'CNPQ')); ?>
      </div>
    </div>
		<div class="clear" style="height: 300px; width: 100%;"></div>
	</div>
	<?php // echo $this->element('sql_dump'); ?>
</body>
</html>
