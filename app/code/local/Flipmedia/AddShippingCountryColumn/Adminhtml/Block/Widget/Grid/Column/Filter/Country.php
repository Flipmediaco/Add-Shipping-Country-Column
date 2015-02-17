<?php
class Flipmedia_AddShippingCountryColumn_Adminhtml_Block_Widget_Grid_Column_Filter_Country extends Mage_Adminhtml_Block_Widget_Grid_Column_Filter_Select {

	protected function _getOptions() {
			$countries =		Mage::getResourceModel('directory/country_collection')
									->loadData()
									->toOptionArray(false);		 		 
		 return $countries;
	 }
}




