<?php 
class MageProfis_ManufacturerCategories_Block_Homepage extends MageProfis_ManufacturerCategories_Block_Abstract
{   protected $_manufacturers 	= null;
    protected $_manufacturer_category_id = null;
    protected $_item_limit = null;
    
    public function _construct()
    {
        parent::_construct();
        $this->setItemLimit(Mage::getStoreConfig('manufacturercategories/homepage/limit'));
    }
    
    
    /**
     * set Item limit. If not set it defaults to 12
     * @param int $limit
     */
    protected function setItemLimit($limit)
    {
        if($limit == "")
        {
            $limit = "12";    
        }    
        $this->_item_limit = $limit;
    }
    
    /**
     * get maximum amount of items to be displayed on home Page
     * @return string
     */
    public function getItemLimit()
    {
        return $this->_item_limit;
    }

    /*
     * get collection of all products that shall be shown on homepage
     */
    public function getManufacturers()
    {
        if(is_null($this->_manufacturers))
        {	
            $collection = Mage::getModel('catalog/category')->getCollection()
                    ->addAttributeToFilter('parent_id', $this->getManufacturerCategoryId())
                    ->addAttributeToFilter('brand_logo', array('notnull' => true))
                    ->addAttributeToSort('position', 'asc')
                    ->addAttributeToSelect('*')
                    ->addStoreFilter();

            $this->_manufacturers = $collection;
        }
        return $this->_manufacturers;		
    }
    
    /**
     * return '' if block ist not activated in config
     * @return string
     */
    protected function _toHtml()
    {
        if(!Mage::getStoreConfigFlag('manufacturercategories/homepage/active'))
        {
            return '';
        }
        
        return parent::_toHtml();
    }
}
