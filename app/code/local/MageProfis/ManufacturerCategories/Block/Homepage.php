<?php 
class MageProfis_ManufacturerCategories_Block_Homepage extends Mage_Catalog_Block_Product
{   protected $_manufacturers 	= null;
    protected $_manufacturer_category_id = null;
    protected $_item_limit = null;
    
    public function _construct()
    {
        $this->setManufacturerCategoryId(Mage::getStoreConfig('manufacturercategories/general/category'));
        $this->setItemLimit(Mage::getStoreConfig('manufacturercategories/homepage/limit'));
        
        parent::_construct();
    }
    
    /**
     * set Manufacturer Category id from store config data
     * @param string $id
     */
    protected function setManufacturerCategoryId($id)
    {
        $this->_manufacturer_category_id = $id;
    }
    
    /**
     * get Manufacturer Category from store config data
     * @return string
     */
    public function getManufacturerCategoryId()
    {
        if(is_null($this->_manufacturer_category_id))
        {
            return Mage::getStoreConfig('manufacturercategories/general/category');
        }
        return $this->_manufacturer_category_id;
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
                    ->addAttributeToSort('position', 'asc')
                    ->addAttributeToFilter('manufacturer_home', 1)
                    ->addAttributeToSelect('*')
                    ->setPageSize($this->getItemLimit())
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