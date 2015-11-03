<?php

$installer = $this;
/* @var MageProfis_ChildrenCategories_Model_Resource_Setup $installer */
$installer->startSetup();

//$installer->removeAttribute('catalog_category', 'is_brand');
$installer->addAttribute('catalog_category', 'is_brand', array(
    'group' => 'Brand',
    'input' => 'select',
    'type' => 'int',
    'label' => 'Is Brand Category',
    'source' => 'eav/entity_attribute_source_boolean',
    'global' => Mage_Catalog_Model_Resource_Eav_Attribute::SCOPE_STORE,
    'visible' => true,
    'required' => false,
    'used_in_product_listing' => true,
    'user_defined' => false,
    'default' => null,
    'position' => 0,
));

//$installer->removeAttribute('catalog_category', 'brand_logo');
$installer->addAttribute('catalog_category', 'brand_logo', array(
    'group' => 'Brand',
    'type' => 'varchar',
    'input' => 'image',
    'backend' => 'catalog/category_attribute_backend_image',
    'label' => 'Brand Logo',
    'source' => 'eav/entity_attribute_source_boolean',
    'global' => Mage_Catalog_Model_Resource_Eav_Attribute::SCOPE_STORE,
    'visible' => true,
    'required' => false,
    'used_in_product_listing' => true,
    'user_defined' => false,
    'default' => null,
    'position' => 10,
));
//$installer->removeAttribute('catalog_category', 'brand_home');
$installer->addAttribute('catalog_category', 'brand_home', array(
    'group' => 'Brand',
    'input' => 'select',
    'type' => 'int',
    'label' => 'Show in Brands Bar',
    'source' => 'eav/entity_attribute_source_boolean',
    'global' => Mage_Catalog_Model_Resource_Eav_Attribute::SCOPE_STORE,
    'visible' => true,
    'required' => false,
    'used_in_product_listing' => true,
    'user_defined' => false,
    'default' => null,
    'position' => 20,
));
//$installer->removeAttribute('catalog_category', 'brand_page_image');
$installer->addAttribute('catalog_category', 'brand_page_image', array(
    'group' => 'Brand',
    'type' => 'varchar',
    'input' => 'image',
    'backend' => 'catalog/category_attribute_backend_image',
    'label' => 'Brand Page big image',
    'source' => 'eav/entity_attribute_source_boolean',
    'global' => Mage_Catalog_Model_Resource_Eav_Attribute::SCOPE_STORE,
    'visible' => true,
    'required' => false,
    'used_in_product_listing' => true,
    'user_defined' => false,
    'default' => null,
    'position' => 30,
));
//$installer->removeAttribute('catalog_category', 'brand_page_title');
$installer->addAttribute('catalog_category', 'brand_page_title', array(
    'group' => 'Brand',
    'input' => 'text',
    'type' => 'text',
    'label' => 'Brand Page title',
    'global' => Mage_Catalog_Model_Resource_Eav_Attribute::SCOPE_STORE,
    'visible' => true,
    'required' => false,
    'used_in_product_listing' => true,
    'user_defined' => false,
    'default' => null,
    'position' => 40,
));
//$installer->removeAttribute('catalog_category', 'brand_long_description');
$installer->addAttribute('catalog_category', 'brand_long_description', array(
    'group' => 'Brand',
    'input' => 'textarea',
    'type' => 'text',
    'label' => 'Brand Description',
    'note' => 'Displayed on Brand Page',
    'global' => Mage_Catalog_Model_Resource_Eav_Attribute::SCOPE_STORE,
    'visible' => true,
    'required' => false,
    'used_in_product_listing' => true,
    'user_defined' => false,
    'default' => null,
    'position' => 50,
     'wysiwyg_enabled' => true,
    'visible_on_front' => true,
    'is_html_allowed_on_front' => true,
));
//$installer->removeAttribute('catalog_category', 'brand_short_description');
$installer->addAttribute('catalog_category', 'brand_short_description', array(
    'group' => 'Brand',
    'input' => 'textarea',
    'type' => 'text',
    'label' => 'Brand Description',
    'note' => 'Displayed on Brand Page',
    'global' => Mage_Catalog_Model_Resource_Eav_Attribute::SCOPE_STORE,
    'visible' => true,
    'required' => false,
    'used_in_product_listing' => true,
    'user_defined' => false,
    'default' => null,
    'position' => 60,
     'wysiwyg_enabled' => true,
    'visible_on_front' => true,
    'is_html_allowed_on_front' => true,
));

//$installer->removeAttribute('catalog_category', 'brand_id');
$installer->addAttribute('catalog_category', 'brand_id', array(
    'group' => 'Brand',
    'input' => 'text',
    'type' => 'text',
    'label' => 'Brand id',
    'note' => 'z.B. ID aus Warenwirtschaft oder alter Datenbank',
    'source' => 'eav/entity_attribute_source_boolean',
    'global' => Mage_Catalog_Model_Resource_Eav_Attribute::SCOPE_STORE,
    'visible' => true,
    'required' => false,
    'used_in_product_listing' => true,
    'user_defined' => false,
    'default' => null,
    'position' => 100
));


$installer->endSetup();
