<?php

$application_json = file_get_contents("data/db_application.json");

$app_decode = json_decode($application_json, TRUE);

// sort($app_decode, function($a, $b) {
//     return $a->student_id > $b->student_id ? -1 : 1;
// });

sort($app_decode);
// var_dump($app_decode);

foreach ($app_decode as $key => $value) {

  echo $value["work"]["name"]."<br>";
  echo $value["work"]["function"]["image"]["function_img_a"]."<br>";
  echo $value["work"]["function"]["image"]["function_img_b"]."<br>";
  echo $value["user"]["video"]["showreel"]."<br>";

  echo "<br>";
}

?>
