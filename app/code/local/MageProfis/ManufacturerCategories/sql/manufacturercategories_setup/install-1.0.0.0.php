<?php
$installer = $this;
/* @var MageProfis_ChildrenCategories_Model_Resource_Setup $installer */
$installer->startSetup();

$attribute = Mage::getModel('eav/config')->getAttribute('catalog_category', 'description');
$entityTypeId     = $installer->getEntityTypeId('catalog_category');

$installer->addAttribute('catalog_category', 'manufacturer_home',  array(
    'input'                             => 'select',
    'type'                              => 'int',
    'label'                             => 'Hersteller auf Startseite anzeigen',
    'source'                            => 'eav/entity_attribute_source_boolean',
    'global'                            => Mage_Catalog_Model_Resource_Eav_Attribute::SCOPE_STORE,
    'visible'                           => true,
    'required'                          => false,
    'used_in_product_listing'           => true,
    'user_defined'                      => false,
    'default'                           => null,
));
// get group sort_oder from Attr: Description
$select = $this->getConnection()->select()
    ->from($this->getTable('eav/entity_attribute'))
    ->where('entity_type_id = ?',$entityTypeId)
    ->where('attribute_id = ?', $attribute->getId());
$item = $this->getConnection()->fetchRow($select);

$installer->addAttributeToGroup(
    $item['entity_type_id'],
    $item['attribute_set_id'],
    $item['attribute_group_id'],
    'manufacturer_home',
    99
);

$installer->endSetup();