<div class="grid_5"></br></div>
<div class="grid_7" style="text-align:center;">
</br></br>
<div class="blue_box">
<h1 style="text-align:center; color:#fff;"><?php __('Contact'); ?></h1>
<?php
    echo $form->create('Contact', array('url' => '/pages/contacts'));
?>
		<fieldset>
<?php
    echo $form->input('first_name', array('label' => __('First Name', true)));
    echo $form->input('last_name', array('label' => __('Last Name', true)));
    echo $form->input('email');
    echo $form->input('message', array('type' => 'textarea', 'label' => __('Message', true)));
    echo $form->end(__('Send', true));
?>
</fieldset>
</div>
</br></br>
</div>
