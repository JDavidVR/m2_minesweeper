<?php
/**
 * User: david
 * Date: 5/28/18
 * Time: 2:21 AM
 */

namespace JDavidVR\Minesweeper\Model;


use JDavidVR\Minesweeper\Api\Data\MinesweeperInterface;

class Minesweeper extends \Magento\Framework\Model\AbstractModel implements MinesweeperInterface
{
    /**
     *
     */
    protected function _construct()
    {
        $this->_init(\JDavidVR\Minesweeper\Model\ResourceModel\Minesweeper::class);
    }

    /**
     * @return string
     */
    public function getMinesweeperId()
    {
        return $this->getData(self::MINESWEEPER_ID);
    }

    /**
     * @param string $minesweeper_id
     * @return MinesweeperInterface
     */
    public function setMinesweeperId(string $minesweeper_id)
    {
        return $this->setData(self::MINESWEEPER_ID, $minesweeper_id);
    }

    /**
     * @return string
     */
    public function getGameBoard()
    {
        return $this->getData(self::GAME_BOARD);
    }

    /**
     * @param string $game_board
     * @return MinesweeperInterface
     */
    public function setGameBoard(string $game_board)
    {
        // TODO: Implement seGameBoard() method.
    }

    /**
     * @return string
     */
    public function getPlayingBoard()
    {
        return $this->getData(self::PLAYING_BOARD);
    }

    /**
     * @param string $playing_board
     * @return MinesweeperInterface
     */
    public function setPlayingBoard(string $playing_board)
    {
        // TODO: Implement sePlayingBoard() method.
    }

    /**
     * @return string
     */
    public function getIsSaved()
    {
        return $this->getData(self::IS_SAVED);
    }

    /**
     * @param string $is_saved
     * @return MinesweeperInterface
     */
    public function setIsSaved(string $is_saved)
    {
        // TODO: Implement seIsSaved() method.
    }
}
