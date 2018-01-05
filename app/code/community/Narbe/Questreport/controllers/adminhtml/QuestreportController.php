<?php
/**
 * Created by PhpStorm.
 * User: Narbe
 * Date: 05.01.2018
 * Time: 11:47
 */

class Narbe_Questreport_Adminhtml_QuestreportController extends Mage_Adminhtml_Controller_Action
{
    public function indexAction()
    {
        $this->_initAction()->renderLayout();
    }

    protected function _initAction()
    {
        $this->loadLayout()->_setActiveMenu('questreportmenu/questreport')->_addBreadcrumb(Mage::helper('adminhtml')->__('Questreport'),
            Mage::helper('adminhtml')->__('Questreport'));
        return $this;
    }
}