<?php

class Aqope_Banner_Block_Adminhtml_Banner extends Mage_Adminhtml_Block_Widget_Grid_Container
{
    public function __construct()
    {
        $this->_blockGroup = "banner";
        $this->_controller = "adminhtml_banner_index";
        $this->_header = Mage::helper('banner')->__('Banners Grid ');
        parent::__construct();
    }
}