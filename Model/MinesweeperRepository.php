<?php
/**
 * User: david
 * Date: 5/28/18
 * Time: 2:34 AM
 */

namespace JDavidVR\Minesweeper\Model;


use JDavidVR\Minesweeper\Api\Data;
use JDavidVR\Minesweeper\Api\MinesweeperRepositoryInterface;

class MinesweeperRepository implements MinesweeperRepositoryInterface
{
    /**
     * @var \JDavidVR\Minesweeper\Helper\Minesweeper
     */
    protected $minesweeperHelper;

    /**
     * MinesweeperRepository constructor.
     * @param \JDavidVR\Minesweeper\Helper\Minesweeper $minesweeperHelper
     */
    public function __construct(
        \JDavidVR\Minesweeper\Helper\Minesweeper $minesweeperHelper
    )
    {
        $this->minesweeperHelper = $minesweeperHelper;
    }


    /**
     * Save minesweeper.
     *
     * @param \JDavidVR\Minesweeper\Api\Data\MinesweeperInterface $minesweeper
     * @return \JDavidVR\Minesweeper\Api\Data\MinesweeperInterface
     * @throws \Magento\Framework\Exception\LocalizedException
     */
    public function save(Data\MinesweeperInterface $minesweeper)
    {
        // TODO: Implement save() method.
    }

    /**
     * Retrieve minesweeper.
     *
     * @param int $minesweeperId
     * @return \JDavidVR\Minesweeper\Api\Data\MinesweeperInterface
     * @throws \Magento\Framework\Exception\LocalizedException
     */
    public function getById($minesweeperId)
    {
        // TODO: Implement getById() method.
    }

    /**
     * Retrieve blocks matching the specified criteria.
     *
     * @param \Magento\Framework\Api\SearchCriteriaInterface $searchCriteria
     * @return \JDavidVR\Minesweeper\Api\Data\MinesweeperSearchResultsInterface
     * @throws \Magento\Framework\Exception\LocalizedException
     */
    public function getList(\Magento\Framework\Api\SearchCriteriaInterface $searchCriteria)
    {
        // TODO: Implement getList() method.
    }

    /**
     * Delete minesweeper.
     *
     * @param \JDavidVR\Minesweeper\Api\Data\MinesweeperInterface $minesweeper
     * @return bool true on success
     * @throws \Magento\Framework\Exception\LocalizedException
     */
    public function delete(Data\MinesweeperInterface $minesweeper)
    {
        // TODO: Implement delete() method.
    }

    /**
     * Delete block by ID.
     *
     * @param int $minesweeperId
     * @return bool true on success
     * @throws \Magento\Framework\Exception\NoSuchEntityException
     * @throws \Magento\Framework\Exception\LocalizedException
     */
    public function deleteById($minesweeperId)
    {
        // TODO: Implement deleteById() method.
    }

    /**
     * @param int $minesweeperId
     * @param int $row
     * @param int $col
     * @return \JDavidVR\Minesweeper\Api\Data\MinesweeperInterface
     */
    public function checkPosition($minesweeperId, $row, $col)
    {
        // TODO: Implement checkPosition() method.
    }

    /**
     * @param int $row
     * @param int $col
     * @param int $mines
     * @return \JDavidVR\Minesweeper\Api\Data\MinesweeperInterface
     */
    public function createGame($row, $col, $mines)
    {
        // TODO: Implement createGame() method.
    }
}