<?php
  require_once('Column.php');

  class Kanban {
    private $columns;
    private $title;

    public function __construct($title) {
      $this->title = $title;
      $this->columns = new array();
    }

    public function getTitle() {
      return $this->title;
    }

    public function getColumn($ind) {
      return $this->columns[$ind];
    }

    public function setColumnTitle($ind, $title) {
      $this->columns[$ind]->setTitle($title);
    }

    // @post: $this->getColumn($ind) == $col
    public function insertColumn($ind, $col) {
      array_splice($this->colums, $ind, 0, $col);
    }
  }
?>
