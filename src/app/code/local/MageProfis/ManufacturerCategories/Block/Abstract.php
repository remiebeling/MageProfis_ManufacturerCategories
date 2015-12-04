<?php

class MageProfis_ManufacturerCategories_Block_Abstract extends Mage_Core_Block_Template {

    protected $_manufacturer_category_id = null;
    protected $_brand_base_category = null;

    /**
     * get Manufacturer Category from store config data
     * @return string
     */
    public function getManufacturerCategoryId() 
    {
        if (is_null($this->_manufacturer_category_id)) {
            $this->_manufacturer_category_id = Mage::getStoreConfig('manufacturercategories/general/category');
        }
        return $this->_manufacturer_category_id;
    }

    /**
     * get Manufacturer Base category
     * @return Object
     */
    public function getBrandBaseCategory() 
    {
        if (is_null($this->_brand_base_category)) {
            $cat = Mage::getModel('catalog/category')->getCollection()
                    ->addAttributeToselect('*')
                    ->addAttributeToFilter('entity_id', $this->getManufacturerCategoryId())
                    ->setPageSize(1)
                    ->setPage(1)
                    ->joinUrlRewrite()
                    ->getFirstItem();

            $this->_brand_base_category = $cat;
        }
        return $this->_brand_base_category;
    }

    public function getAllBrandsUrl() 
    {
        return $this->getBrandBaseCategory()->getUrl();
    }
    
    public function getBrandLogo($brand)
    {
        //Zend_Debug::dump($brand->getData());
        return Mage::getUrl('media/catalog/category') . $brand->getBrandLogo();
    }

}
