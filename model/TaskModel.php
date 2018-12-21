<?php
require_once('Task.php');

class TaskModel {
  public static function getTasks($qres) {
    $tab = array();
    $k = 0;
    for ($qres->fetch() as $t) {
      
      $tab[$k] = new Task($t->desc, $t->affect, $t->deadline);
      $k++;
    }
    return $tab;
  }
}

?>