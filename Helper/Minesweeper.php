<?php

namespace JDavidVR\Minesweeper\Helper;

use Magento\Framework\App\Helper\Context;
use Magento\Framework\Exception\LocalizedException;
use Magento\Framework\Math\Random;

class Minesweeper extends \Magento\Framework\App\Helper\AbstractHelper
{

    const QUESTION = '?';
    const FLAG = 'F';
    const MINE = '*';
    const EMPTY = 0;

    /**
     * @var Random
     */
    private $random;

    /**
     * Minesweeper constructor.
     * @param Context $context
     * @param Random $random
     */
    public function __construct(
        Context $context
    )
    {
        parent::__construct($context);
    }

    /**
     * @param $row
     * @param $col
     * @param $mines
     */
    public function generateGame($row, $col, $mines)
    {
        /* Generate unique Mines position list */
        $minesPosition = [];
        while ($mines > 0) {
            try {
                $rowIndex = Random::getRandomNumber(1, $row);
                $colIndex = Random::getRandomNumber(1, $col);
                $position = $rowIndex . '-' . $colIndex;
                if (!isset($minesPosition[$position])) {
                    $mines--;
                    $minesPosition[$position] = ['row' => $rowIndex, 'col' => $colIndex];
                }
            } catch (LocalizedException $e) {
            }
        }

        $board = $this->getBoard($row, $col, $minesPosition);
        return $board;
    }

    /**
     * @param $row
     * @param $col
     * @param null $minesPosition
     * @return array
     */
    protected function getBoard($row, $col, $minesPosition = null)
    {
        $board = [];
        for ($i = 1; $i <= $row; $i++) {
            for ($j = 1; $j <= $col; $j++) {
                $keyPosition = $i . '-' . $j;
                $mineValidation = $minesPosition !== null && isset($minesPosition[$keyPosition]);
                $board[$i][$j] = $mineValidation ? self::MINE : self::EMPTY;
            }
        }
        $this->placeNumberHints($board, $minesPosition);

        return $board;
    }

    /**
     * @param $board
     * @param $minesPosition
     */
    protected function placeNumberHints(&$board, $minesPosition)
    {
        foreach ($minesPosition as $position) {
            $rowIndex = $position['row'];
            $colIndex = $position['col'];
            for ($i = $rowIndex - 1; $i <= $rowIndex + 1; $i++) {
                // Iterate only rows with index > 0
                if ($i > 0 && $i <= count($board)) {
                    for ($j = $colIndex - 1; $j <= $colIndex + 1; $j++) {
                        if ($j > 0 && $j <= count($board[$i])) {
                            // Modify only if is numeric
                            if (is_numeric($board[$i][$j])) {
                                $board[$i][$j] += 1;
                            }
                        }
                    }
                }
            }
        }
    }
}
