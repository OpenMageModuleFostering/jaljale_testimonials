<?php
class Jaljale_Testimonials_IndexController extends Mage_Core_Controller_Front_Action{
    public function IndexAction() {
      
	  $this->loadLayout();   
	  $this->getLayout()->getBlock("head")->setTitle($this->__("Front Testimonial"));
	        $breadcrumbs = $this->getLayout()->getBlock("breadcrumbs");
      $breadcrumbs->addCrumb("home", array(
                "label" => $this->__("Home Page"),
                "title" => $this->__("Home Page"),
                "link"  => Mage::getBaseUrl()
		   ));

      $breadcrumbs->addCrumb("front testimonial", array(
                "label" => $this->__("Front Testimonial"),
                "title" => $this->__("Front Testimonial")
		   ));

      $this->renderLayout(); 
	  
    }

    public function testimonialsAction(){

      $this->loadLayout();
      $this->renderLayout();

      $request = $this->getRequest();
        
    }

    public function allAction(){

      $this->loadLayout();
      $this->renderLayout();

      $request = $this->getRequest();
        
    }
}