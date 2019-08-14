<?php

class Jaljale_Testimonials_Block_Adminhtml_Testimonial_Grid extends Mage_Adminhtml_Block_Widget_Grid
{

		public function __construct()
		{
				parent::__construct();
				$this->setId("testimonialGrid");
				$this->setDefaultSort("id");
				$this->setDefaultDir("DESC");
				$this->setSaveParametersInSession(true);
		}

		protected function _prepareCollection()
		{
				$collection = Mage::getModel("testimonials/testimonial")->getCollection();
				$this->setCollection($collection);
				return parent::_prepareCollection();
		}
		protected function _prepareColumns()
		{
				$this->addColumn("id", array(
				"header" => Mage::helper("testimonials")->__("ID"),
				"align" =>"right",
				"width" => "50px",
			    "type" => "number",
				"index" => "id",
				));
                
				$this->addColumn("id", array(
				"header" => Mage::helper("testimonials")->__("Tid"),
				"index" => "id",
				));
				$this->addColumn("name", array(
				"header" => Mage::helper("testimonials")->__("Name"),
				"index" => "name",
				));
					$this->addColumn('date', array(
						'header'    => Mage::helper('testimonials')->__('Date'),
						'index'     => 'date',
						'type'      => 'datetime',
					));
				$this->addColumn("title", array(
				"header" => Mage::helper("testimonials")->__("Title`"),
				"index" => "title",
				));
			$this->addExportType('*/*/exportCsv', Mage::helper('sales')->__('CSV')); 
			$this->addExportType('*/*/exportExcel', Mage::helper('sales')->__('Excel'));

				return parent::_prepareColumns();
		}

		public function getRowUrl($row)
		{
			   return $this->getUrl("*/*/edit", array("id" => $row->getId()));
		}


		
		protected function _prepareMassaction()
		{
			$this->setMassactionIdField('id');
			$this->getMassactionBlock()->setFormFieldName('ids');
			$this->getMassactionBlock()->setUseSelectAll(true);
			$this->getMassactionBlock()->addItem('remove_testimonial', array(
					 'label'=> Mage::helper('testimonials')->__('Remove Testimonial'),
					 'url'  => $this->getUrl('*/adminhtml_testimonial/massRemove'),
					 'confirm' => Mage::helper('testimonials')->__('Are you sure?')
				));
			return $this;
		}
			

}