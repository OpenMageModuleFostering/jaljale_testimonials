<?php
class Jaljale_Testimonials_Helper_Data extends Mage_Core_Helper_Abstract
{
	function getImage($testimonial){	
		return Mage::getBaseUrl('media')."/".$testimonial->getData('image');

	}
}
	 