<?php
class Database
{
  private $host = DB_HOST;
  private $db = DB_NAME;
  private $user = DB_USER;
  private $pass = DB_PASS;
  private $pdo;

  public function __construct()
  {
    try {
      $dsn = "pgsql:host=$this->host;port=5432;dbname=$this->db;";

      $this->pdo = new PDO(
        $dsn,
        $this->user,
        $this->pass,
        [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]
      );

      $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      // $this->pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
      // $this->pdo->beginTransaction();
    } catch (PDOException $e) {
      die($e->getMessage());
    }
  }

  public function query($sql, $params = [])
  {
    $stmt = $this->pdo->prepare($sql);

    // TO DO: Prepare parameter bindings
    $stmt->execute($params);

    return $stmt->fetchAll();
  }
}
