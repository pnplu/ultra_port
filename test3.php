<?php

require_once __DIR__."/app/autoload.php";
use Ultraline\Database;

$conn = new Database();

$catagory_id = $_GET["cat_id"];
$data_catagory = $conn->db_application_catagory($catagory_id);

foreach ($data_catagory as $key => $value) {
  echo $value["user"]["name"]."<br>";
}

 ?>
