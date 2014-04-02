<?php
// save only one attribute (EAV models)
$product = Mage::getModel('catalog/product')->load(1);
$product
  ->setSomeAttr('value')
  ->getResource()
  ->saveAttribute($product, 'some_attr');