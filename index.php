<?php
require_once('model/BoardModel.php');

$board = BoardModel::getBoard();
echo $board->getTitle().'<br>';
echo $board->nbOfColumns().'<br>';
for ($k = 0; $k < $board->nbOfColumns(); ++$k) {
  echo $k.$board->getColumn($k)->getTitle().'<br>';
}
?>