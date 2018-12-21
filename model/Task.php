<?php
class Task {
  private $desc;
  private $affect;
  private $deadline;
  private $color;

  public function __construct($desc, $affect, $deadline) {
    $this->desc = $desc;
    $this->affect = $affect;
    $this->deadline = $deadline;
    $this->color = 'yellow';
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
  
}

?>
