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
            $image = 'catalog/category/' . $this->getCurrentBrand()->getBrandPageImage();
            if (file_exists(Mage::getBaseDir('media') . $image))
            {
                $this->_brand_big_image = Mage::getBaseUrl('media') . $image;
            } else {
                $this->_brand_big_image = false;
            }
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
