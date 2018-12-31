<?php
class User {
  private static $addUserQuery = 'INSERT INTO USERS (LOGIN, PSEUDO, PASSWORD, ADMIN)'.
      'VALUES (:login, :pseudo, :pass, :admin)';
  private static $getUserQuery = 'SELECT LOGIN, PSEUDO, PASSWORD, ADMIN'.
      'FROM USERS WHERE LOGIN = :login';
  private static $setPseudoUserQuery = 'UPDATE USERS SET PSEUDO = :pseudo'.
      'WHERE ';

  private $login;
  private $pseudo;
  private $passwd;
  private $admin;

  public function __construct($login, $passwd, $pseudo = '', $admin = false) {
    $this->login = $login;
    $this->pseudo = $pseudo;
    $this->passwd = $passwd;
    $this->admin = $admin;
  }

  public static function getUser($login) {

  }

}

?>
