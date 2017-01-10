<?php

class Aqope_Banner_Model_Banner extends Mage_Core_Model_Abstract
{
    public function __construct()
    {
        parent::_construct();
        $this->_init('banner/banner');

    }
}