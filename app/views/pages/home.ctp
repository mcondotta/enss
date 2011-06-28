<div class="clear" style="height: 10px; width: 100%;"></div>
<div class="grid_6">
<h1 id="welcome"><?php __('Welcome to ENSS'); ?></h1></br>
<h4><?php __('Dear Students,'); ?></h5></br>
<p id="welc_text"><?php __('It is a great pleasure to announce that the first Excitotoxicity and Neuroprotection Spring School (ENSS) will be held in Porto Alegre, RS, Brazil, from October 2nd to 8th, 2011.'); ?></p>
<p id="welc_text"><?php __('This school is an initiative of CAPES to promote international exchange, academic cooperation and innovative interaction among outstanding scientists, Brazilian graduate students and Postdoctoral fellows.'); ?></p>
<p id="welc_text"><?php __('The scientific programme was designed to promote fruitful discussions among the participants focusing in Brain diseases and Neuroprotection.'); ?></p>
<p id="welc_text1"><?php __('Very best regards,'); ?></br>
<?php __('ENSS Organizers'); ?></p>
</div>
<div class="grid_4">
<p id="welc_text"><?php __('The following outstanding neuroscientists will participate:'); ?>
<p id="welc_text">
<div>
  <div class="spk_list"><?php echo $this->Html->image('usa.png', array('alt' => __('United States of America', true))); ?>&nbsp;&nbsp;<?php echo $this->Html->link('Bazan, Nicolas G.', array('controller' => 'pages', 'action' => 'nicolas_g_bazan')); ?></div></br>
  <div class="spk_list"><?php echo $this->Html->image('ita.png', array('alt' => __('Italy', true))); ?>&nbsp;&nbsp;<?php echo $this->Html->link('Ciccarelli, Renata', array('controller' => 'pages', 'action' => 'renata_ciccarelli')); ?></div></br>
  <div class="spk_list"><?php echo $this->Html->image('spa.png', array('alt' => __('Spain', true))); ?>&nbsp;&nbsp;<?php echo $this->Html->link('Ciruela, Francisco', array('controller' => 'pages', 'action' => 'francisco_ciruela')); ?></div></br>
  <div class="spk_list"><?php echo $this->Html->image('por.png', array('alt' => __('Mexico', true))); ?>&nbsp;&nbsp;<a href="pages/rafael_gutierrez_aguilar">Guti&eacute;rrez, Rafael</a></div></br>
  <div class="spk_list"><?php echo $this->Html->image('deu.png', array('alt' => __('Germany', true))); ?>&nbsp;&nbsp;<?php echo $this->Html->link('Kettenmann, Helmut', array('controller' => 'pages', 'action' => 'helmut_kettenmann')); ?></div></br>
  <div class="spk_list"><?php echo $this->Html->image('bra.png', array('alt' => __('Brazil', true))); ?>&nbsp;&nbsp;<a href="pages/rosalia_mentez_otero">Mendez-Otero, Ros&aacute;lia</a></div></br>
  <div class="spk_list"><?php echo $this->Html->image('usa.png', array('alt' => __('United States of America', true))); ?>&nbsp;&nbsp;<?php echo $this->Html->link('Parpura, Vladimir', array('controller' => 'pages', 'action' => 'vladimir_parpura')); ?></div></br>
  <div class="spk_list"><?php echo $this->Html->image('usa.png', array('alt' => __('United States of America', true))); ?>&nbsp;&nbsp;<?php echo $this->Html->link('Robinson, Michael', array('controller' => 'pages', 'action' => 'michael_robinson')); ?></div></br>
  <div class="spk_list"><?php echo $this->Html->image('usa.png', array('alt' => __('United States of America', true))); ?>&nbsp;&nbsp;<?php echo $this->Html->link('Rothstein, Jeffrey', array('controller' => 'pages', 'action' => 'jeffrey_rothstein')); ?></div></br>
  <div class="spk_list"><?php echo $this->Html->image('usa.png', array('alt' => __('United States of America', true))); ?>&nbsp;&nbsp;<?php echo $this->Html->link('Simpkins, James W.', array('controller' => 'pages', 'action' => 'james_w_simpkins')); ?></div></br>
</div>
</p>
</div>
<div class="grid_6">
<div class="blue_box">
<?php
if (!$logged) {
?>
<h2 style="text-align:center; color:#fff;">Login</h2>
<?php
$session->flash('auth');
echo $form->create('User', array('action' => 'login'));
?>
		<fieldset>
<?php
echo $form->input('email', array('size' => 15));
echo $form->input('password', array('size' => 31));
echo $form->end('Login');
?>
		</fieldset>
</br>
<?php echo $html->link(__('Click here if you forgot your password.', true), array('controller'=>'users', 'action'=>'forgot')); ?>
</br>
<?php echo $html->link(__('Click here if you\'re not registered.', true), array('controller'=>'users', 'action'=>'register')); 
}
else {
?>
<h2 style="text-align:center; color:#fff;">Logout</h2>
<?php
$session->flash('auth');
echo $form->create('User', array('action' => 'logout'));
?>
		<fieldset>
<?php
echo $form->end('Logout');
?>
		</fieldset>

<?php
}
?>
</div>
</div>
