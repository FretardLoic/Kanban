<?php
  require_once('Task.php');

  class Column {
    private $id;
    private $title;
    private $tasks;

    public function __construct($title = 'New column') {
      $this->id = -1;
      $this->title = $title;
      $this->tasks = array();
    }

    public function getId() {
      return $this->id;
    }

    public function getTitle() {
      return $this->title;
    }

    public function getTask($ind) {
      return $this->tasks[$ind];
    }

    public function nbOfTasks() {
      return count($this->tasks);
    }

    public function setTitle($newTitle) {
      if (isset($newTitle) && is_string($newTitle)) {
        $this->title = $newTitle;
      }
    }

    // @post: $this->tasks[$ind] == $task
    public function insertTask($ind, $task) {
      if (isset($ind) && is_int($ind)
      && isset($task) && is_a($task, 'Task')) {
        array_splice($this->tasks, $ind, 0, array($task));
      }
    }

    public function appendTask($task) {
      if (isset($task) && is_a($task, 'Task')) {
        array_push($this->tasks, $task);
      }
    }

    public function removeTask($task) {
      if (isset($task) && is_a($task, 'Task')) {
        $ind = array_search($task, $this->tasks, true);
        array_splice($this->tasks, $ind, 1);
      }
    }

  }
?>