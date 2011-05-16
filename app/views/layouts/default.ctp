<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<?php echo $this->Html->charset(); ?>
	<title><?php echo $title_for_layout; ?></title>
	<?php
		echo $this->Html->meta('icon');
		//echo $this->Html->css('cake.generic');
		echo $this->Html->css(array('reset', 'text', 'grid', 'layout', 'navigation'));
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
      <?php echo $this->Html->image('capes.png', array('alt' => 'CAPES')); ?>
    </div>
    <div class="grid_16">
      </br>Porto Alegre, RS, Brazil, 2nd-8th  of October 2011
    </div>
    <div class="clear"></div>
    <div class="grid_16" id="menubar">
      <ul id="nav">
        <li><a>Home</a></li>
        <li><a>Information</a>
          <ul>
            <li><a>City</a></li>
          </ul>
        </li>
        <li><a>Speakers</a></li>
        <li><a>Scientific Program</a></li>
        <li><a>Abstract/Registration</a></li>
        <li><a>Sponsors</a></li>
        <li><a>Contact</a></li>
      </ul>
      <div id="lang">
        <?php __("Language selector") ?></br>
        <?php echo $this->Html->image('en.gif', array('alt' => 'Change language to English')); ?>
        <?php echo $this->Html->image('brazil.gif', array('alt' => 'Mudar linguagem para Portugues')); ?>
      </div>
			</div>
	
		<div class="clear" style="height: 10px; width: 100%;"></div>
		
  	<div class="grid_16"><?php echo $this->Session->flash(); ?></div>

  	<div class="grid_16"><?php echo $content_for_layout; ?></div>
		
		<div class="clear"></div>
	</div>
	<?php echo $this->element('sql_dump'); ?>
</body>
</html>
