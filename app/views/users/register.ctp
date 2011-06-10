</br></br>
<div class="grid_16"><h1 style="text-align:center;"><?php __("Cadastro de Resumos"); ?></h1></div>
<div class="grid_3"></br></div>
<div class="grid_10">
  <p id="welc_text">
  A inscri&ccedil;&atilde;o na ENSS 2011 &eacute; direcionada para estudantes de p&oacute;s-gradua&ccedil;&atilde;o brasileiros (mestrado, doutorado) e p&oacute;s-doutores que estejam devidamente matriculados em programas de p&oacute;s-gradua&ccedil;&atilde;o nacionais, para os quais ser&atilde;o ofertadas 60 vagas. A inscri&ccedil;&atilde;o &eacute; gratuita, pois a ENSS n&atilde;o apresenta fins lucrativos. Ser&atilde;o aceitas inscri&ccedil;&otilde;es enviadas entre o per&iacute;odo de 10 de junho a 10 de julho de 2011 (at&eacute; as 23:59). Os estudantes selecionados ser&atilde;o informados via e-mail e atrav&eacute;s do site oficial da escola 30 dias ap&oacute;s o t&eacute;rmino das inscri&ccedil;&otilde;es.</p>
  <p id="welc_text">
  Os candidatos que tenham a inten&ccedil;&atilde;o de participar da ENSS ser&atilde;o selecionados por meio do resumo enviado (que contemple a tem&aacute;tica da escola), pelo Curr&iacute;culo Lattes (atualizado na p&aacute;gina do CNPq) e carta de inten&ccedil;&atilde;o (justificativa pela qual o aluno deseja participar deste evento).</p>

  <p id="welc_text">Atenciosamente,</br>
  Comiss&atilde;o Organizadora da ENSS 2011</p>

<h2 style="text-align:center;">Informa&ccedil;&otilde;es do Usu&aacute;rio</h2>
    <?php echo $this->Form->create('User', array('action' => 'register'));?>
    <fieldset style="width:400px; display: block; margin-left: auto; margin-right: auto;">
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
    $options = array('master' => 'Mestrado', 'doctor' => 'Doutorado', 'pos-doctor' => 'Pos-Doutorado');
		echo $this->Form->input('PersonalInformation.current_position', array('label' => 'Posi&ccedil;&atilde;o Atual', 'type' => 'select', 'options' => $options));
		echo $this->Form->input('PersonalInformation.university', array('label' => 'Universidade'));
		echo $this->Form->input('PersonalInformation.department', array('label' => 'Departamento'));
		echo $this->Form->input('PersonalInformation.professor', array('label' => 'Orientador'));
		echo $this->Form->input('PersonalInformation.city_state', array('label' => 'Cidade/Estado'));
		echo $this->Form->input('PersonalInformation.address', array('label' => 'Endere&ccedil;o'));
		echo $this->Form->input('PersonalInformation.lattes', array('label' => 'C. Lattes (Link)'));
	?>
    </fieldset>

<p><h2 style="text-align:center;">Instru&ccedil;&otilde;es para Resumo</h2></p>
<p id="welc_text">
Os resumos submetidos ser&atilde;o apresentados sob a forma de p&ocirc;ster em ingl&ecirc;s. O envio do resumo representa um compromisso definido do(s) autor (es) em apresentar o trabalho, se aceito, durante a ENSS. Todos os resumos ser&atilde;o analisados pela Comiss&atilde;o Organizadora. Compete aos membros da Comiss&atilde;o o direito de avaliar e selecionar os 60 trabalhos a serem apresentados. Resumos submetidos ap&oacute;s o prazo de inscri&ccedil;&atilde;o ou fora dos padr&otilde;es especificados abaixo n&atilde;o ser&atilde;o aceitos. Ser&aacute; permitido somente um resumo por inscri&ccedil;&atilde;o. Os 16 melhores resumos ser&atilde;o selecionados para apresenta&ccedil;&atilde;o oral em ingl&ecirc;s al&eacute;m da apresenta&ccedil;&atilde;o em p&ocirc;ster.
</p>
<h2 style="text-align:center;">Prepara&ccedil;&atilde;o do Resumo</br>
IMPORTANTE:</h2>
<p id="welc_text">
N&atilde;o deve ser enviado mais de um resumo baseado em um mesmo trabalho de investiga&ccedil;&atilde;o
Ser&atilde;o aceitos somente os resumos redigidos em ingl&ecirc;s. O resumo deve conter: introdu&ccedil;&atilde;o, objetivos, m&eacute;todos, resultados e conclus&otilde;es.</br></br>
<b>Formato do Resumo:</b></br></br>
<b>Title:</b> TODO EM LETRAS MAI&Uacute;SCULAS E GRIFADO</br></br>
<b>Authors/Department:</b> Sobrenome, Iniciais do nome (de todos os autores) Departamento, Universidade, Cidade, Estado.</br></br>
<b>Introduction/Aim:</b> Devem ser relacionados os fundamentos e os objetivos para execu&ccedil;&atilde;o do trabalho.</br></br>
<b>Methods and Results:</b> Este item deve conter um breve resumo dos materiais e m&eacute;todos utilizados e dos resultados obtidos. N&atilde;o se esque&ccedil;a de mencionar o tamanho da amostra. Quando os experimentos forem realizados em humanos, devem ser acompanhados de aprova&ccedil;&atilde;o do Comit&ecirc; de &Eacute;tica Experimental da Institui&ccedil;&atilde;o.</br></br>
<b>Conclusion:</b> Deve estar necessariamente embasada nos resultados apresentados.</br></br>
<b>Financial support:</b> O apoio financeiro deve ser mencionado na &uacute;ltima linha.</br></br>
O resumo deve ter o texto OBRIGATORIAMENTE REDIGIDO EM INGL&Ecirc;S e formatado conforme modelo acima contendo o n&uacute;mero m&aacute;ximo de 3000 caracteres (contando espa&ccedil;os) utilizando fonte Arial 12, espa&ccedil;amento simples e par&aacute;grafo justificado.</br></br>
Observe que o t&iacute;tulo do resumo deve ser todo em letras mai&uacute;sculas, seguido pelo nome dos autores, identifica&ccedil;&atilde;o do Departamento, Institui&ccedil;&atilde;o e Estado onde o trabalho foi realizado. Padronize o seu nome e sobrenome em todos os resumos em que voc&ecirc; for autor ou co-autor.</br>
O material a ser apresentado no p&ocirc;ster durante a ENSS deve ser substancialmente semelhante &agrave;quele descrito no resumo. Em particular, o t&iacute;tulo, autores e conte&uacute;do cient&iacute;fico devem ser id&ecirc;nticos aos do resumo aprovado.

</p>
<fieldset>
<?php
 		echo $this->Form->input('AbstractIl.abstract', array('label' => 'Resumo: 3000 caracteres', 'type' => 'textarea', 'maxLength' => 3000, 'rows' => '30', 'cols' => '80'));
		echo $this->Form->input('AbstractIl.intention_letter', array('label' => 'Carta de Inten&ccedil;&atilde;o', 'type' => 'textarea', 'rows' => '5', 'cols' => '80'));

?>
</fieldset>
<div style="text-align:center;">	<?php echo $this->Form->end('Registrar');?></div>
</div>
<div class="grid_3"></br></div>
</br></br>
