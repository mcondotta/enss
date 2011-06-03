<?php
/*
* GoolgleStaticMapHelper by Karl Mendes
* 
* http://karlmendes.com
*
*/
class GoogleStaticMapHelper extends AppHelper {
	
	var $helpers = array('Html');
	
	/*
	* Insert google maps API key here or insert a new line on 
	* config/core.php Configure::write('GoogleMapsAPIKey', '---KEY---');
	*/
	var $key = null;
	
	var $staticUrl = 'http://maps.google.com/maps/api/staticmap';
	
	function __construct() {
		if($this->key == null)
			$this->key = Configure::read('GoogleMapsAPIKey');
	}
	
	/*
	* 
	* More info: http://code.google.com/apis/maps/documentation/staticmaps/
	*
	* @params:
	*	$parameters [array]
	*		center: {required if markers not present} [array(lat,lon),string address]
	*		zoom: {required if markers not present} [int]
	*		size: {required} [array(width,height)]
	*		format: {optional} [png8,png,png32,gif,jpg,jpg-baseling]
	*		maptype: {optional} [roadmap, satellite, hybrid, terrain]
	*		mobile: {optional} [true,false]
	*		language: {optional} [string]
	*		markers: {optional} [array(array(lat,lon),
	*							string markerStyles|markerLocation1|markerLocation2|...)]
	*		path: {optional} [array(array(lat,lon),string pathStyles|pathLocation1|pathLocation2|...)]
	*		visible: {optional} [array(array(lat,lon),string)]
	*		sensor: {optional} [true,false] (default will be false)
	*	$alt: {optional} alt for the tag img
	*	$title: {optional} title for the tag img
	*	$createImgTag: {optional} defines if the function returns the img tag or only the url
	*	
	* @return: The img tag or url for the static map
	*
	*/
	function map($parameters,$alt='',$title='',$creatImgTag=true){
		if(isset($parameters['size']) && (isset($parameters['center'],$parameters['zoom']) || isset($parameters['markers']))){
			
			if(!isset($parameters['sensor'])) $parameters['sensor'] = 'false';
			
			
		//	$url = $this->staticUrl . '?key=' . $this->key;
			
			$url = $this->staticUrl . '?sensor=' . $parameters['sensor'];
			
			$url .= '&size=' . $parameters['size'][0] . 'x' . $parameters['size'][1];
			
			if(isset($parameters['markers'])){
				foreach($parameters['markers'] as $marker){
					if(is_array($marker))
						$url .= '&markers=' . $marker[0] . ',' . $marker[1];
					else
						$url .= '&markers=' .  $marker;
				};
			};
			
			if(isset($parameters['path'])){
				foreach($parameters['path'] as $path){
					if(is_array($path))
						$url .= '&path=' . $path[0] . ',' . $path[1];
					else
						$url .= '&path=' .  $path;
				};
			};
			
			if(isset($parameters['visible'])){
				foreach($parameters['visible'] as $visible){
					if(is_array($visible))
						$url .= '&visible=' . $visible[0] . ',' . $visible[1];
					else
						$url .= '&visible=' .  $visible;
				};
			};
			
			if(isset($parameters['center'])){
				$url .= '&center=';
				if(is_array($parameters['center']))
					$url .= $parameters['center'][0] . ',' . $parameters['center'][1];
				else
					$url .= $parameters['center'];
			};
			
			if(isset($parameters['format'])){
				$url .= '&format=' . $parameters['format'];
			};
			
			if(isset($parameters['zoom'])){
				$url .= '&zoom=' . $parameters['zoom'];
			};
			
			if($creatImgTag)
				return $this->output('<a href="http://maps.google.com/maps?f=q&source=s_q&hl=en&geocode=&q=Rua+Olavo+Barreto+Viana+18,Moinhos+de+Vento+-+Porto+Alegre+-+Rio+Grande+do+Sul&aq=&sll=37.0625,-95.677068&sspn=51.04407,79.013672&ie=UTF8&hq=&hnear=R.+Olavo+Barreto+Viana,+18+-+Moinhos+de+Vento,+Porto+Alegre+-+Rio+Grande+do+Sul,+90570-070,+Brazil&ll=-30.024442,-51.200924&spn=0.014547,0.01929&z=16&iwloc=r0"><img width="'.$parameters['size'][0].'" height="'.$parameters['size'][1].'" src="'.$url.'" alt="'.$alt.'" title="'.$title.'" /></a>');
			else return $this->output($url);
			
		}else{
			$this->log('GoogleStaticMapHelper: Invalid parameters for function "map"');
		};
	}
	
};
?>
