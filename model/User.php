<?php
class User {
  private $login;
  private $pseudo;
  private $passwd;

  public function __construct($login, $pseudo, $passwd) {
    $this->login = $login;
    $this->pseudo = $pseudo;
    $this->passwd = $passwd;
  }

}

?>
