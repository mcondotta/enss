</br></br>
<div class="grid_5"></br></div>
<div class="grid_6">
	<?php echo $this->Form->create('User', array('action' => 'add'));?>
		<fieldset>
		<?php
		echo $this->Form->input('email');
		echo $this->Form->input('CPF');
		echo $this->Form->input('password', array('label' => 'Senha'));
    echo $this->Form->input('clear_password', array('label' => 'Confirmar Senha', 'type' => 'password'));
    $options = array('default' => 'default', 'admin' => 'admin');
  	echo $this->Form->input('role', array('type' => 'select', 'options' => $options));
	?>
    </fieldset>
<div style="text-align:center;">	<?php echo $this->Form->end('Registrar');?></div>
</div>
<div class="grid_5"></br></div>
</br></br>
