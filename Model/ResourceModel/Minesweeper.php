<?php
/**
 * User: david
 * Date: 5/28/18
 * Time: 2:22 AM
 */
namespace JDavidVR\Minesweeper\Model\ResourceModel;

class Minesweeper extends \Magento\Framework\Model\ResourceModel\Db\AbstractDb
{

    /**
     * Resource initialization
     *
     * @return void
     */
    protected function _construct()
    {
        $this->_init('minesweeper', 'minesweeper_id');
    }
}