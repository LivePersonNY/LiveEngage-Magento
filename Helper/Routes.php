<?php
namespace LivePerson\LiveEngage\Helper;

use \Magento\Framework\Data\Form\Element\Multiselect;

class Routes implements \Magento\Framework\Option\ArrayInterface {//extends Multiselect {
  public function toOptionArray($isMultiselect = false) {
    return array(
      array('value' => 'cms', 'label' => 'CMS'),
      array('value' => 'catalog', 'label' => 'Catalog'),
      array('value' => 'checkout', 'label' => 'Checkout'),
      array('value' => 'customer', 'label' => 'Customer'),
    );
  }
}