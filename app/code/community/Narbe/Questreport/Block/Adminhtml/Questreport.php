<?php
/**
 * Created by PhpStorm.
 * User: Narbe
 * Date: 05.01.2018
 * Time: 12:28
 */

class Narbe_Questreport_Block_Adminhtml_Questreport extends Mage_Adminhtml_Block_Widget_Grid_Container
{
    public function __construct()
    {
        $this->_controller = 'adminhtml_questreport';
        $this->_blockGroup = 'questreport';
        $this->_headerText = Mage::helper('questreport')->__('Questreport');
        parent::_construct();
        $this->_removeButton('add');
    }
}