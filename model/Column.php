<?php
  class Column {
    private $tasks;

    public function __construct() {
      $this->tasks = array();
    }

    public function getTask($ind) {
      return $this->tasks[$ind];
    }

    // @post: $this->tasks[$ind] == $task
    public function insertTask($ind, $task) {
      array_splice($this->tasks, $ins, 0, $task);
    }
  }
?>