</br></br>
<div class="grid_5"></br></div>
<div class="grid_6">
<div class="blue_box">
<h2 style="text-align:center; color:#fff;"><?php __('Recover Password'); ?></h2>
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
</div>
</div>
<div class="grid_6"></br></div>
</br></br>
