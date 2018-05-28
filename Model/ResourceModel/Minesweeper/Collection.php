<?php
/**
 * User: david
 * Date: 5/28/18
 * Time: 2:22 AM
 */

namespace JDavidVR\Minesweeper\Model\ResourceModel\Minesweeper;


class Collection extends \Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection
{
    protected function _construct()
    {
        $this->_init(\JDavidVR\Minesweeper\Model\Minesweeper::class, \JDavidVR\Minesweeper\Model\ResourceModel\Minesweeper::class);
    }
}