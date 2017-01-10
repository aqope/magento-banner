<?php

class Aqope_Banner_Block_Adminhtml_Banner_Index_Grid extends Mage_Adminhtml_Block_Widget_Grid
{
    public function __construct()
    {
        parent::_construct();
        $this->setId('aqope_banner_grid');
        $this->setDefaultSort('increment_id');
        $this->setDefaultDir('DESC');
        $this->setSaveParametersInSession(true);
        $this->setUseAjax(true);
    }

    protected function _prepareCollection()
    {
        $collection = Mage::getResourceModel('banner/banner_collection');

        $this->setCollection($collection);
        parent::_prepareCollection();
        return $this;
    }

    protected function _prepareColumns()
    {
        $helper = Mage::helper('banner');

        $this->addColumn('column_id', array(
            'header' => '',
            'index' => '',
            'renderer' => 'adminhtml/widget_grid_column_renderer_country'
        ));

        $this->addColumn('increment_id', array(
            'header' => $helper->__('ID'),
            'index' => 'id_aqope_banner'
        ));

        $this->addColumn('identifier', array(
            'header' => $helper->__('Identifier'),
            'index' => 'identifier'
        ));

        $this->addColumn('add_date', array(
            'header' => $helper->__('Date Added'),
            'index' => 'add_date',
            'type' => 'datetime'
        ));

        $this->addColumn('exp_date', array(
            'header' => $helper->__('Expiration Date'),
            'index' => 'exp_date',
            'type' =>'datetime'
        ));

        $this->addColumn('enabled', array(
            'header' => $helper->__('Enabled'),
            'index' => 'enabled',
            'type' => 'checkbox',
            'values' => array(1,2)
        ));

        return parent::_prepareColumns();
    }

    public function getGridUrl()
    {
        return $this->getUrl('/*/*/grid', array('_current' => true));
    }
}