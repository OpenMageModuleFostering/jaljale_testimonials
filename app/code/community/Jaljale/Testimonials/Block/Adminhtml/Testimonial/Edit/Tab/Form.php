<?php
class Jaljale_Testimonials_Block_Adminhtml_Testimonial_Edit_Tab_Form extends Mage_Adminhtml_Block_Widget_Form
{
		protected function _prepareForm()
		{

				$form = new Varien_Data_Form();
				$this->setForm($form);
				$fieldset = $form->addFieldset("testimonials_form", array("legend"=>Mage::helper("testimonials")->__("Item information")));

				
						$fieldset->addField("name", "text", array(
						"label" => Mage::helper("testimonials")->__("Name"),					
						"class" => "required-entry",
						"required" => true,
						"name" => "name",
						));
									
						$fieldset->addField('image', 'image', array(
						'label' => Mage::helper('testimonials')->__('Image'),
						'name' => 'image',
						'note' => '(*.jpg, *.png, *.gif)',
						));
						$dateFormatIso = Mage::app()->getLocale()->getDateTimeFormat(
							Mage_Core_Model_Locale::FORMAT_TYPE_SHORT
						);

						$fieldset->addField('date', 'date', array(
						'label'        => Mage::helper('testimonials')->__('Date'),
						'name'         => 'date',					
						"class" => "required-entry",
						"required" => true,
						'time' => true,
						'image'        => $this->getSkinUrl('images/grid-cal.gif'),
						'format'       => $dateFormatIso
						));
						$fieldset->addField("title", "text", array(
						"label" => Mage::helper("testimonials")->__("Title`"),					
						"class" => "required-entry",
						"required" => true,
						"name" => "title",
						));
					
						$fieldset->addField("description", "textarea", array(
						"label" => Mage::helper("testimonials")->__("Description"),					
						"class" => "required-entry",
						"required" => true,
						"name" => "description",
						));
					

				if (Mage::getSingleton("adminhtml/session")->getTestimonialData())
				{
					$form->setValues(Mage::getSingleton("adminhtml/session")->getTestimonialData());
					Mage::getSingleton("adminhtml/session")->setTestimonialData(null);
				} 
				elseif(Mage::registry("testimonial_data")) {
				    $form->setValues(Mage::registry("testimonial_data")->getData());
				}
				return parent::_prepareForm();
		}
}
