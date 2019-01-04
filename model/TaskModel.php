<?php
require_once('Task.php');

class TaskModel {
  public static function getTasks($column) {
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