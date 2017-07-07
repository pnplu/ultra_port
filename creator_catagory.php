<?php

require_once __DIR__."/app/autoload.php";
use Ultraline\Database;

$catagory_id = $_GET["cat_id"];

$conn = new Database();
$data_user = $conn->db_application_catagory($catagory_id);
function catagory_name($catagory_id) {
  if($catagory_id === "1") {
    $name_cat = "APPLICATION IOS";
  }
  if($catagory_id === "2") {
    $name_cat = "ANDROID";
  }
  if($catagory_id === "3") {
    $name_cat = "WEB MOBILE";
  }
  if($catagory_id === "4") {
    $name_cat = "BASE ON DESKTOP";
  }
  if($catagory_id === "5") {
    $name_cat = "UNITY KINECT";
  }
  if($catagory_id === "6") {
    $name_cat = "INTERACTIVE";
  }

  return $name_cat;
}
 ?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width= device-width, initial-scale=1.0">
    <title>Project Student</title>
    <!-- css -->
    <link rel="stylesheet" href="stylesheet/css/style_port.css">
    <link rel="stylesheet" href="css/style_browse.css">
    <!-- bootstrap -->
    <link rel="stylesheet" href="vendor/twbs/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="vendor/twbs/bootstrap/dist/css/bootstrap-theme.min.css">
    <script src="vendor/twbs/bootstrap/dist/js/jquery.min.js"></script>
    <script src="vendor/twbs/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- fonts -->
    <link href="https://fonts.googleapis.com/css?family=Titillium+Web:400,600" rel="stylesheet">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
  </head>
  <body>

    <section id="browse_wrap"></section> <!-- section -->
    <section class="container-fluid">
      <section class="row">
        <nav class="col-sm-12 wrap_nav_top">
          <article class="col-xs-4 col-sm-2 box_nav_top_l">
            <img src="image_web/logo_ultraline.png" alt="Ultraline11.3_logo">
          </article>
          <article class="col-sm-7 wrap_menu_top_text tablet">
            <ul>
              <li>CREATOR</li>
              <li>THANK YOU</li>
              <li>CONTACT</li>
            </ul>
          </article>
          <article class="col-xs-8 col-sm-3 box_nav_top_r">
            <img src="image_web/logo_ict.png" alt="ictsu_logo">
          </article>
          <hr>
        </nav> <!-- nav -->
        <section class="col-sm-1 wrap_text_side_l tablet">
          <p>
            INTERACTIVE MEDIA DESIGN<br>
            ICTSILPAKORN
          </p>
        </section>
        <section class="col-xs-12 col-sm-11 wrap_people">
          <?php
            foreach ($data_user as $key => $value) {
           ?>
          <article class="col-xs-6 col-sm-4 col-md-3 wrap_box_people">
            <!-- <article class="row"> -->
              <article class="image_people">
                <img src="image_user/avatar/<?php echo $value["user"]["image"]["profile"]; ?>" alt="Ultraline 11.3 User">
                  <a href="project_detail.php?stu_id=<?php echo $value["student_id"]; ?>"><button type="button">VIEW PROJECT</button></a>
              </article>
            <!-- </article> -->
            <!-- <article class="row"> -->
              <article class="discription_people">
                <p class="topic_user"><?php echo $value["work"]["project_name"]; ?></p>
                <p class="name_user">by <?php echo $value["user"]["name"]; ?></p>
              </article> <!-- discription_people -->
            <!-- </article> -->

          </article> <!-- wrap_box_people 1 -->
          <?php
        }
           ?>

        </section> <!-- wrap_people -->
      </section> <!-- row -->

      <!-- footer -->
      <footer class="row">
        <section class="wrap_footer">
          <article class="col-xs-12 wrap_r_footer">
            <article class="col-xs-3 col-sm-2 col-md-1 wrap_footer_l">
              <button id="browse_icon" type="button" name="button"><img src="image_web/btn_hamberger.png"></button>
            </article> <!-- wrap_footer_l -->
            <article class="col-xs-9 col-sm-10 col-md-11 wrap_footer_r">
              <p>HOME > CATEGORY > APPLICATION IOS</p>
              <article class="wrap_topic_footer">
                <span class="topic_footer"><?php echo catagory_name($catagory_id); ?></span>
              </article>
              <article class="wrap_user_footer">
                <span class="user_footer"><?php echo count($data_user); ?> CREATOR</span>
              </article> <!-- wrap_user_footer -->
            </article> <!-- wrap_footer_r -->
          </article> <!-- wrap_r_footer -->
        </section> <!-- wrap_footer -->
      </footer>
    </section> <!-- container-fluid -->

    <section id="browse_wrap"></section> <!-- section -->

  <!-- Creator hover -->
  <script src="js/anime.min.js"></script>
  <script src="js/main.js"></script>

  </body>
</html>
