<?php
/**
 * User: david
 * Date: 5/28/18
 * Time: 2:29 AM
 */
namespace JDavidVR\Minesweeper\Api;

interface MinesweeperRepositoryInterface
{
    /**
     * Save minesweeper.
     *
     * @param \JDavidVR\Minesweeper\Api\Data\MinesweeperInterface $minesweeper
     * @return \JDavidVR\Minesweeper\Api\Data\MinesweeperInterface
     * @throws \Magento\Framework\Exception\LocalizedException
     */
    public function save(Data\MinesweeperInterface $minesweeper);

    /**
     * Retrieve minesweeper.
     *
     * @param int $minesweeperId
     * @return \JDavidVR\Minesweeper\Api\Data\MinesweeperInterface
     * @throws \Magento\Framework\Exception\LocalizedException
     */
    public function getById($minesweeperId);

    /**
     * Retrieve blocks matching the specified criteria.
     *
     * @param \Magento\Framework\Api\SearchCriteriaInterface $searchCriteria
     * @return \JDavidVR\Minesweeper\Api\Data\MinesweeperSearchResultsInterface
     * @throws \Magento\Framework\Exception\LocalizedException
     */
    public function getList(\Magento\Framework\Api\SearchCriteriaInterface $searchCriteria);

    /**
     * Delete minesweeper.
     *
     * @param \JDavidVR\Minesweeper\Api\Data\MinesweeperInterface $minesweeper
     * @return bool true on success
     * @throws \Magento\Framework\Exception\LocalizedException
     */
    public function delete(Data\MinesweeperInterface $minesweeper);

    /**
     * Delete block by ID.
     *
     * @param int $minesweeperId
     * @return bool true on success
     * @throws \Magento\Framework\Exception\NoSuchEntityException
     * @throws \Magento\Framework\Exception\LocalizedException
     */
    public function deleteById($minesweeperId);

    /**
     * @param int $minesweeperId
     * @param int $row
     * @param int $col
     * @return \JDavidVR\Minesweeper\Api\Data\MinesweeperInterface
     */
    public function checkPosition($minesweeperId, $row, $col);

    /**
     * @param int $row
     * @param int $col
     * @param int $mines
     * @return \JDavidVR\Minesweeper\Api\Data\MinesweeperInterface
     */
    public function createGame($row, $col, $mines);
}
