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
      <source src="https://drive.google.com/uc?export=download&id=0B7gXLk9j1SkDbVpmOUFkcVF6T1E" type="video/mp4">
    </video>
    <!-- <iframe src="https://drive.google.com/file/d/0B7gXLk9j1SkDVVZ1Z3l5b1RLcFU/preview" width="640" height="480"></iframe> -->
    <img src="https://drive.google.com/uc?export=download&id=0B7gXLk9j1SkDUEkzaHhMYVEtWDQ">
    <!-- <iframe src="https://drive.google.com/file/d/0B7gXLk9j1SkDNVhOM29BNWFOS3M/preview" width="400"></iframe> -->
    <!-- <img src="https://lh4.googleusercontent.com/rAlTecACULlB3YUmVjYEtXdI2IkSQMu4qM-hZWbG5BeETEY_cc5RPI9Nkb6alPGRiDuf6uS3C_IY8nw=w1284-h672-rw" alt=""> -->
    <!-- <img src="https://lh3.googleusercontent.com/WFbSPVmZ-gYoIw4UdGHFQG0ykVrkUvO9HNL3vtheG1FQ0otDMl2mKctDdYk9P3FhgZLJamkC=w1274-h708" alt=""> -->
  </body>
</html>

<!-- https://drive.google.com/open?id=0B0avKLb7IjwaWk9uVjdYbm1ZWHc -->
