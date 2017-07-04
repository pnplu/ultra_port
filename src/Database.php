<?php

namespace Ultraline;
require "Db_config.php";

Class Database {

  public $conn;

  public function __construct() {
    $this->conn = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME) OR DIE("Connection Error!");
    mysqli_set_charset($this->conn, "utf8");
  }
}

 ?>
