<?php
/**
 * Event observer model
 *
 *
 */
class Flipmedia_AddShippingCountryColumn_Model_Observer
{
    /**
     * Adds virtual grid column to order grid records generation
     *
     * @param Varien_Event_Observer $observer
     * @return void
     */
    public function addColumnToResource(Varien_Event_Observer $observer)
    {
        /* @var $resource Mage_Sales_Model_Mysql4_Order */
        $resource = $observer->getEvent()->getResource();
        $resource->addVirtualGridColumn(
            'customer_country_id',
            'sales/order_address',
            array('shipping_address_id' => 'entity_id'),
            'country_id'
        );
    }
}