<?php
/**
 * Created by PhpStorm.
 * User: Narbe
 * Date: 05.01.2018
 * Time: 12:21
 */
class Narbe_Questreport_Model_Questreport extends Mage_Core_Model_Abstract
{
    public function __construct()
    {
        parent::_construct();
        $this->_init('questreport/questreport');
    }
}