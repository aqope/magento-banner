<?php

class Aqope_Banner_Adminhtml_Banner_IndexController extends Mage_Adminhtml_Controller_Action
{
    public function indexAction()
    {
        $this->loadLayout();
        $this->_addContent($this->getLayout()->createBlock('banner/adminhtml_banner'));
        $this->renderLayout();
    }

    public function gridAction()
    {
        $this->loadLayout();
        $this->getResponse()->setBody(
            $this->getLayout()->createBlock('banner/adminhtml_banner_grid')
                ->toHtml()
        );

    }
}