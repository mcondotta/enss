<div class="grid_12">
    <h2 id="page-heading"><?php printf(__('Add %s', true), __('User', true)); ?></h2>
    
	<div class="users form">
	<?php echo $this->Form->create('User');?>
		<fieldset>
	 		<legend><?php printf(__('User Record', true)); ?></legend>
		<?php
		echo $this->Form->input('email');
		echo $this->Form->input('CPF');
		echo $this->Form->input('password', array('label' => 'Senha'));
    echo $this->Form->input('clear_password', array('label' => 'Confirmar Senha', 'type' => 'password'));
    $options = array('default' => 'default', 'admin' => 'admin');
    if ($admin) {
  		echo $this->Form->input('role', array('type' => 'select', 'options' => $options));
	  	echo $this->Form->input('status');
    }

    echo $this->Form->input('PersonalInformation.first_name', array('label' => 'Nome'));
		echo $this->Form->input('PersonalInformation.last_name', array('label' => 'Sobrenome'));
		echo $this->Form->input('PersonalInformation.scientific_name', array('label' => 'Nome Cient&iacute;fico'));
		echo $this->Form->input('PersonalInformation.current_position', array('label' => 'Posi&ccedil;&atilde;o Atual'));
		echo $this->Form->input('PersonalInformation.university', array('label' => 'Universidade'));
		echo $this->Form->input('PersonalInformation.department', array('label' => 'Departamento'));
		echo $this->Form->input('PersonalInformation.professor', array('label' => 'Orientador'));
		echo $this->Form->input('PersonalInformation.city_state', array('label' => 'Cidade/Estado'));
		echo $this->Form->input('PersonalInformation.address', array('label' => 'Endere&ccedil;o'));
		echo $this->Form->input('PersonalInformation.lattes', array('label' => 'C. Lattes (Link)'));

		//echo $this->Form->input('last_login');
		//echo $this->Form->input('last_access');
	?>
		</fieldset>
	<?php echo $this->Form->end(__('Submit', true));?>
	</div>

</div>
<div class="clear"></div>
