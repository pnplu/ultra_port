<?php

require_once __DIR__."/app/autoload.php";

use Ultraline\Database;

$stu_id = $_GET["stu_id"];

$conn = new Database();
$data_user = $conn->db_application_user($stu_id);

  echo $data_user["student_id"]."<br>";
  echo $data_user["user_name"]."<br>";
  echo $data_user["user_quote"]."<br>";
  echo $data_user["user_facebook"]."<br>";


 ?>
