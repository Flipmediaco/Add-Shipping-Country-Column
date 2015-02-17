<?php
class Flipmedia_AddShippingCountryColumn_Adminhtml_Block_Sales_Order_Grid extends Flipmedia_AddCustGroupColumn_Adminhtml_Block_Sales_Order_Grid
{
    public function __construct()
    {
        parent::__construct();
    }

    protected function _prepareColumns()
    {

		$this->addColumn('customer_country_id', array(
				'header'	=> Mage::helper('sales')->__('Shipping Country'),
				'index'		=> 'customer_country_id',
				'type'		=> 'text',
				//'options'	=> Flipmedia_AddShippingCountryColumn_Adminhtml_Block_Widget_Grid_Column_Renderer_Country::getCountriesArray(),
		));

        return parent::_prepareColumns();
    }
}
