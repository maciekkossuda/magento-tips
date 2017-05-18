<?php
// save only one attribute (EAV models)
// http://stackoverflow.com/questions/6714588/save-an-attribute-value-without-saving-its-parent-entity-in-magento#answer-8164012
// via Vinai
$product = Mage::getModel('catalog/product')->load(1);
$product
  ->setSomeAttr('value')
  ->getResource()
  ->saveAttribute($product, 'some_attr');