</br></br>
<div class="grid_16">
<h1 style="text-align:center;"><?php __("Sheraton Hotel"); ?></h1>
</br></br>
</div>
<div class="grid_5">
<h2 style="text-align:center;"><?php __('Hotel Location'); ?></h2>
<?php
$params = array('markers'=> array("Rua+Olavo+Barreto+Viana+18,Moinhos+de+Vento+-+Porto+Alegre+-+Rio+Grande+do+Sul"),
                'size'=>array(400,300),
                'zoom'=>15);
echo $googleStaticMap->map($params);
?>
</div>
<div class="grid_1"></br></div>
<div class="grid_10">
<?php echo $this->Html->image('sheraton_fachada.jpg', array('alt' => __('Facade of the Sheraton Hotel.', true))); ?>
<?php echo $this->Html->image('sheraton_sala.jpg', array('alt' => __('Meeting room of the Sheraton Hotel.', true))); ?>
</br></br>
<h3>
<?php __("The Excitotoxicity and Neuroprotection Spring School will be held in the Sheraton Porto Alegre Hotel. Sheraton Hotel is located in the exclusive, upscale neighborhood of Moinhos de Vento and just 15-minute drive from Salgado Filho International Airport, with easy accessibility to many sightseeing and in the heart of the city. The  Moinhos Shopping Center - with over 100 smart boutiques, fashionable shops, 15 restaurants, and four cinemas - is an integral part of  hotel. The Sheraton Hotel is next to \"Cal&ccedil;ada (kalssada) da Fama\", a street famous for its sophisticated gourmet restaurants and trendy bars."); ?>
<h3>
</div>

</br></br>
