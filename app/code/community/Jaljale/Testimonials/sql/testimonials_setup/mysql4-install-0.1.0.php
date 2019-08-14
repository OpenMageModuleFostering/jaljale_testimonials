<?php
$installer = $this;
$installer->startSetup();
$sql=<<<SQLTEXT
CREATE TABLE IF NOT EXISTS `testimonial` (`id` int(11) NOT NULL AUTO_INCREMENT,`name` varchar(40) NOT NULL,`image` varchar(100) NOT NULL,`date` date NOT NULL,`title` varchar(30) NOT NULL,`description` varchar(200) NOT NULL,PRIMARY KEY (`id`));
		
SQLTEXT;

$installer->run($sql);
//demo 
//Mage::getModel('core/url_rewrite')->setId(null);
//demo 
$installer->endSetup();
	 