<?php

class MageProfis_ManufacturerCategories_Helper_Data extends Mage_Core_Helper_Abstract {

    public function isAllManufacturersCategory($id) 
    {
        if ((string) $id == Mage::getStoreConfig('manufacturercategories/general/category')) 
        {
            return true;
        }
        return false;
    }

}
