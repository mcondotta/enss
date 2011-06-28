<div class="grid_3"></br></div>
<div class="grid_10">
<div class="blue_box">
	<h1 style="text-align:center;color:yellow;"><?php  __('Edit User Information');?></h1>
<?php echo $this->Form->create('User', array('action' => 'edit_info'));?>
		<fieldset>
<?php

		echo $this->Form->input('email');
    echo $this->Form->input('CPF');
		//echo $this->Form->input('password', array('label' => 'Senha'));
    //echo $this->Form->input('clear_password', array('label' => 'Confirmar Senha', 'type' => 'password'));

    echo $this->Form->input('PersonalInformation.id', array('type'=>'hidden'));
    echo $this->Form->input('PersonalInformation.user_id', array('type'=>'hidden'));
    echo $this->Form->input('PersonalInformation.first_name', array('label' => 'Nome'));
    echo $this->Form->input('PersonalInformation.last_name', array('label' => 'Sobrenome'));
    echo $this->Form->input('PersonalInformation.scientific_name', array('label' => 'Nome Cient&iacute;fico'));
    $options = array('master' => 'Mestrado', 'doctor' => 'Doutorado', 'pos-doctor' => 'Pos-Doutorado');
    echo $this->Form->input('PersonalInformation.current_position', array('label' => 'Posi&ccedil;&atilde;o Atual', 'type' => 'select', 'options' => $options));
    echo $this->Form->input('PersonalInformation.university', array('label' => 'Universidade'));
    echo $this->Form->input('PersonalInformation.department', array('label' => 'Departamento'));
    echo $this->Form->input('PersonalInformation.professor', array('label' => 'Orientador'));
    echo $this->Form->input('PersonalInformation.city_state', array('label' => 'Cidade/Estado'));
    echo $this->Form->input('PersonalInformation.address', array('label' => 'Endere&ccedil;o'));
    echo $this->Form->input('PersonalInformation.lattes', array('label' => 'C. Lattes (Link)'));

    echo $this->Form->input('AbstractIl.id', array('type'=>'hidden'));
    echo $this->Form->input('AbstractIl.user_id', array('type'=>'hidden'));
    echo $this->Form->input('AbstractIl.event_id', array('type'=>'hidden'));
    echo $this->Form->input('AbstractIl.approved', array('type'=>'hidden'));
    echo $this->Form->input('AbstractIl.abstract', array('label' => 'Resumo: 3000 caracteres', 'type' => 'textarea', 'maxLength' => 3000, 'rows' => '30', 'cols' => '80'));
    echo $this->Form->input('AbstractIl.intention_letter', array('label' => 'Carta de Inten&ccedil;&atilde;o', 'type' => 'textarea', 'rows' => '5', 'cols' => '80'));

?>
		</fieldset>
	<?php echo $this->Form->end(__('Submit', true));?>
</div>
</div>
<div class="clear"></div>
