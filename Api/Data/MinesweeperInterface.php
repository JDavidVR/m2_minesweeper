<?php
// REGEX: ':.*\n.*\n.*\.*\n.*}' | '\*\/.*\n.*\sset'
namespace JDavidVR\Minesweeper\Api\Data;

interface MinesweeperInterface
{
    const MINESWEEPER_ID = 'minesweeper_id';
    const GAME_BOARD = 'game_board';
    const PLAYING_BOARD = 'playing_board';
    const IS_SAVED = 'is_saved';

    /**
     * @return string
     */
    public function getMinesweeperId();

    /**
     * @param string $minesweeper_id
     * @return MinesweeperInterface
     */
    public function setMinesweeperId(string $minesweeper_id);

    /**
     * @return string
     */
    public function getGameBoard();

    /**
     * @param string $game_board
     * @return MinesweeperInterface
     */
    public function setGameBoard(string $game_board);

    /**
     * @return string
     */
    public function getPlayingBoard();

    /**
     * @param string $playing_board
     * @return MinesweeperInterface
     */
    public function setPlayingBoard(string $playing_board);

    /**
     * @return string
     */
    public function getIsSaved();

    /**
     * @param string $is_saved
     * @return MinesweeperInterface
     */
    public function setIsSaved(string $is_saved);
}
