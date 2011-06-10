<div class="grid_3"></br></div>
<div class="grid_10">
<div class="blue_box">
	<h1 style="text-align:center;color:yellow;"><?php  __('Edit User Information');?></h1>
<?php echo $this->Form->create('User');?>
		<fieldset>
<?php

		echo $this->Form->input('email');
    echo $this->Form->input('CPF');
		//echo $this->Form->input('password', array('label' => 'Senha'));
    //echo $this->Form->input('clear_password', array('label' => 'Confirmar Senha', 'type' => 'password'));

    echo $this->Form->input('PersonalInformation.0.first_name', array('label' => 'Nome'));
		echo $this->Form->input('PersonalInformation.0.last_name', array('label' => 'Sobrenome'));
		echo $this->Form->input('PersonalInformation.0.scientific_name', array('label' => 'Nome Cient&iacute;fico'));
    $options = array('master' => 'Mestrado', 'doctor' => 'Doutorado', 'pos-doctor' => 'Pos-Doutorado');
		echo $this->Form->input('PersonalInformation.0.current_position', array('label' => 'Posi&ccedil;&atilde;o Atual', 'type' => 'select', 'options' => $options));
		echo $this->Form->input('PersonalInformation.0.university', array('label' => 'Universidade'));
		echo $this->Form->input('PersonalInformation.0.department', array('label' => 'Departamento'));
		echo $this->Form->input('PersonalInformation.0.professor', array('label' => 'Orientador'));
		echo $this->Form->input('PersonalInformation.0.city_state', array('label' => 'Cidade/Estado'));
		echo $this->Form->input('PersonalInformation.0.address', array('label' => 'Endere&ccedil;o'));
		echo $this->Form->input('PersonalInformation.0.lattes', array('label' => 'C. Lattes (Link)'));

 		echo $this->Form->input('AbstractIl.0.abstract', array('label' => 'Resumo: 3000 caracteres', 'type' => 'textarea', 'maxLength' => 3000, 'rows' => '30', 'cols' => '80'));
		echo $this->Form->input('AbstractIl.0.intention_letter', array('label' => 'Carta de Inten&ccedil;&atilde;o', 'type' => 'textarea', 'rows' => '5', 'cols' => '80'));

?>
		</fieldset>
	<?php echo $this->Form->end(__('Submit', true));?>
</div>
</div>
<div class="clear"></div>
