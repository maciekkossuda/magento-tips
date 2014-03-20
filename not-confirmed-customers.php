<?php
$collection = Mage::getResourceModel('customer/customer_collection')
  ->addAttributeToSelect(array('confirmation'))
  ->addAttributeToFilter('confirmation', array('null' => true), 'left'); // joinType should be left

// SELECT `e`.*, `at_confirmation`.`value` AS `confirmation`
// FROM `customer_entity` AS `e`
// LEFT JOIN `customer_entity_varchar` AS `at_confirmation`
//   ON (`at_confirmation`.`entity_id` = `e`.`entity_id`) AND (`at_confirmation`.`attribute_id` = '16')
// WHERE (`e`.`entity_type_id` = '1') AND (at_confirmation.value IS NULL)