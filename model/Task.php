<?php
class Task {
  private $id;
  private $desc;
  private $affect;
  private $deadline;
  private $color;

  public function __construct() {
    $this->id = -1;
    $this->desc = '';
    $this->affect = '';
    $this->deadline = '';
    $this->color = 'DD0'; // jaune
  }

  public function getDesc() {
    return $this->desc;
  }

  public function getAffect() {
    return $this->affect;
  }

  public function getDeadline() {
    return $this->deadline;
  }

  public function getColor() {
    return $this->color;
  }

  public function setDesc($newDesc) {
    if (isset($newDesc) && is_string($newDesc)) {
      $this->desc = $newDesc;
    }
  }

  public function setAffect($user) {
    if (isset($user) && is_string($user)) {
      $this->affect = $user;
    }
  }

  public function setDeadline($date) {
    if (isset($date) && is_string($date)) {
      $this->deadline = $date;
    }
  }

  public function setColor($newColor) {
    if (isset($newColor) && is_string($newColor) && strlen($newColor) == 3) {
      $this->color = $newColor;
    }
  }
  
}

?>
