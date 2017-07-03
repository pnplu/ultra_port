<?php

$application_json = file_get_contents("data/db_application_ios.json");

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
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>test2</title>
  </head>
  <body>
    <video controls="controls" autoplay loop width="1920">
      <source src="https://drive.google.com/uc?export=download&id=0B7gXLk9j1SkDVVZ1Z3l5b1RLcFU" type="video/mp4">
    </video>
    <!-- <iframe src="https://drive.google.com/file/d/0B7gXLk9j1SkDVVZ1Z3l5b1RLcFU/preview" width="640" height="480"></iframe> -->
  </body>
</html>
