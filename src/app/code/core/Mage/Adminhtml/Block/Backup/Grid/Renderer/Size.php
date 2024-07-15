<?php
class Mage_Adminhtml_Block_Backup_Grid_Renderer_Size extends Mage_Adminhtml_Block_Widget_Grid_Column_Renderer_Abstract { 
	
	public function render(Varien_Object $row) {
		$value =  $row->getData($this->getColumn()->getIndex());
		return self::formatBytes($value); 
	}

	private static function formatBytes($size) {
		if($size){
			$unit=array('B','KB','MB','GB','TB','PB');
        	return @round($size/pow(1024,($i=floor(log($size,1024)))),3).' '.$unit[$i];
		}
	}
 
}
?>