<?php
require_once('Task.php');

class TaskModel {
  private static $getTasksQuery = 'SELECT ID_TASK, DESCRIPTION, AFFECTED_TO'.
    ', DEADLINE, COLOR FROM TASKS WHERE COL = :col';

  public static function getTasks($db, $columnId) {
    if (!isset($db) || !is_a($db, 'PDO')) {
      return false;
    }
    $tab = array();
    $k = 0;
    for ($qres->fetch() as $t) {
      
      $tab[$k] = new Task();
      $k++;
    }
    return $tab;
  }
}

?>