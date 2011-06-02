<div class="grid_5"></br></div>
<div class="grid_11">
</br></br>
<?php
    echo $form->create('Contact', array('url' => '/pages/contacts'));
    //echo $form->inputs();
    echo $form->input(__('First Name', true));
    echo $form->input(__('Last Name', true));
    echo $form->input('email');
    echo $form->input(__('Message', true), array('type' => 'textarea'));
    echo $form->end(__('Send', true));
?>
</br></br>
</div>
