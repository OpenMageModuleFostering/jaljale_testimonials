<?php
class Jaljale_Testimonials_Model_Mysql4_Testimonial extends Mage_Core_Model_Mysql4_Abstract
{
    protected function _construct()
    {
        $this->_init("testimonials/testimonial", "id");
    }
}