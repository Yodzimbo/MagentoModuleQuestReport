<?php
/**
 * Created by PhpStorm.
 * User: Narbe
 * Date: 05.01.2018
 * Time: 12:23
 */

class Narbe_Questreport_Model_Mysql4_Questreport extends Mage_Core_Model_Mysql4_Abstract
{
    public function _construct()
    {
        $this->_init('questreport/questreport', 'id_questreport');
    }
}