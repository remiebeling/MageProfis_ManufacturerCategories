<?php

class MageProfis_ManufacturerCategories_Block_Brands extends MageProfis_ManufacturerCategories_Block_Abstract 
{
    protected $_manufacturers = null;
    
    /*
     * get collection of all products that shall be shown on homepage
     */
    public function getManufacturers() {
        if (is_null($this->_manufacturers)) {
            $collection = Mage::getModel('catalog/category')->getCollection()
                    ->addAttributeToFilter('parent_id', $this->getManufacturerCategoryId())
                    ->addAttributeToSort('position', 'asc')
                    ->addAttributeToSelect('*')
                    ->joinUrlRewrite();
                    
            $this->_manufacturers = $collection;
        }
        return $this->_manufacturers;
    }

}
