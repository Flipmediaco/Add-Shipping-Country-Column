<?php
class Flipmedia_AddShippingCountryColumn_Adminhtml_Block_Widget_Grid_Column_Renderer_Country extends Mage_Adminhtml_Block_Widget_Grid_Column_Renderer_Abstract {

	private static $_countryList = array();
	
	public function options() {
		 if (count(self::$_countryList) == 0) {			 
			$countries =		Mage::getResourceModel('directory/country_collection')
									->loadData()
									->toOptionArray(false);
			foreach ($countries as $country) {
				self::$_countryList[$country['value']] = $country['label'];
			}
		 }
		 		 
		 return self::$_countryList;
	 }
	
	public function render(Varien_Object $row){
		   $value = $this->_getValue($row);		   
		   $_countryList = $this->options();		   
		   return isset($_countryList[$value]) ? $_countryList[$value] : false;
		}
}




