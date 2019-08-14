<?php   
class Jaljale_Testimonials_Block_Index extends Mage_Core_Block_Template{   

	public function getTestimonials(){
		$collection = $this->getCollection();
		$collection->setOrder('id','DESC');
		return $collection;
	}

	public function getLastestTestimonials(){
		$collection = $this->getTestimonials()->getFirstItem();
		return $collection;
	}

	public function __construct()
    {
        parent::__construct();
        $collection = Mage::getModel('testimonials/testimonial')->getCollection();
        $this->setCollection($collection);
    }
 
    protected function _prepareLayout()
    {
        parent::_prepareLayout();
 
        $pager = $this->getLayout()->createBlock('page/html_pager', 'custom.pager');
        $pager->setAvailableLimit(array(1=>1,10=>10,20=>20,'all'=>'all'));
        $pager->setCollection($this->getCollection());
        $this->setChild('pager', $pager);
        $this->getCollection()->load();
        return $this;
    }
 
    public function getPagerHtml()
    {
        return $this->getChildHtml('pager');
    }




}