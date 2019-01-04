<?php
  require_once('Column.php');

  class Board {
    private $id;
    private $columns;
    private $title;

    public function __construct() {
      $this->id = -1
      $this->title = '';
      $this->columns = array();
    }

    public function getId() {
      return $this->id;
    }

    public function getTitle() {
      return $this->title;
    }

    public function getColumn($ind) {
      return $this->columns[$ind];
    }

    public function setTitle($newTitle) {
      if (isset($newTitle) && is_string($newTitle)) {
        $this->title = $newTitle;
      }
    }

    public function setColumnTitle($ind, $title) {
      $this->columns[$ind]->setTitle($title);
    }

    // @post: $this->getColumn($ind) == $col
    public function insertColumn($ind, $col) {
      if (isset($ind) && is_int($ind)
      && isset($col) && is_a($col, 'Column')) {
        array_splice($this->columns, $ind, 0, $col);
      }
    }

    public function removeColumn($col) {
      if (isset($col) && is_a($col, 'Column')) {
        $ind = array_search($col, $this->columns, true);
        array_splice($this->columns, $ind, 1);
      }
    }
    
  }
?>
