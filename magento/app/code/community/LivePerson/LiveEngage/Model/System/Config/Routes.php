<?php

class LivePerson_LiveEngage_Model_System_Config_Routes
{
    public function toOptionArray()
    {
        return array(
            array(
                'value' => 'cms',
                'label' => 'CMS (pages)',
            ),
            array(
                'value' => 'catalog',
                'label' => 'Catalog',
            ),
            array(
                'value' => 'checkout',
                'label' => 'Cart/Checkout',
            ),
            array(
                'value' => 'customer',
                'label' => 'Customer',
            ),
        );
    }
}