<?php

  require_once('Board.php');

  class BoardModel {
    public static function getBoard() {
      $res = new Board();
      $res->setTitle('PLS à la BU');
      $res->appendColumn(new Column('À faire'));
      $rem = new Column('En cours');
      $res->appendColumn($rem);
      $res->appendColumn(new Column('Fait'));
      $res->removeColumn($rem);

      return $res;
    }
  }

?>
