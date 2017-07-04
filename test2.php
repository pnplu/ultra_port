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
    <video src="https://r1---sn-30a7en7d.c.drive.google.com/videoplayback?id=4f0f6fedd3ad26e0&itag=22&source=webdrive&requiressl=yes&ttl=transient&mm=30&mn=sn-30a7en7d&ms=nxu&mv=m&pl=19&sc=yes&ei=bgBcWZWBL9Cn-QOFm5T4CQ&driveid=0B7gXLk9j1SkDVVZ1Z3l5b1RLcFU&mime=video/mp4&lmt=1499105245795086&mt=1499201567&ip=180.183.121.91&ipbits=0&expire=1499216046&cp=QVJOQUNfVVBSR1hNOnlLY0dBRzVGTVBO&sparams=ip,ipbits,expire,id,itag,source,requiressl,ttl,mm,mn,ms,mv,pl,sc,ei,driveid,mime,lmt,cp&signature=7006A77A7C91A2410B698E6BA326C8909E71066E.AB82C104306FFAA9A33E77F82F830AB22FEA9932&key=ck2&app=texmex&cpn=Ro44ET93NzSX9hgF&c=WEB&cver=1.20170627" controls="controls" autoplay loop width="960">
      <!-- <source src="https://drive.google.com/uc?export=download&id=0B7gXLk9j1SkDVVZ1Z3l5b1RLcFU" type="video/mp4"> -->
      <!-- <source src="https://r1---sn-30a7en7d.c.drive.google.com/videoplayback?id=4f0f6fedd3ad26e0&itag=22&source=webdrive&requiressl=yes&ttl=transient&mm=30&mn=sn-30a7en7d&ms=nxu&mv=m&pl=19&sc=yes&ei=bgBcWZWBL9Cn-QOFm5T4CQ&driveid=0B7gXLk9j1SkDVVZ1Z3l5b1RLcFU&mime=video/mp4&lmt=1499105245795086&mt=1499201567&ip=180.183.121.91&ipbits=0&expire=1499216046&cp=QVJOQUNfVVBSR1hNOnlLY0dBRzVGTVBO&sparams=ip,ipbits,expire,id,itag,source,requiressl,ttl,mm,mn,ms,mv,pl,sc,ei,driveid,mime,lmt,cp&signature=7006A77A7C91A2410B698E6BA326C8909E71066E.AB82C104306FFAA9A33E77F82F830AB22FEA9932&key=ck2&app=texmex&cpn=Ro44ET93NzSX9hgF&c=WEB&cver=1.20170627" type="video/"> -->
    </video>
    <!-- <iframe src="https://drive.google.com/file/d/0B7gXLk9j1SkDVVZ1Z3l5b1RLcFU/preview" width="640" height="480"></iframe> -->
    <!-- <img src="https://drive.google.com/uc?export=download&id=0B7gXLk9j1SkDNVhOM29BNWFOS3M"> -->
    <!-- <iframe src="https://drive.google.com/file/d/0B7gXLk9j1SkDNVhOM29BNWFOS3M/preview" width="400"></iframe> -->
    <img src="https://lh4.googleusercontent.com/rAlTecACULlB3YUmVjYEtXdI2IkSQMu4qM-hZWbG5BeETEY_cc5RPI9Nkb6alPGRiDuf6uS3C_IY8nw=w1284-h672-rw" alt="">
  </body>
</html>

<!-- https://drive.google.com/open?id=0B0avKLb7IjwaWk9uVjdYbm1ZWHc -->
