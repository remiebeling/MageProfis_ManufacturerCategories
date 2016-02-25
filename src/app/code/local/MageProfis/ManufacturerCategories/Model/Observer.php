<?php
class Mageprofis_ManufacturerCategories_Model_Observer
{
    public function addLayoutXml($event)
    {
        $xml = $event->getUpdates()
                ->addChild('manufacturercategories');
        $xml->addAttribute('module', 'MageProfis_ManufacturerCategories');
        $xml->addChild('file', 'mageprofis-manufacturercategories.xml');
    }
}
