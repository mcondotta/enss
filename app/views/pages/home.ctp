<div class="clear" style="height: 10px; width: 100%;"></div>
<div class="grid_2"></br></div>
<div class="grid_6">
<h1 id="welcome"><?php __('Welcome to ENSS'); ?></h1></br>
<h5><?php __('Dear Students,'); ?></h5></br>
<p id="welc_text"><?php __('It is a great pleasure to announce that the first Excitotoxicity and Neuroprotection Spring School (ENSS) will be held in Porto Alegre, RS, Brazil, from October 2nd to 8th, 2011.'); ?></p>
<p id="welc_text"><?php __('This school is an initiative of CAPES to promote international exchange, academic cooperation and innovative interaction among outstanding scientists, Brazilian graduate students and Postdoctoral fellows.'); ?></p>
<p id="welc_text"><?php __('The scientific programme was designed to promote fruitful discussions among the participants focusing in Brain diseases and Neuroprotection. The following outstanding neuroscientists will participate in this event:'); ?></p>
<p id="welc_text">
<ul>
  <li><div id="spk_list"><?php echo $this->Html->image('spa.png', array('alt' => __('Spain', true))); ?>&nbsp;&nbsp;<?php echo $this->Html->link('Francisco Ciruela', array('controller' => 'pages', 'action' => 'francisco_ciruela')); ?></div></li>
  <li><div id="spk_list"><?php echo $this->Html->image('deu.png', array('alt' => __('Spain', true))); ?>&nbsp;&nbsp;<?php echo $this->Html->link('Helmut Kettenmann', array('controller' => 'pages', 'action' => 'helmut_kettenmann')); ?></div></li>
  <li><div id="spk_list"><?php echo $this->Html->image('usa.png', array('alt' => __('Spain', true))); ?>&nbsp;&nbsp;<?php echo $this->Html->link('James W. Simpkins', array('controller' => 'pages', 'action' => 'james_w_simpkins')); ?></div></li>
  <li><div id="spk_list"><?php echo $this->Html->image('usa.png', array('alt' => __('Spain', true))); ?>&nbsp;&nbsp;<?php echo $this->Html->link('Jeffrey Rothstein', array('controller' => 'pages', 'action' => 'jeffrey_rothstein')); ?></div></li>
  <li><div id="spk_list"><?php echo $this->Html->image('usa.png', array('alt' => __('Spain', true))); ?>&nbsp;&nbsp;<?php echo $this->Html->link('Michael Robinson', array('controller' => 'pages', 'action' => 'michael_robinson')); ?></div></li>
  <li><div id="spk_list"><?php echo $this->Html->image('usa.png', array('alt' => __('Spain', true))); ?>&nbsp;&nbsp;<?php echo $this->Html->link('Nicolas G. Bazan', array('controller' => 'pages', 'action' => 'nicolas_g_bazan')); ?></div></li>
  <li><div id="spk_list"><?php echo $this->Html->image('por.png', array('alt' => __('Spain', true))); ?>&nbsp;&nbsp;<?php echo $this->Html->link('Rafael Gutierrez Aguilar', array('controller' => 'pages', 'action' => 'rafael_gutierrez_aguilar')); ?></div></li>
  <li><div id="spk_list"><?php echo $this->Html->image('ita.png', array('alt' => __('Spain', true))); ?>&nbsp;&nbsp;<?php echo $this->Html->link('Renata Ciccarelli', array('controller' => 'pages', 'action' => 'renata_ciccarelli')); ?></div></li>
  <li><div id="spk_list"><?php echo $this->Html->image('bra.png', array('alt' => __('Spain', true))); ?>&nbsp;&nbsp;<?php echo $this->Html->link('Rosalia Mendez-Otero', array('controller' => 'pages', 'action' => 'rosalia_mentez_otero')); ?></div></li>
  <li><div id="spk_list"><?php echo $this->Html->image('usa.png', array('alt' => __('Spain', true))); ?>&nbsp;&nbsp;<?php echo $this->Html->link('Vladimir Parpura', array('controller' => 'pages', 'action' => 'vladimir_parpura')); ?></div></li>
</ul></p>
<p id="welc_text"><?php __('Very best regards,'); ?></br>
<?php __('ENSS Organizers'); ?></p>
</div>
<div class="grid_1"></br></div>
<div class="grid_6">
<div class="blue_box">
<?php
$session->flash('auth');
echo $form->create('User', array('action' => 'login'));
?>
		<fieldset>
      <legend><?php printf(__('Login', true)); ?></legend>
<?php
echo $form->input('email', array('size' => 15));
echo $form->input('password', array('size' => 31));
?>
		</fieldset>
<?php echo $form->end('Login'); ?>
</br>
<?php
echo $html->link(__('Click here if you forgot your password.', true), array('controller'=>'users', 'action'=>'forgot'));
?>
</br>
<?php
echo $html->link(__('Click here if you\'re not registered.', true), array('controller'=>'users', 'action'=>'register'));
?>
</div>
</div>
