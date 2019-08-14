<?php
class Eke_Avant_Helper_Data extends Mage_Core_Helper_Abstract
{
    public function isAvantMetaEnabled()
    {
        return Mage::getStoreConfig("eke_avant/avant/enabled");
    }

	
	public function getAvantSiteid()
    {
        return Mage::getStoreConfig("eke_avant/avant/siteid");
    }

}