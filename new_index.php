<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width= device-width, initial-scale=1.0">
    <title>Ultraline 11.3</title>
    <!-- css -->
    <link rel="stylesheet" href="stylesheet/css/style_new_index.css">
    <!-- JQuery -->
    <script src="vendor/twbs/bootstrap/dist/js/jquery.min.js"></script>
    <!-- bootstrap -->
    <link rel="stylesheet" href="vendor/twbs/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="vendor/twbs/bootstrap/dist/css/bootstrap-theme.min.css">
    <script src="vendor/twbs/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- fonts -->
    <link href="https://fonts.googleapis.com/css?family=Titillium+Web:400,600" rel="stylesheet">
    <!-- mouse -->
    <script src="js/mousewheel.min.js"></script>
    <script type="text/javascript">
    $(function() {

   $("#scroll_mouse").mousewheel(function(event, delta) {

      this.scrollLeft -= (delta * 1);

      event.preventDefault();

   });

});
    </script>
  </head>
  <body>
    <section class="container-fluid">
      <!-- nav -->
      <section class="row">
        <nav class="col-sm-12 wrap_nav_top">
          <article class="col-xs-4 col-sm-2 box_nav_top_l">
            <img src="image_web/logo_ultraline.png" alt="Ultraline11.3_logo">
          </article>
          <article class="col-sm-10 col-md-10 menu tablet">
            <span><a class="link link--kukuri" href="index.php" data-letters="HOME" onmouseover="playclip();">HOME</a></span>
            <span><a class="link link--kukuri" href="creator.php" data-letters="CREATOR" onmouseover="playclip();">CREATOR</a></span>
            <span><a class="link link--kukuri" target="_blank" href="https://ictsilpakorn.com/im11/ultraline11-3-collection-book" data-letters="COLLECTIONBOOK" onmouseover="playclip();">COLLECTION BOOK</a></span>
            <span><a class="link link--kukuri" href="thankyou.php" data-letters="THANKYOU" onmouseover="playclip();">THANK YOU</a></span>
            <span><a class="link link--kukuri" href="contact.php" data-letters="CONTACT" onmouseover="playclip();">CONTACT</a></span>
            <!-- <hr> -->
          </article> <!-- menu -->
          <article class="col-xs-8 col-sm-3 box_nav_top_r mobile">
            <img src="image_web/logo_ict.png" alt="ictsu_logo">
          </article>
          <hr>
        </nav>
      </section> <!-- nav -->


      <!-- catagory blog -->
      <section class="row">
        <!-- side text l -->
        <article class="col-sm-1 text_side_l tablet">
          <p>INTERACTIVE MEDIA DESIGN<br>ICT SILPAKORN</p>
        </article>
        <section class="mt_screen">
        <section class="col-xs-12 col-sm-10 wrap_catagory">
          <article class="col-xs-7 box_head_catagory">
            <h3>40 CREATOR</h3>
            <h4>SENOIR PROJECT<br>2017</h4>
          </article>
          <article class="col-xs-12 wrap_cat_box">
            <article class="wrap_box_work">
              <article class="wrap_img_cat">
                <img src="image_user/avatar/avatar_13560100.jpg" alt="">
              </article>
              <h4>APPLICATION <br>IOS</h4>
              <article class="box_count_creator">
                <p>12 CREATOR</p>
              </article>
            </article> <!-- wrap_box_work 1 -->
            <article class="wrap_box_work">
              <article class="wrap_img_cat">
                <img src="image_user/avatar/avatar_13560147.jpg" alt="">
              </article>
              <h4>BASE ON <br>DESKTOP</h4>
              <article class="box_count_creator">
                <p>12 CREATOR</p>
              </article>
            </article> <!-- wrap_box_work 2 -->
            <article class="wrap_box_work">
              <article class="wrap_img_cat">
                <img src="image_user/avatar/avatar_13560098.jpg" alt="">
              </article>
              <h4>ANDROID</h4>
              <article class="box_count_creator p_wrok_pos">
                <p>12 CREATOR</p>
              </article>
            </article> <!-- wrap_box_work 3 -->
            <article class="wrap_box_work">
              <article class="wrap_img_cat">
                <img src="image_user/avatar/avatar_13560220.jpg" alt="">
              </article>
              <h4>WEB MOBILE</h4>
              <article class="box_count_creator p_wrok_pos">
                <p>12 CREATOR</p>
              </article>
            </article> <!-- wrap_box_work 4 -->
            <article class="wrap_box_work">
              <article class="wrap_img_cat">
                <img src="image_user/avatar/avatar_13560178.jpg" alt="">
              </article>
              <h4>UNITY KINECT</h4>
              <article class="box_count_creator p_wrok_pos">
                <p>12 CREATOR</p>
              </article>
            </article> <!-- wrap_box_work 5 -->
            <article class="wrap_box_work">
              <article class="wrap_img_cat">
                <img src="image_user/avatar/avatar_13560181.jpg" alt="">
              </article>
              <h4>INTERACTIVE</h4>
              <article class="box_count_creator p_wrok_pos">
                <p>12 CREATOR</p>
              </article>
            </article> <!-- wrap_box_work 6 -->

          </article>
        </section> <!-- wrap_catagory -->
      </section> <!-- mt_screen -->
      <section class="desktop">
        <section class="col-xs-12 col-sm-10 col-md-10 wrap_catagory">
          <article class="col-xs-7 box_head_catagory">
            <h3>40 CREATOR</h3>
            <h4>SENOIR PROJECT<br>2017</h4>
          </article>
          <article id="scroll_mouse" class="col-md-12 wrap_dt_box_work">
            <ul>
              <li>
                <article class="wrap_img_cat_dt">
                  <img src="image_user/avatar/avatar_13560100.jpg" alt="">
                </article>
                <h4>APPLICATION<br>IOS</h4>
                <article class="box_count_creator_dt">
                  <p>12 CREATOR</p>
                </article>
              </li> <!-- app 01 -->
              <li>
                <article class="wrap_img_cat_dt">
                  <img src="image_user/avatar/avatar_13560147.jpg" alt="">
                </article>
                <h4>BASE ON<br>DESKTOP</h4>
                <article class="box_count_creator_dt">
                  <p>12 CREATOR</p>
                </article>
              </li> <!-- app 02 -->
              <li>
                <article class="wrap_img_cat_dt">
                  <img src="image_user/avatar/avatar_13560098.jpg" alt="">
                </article>
                <h4>WEB MOBILE</h4>
                <article class="box_count_creator_dt p_wrok_pos_dt">
                  <p>12 CREATOR</p>
                </article>
              </li> <!-- app 03 -->
              <li>
                <article class="wrap_img_cat_dt">
                  <img src="image_user/avatar/avatar_13560220.jpg" alt="">
                </article>
                <h4>ANDROID</h4>
                <article class="box_count_creator_dt p_wrok_pos_dt">
                  <p>12 CREATOR</p>
                </article>
              </li> <!-- app 04 -->
              <li>
                <article class="wrap_img_cat_dt">
                  <img src="image_user/avatar/avatar_13560178.jpg" alt="">
                </article>
                <h4>UNITY KINECT</h4>
                <article class="box_count_creator_dt p_wrok_pos_dt">
                  <p>12 CREATOR</p>
                </article>
              </li> <!-- app 05 -->
              <li>
                <article class="wrap_img_cat_dt">
                  <img src="image_user/avatar/avatar_13560181.jpg" alt="">
                </article>
                <h4>INTERACTIVE</h4>
                <article class="box_count_creator_dt p_wrok_pos_dt">
                  <p>12 CREATOR</p>
                </article>
              </li> <!-- app 06 -->
            </ul>
          </article>
          </section>
      </section> <!-- desktop -->
        <!-- side text r -->
        <article class="col-sm-1 text_side_r tablet">
          <p>INTERACTIVE MEDIA DESIGN<br><span style="margin-left:65px;">ICT SILPAKORN</span></p>
        </article>
      </section> <!-- catagory blog -->

      <!-- footer -->
      <section class="row">
        <article class="pos_fix">
          <article class="col-xs-12 main_menu">
            <article class="col-xs-4 col-sm-3 main_menu_l">
              <button type="button" name="button"><img src="image_web/btn_hamberger.png"></button>
            </article>
            <article class="col-xs-8 col-sm-9 main_menu_r desktop">
              <article class="slide_footer">
                <ul>
                  <li>APPLICATION IOS</li> /
                  <li>BASE ON DESKTOP</li> /
                  <li>WEB MOBILE</li> /
                  <li>ANDROID</li> /
                  <li>UNITY KINECT</li> /
                  <li>INTERACTIVE</li>
                </ul>
              </article>
            </article>
          </article>
        </article>
      </section>

    </section> <!-- container-fluid -->
  </body>
  <script type="text/javascript">
    if ($(window).width() >= 1000) {
    document.location = "index.php";
    }
  </script>
</html>
