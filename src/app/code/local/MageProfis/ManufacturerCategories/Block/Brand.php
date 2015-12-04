<?php
class MageProfis_ManufacturerCategories_Block_Brand extends MageProfis_ManufacturerCategories_Block_Abstract 
{
    protected $_brand_big_image = null;
    protected $_current_brand = null;


    public function getCurrentBrand()
    {
        if(is_null($this->_current_brand))
        {
            $this->_current_brand = Mage::registry('current_category');
        }
        return $this->_current_brand;
    }
    
    public function getBrandBigImage()
    {
        if(is_null($this->_brand_big_image))
        {
            $brand_image = Mage::getUrl('media/catalog/category') . $this->getCurrentBrand()->getBrandPageImage();
            $this->_brand_big_image = $brand_image;
        }
        return $this->_brand_big_image;
    }
    
    public function getBrandTitle()
    {
        $title = $this->getCurrentBrand()->getName();
        if($this->getCurrentBrand()->getBrandPageTitle() != "")
        {
            $title = $this->getCurrentBrand()->getBrandPageTitle();
        }
        return $title;
    }
}