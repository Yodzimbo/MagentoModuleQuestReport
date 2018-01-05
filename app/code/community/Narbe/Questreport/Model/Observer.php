<?php
/**
 * Created by PhpStorm.
 * User: Narbe
 * Date: 05.01.2018
 * Time: 11:53
 */

class Narbe_Questreport_Model_Observer
{
    public function logVisitorAction($observer)
    {
        $ip = Mage::helper('core/http')->getHttpHost($clean = true);
        $questreport_col = Mage::getModel('questreport/questreport');
        try
        {
            $questreport_col->setData('$customer_ip', $ip)
                            ->setData('timestamp', now());
            $questreport_col->save();
        }
        catch(Exception $e)
        {
            Mage::log('Błąd podczas zapisywania danych: '.$e, null, 'questreport.log');
        }
    }
}