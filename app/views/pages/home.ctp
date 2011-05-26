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
  <li><div id="spk_list"><?php echo $this->Html->image('spa.png', array('alt' => __('Spain', true))); ?>&nbsp;&nbsp;Francisco Ciruela</div></li>
  <li><?php echo $this->Html->image('deu.png', array('alt' => __('Spain', true))); ?>&nbsp;&nbsp;Helmut Kettenmann</li> 
  <li><?php echo $this->Html->image('usa.png', array('alt' => __('Spain', true))); ?>&nbsp;&nbsp;James W. Simpkins</li>
  <li><?php echo $this->Html->image('usa.png', array('alt' => __('Spain', true))); ?>&nbsp;&nbsp;Jeffrey Rothstein</li>
  <li><?php echo $this->Html->image('usa.png', array('alt' => __('Spain', true))); ?>&nbsp;&nbsp;Michael Robinson</li>
  <li><?php echo $this->Html->image('usa.png', array('alt' => __('Spain', true))); ?>&nbsp;&nbsp;Nicolas G. Bazan</li>
  <li><?php echo $this->Html->image('por.png', array('alt' => __('Spain', true))); ?>&nbsp;&nbsp;Rafael Guti&eacute;rrez Aguilar</li>
  <li><?php echo $this->Html->image('ita.png', array('alt' => __('Spain', true))); ?>&nbsp;&nbsp;Renata Ciccarelli</li>
  <li><?php echo $this->Html->image('bra.png', array('alt' => __('Spain', true))); ?>&nbsp;&nbsp;Ros&aacute;lia Mendez-Otero</li>
  <li><?php echo $this->Html->image('usa.png', array('alt' => __('Spain', true))); ?>&nbsp;&nbsp;Vladimir Parpura</li>
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
