<?php

class Aqope_Banner_Model_Resource_Banner extends Mage_Core_Model_Resource_Db_Abstract
{
    public function _construct()
    {
        $this->_init('banner/banner', 'id_aqope_banner');
    }
}