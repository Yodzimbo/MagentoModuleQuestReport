<?php
/**
 * Created by PhpStorm.
 * User: Narbe
 * Date: 05.01.2018
 * Time: 12:55
 */

$installer = $this;

$installer->startSetup();

$installer->run("

DROP TABLE IF EXISTS questreport;

CREATE TABLE {$this->getTable('questreport')} (
  `id_questreport` BIGINT(20) unsigned NOT NULL auto_increment,
  `client_ip` VARCHAR(100) NOT NULL DEFAULT '',
  `product_id` INT(11) NOT NULL DEFAULT '',
  `visited_time` TIMESTAMP NULL,
  PRIMARY KEY (`id_questreport`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

    ");

$installer->endSetup();