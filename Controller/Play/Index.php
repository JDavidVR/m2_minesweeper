<?php
namespace JDavidVR\Minesweeper\Controller\Play;

use Magento\Framework\App\Action\Context;
use Magento\Framework\App\ResponseInterface;

class Index extends \Magento\Framework\App\Action\Action
{
    /**
     * @var \JDavidVR\Minesweeper\Helper\Minesweeper
     */
    protected $minesweeper;

    /**
     * Index constructor.
     * @param Context $context
     * @param \JDavidVR\Minesweeper\Helper\Minesweeper $minesweeper
     */
    public function __construct(
        Context $context,
        \JDavidVR\Minesweeper\Helper\Minesweeper $minesweeper
    )
    {
        parent::__construct($context);
        $this->minesweeper = $minesweeper;
    }

    /**
     * Execute action based on request and return result
     *
     * Note: Request will be added as operation argument in future
     *
     * @return \Magento\Framework\Controller\ResultInterface|ResponseInterface
     * @throws \Magento\Framework\Exception\NotFoundException
     */
    public function execute()
    {
        $board = $this->minesweeper->generateGame(15,15, 10);

        echo '<table>';
        foreach ($board as $row) {
            echo '<tr>';
            foreach ($row as $col) {
                echo "<th>$col</th>";
            }
            echo '</tr>';
        }
        echo '</table>';
    }
}
