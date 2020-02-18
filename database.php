<?php
class Database {
  private $tokenAuth;
  private $pdo;

  public function _construct() {
    $this->tokenAuth=array(
      'dbname' => 'clients',
      'host' => '127.0.0.1',
      'user' => 'admin',
      'password' => '1312',
    );
  }
//connection a la base de donnée
  private function getPDO() {
    try {
      if ($this=>PDO == null) {
        $pdo = new PDO('mysql:dbname=' . $this=>$tokenAuth['dbname'] . 'host=' .$this->tokenAuth['host'], $this->tokenAuth['user'], $this->tokenAuth['password'] );
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $this->pdo = $pdo;
      }

    } catch (PDOExecption $e) {
var var_dump($e);
    }


  }
}
 ?>
