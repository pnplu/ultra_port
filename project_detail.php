<?php

  require_once __DIR__."/app/autoload.php";
  use Ultraline\Database;

  $stu_id = $_GET["stu_id"];

  $conn = new Database();
  $json_data = $conn->db_application_user($stu_id);
  // var_dump($json_data["user_video_interview"]);

  $random_user = $conn->db_application_random_user();
  $rands = array_rand($random_user, 3);
 ?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width= device-width, initial-scale=1.0">
    <title><?php echo $json_data["project_name"]; ?> | <?php echo $json_data["work_name"]; ?> | <?php echo $json_data["user_name"] ?> | ULTRALINE 11.3 GRADUATE EXHIBITION</title>
    <!-- css -->
    <link rel="stylesheet" href="stylesheet/css/style_project_detail.css">
    <link rel="stylesheet" href="css/style_browse.css">
    <!-- bootstrap -->
    <link rel="stylesheet" href="vendor/twbs/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="vendor/twbs/bootstrap/dist/css/bootstrap-theme.min.css">
    <script src="vendor/twbs/bootstrap/dist/js/jquery.min.js"></script>
    <script src="vendor/twbs/bootstrap/dist/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="css/bootstrap_xl.css">
    <!-- fonts -->
    <link href="https://fonts.googleapis.com/css?family=Titillium+Web:400,600" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Kanit" rel="stylesheet">
    <!-- circle css -->
    <link rel="stylesheet" href="stylesheet/css/circle.css">
    <!-- Logo animation -->
    <script src="node_modules/walkway.js/walkway.min.js"></script>
  <!-- Hover menu bar -->
    <link rel="stylesheet" type="text/css" href="stylesheet/css/linkstyles.css" />
    <!-- animate.css -->
    <link rel="stylesheet" href="stylesheet/css/animate.css" />
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <!-- fontawesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/fonts/fontawesome-webfont.ttf">


   <!-- add sound -->
   <script type="text/javascript" src="js/sound-mouseover.js"></script>
   <style media="screen">
     @media screen and (min-width: 319px) {
       .banner_img{
         height: 660px;
       }
       .wrap_user_pinterest{
         top: 50px;
       }
       .showreel_vdo_youtube{
         width: 100%;
         height: auto;
         min-height: 250px;
       }
       .dp_img_user_a{
         position: relative;
       }
       .dp_img_user_b{
         position: relative;
       }
       .dp_img_user_a:hover img{
         opacity: 0.5;
         filter: blur(2px);
       }
       .dp_img_user_a:hover .middle_dp{
         opacity: 1;
       }
       .dp_img_user_b:hover img{
         opacity: 0.5;
         filter: blur(2px);
       }
       .dp_img_user_b:hover .middle_dp{
         opacity: 1;
       }
       .middle_dp{
         transition: .5s ease;
         opacity: 0;
         position: absolute;
         top: 50%;
         left: 50%;
         transform: translate(-50%, -50%);
         -ms-transform: translate(-50%, -50%)
       }
       .middle_dp .text_ho_dp{
         /*background-color: #4CAF50;*/
         color: white;
         font-size: 24px;
       }
       svg{
         width: 70%;
         height: 70%;
         margin-left: -20px;
       }
       .hr_res{
         display: none;
       }
       .logo_mobile{
         display: block;
         float: right;
         margin-top: -90px;
         text-align: right;
       }
       .wrap_dev_by .img_dev_user{
         background: transparent;
       }
       .logo_in_browse{
         max-width: 100px;
       }
     }
     @media screen and (min-width: 767px) {
       .showreel_vdo_youtube{
         width: 100%;
         height: auto;
         min-height: 350px;
       }
       .middle_dp .text_ho_dp{
         /*background-color: #4CAF50;*/
         color: white;
         font-size: 20px;
         margin-top: -15px;
       }
       svg{
         width: 100%;
         height: 100%;
       }
       .hr_res{
         display: block;
       }
       .logo_mobile{
         display: none;
       }
       .logo_in_browse{
         max-width: 120px;
         margin-left: 0px;
       }
     }
      @media screen and (min-width: 959px) {
         .wrap_user_pinterest{
           top: 5px;
      }
      #demo-canvas{
        height: 800px;
      }
      /*.banner_img{
        height: 900px;
      }*/
      #bnner_mar{
        margin-top: 150px;
      }
      svg{
        width: 120%;
        height: 120%;
        margin-left: -52px;
      }
      .img_dev_user img{
        width: 100%;
      }
      .showreel_vdo_youtube{
        width: 100%;
        height: auto;
        min-height: 350px;
      }
      .middle_dp .text_ho_dp{
        /*background-color: #4CAF50;*/
        color: white;
        font-size: 30px;
      }

      .hover_related :hover {
        opacity: 0.5;
        filter: alpha(opacity=50);
        transition: 0.3s;
      }
      .hr_res{
        display: block;
      }
      .logo_mobile{
        display: none;
      }
     }
     .popups-cont {
       display: -webkit-box;
       display: -ms-flexbox;
       display: flex;
       -webkit-box-pack: center;
           -ms-flex-pack: center;
               justify-content: center;
       -webkit-box-align: center;
           -ms-flex-align: center;
               align-items: center;
       z-index: -10;
       position: fixed;
       left: 0;
       top: 0;
       width: 100%;
       height: 100vh;
       -webkit-perspective: 1000px;
               perspective: 1000px;
       pointer-events: none;
       -webkit-transition: z-index 0s 0.8s;
       transition: z-index 0s 0.8s;
     }
     .popups-cont.s--popup-active {
       z-index: 1000;
       pointer-events: auto;
       -webkit-transition: z-index 0s 0s;
       transition: z-index 0s 0s;
     }
     .popups-cont__overlay {
       position: absolute;
       left: 0;
       top: 0;
       width: 100%;
       height: 100%;
       opacity: 0;
       -webkit-transition: opacity 0.35s;
       transition: opacity 0.35s;
     }
     .popups-cont.s--popup-active .popups-cont__overlay {
       opacity: 1;
       -webkit-transition: opacity 0.35s 0.35s;
       transition: opacity 0.35s 0.35s;
     }

     .popup {
       z-index: 2;
       position: relative;
       width: 500px;
       height: 500px;
       -webkit-transform-style: preserve-3d;
               transform-style: preserve-3d;
     }
     .popup .popup__piece:nth-child(1) {
       height: 20.66667%;
       width: 15.66667%;
     }
     .popup .popup__piece:nth-child(1) .popup__piece-inner:nth-child(1) {
       -webkit-transform: translate3d(-46vw, -47vh, 148px) rotateX(384deg) rotateY(354deg);
               transform: translate3d(-46vw, -47vh, 148px) rotateX(384deg) rotateY(354deg);
       -webkit-clip-path: polygon(0 0, 0 100%, 37% 100%);
               clip-path: polygon(0 0, 0 100%, 37% 100%);
     }
     .popup .popup__piece:nth-child(1) .popup__piece-inner:nth-child(2) {
       -webkit-transform: translate3d(-2vw, -44vh, -613px) rotateX(259deg) rotateY(178deg);
               transform: translate3d(-2vw, -44vh, -613px) rotateX(259deg) rotateY(178deg);
       -webkit-clip-path: polygon(0 0, 37% 100%, 100% 0);
               clip-path: polygon(0 0, 37% 100%, 100% 0);
     }
     .popup .popup__piece:nth-child(1) .popup__piece-inner:nth-child(3) {
       -webkit-transform: translate3d(43vw, 43vh, -444px) rotateX(303deg) rotateY(360deg);
               transform: translate3d(43vw, 43vh, -444px) rotateX(303deg) rotateY(360deg);
       -webkit-clip-path: polygon(100% 0, 100% 100%, 37% 100%);
               clip-path: polygon(100% 0, 100% 100%, 37% 100%);
     }
     .popup.s--closed .popup__piece:nth-child(1) {
       -webkit-transform: translate3d(0, 117vh, 0);
               transform: translate3d(0, 117vh, 0);
     }
     .popup.s--closed .popup__piece:nth-child(1) .popup__piece-inner:nth-child(1) {
       -webkit-transform: translate3d(0vw, 0, 0) rotateX(131deg) rotateY(344deg);
               transform: translate3d(0vw, 0, 0) rotateX(131deg) rotateY(344deg);
     }
     .popup.s--closed .popup__piece:nth-child(1) .popup__piece-inner:nth-child(2) {
       -webkit-transform: translate3d(-67vw, 0, 0) rotateX(196deg) rotateY(271deg);
               transform: translate3d(-67vw, 0, 0) rotateX(196deg) rotateY(271deg);
     }
     .popup.s--closed .popup__piece:nth-child(1) .popup__piece-inner:nth-child(3) {
       -webkit-transform: translate3d(0vw, 0, 0) rotateX(427deg) rotateY(294deg);
               transform: translate3d(0vw, 0, 0) rotateX(427deg) rotateY(294deg);
     }
     .popup .popup__piece:nth-child(2) {
       height: 20.66667%;
       width: 19.66667%;
     }
     .popup .popup__piece:nth-child(2) .popup__piece-inner:nth-child(1) {
       -webkit-transform: translate3d(30vw, 9vh, -244px) rotateX(213deg) rotateY(171deg);
               transform: translate3d(30vw, 9vh, -244px) rotateX(213deg) rotateY(171deg);
       -webkit-clip-path: polygon(0 0, 0 100%, 45% 100%);
               clip-path: polygon(0 0, 0 100%, 45% 100%);
     }
     .popup .popup__piece:nth-child(2) .popup__piece-inner:nth-child(2) {
       -webkit-transform: translate3d(-10vw, -39vh, 403px) rotateX(127deg) rotateY(322deg);
               transform: translate3d(-10vw, -39vh, 403px) rotateX(127deg) rotateY(322deg);
       -webkit-clip-path: polygon(0 0, 45% 100%, 100% 0);
               clip-path: polygon(0 0, 45% 100%, 100% 0);
     }
     .popup .popup__piece:nth-child(2) .popup__piece-inner:nth-child(3) {
       -webkit-transform: translate3d(45vw, 48vh, 690px) rotateX(160deg) rotateY(443deg);
               transform: translate3d(45vw, 48vh, 690px) rotateX(160deg) rotateY(443deg);
       -webkit-clip-path: polygon(100% 0, 100% 100%, 45% 100%);
               clip-path: polygon(100% 0, 100% 100%, 45% 100%);
     }
     .popup.s--closed .popup__piece:nth-child(2) {
       -webkit-transform: translate3d(0, 120vh, 0);
               transform: translate3d(0, 120vh, 0);
     }
     .popup.s--closed .popup__piece:nth-child(2) .popup__piece-inner:nth-child(1) {
       -webkit-transform: translate3d(31vw, 0, 0) rotateX(325deg) rotateY(206deg);
               transform: translate3d(31vw, 0, 0) rotateX(325deg) rotateY(206deg);
     }
     .popup.s--closed .popup__piece:nth-child(2) .popup__piece-inner:nth-child(2) {
       -webkit-transform: translate3d(-69vw, 0, 0) rotateX(176deg) rotateY(445deg);
               transform: translate3d(-69vw, 0, 0) rotateX(176deg) rotateY(445deg);
     }
     .popup.s--closed .popup__piece:nth-child(2) .popup__piece-inner:nth-child(3) {
       -webkit-transform: translate3d(38vw, 0, 0) rotateX(468deg) rotateY(463deg);
               transform: translate3d(38vw, 0, 0) rotateX(468deg) rotateY(463deg);
     }
     .popup .popup__piece:nth-child(3) {
       height: 20.66667%;
       width: 13.66667%;
     }
     .popup .popup__piece:nth-child(3) .popup__piece-inner:nth-child(1) {
       -webkit-transform: translate3d(39vw, -43vh, 287px) rotateX(319deg) rotateY(183deg);
               transform: translate3d(39vw, -43vh, 287px) rotateX(319deg) rotateY(183deg);
       -webkit-clip-path: polygon(0 0, 0 100%, 62% 100%);
               clip-path: polygon(0 0, 0 100%, 62% 100%);
     }
     .popup .popup__piece:nth-child(3) .popup__piece-inner:nth-child(2) {
       -webkit-transform: translate3d(-40vw, -33vh, 721px) rotateX(174deg) rotateY(170deg);
               transform: translate3d(-40vw, -33vh, 721px) rotateX(174deg) rotateY(170deg);
       -webkit-clip-path: polygon(0 0, 62% 100%, 100% 0);
               clip-path: polygon(0 0, 62% 100%, 100% 0);
     }
     .popup .popup__piece:nth-child(3) .popup__piece-inner:nth-child(3) {
       -webkit-transform: translate3d(-23vw, -56vh, 50px) rotateX(164deg) rotateY(196deg);
               transform: translate3d(-23vw, -56vh, 50px) rotateX(164deg) rotateY(196deg);
       -webkit-clip-path: polygon(100% 0, 100% 100%, 62% 100%);
               clip-path: polygon(100% 0, 100% 100%, 62% 100%);
     }
     .popup.s--closed .popup__piece:nth-child(3) {
       -webkit-transform: translate3d(0, 110vh, 0);
               transform: translate3d(0, 110vh, 0);
     }
     .popup.s--closed .popup__piece:nth-child(3) .popup__piece-inner:nth-child(1) {
       -webkit-transform: translate3d(39vw, 0, 0) rotateX(189deg) rotateY(348deg);
               transform: translate3d(39vw, 0, 0) rotateX(189deg) rotateY(348deg);
     }
     .popup.s--closed .popup__piece:nth-child(3) .popup__piece-inner:nth-child(2) {
       -webkit-transform: translate3d(-62vw, 0, 0) rotateX(220deg) rotateY(428deg);
               transform: translate3d(-62vw, 0, 0) rotateX(220deg) rotateY(428deg);
     }
     .popup.s--closed .popup__piece:nth-child(3) .popup__piece-inner:nth-child(3) {
       -webkit-transform: translate3d(-11vw, 0, 0) rotateX(467deg) rotateY(442deg);
               transform: translate3d(-11vw, 0, 0) rotateX(467deg) rotateY(442deg);
     }
     .popup .popup__piece:nth-child(4) {
       height: 20.66667%;
       width: 16.66667%;
     }
     .popup .popup__piece:nth-child(4) .popup__piece-inner:nth-child(1) {
       -webkit-transform: translate3d(56vw, 11vh, 746px) rotateX(201deg) rotateY(138deg);
               transform: translate3d(56vw, 11vh, 746px) rotateX(201deg) rotateY(138deg);
       -webkit-clip-path: polygon(0 0, 0 100%, 35% 100%);
               clip-path: polygon(0 0, 0 100%, 35% 100%);
     }
     .popup .popup__piece:nth-child(4) .popup__piece-inner:nth-child(2) {
       -webkit-transform: translate3d(49vw, -27vh, 160px) rotateX(298deg) rotateY(460deg);
               transform: translate3d(49vw, -27vh, 160px) rotateX(298deg) rotateY(460deg);
       -webkit-clip-path: polygon(0 0, 35% 100%, 100% 0);
               clip-path: polygon(0 0, 35% 100%, 100% 0);
     }
     .popup .popup__piece:nth-child(4) .popup__piece-inner:nth-child(3) {
       -webkit-transform: translate3d(-47vw, -42vh, -325px) rotateX(381deg) rotateY(431deg);
               transform: translate3d(-47vw, -42vh, -325px) rotateX(381deg) rotateY(431deg);
       -webkit-clip-path: polygon(100% 0, 100% 100%, 35% 100%);
               clip-path: polygon(100% 0, 100% 100%, 35% 100%);
     }
     .popup.s--closed .popup__piece:nth-child(4) {
       -webkit-transform: translate3d(0, 145vh, 0);
               transform: translate3d(0, 145vh, 0);
     }
     .popup.s--closed .popup__piece:nth-child(4) .popup__piece-inner:nth-child(1) {
       -webkit-transform: translate3d(-76vw, 0, 0) rotateX(190deg) rotateY(212deg);
               transform: translate3d(-76vw, 0, 0) rotateX(190deg) rotateY(212deg);
     }
     .popup.s--closed .popup__piece:nth-child(4) .popup__piece-inner:nth-child(2) {
       -webkit-transform: translate3d(-79vw, 0, 0) rotateX(318deg) rotateY(263deg);
               transform: translate3d(-79vw, 0, 0) rotateX(318deg) rotateY(263deg);
     }
     .popup.s--closed .popup__piece:nth-child(4) .popup__piece-inner:nth-child(3) {
       -webkit-transform: translate3d(-56vw, 0, 0) rotateX(267deg) rotateY(315deg);
               transform: translate3d(-56vw, 0, 0) rotateX(267deg) rotateY(315deg);
     }
     .popup .popup__piece:nth-child(5) {
       height: 20.66667%;
       width: 19.66667%;
     }
     .popup .popup__piece:nth-child(5) .popup__piece-inner:nth-child(1) {
       -webkit-transform: translate3d(52vw, 31vh, -698px) rotateX(273deg) rotateY(414deg);
               transform: translate3d(52vw, 31vh, -698px) rotateX(273deg) rotateY(414deg);
       -webkit-clip-path: polygon(0 0, 0 100%, 49% 100%);
               clip-path: polygon(0 0, 0 100%, 49% 100%);
     }
     .popup .popup__piece:nth-child(5) .popup__piece-inner:nth-child(2) {
       -webkit-transform: translate3d(35vw, 5vh, -182px) rotateX(471deg) rotateY(380deg);
               transform: translate3d(35vw, 5vh, -182px) rotateX(471deg) rotateY(380deg);
       -webkit-clip-path: polygon(0 0, 49% 100%, 100% 0);
               clip-path: polygon(0 0, 49% 100%, 100% 0);
     }
     .popup .popup__piece:nth-child(5) .popup__piece-inner:nth-child(3) {
       -webkit-transform: translate3d(-48vw, -40vh, -737px) rotateX(280deg) rotateY(264deg);
               transform: translate3d(-48vw, -40vh, -737px) rotateX(280deg) rotateY(264deg);
       -webkit-clip-path: polygon(100% 0, 100% 100%, 49% 100%);
               clip-path: polygon(100% 0, 100% 100%, 49% 100%);
     }
     .popup.s--closed .popup__piece:nth-child(5) {
       -webkit-transform: translate3d(0, 113vh, 0);
               transform: translate3d(0, 113vh, 0);
     }
     .popup.s--closed .popup__piece:nth-child(5) .popup__piece-inner:nth-child(1) {
       -webkit-transform: translate3d(6vw, 0, 0) rotateX(382deg) rotateY(271deg);
               transform: translate3d(6vw, 0, 0) rotateX(382deg) rotateY(271deg);
     }
     .popup.s--closed .popup__piece:nth-child(5) .popup__piece-inner:nth-child(2) {
       -webkit-transform: translate3d(64vw, 0, 0) rotateX(433deg) rotateY(319deg);
               transform: translate3d(64vw, 0, 0) rotateX(433deg) rotateY(319deg);
     }
     .popup.s--closed .popup__piece:nth-child(5) .popup__piece-inner:nth-child(3) {
       -webkit-transform: translate3d(-11vw, 0, 0) rotateX(415deg) rotateY(386deg);
               transform: translate3d(-11vw, 0, 0) rotateX(415deg) rotateY(386deg);
     }
     .popup .popup__piece:nth-child(6) {
       height: 20.66667%;
       width: 14.66667%;
     }
     .popup .popup__piece:nth-child(6) .popup__piece-inner:nth-child(1) {
       -webkit-transform: translate3d(-24vw, -6vh, -509px) rotateX(423deg) rotateY(351deg);
               transform: translate3d(-24vw, -6vh, -509px) rotateX(423deg) rotateY(351deg);
       -webkit-clip-path: polygon(0 0, 0 100%, 47% 100%);
               clip-path: polygon(0 0, 0 100%, 47% 100%);
     }
     .popup .popup__piece:nth-child(6) .popup__piece-inner:nth-child(2) {
       -webkit-transform: translate3d(54vw, -9vh, -336px) rotateX(472deg) rotateY(131deg);
               transform: translate3d(54vw, -9vh, -336px) rotateX(472deg) rotateY(131deg);
       -webkit-clip-path: polygon(0 0, 47% 100%, 100% 0);
               clip-path: polygon(0 0, 47% 100%, 100% 0);
     }
     .popup .popup__piece:nth-child(6) .popup__piece-inner:nth-child(3) {
       -webkit-transform: translate3d(-10vw, -38vh, 663px) rotateX(457deg) rotateY(358deg);
               transform: translate3d(-10vw, -38vh, 663px) rotateX(457deg) rotateY(358deg);
       -webkit-clip-path: polygon(100% 0, 100% 100%, 47% 100%);
               clip-path: polygon(100% 0, 100% 100%, 47% 100%);
     }
     .popup.s--closed .popup__piece:nth-child(6) {
       -webkit-transform: translate3d(0, 140vh, 0);
               transform: translate3d(0, 140vh, 0);
     }
     .popup.s--closed .popup__piece:nth-child(6) .popup__piece-inner:nth-child(1) {
       -webkit-transform: translate3d(77vw, 0, 0) rotateX(476deg) rotateY(141deg);
               transform: translate3d(77vw, 0, 0) rotateX(476deg) rotateY(141deg);
     }
     .popup.s--closed .popup__piece:nth-child(6) .popup__piece-inner:nth-child(2) {
       -webkit-transform: translate3d(-55vw, 0, 0) rotateX(359deg) rotateY(413deg);
               transform: translate3d(-55vw, 0, 0) rotateX(359deg) rotateY(413deg);
     }
     .popup.s--closed .popup__piece:nth-child(6) .popup__piece-inner:nth-child(3) {
       -webkit-transform: translate3d(8vw, 0, 0) rotateX(335deg) rotateY(321deg);
               transform: translate3d(8vw, 0, 0) rotateX(335deg) rotateY(321deg);
     }
     .popup .popup__piece:nth-child(7) {
       height: 17.66667%;
       width: 14.66667%;
     }
     .popup .popup__piece:nth-child(7) .popup__piece-inner:nth-child(1) {
       -webkit-transform: translate3d(6vw, -42vh, 120px) rotateX(363deg) rotateY(337deg);
               transform: translate3d(6vw, -42vh, 120px) rotateX(363deg) rotateY(337deg);
       -webkit-clip-path: polygon(0 0, 0 100%, 42% 100%);
               clip-path: polygon(0 0, 0 100%, 42% 100%);
     }
     .popup .popup__piece:nth-child(7) .popup__piece-inner:nth-child(2) {
       -webkit-transform: translate3d(-47vw, 4vh, 196px) rotateX(428deg) rotateY(459deg);
               transform: translate3d(-47vw, 4vh, 196px) rotateX(428deg) rotateY(459deg);
       -webkit-clip-path: polygon(0 0, 42% 100%, 100% 0);
               clip-path: polygon(0 0, 42% 100%, 100% 0);
     }
     .popup .popup__piece:nth-child(7) .popup__piece-inner:nth-child(3) {
       -webkit-transform: translate3d(-59vw, -16vh, 217px) rotateX(271deg) rotateY(149deg);
               transform: translate3d(-59vw, -16vh, 217px) rotateX(271deg) rotateY(149deg);
       -webkit-clip-path: polygon(100% 0, 100% 100%, 42% 100%);
               clip-path: polygon(100% 0, 100% 100%, 42% 100%);
     }
     .popup.s--closed .popup__piece:nth-child(7) {
       -webkit-transform: translate3d(0, 108vh, 0);
               transform: translate3d(0, 108vh, 0);
     }
     .popup.s--closed .popup__piece:nth-child(7) .popup__piece-inner:nth-child(1) {
       -webkit-transform: translate3d(-7vw, 0, 0) rotateX(251deg) rotateY(274deg);
               transform: translate3d(-7vw, 0, 0) rotateX(251deg) rotateY(274deg);
     }
     .popup.s--closed .popup__piece:nth-child(7) .popup__piece-inner:nth-child(2) {
       -webkit-transform: translate3d(68vw, 0, 0) rotateX(388deg) rotateY(290deg);
               transform: translate3d(68vw, 0, 0) rotateX(388deg) rotateY(290deg);
     }
     .popup.s--closed .popup__piece:nth-child(7) .popup__piece-inner:nth-child(3) {
       -webkit-transform: translate3d(-46vw, 0, 0) rotateX(343deg) rotateY(293deg);
               transform: translate3d(-46vw, 0, 0) rotateX(343deg) rotateY(293deg);
     }
     .popup .popup__piece:nth-child(8) {
       height: 17.66667%;
       width: 17.66667%;
     }
     .popup .popup__piece:nth-child(8) .popup__piece-inner:nth-child(1) {
       -webkit-transform: translate3d(49vw, 53vh, -293px) rotateX(463deg) rotateY(409deg);
               transform: translate3d(49vw, 53vh, -293px) rotateX(463deg) rotateY(409deg);
       -webkit-clip-path: polygon(0 0, 0 100%, 45% 100%);
               clip-path: polygon(0 0, 0 100%, 45% 100%);
     }
     .popup .popup__piece:nth-child(8) .popup__piece-inner:nth-child(2) {
       -webkit-transform: translate3d(-7vw, 49vh, -638px) rotateX(219deg) rotateY(292deg);
               transform: translate3d(-7vw, 49vh, -638px) rotateX(219deg) rotateY(292deg);
       -webkit-clip-path: polygon(0 0, 45% 100%, 100% 0);
               clip-path: polygon(0 0, 45% 100%, 100% 0);
     }
     .popup .popup__piece:nth-child(8) .popup__piece-inner:nth-child(3) {
       -webkit-transform: translate3d(52vw, -29vh, 866px) rotateX(474deg) rotateY(260deg);
               transform: translate3d(52vw, -29vh, 866px) rotateX(474deg) rotateY(260deg);
       -webkit-clip-path: polygon(100% 0, 100% 100%, 45% 100%);
               clip-path: polygon(100% 0, 100% 100%, 45% 100%);
     }
     .popup.s--closed .popup__piece:nth-child(8) {
       -webkit-transform: translate3d(0, 135vh, 0);
               transform: translate3d(0, 135vh, 0);
     }
     .popup.s--closed .popup__piece:nth-child(8) .popup__piece-inner:nth-child(1) {
       -webkit-transform: translate3d(-23vw, 0, 0) rotateX(217deg) rotateY(287deg);
               transform: translate3d(-23vw, 0, 0) rotateX(217deg) rotateY(287deg);
     }
     .popup.s--closed .popup__piece:nth-child(8) .popup__piece-inner:nth-child(2) {
       -webkit-transform: translate3d(-56vw, 0, 0) rotateX(331deg) rotateY(306deg);
               transform: translate3d(-56vw, 0, 0) rotateX(331deg) rotateY(306deg);
     }
     .popup.s--closed .popup__piece:nth-child(8) .popup__piece-inner:nth-child(3) {
       -webkit-transform: translate3d(8vw, 0, 0) rotateX(122deg) rotateY(466deg);
               transform: translate3d(8vw, 0, 0) rotateX(122deg) rotateY(466deg);
     }
     .popup .popup__piece:nth-child(9) {
       height: 17.66667%;
       width: 13.66667%;
     }
     .popup .popup__piece:nth-child(9) .popup__piece-inner:nth-child(1) {
       -webkit-transform: translate3d(14vw, 27vh, -26px) rotateX(206deg) rotateY(285deg);
               transform: translate3d(14vw, 27vh, -26px) rotateX(206deg) rotateY(285deg);
       -webkit-clip-path: polygon(0 0, 0 100%, 55% 100%);
               clip-path: polygon(0 0, 0 100%, 55% 100%);
     }
     .popup .popup__piece:nth-child(9) .popup__piece-inner:nth-child(2) {
       -webkit-transform: translate3d(-40vw, -52vh, -348px) rotateX(463deg) rotateY(410deg);
               transform: translate3d(-40vw, -52vh, -348px) rotateX(463deg) rotateY(410deg);
       -webkit-clip-path: polygon(0 0, 55% 100%, 100% 0);
               clip-path: polygon(0 0, 55% 100%, 100% 0);
     }
     .popup .popup__piece:nth-child(9) .popup__piece-inner:nth-child(3) {
       -webkit-transform: translate3d(-38vw, -56vh, 820px) rotateX(191deg) rotateY(296deg);
               transform: translate3d(-38vw, -56vh, 820px) rotateX(191deg) rotateY(296deg);
       -webkit-clip-path: polygon(100% 0, 100% 100%, 55% 100%);
               clip-path: polygon(100% 0, 100% 100%, 55% 100%);
     }
     .popup.s--closed .popup__piece:nth-child(9) {
       -webkit-transform: translate3d(0, 120vh, 0);
               transform: translate3d(0, 120vh, 0);
     }
     .popup.s--closed .popup__piece:nth-child(9) .popup__piece-inner:nth-child(1) {
       -webkit-transform: translate3d(1vw, 0, 0) rotateX(289deg) rotateY(323deg);
               transform: translate3d(1vw, 0, 0) rotateX(289deg) rotateY(323deg);
     }
     .popup.s--closed .popup__piece:nth-child(9) .popup__piece-inner:nth-child(2) {
       -webkit-transform: translate3d(38vw, 0, 0) rotateX(205deg) rotateY(170deg);
               transform: translate3d(38vw, 0, 0) rotateX(205deg) rotateY(170deg);
     }
     .popup.s--closed .popup__piece:nth-child(9) .popup__piece-inner:nth-child(3) {
       -webkit-transform: translate3d(-21vw, 0, 0) rotateX(277deg) rotateY(320deg);
               transform: translate3d(-21vw, 0, 0) rotateX(277deg) rotateY(320deg);
     }
     .popup .popup__piece:nth-child(10) {
       height: 17.66667%;
       width: 15.66667%;
     }
     .popup .popup__piece:nth-child(10) .popup__piece-inner:nth-child(1) {
       -webkit-transform: translate3d(-19vw, -11vh, 482px) rotateX(123deg) rotateY(473deg);
               transform: translate3d(-19vw, -11vh, 482px) rotateX(123deg) rotateY(473deg);
       -webkit-clip-path: polygon(0 0, 0 100%, 40% 100%);
               clip-path: polygon(0 0, 0 100%, 40% 100%);
     }
     .popup .popup__piece:nth-child(10) .popup__piece-inner:nth-child(2) {
       -webkit-transform: translate3d(35vw, -26vh, 422px) rotateX(371deg) rotateY(399deg);
               transform: translate3d(35vw, -26vh, 422px) rotateX(371deg) rotateY(399deg);
       -webkit-clip-path: polygon(0 0, 40% 100%, 100% 0);
               clip-path: polygon(0 0, 40% 100%, 100% 0);
     }
     .popup .popup__piece:nth-child(10) .popup__piece-inner:nth-child(3) {
       -webkit-transform: translate3d(-17vw, 6vh, -90px) rotateX(333deg) rotateY(180deg);
               transform: translate3d(-17vw, 6vh, -90px) rotateX(333deg) rotateY(180deg);
       -webkit-clip-path: polygon(100% 0, 100% 100%, 40% 100%);
               clip-path: polygon(100% 0, 100% 100%, 40% 100%);
     }
     .popup.s--closed .popup__piece:nth-child(10) {
       -webkit-transform: translate3d(0, 106vh, 0);
               transform: translate3d(0, 106vh, 0);
     }
     .popup.s--closed .popup__piece:nth-child(10) .popup__piece-inner:nth-child(1) {
       -webkit-transform: translate3d(-4vw, 0, 0) rotateX(197deg) rotateY(335deg);
               transform: translate3d(-4vw, 0, 0) rotateX(197deg) rotateY(335deg);
     }
     .popup.s--closed .popup__piece:nth-child(10) .popup__piece-inner:nth-child(2) {
       -webkit-transform: translate3d(51vw, 0, 0) rotateX(450deg) rotateY(266deg);
               transform: translate3d(51vw, 0, 0) rotateX(450deg) rotateY(266deg);
     }
     .popup.s--closed .popup__piece:nth-child(10) .popup__piece-inner:nth-child(3) {
       -webkit-transform: translate3d(76vw, 0, 0) rotateX(130deg) rotateY(177deg);
               transform: translate3d(76vw, 0, 0) rotateX(130deg) rotateY(177deg);
     }
     .popup .popup__piece:nth-child(11) {
       height: 17.66667%;
       width: 22.66667%;
     }
     .popup .popup__piece:nth-child(11) .popup__piece-inner:nth-child(1) {
       -webkit-transform: translate3d(-53vw, 55vh, -787px) rotateX(174deg) rotateY(368deg);
               transform: translate3d(-53vw, 55vh, -787px) rotateX(174deg) rotateY(368deg);
       -webkit-clip-path: polygon(0 0, 0 100%, 48% 100%);
               clip-path: polygon(0 0, 0 100%, 48% 100%);
     }
     .popup .popup__piece:nth-child(11) .popup__piece-inner:nth-child(2) {
       -webkit-transform: translate3d(39vw, -30vh, -121px) rotateX(416deg) rotateY(258deg);
               transform: translate3d(39vw, -30vh, -121px) rotateX(416deg) rotateY(258deg);
       -webkit-clip-path: polygon(0 0, 48% 100%, 100% 0);
               clip-path: polygon(0 0, 48% 100%, 100% 0);
     }
     .popup .popup__piece:nth-child(11) .popup__piece-inner:nth-child(3) {
       -webkit-transform: translate3d(-47vw, 41vh, -537px) rotateX(326deg) rotateY(179deg);
               transform: translate3d(-47vw, 41vh, -537px) rotateX(326deg) rotateY(179deg);
       -webkit-clip-path: polygon(100% 0, 100% 100%, 48% 100%);
               clip-path: polygon(100% 0, 100% 100%, 48% 100%);
     }
     .popup.s--closed .popup__piece:nth-child(11) {
       -webkit-transform: translate3d(0, 146vh, 0);
               transform: translate3d(0, 146vh, 0);
     }
     .popup.s--closed .popup__piece:nth-child(11) .popup__piece-inner:nth-child(1) {
       -webkit-transform: translate3d(24vw, 0, 0) rotateX(397deg) rotateY(282deg);
               transform: translate3d(24vw, 0, 0) rotateX(397deg) rotateY(282deg);
     }
     .popup.s--closed .popup__piece:nth-child(11) .popup__piece-inner:nth-child(2) {
       -webkit-transform: translate3d(-78vw, 0, 0) rotateX(176deg) rotateY(236deg);
               transform: translate3d(-78vw, 0, 0) rotateX(176deg) rotateY(236deg);
     }
     .popup.s--closed .popup__piece:nth-child(11) .popup__piece-inner:nth-child(3) {
       -webkit-transform: translate3d(3vw, 0, 0) rotateX(172deg) rotateY(412deg);
               transform: translate3d(3vw, 0, 0) rotateX(172deg) rotateY(412deg);
     }
     .popup .popup__piece:nth-child(12) {
       height: 17.66667%;
       width: 15.66667%;
     }
     .popup .popup__piece:nth-child(12) .popup__piece-inner:nth-child(1) {
       -webkit-transform: translate3d(1vw, -10vh, -26px) rotateX(251deg) rotateY(156deg);
               transform: translate3d(1vw, -10vh, -26px) rotateX(251deg) rotateY(156deg);
       -webkit-clip-path: polygon(0 0, 0 100%, 61% 100%);
               clip-path: polygon(0 0, 0 100%, 61% 100%);
     }
     .popup .popup__piece:nth-child(12) .popup__piece-inner:nth-child(2) {
       -webkit-transform: translate3d(17vw, -25vh, -134px) rotateX(153deg) rotateY(215deg);
               transform: translate3d(17vw, -25vh, -134px) rotateX(153deg) rotateY(215deg);
       -webkit-clip-path: polygon(0 0, 61% 100%, 100% 0);
               clip-path: polygon(0 0, 61% 100%, 100% 0);
     }
     .popup .popup__piece:nth-child(12) .popup__piece-inner:nth-child(3) {
       -webkit-transform: translate3d(-6vw, -37vh, 186px) rotateX(469deg) rotateY(217deg);
               transform: translate3d(-6vw, -37vh, 186px) rotateX(469deg) rotateY(217deg);
       -webkit-clip-path: polygon(100% 0, 100% 100%, 61% 100%);
               clip-path: polygon(100% 0, 100% 100%, 61% 100%);
     }
     .popup.s--closed .popup__piece:nth-child(12) {
       -webkit-transform: translate3d(0, 104vh, 0);
               transform: translate3d(0, 104vh, 0);
     }
     .popup.s--closed .popup__piece:nth-child(12) .popup__piece-inner:nth-child(1) {
       -webkit-transform: translate3d(-20vw, 0, 0) rotateX(131deg) rotateY(180deg);
               transform: translate3d(-20vw, 0, 0) rotateX(131deg) rotateY(180deg);
     }
     .popup.s--closed .popup__piece:nth-child(12) .popup__piece-inner:nth-child(2) {
       -webkit-transform: translate3d(75vw, 0, 0) rotateX(320deg) rotateY(287deg);
               transform: translate3d(75vw, 0, 0) rotateX(320deg) rotateY(287deg);
     }
     .popup.s--closed .popup__piece:nth-child(12) .popup__piece-inner:nth-child(3) {
       -webkit-transform: translate3d(-12vw, 0, 0) rotateX(243deg) rotateY(202deg);
               transform: translate3d(-12vw, 0, 0) rotateX(243deg) rotateY(202deg);
     }
     .popup .popup__piece:nth-child(13) {
       height: 14.66667%;
       width: 14.66667%;
     }
     .popup .popup__piece:nth-child(13) .popup__piece-inner:nth-child(1) {
       -webkit-transform: translate3d(16vw, -16vh, 695px) rotateX(425deg) rotateY(253deg);
               transform: translate3d(16vw, -16vh, 695px) rotateX(425deg) rotateY(253deg);
       -webkit-clip-path: polygon(0 0, 0 100%, 33% 100%);
               clip-path: polygon(0 0, 0 100%, 33% 100%);
     }
     .popup .popup__piece:nth-child(13) .popup__piece-inner:nth-child(2) {
       -webkit-transform: translate3d(11vw, -57vh, -80px) rotateX(432deg) rotateY(422deg);
               transform: translate3d(11vw, -57vh, -80px) rotateX(432deg) rotateY(422deg);
       -webkit-clip-path: polygon(0 0, 33% 100%, 100% 0);
               clip-path: polygon(0 0, 33% 100%, 100% 0);
     }
     .popup .popup__piece:nth-child(13) .popup__piece-inner:nth-child(3) {
       -webkit-transform: translate3d(16vw, -43vh, -726px) rotateX(288deg) rotateY(357deg);
               transform: translate3d(16vw, -43vh, -726px) rotateX(288deg) rotateY(357deg);
       -webkit-clip-path: polygon(100% 0, 100% 100%, 33% 100%);
               clip-path: polygon(100% 0, 100% 100%, 33% 100%);
     }
     .popup.s--closed .popup__piece:nth-child(13) {
       -webkit-transform: translate3d(0, 112vh, 0);
               transform: translate3d(0, 112vh, 0);
     }
     .popup.s--closed .popup__piece:nth-child(13) .popup__piece-inner:nth-child(1) {
       -webkit-transform: translate3d(-66vw, 0, 0) rotateX(123deg) rotateY(387deg);
               transform: translate3d(-66vw, 0, 0) rotateX(123deg) rotateY(387deg);
     }
     .popup.s--closed .popup__piece:nth-child(13) .popup__piece-inner:nth-child(2) {
       -webkit-transform: translate3d(-25vw, 0, 0) rotateX(255deg) rotateY(132deg);
               transform: translate3d(-25vw, 0, 0) rotateX(255deg) rotateY(132deg);
     }
     .popup.s--closed .popup__piece:nth-child(13) .popup__piece-inner:nth-child(3) {
       -webkit-transform: translate3d(-24vw, 0, 0) rotateX(253deg) rotateY(295deg);
               transform: translate3d(-24vw, 0, 0) rotateX(253deg) rotateY(295deg);
     }
     .popup .popup__piece:nth-child(14) {
       height: 14.66667%;
       width: 21.66667%;
     }
     .popup .popup__piece:nth-child(14) .popup__piece-inner:nth-child(1) {
       -webkit-transform: translate3d(59vw, 55vh, -420px) rotateX(401deg) rotateY(283deg);
               transform: translate3d(59vw, 55vh, -420px) rotateX(401deg) rotateY(283deg);
       -webkit-clip-path: polygon(0 0, 0 100%, 38% 100%);
               clip-path: polygon(0 0, 0 100%, 38% 100%);
     }
     .popup .popup__piece:nth-child(14) .popup__piece-inner:nth-child(2) {
       -webkit-transform: translate3d(-20vw, 55vh, 57px) rotateX(274deg) rotateY(183deg);
               transform: translate3d(-20vw, 55vh, 57px) rotateX(274deg) rotateY(183deg);
       -webkit-clip-path: polygon(0 0, 38% 100%, 100% 0);
               clip-path: polygon(0 0, 38% 100%, 100% 0);
     }
     .popup .popup__piece:nth-child(14) .popup__piece-inner:nth-child(3) {
       -webkit-transform: translate3d(12vw, -23vh, 111px) rotateX(314deg) rotateY(388deg);
               transform: translate3d(12vw, -23vh, 111px) rotateX(314deg) rotateY(388deg);
       -webkit-clip-path: polygon(100% 0, 100% 100%, 38% 100%);
               clip-path: polygon(100% 0, 100% 100%, 38% 100%);
     }
     .popup.s--closed .popup__piece:nth-child(14) {
       -webkit-transform: translate3d(0, 134vh, 0);
               transform: translate3d(0, 134vh, 0);
     }
     .popup.s--closed .popup__piece:nth-child(14) .popup__piece-inner:nth-child(1) {
       -webkit-transform: translate3d(-9vw, 0, 0) rotateX(150deg) rotateY(480deg);
               transform: translate3d(-9vw, 0, 0) rotateX(150deg) rotateY(480deg);
     }
     .popup.s--closed .popup__piece:nth-child(14) .popup__piece-inner:nth-child(2) {
       -webkit-transform: translate3d(80vw, 0, 0) rotateX(329deg) rotateY(305deg);
               transform: translate3d(80vw, 0, 0) rotateX(329deg) rotateY(305deg);
     }
     .popup.s--closed .popup__piece:nth-child(14) .popup__piece-inner:nth-child(3) {
       -webkit-transform: translate3d(54vw, 0, 0) rotateX(267deg) rotateY(292deg);
               transform: translate3d(54vw, 0, 0) rotateX(267deg) rotateY(292deg);
     }
     .popup .popup__piece:nth-child(15) {
       height: 14.66667%;
       width: 12.66667%;
     }
     .popup .popup__piece:nth-child(15) .popup__piece-inner:nth-child(1) {
       -webkit-transform: translate3d(-33vw, -34vh, -316px) rotateX(404deg) rotateY(187deg);
               transform: translate3d(-33vw, -34vh, -316px) rotateX(404deg) rotateY(187deg);
       -webkit-clip-path: polygon(0 0, 0 100%, 55% 100%);
               clip-path: polygon(0 0, 0 100%, 55% 100%);
     }
     .popup .popup__piece:nth-child(15) .popup__piece-inner:nth-child(2) {
       -webkit-transform: translate3d(-41vw, -19vh, -97px) rotateX(242deg) rotateY(431deg);
               transform: translate3d(-41vw, -19vh, -97px) rotateX(242deg) rotateY(431deg);
       -webkit-clip-path: polygon(0 0, 55% 100%, 100% 0);
               clip-path: polygon(0 0, 55% 100%, 100% 0);
     }
     .popup .popup__piece:nth-child(15) .popup__piece-inner:nth-child(3) {
       -webkit-transform: translate3d(36vw, -18vh, -631px) rotateX(133deg) rotateY(227deg);
               transform: translate3d(36vw, -18vh, -631px) rotateX(133deg) rotateY(227deg);
       -webkit-clip-path: polygon(100% 0, 100% 100%, 55% 100%);
               clip-path: polygon(100% 0, 100% 100%, 55% 100%);
     }
     .popup.s--closed .popup__piece:nth-child(15) {
       -webkit-transform: translate3d(0, 132vh, 0);
               transform: translate3d(0, 132vh, 0);
     }
     .popup.s--closed .popup__piece:nth-child(15) .popup__piece-inner:nth-child(1) {
       -webkit-transform: translate3d(64vw, 0, 0) rotateX(226deg) rotateY(290deg);
               transform: translate3d(64vw, 0, 0) rotateX(226deg) rotateY(290deg);
     }
     .popup.s--closed .popup__piece:nth-child(15) .popup__piece-inner:nth-child(2) {
       -webkit-transform: translate3d(-42vw, 0, 0) rotateX(394deg) rotateY(206deg);
               transform: translate3d(-42vw, 0, 0) rotateX(394deg) rotateY(206deg);
     }
     .popup.s--closed .popup__piece:nth-child(15) .popup__piece-inner:nth-child(3) {
       -webkit-transform: translate3d(78vw, 0, 0) rotateX(442deg) rotateY(135deg);
               transform: translate3d(78vw, 0, 0) rotateX(442deg) rotateY(135deg);
     }
     .popup .popup__piece:nth-child(16) {
       height: 14.66667%;
       width: 21.66667%;
     }
     .popup .popup__piece:nth-child(16) .popup__piece-inner:nth-child(1) {
       -webkit-transform: translate3d(29vw, 56vh, -675px) rotateX(424deg) rotateY(312deg);
               transform: translate3d(29vw, 56vh, -675px) rotateX(424deg) rotateY(312deg);
       -webkit-clip-path: polygon(0 0, 0 100%, 64% 100%);
               clip-path: polygon(0 0, 0 100%, 64% 100%);
     }
     .popup .popup__piece:nth-child(16) .popup__piece-inner:nth-child(2) {
       -webkit-transform: translate3d(-39vw, 21vh, -850px) rotateX(131deg) rotateY(326deg);
               transform: translate3d(-39vw, 21vh, -850px) rotateX(131deg) rotateY(326deg);
       -webkit-clip-path: polygon(0 0, 64% 100%, 100% 0);
               clip-path: polygon(0 0, 64% 100%, 100% 0);
     }
     .popup .popup__piece:nth-child(16) .popup__piece-inner:nth-child(3) {
       -webkit-transform: translate3d(52vw, -24vh, -358px) rotateX(443deg) rotateY(124deg);
               transform: translate3d(52vw, -24vh, -358px) rotateX(443deg) rotateY(124deg);
       -webkit-clip-path: polygon(100% 0, 100% 100%, 64% 100%);
               clip-path: polygon(100% 0, 100% 100%, 64% 100%);
     }
     .popup.s--closed .popup__piece:nth-child(16) {
       -webkit-transform: translate3d(0, 128vh, 0);
               transform: translate3d(0, 128vh, 0);
     }
     .popup.s--closed .popup__piece:nth-child(16) .popup__piece-inner:nth-child(1) {
       -webkit-transform: translate3d(71vw, 0, 0) rotateX(367deg) rotateY(327deg);
               transform: translate3d(71vw, 0, 0) rotateX(367deg) rotateY(327deg);
     }
     .popup.s--closed .popup__piece:nth-child(16) .popup__piece-inner:nth-child(2) {
       -webkit-transform: translate3d(-79vw, 0, 0) rotateX(212deg) rotateY(240deg);
               transform: translate3d(-79vw, 0, 0) rotateX(212deg) rotateY(240deg);
     }
     .popup.s--closed .popup__piece:nth-child(16) .popup__piece-inner:nth-child(3) {
       -webkit-transform: translate3d(-35vw, 0, 0) rotateX(283deg) rotateY(244deg);
               transform: translate3d(-35vw, 0, 0) rotateX(283deg) rotateY(244deg);
     }
     .popup .popup__piece:nth-child(17) {
       height: 14.66667%;
       width: 10.66667%;
     }
     .popup .popup__piece:nth-child(17) .popup__piece-inner:nth-child(1) {
       -webkit-transform: translate3d(26vw, -45vh, 534px) rotateX(285deg) rotateY(228deg);
               transform: translate3d(26vw, -45vh, 534px) rotateX(285deg) rotateY(228deg);
       -webkit-clip-path: polygon(0 0, 0 100%, 70% 100%);
               clip-path: polygon(0 0, 0 100%, 70% 100%);
     }
     .popup .popup__piece:nth-child(17) .popup__piece-inner:nth-child(2) {
       -webkit-transform: translate3d(50vw, -1vh, -720px) rotateX(309deg) rotateY(393deg);
               transform: translate3d(50vw, -1vh, -720px) rotateX(309deg) rotateY(393deg);
       -webkit-clip-path: polygon(0 0, 70% 100%, 100% 0);
               clip-path: polygon(0 0, 70% 100%, 100% 0);
     }
     .popup .popup__piece:nth-child(17) .popup__piece-inner:nth-child(3) {
       -webkit-transform: translate3d(14vw, -20vh, 97px) rotateX(420deg) rotateY(423deg);
               transform: translate3d(14vw, -20vh, 97px) rotateX(420deg) rotateY(423deg);
       -webkit-clip-path: polygon(100% 0, 100% 100%, 70% 100%);
               clip-path: polygon(100% 0, 100% 100%, 70% 100%);
     }
     .popup.s--closed .popup__piece:nth-child(17) {
       -webkit-transform: translate3d(0, 144vh, 0);
               transform: translate3d(0, 144vh, 0);
     }
     .popup.s--closed .popup__piece:nth-child(17) .popup__piece-inner:nth-child(1) {
       -webkit-transform: translate3d(33vw, 0, 0) rotateX(130deg) rotateY(473deg);
               transform: translate3d(33vw, 0, 0) rotateX(130deg) rotateY(473deg);
     }
     .popup.s--closed .popup__piece:nth-child(17) .popup__piece-inner:nth-child(2) {
       -webkit-transform: translate3d(21vw, 0, 0) rotateX(288deg) rotateY(271deg);
               transform: translate3d(21vw, 0, 0) rotateX(288deg) rotateY(271deg);
     }
     .popup.s--closed .popup__piece:nth-child(17) .popup__piece-inner:nth-child(3) {
       -webkit-transform: translate3d(25vw, 0, 0) rotateX(479deg) rotateY(254deg);
               transform: translate3d(25vw, 0, 0) rotateX(479deg) rotateY(254deg);
     }
     .popup .popup__piece:nth-child(18) {
       height: 14.66667%;
       width: 18.66667%;
     }
     .popup .popup__piece:nth-child(18) .popup__piece-inner:nth-child(1) {
       -webkit-transform: translate3d(-22vw, 2vh, 503px) rotateX(420deg) rotateY(210deg);
               transform: translate3d(-22vw, 2vh, 503px) rotateX(420deg) rotateY(210deg);
       -webkit-clip-path: polygon(0 0, 0 100%, 38% 100%);
               clip-path: polygon(0 0, 0 100%, 38% 100%);
     }
     .popup .popup__piece:nth-child(18) .popup__piece-inner:nth-child(2) {
       -webkit-transform: translate3d(-23vw, 35vh, -262px) rotateX(397deg) rotateY(141deg);
               transform: translate3d(-23vw, 35vh, -262px) rotateX(397deg) rotateY(141deg);
       -webkit-clip-path: polygon(0 0, 38% 100%, 100% 0);
               clip-path: polygon(0 0, 38% 100%, 100% 0);
     }
     .popup .popup__piece:nth-child(18) .popup__piece-inner:nth-child(3) {
       -webkit-transform: translate3d(46vw, -38vh, -402px) rotateX(444deg) rotateY(395deg);
               transform: translate3d(46vw, -38vh, -402px) rotateX(444deg) rotateY(395deg);
       -webkit-clip-path: polygon(100% 0, 100% 100%, 38% 100%);
               clip-path: polygon(100% 0, 100% 100%, 38% 100%);
     }
     .popup.s--closed .popup__piece:nth-child(18) {
       -webkit-transform: translate3d(0, 114vh, 0);
               transform: translate3d(0, 114vh, 0);
     }
     .popup.s--closed .popup__piece:nth-child(18) .popup__piece-inner:nth-child(1) {
       -webkit-transform: translate3d(-67vw, 0, 0) rotateX(204deg) rotateY(204deg);
               transform: translate3d(-67vw, 0, 0) rotateX(204deg) rotateY(204deg);
     }
     .popup.s--closed .popup__piece:nth-child(18) .popup__piece-inner:nth-child(2) {
       -webkit-transform: translate3d(-59vw, 0, 0) rotateX(474deg) rotateY(152deg);
               transform: translate3d(-59vw, 0, 0) rotateX(474deg) rotateY(152deg);
     }
     .popup.s--closed .popup__piece:nth-child(18) .popup__piece-inner:nth-child(3) {
       -webkit-transform: translate3d(3vw, 0, 0) rotateX(424deg) rotateY(433deg);
               transform: translate3d(3vw, 0, 0) rotateX(424deg) rotateY(433deg);
     }
     .popup .popup__piece:nth-child(19) {
       height: 18.66667%;
       width: 19.66667%;
     }
     .popup .popup__piece:nth-child(19) .popup__piece-inner:nth-child(1) {
       -webkit-transform: translate3d(21vw, 54vh, 153px) rotateX(374deg) rotateY(257deg);
               transform: translate3d(21vw, 54vh, 153px) rotateX(374deg) rotateY(257deg);
       -webkit-clip-path: polygon(0 0, 0 100%, 56% 100%);
               clip-path: polygon(0 0, 0 100%, 56% 100%);
     }
     .popup .popup__piece:nth-child(19) .popup__piece-inner:nth-child(2) {
       -webkit-transform: translate3d(-50vw, 46vh, 446px) rotateX(254deg) rotateY(468deg);
               transform: translate3d(-50vw, 46vh, 446px) rotateX(254deg) rotateY(468deg);
       -webkit-clip-path: polygon(0 0, 56% 100%, 100% 0);
               clip-path: polygon(0 0, 56% 100%, 100% 0);
     }
     .popup .popup__piece:nth-child(19) .popup__piece-inner:nth-child(3) {
       -webkit-transform: translate3d(13vw, 3vh, -590px) rotateX(358deg) rotateY(315deg);
               transform: translate3d(13vw, 3vh, -590px) rotateX(358deg) rotateY(315deg);
       -webkit-clip-path: polygon(100% 0, 100% 100%, 56% 100%);
               clip-path: polygon(100% 0, 100% 100%, 56% 100%);
     }
     .popup.s--closed .popup__piece:nth-child(19) {
       -webkit-transform: translate3d(0, 138vh, 0);
               transform: translate3d(0, 138vh, 0);
     }
     .popup.s--closed .popup__piece:nth-child(19) .popup__piece-inner:nth-child(1) {
       -webkit-transform: translate3d(67vw, 0, 0) rotateX(414deg) rotateY(386deg);
               transform: translate3d(67vw, 0, 0) rotateX(414deg) rotateY(386deg);
     }
     .popup.s--closed .popup__piece:nth-child(19) .popup__piece-inner:nth-child(2) {
       -webkit-transform: translate3d(-40vw, 0, 0) rotateX(202deg) rotateY(461deg);
               transform: translate3d(-40vw, 0, 0) rotateX(202deg) rotateY(461deg);
     }
     .popup.s--closed .popup__piece:nth-child(19) .popup__piece-inner:nth-child(3) {
       -webkit-transform: translate3d(33vw, 0, 0) rotateX(156deg) rotateY(331deg);
               transform: translate3d(33vw, 0, 0) rotateX(156deg) rotateY(331deg);
     }
     .popup .popup__piece:nth-child(20) {
       height: 18.66667%;
       width: 17.66667%;
     }
     .popup .popup__piece:nth-child(20) .popup__piece-inner:nth-child(1) {
       -webkit-transform: translate3d(-22vw, 54vh, -166px) rotateX(242deg) rotateY(448deg);
               transform: translate3d(-22vw, 54vh, -166px) rotateX(242deg) rotateY(448deg);
       -webkit-clip-path: polygon(0 0, 0 100%, 59% 100%);
               clip-path: polygon(0 0, 0 100%, 59% 100%);
     }
     .popup .popup__piece:nth-child(20) .popup__piece-inner:nth-child(2) {
       -webkit-transform: translate3d(-13vw, 22vh, -761px) rotateX(292deg) rotateY(245deg);
               transform: translate3d(-13vw, 22vh, -761px) rotateX(292deg) rotateY(245deg);
       -webkit-clip-path: polygon(0 0, 59% 100%, 100% 0);
               clip-path: polygon(0 0, 59% 100%, 100% 0);
     }
     .popup .popup__piece:nth-child(20) .popup__piece-inner:nth-child(3) {
       -webkit-transform: translate3d(21vw, 36vh, -607px) rotateX(271deg) rotateY(471deg);
               transform: translate3d(21vw, 36vh, -607px) rotateX(271deg) rotateY(471deg);
       -webkit-clip-path: polygon(100% 0, 100% 100%, 59% 100%);
               clip-path: polygon(100% 0, 100% 100%, 59% 100%);
     }
     .popup.s--closed .popup__piece:nth-child(20) {
       -webkit-transform: translate3d(0, 149vh, 0);
               transform: translate3d(0, 149vh, 0);
     }
     .popup.s--closed .popup__piece:nth-child(20) .popup__piece-inner:nth-child(1) {
       -webkit-transform: translate3d(-32vw, 0, 0) rotateX(280deg) rotateY(398deg);
               transform: translate3d(-32vw, 0, 0) rotateX(280deg) rotateY(398deg);
     }
     .popup.s--closed .popup__piece:nth-child(20) .popup__piece-inner:nth-child(2) {
       -webkit-transform: translate3d(-1vw, 0, 0) rotateX(377deg) rotateY(122deg);
               transform: translate3d(-1vw, 0, 0) rotateX(377deg) rotateY(122deg);
     }
     .popup.s--closed .popup__piece:nth-child(20) .popup__piece-inner:nth-child(3) {
       -webkit-transform: translate3d(34vw, 0, 0) rotateX(401deg) rotateY(253deg);
               transform: translate3d(34vw, 0, 0) rotateX(401deg) rotateY(253deg);
     }
     .popup .popup__piece:nth-child(21) {
       height: 18.66667%;
       width: 21.66667%;
     }
     .popup .popup__piece:nth-child(21) .popup__piece-inner:nth-child(1) {
       -webkit-transform: translate3d(-25vw, -49vh, 883px) rotateX(405deg) rotateY(420deg);
               transform: translate3d(-25vw, -49vh, 883px) rotateX(405deg) rotateY(420deg);
       -webkit-clip-path: polygon(0 0, 0 100%, 40% 100%);
               clip-path: polygon(0 0, 0 100%, 40% 100%);
     }
     .popup .popup__piece:nth-child(21) .popup__piece-inner:nth-child(2) {
       -webkit-transform: translate3d(-42vw, 15vh, -437px) rotateX(152deg) rotateY(356deg);
               transform: translate3d(-42vw, 15vh, -437px) rotateX(152deg) rotateY(356deg);
       -webkit-clip-path: polygon(0 0, 40% 100%, 100% 0);
               clip-path: polygon(0 0, 40% 100%, 100% 0);
     }
     .popup .popup__piece:nth-child(21) .popup__piece-inner:nth-child(3) {
       -webkit-transform: translate3d(-48vw, 53vh, -313px) rotateX(368deg) rotateY(402deg);
               transform: translate3d(-48vw, 53vh, -313px) rotateX(368deg) rotateY(402deg);
       -webkit-clip-path: polygon(100% 0, 100% 100%, 40% 100%);
               clip-path: polygon(100% 0, 100% 100%, 40% 100%);
     }
     .popup.s--closed .popup__piece:nth-child(21) {
       -webkit-transform: translate3d(0, 112vh, 0);
               transform: translate3d(0, 112vh, 0);
     }
     .popup.s--closed .popup__piece:nth-child(21) .popup__piece-inner:nth-child(1) {
       -webkit-transform: translate3d(26vw, 0, 0) rotateX(316deg) rotateY(130deg);
               transform: translate3d(26vw, 0, 0) rotateX(316deg) rotateY(130deg);
     }
     .popup.s--closed .popup__piece:nth-child(21) .popup__piece-inner:nth-child(2) {
       -webkit-transform: translate3d(0vw, 0, 0) rotateX(318deg) rotateY(410deg);
               transform: translate3d(0vw, 0, 0) rotateX(318deg) rotateY(410deg);
     }
     .popup.s--closed .popup__piece:nth-child(21) .popup__piece-inner:nth-child(3) {
       -webkit-transform: translate3d(-58vw, 0, 0) rotateX(304deg) rotateY(424deg);
               transform: translate3d(-58vw, 0, 0) rotateX(304deg) rotateY(424deg);
     }
     .popup .popup__piece:nth-child(22) {
       height: 18.66667%;
       width: 12.66667%;
     }
     .popup .popup__piece:nth-child(22) .popup__piece-inner:nth-child(1) {
       -webkit-transform: translate3d(24vw, -2vh, -570px) rotateX(284deg) rotateY(358deg);
               transform: translate3d(24vw, -2vh, -570px) rotateX(284deg) rotateY(358deg);
       -webkit-clip-path: polygon(0 0, 0 100%, 39% 100%);
               clip-path: polygon(0 0, 0 100%, 39% 100%);
     }
     .popup .popup__piece:nth-child(22) .popup__piece-inner:nth-child(2) {
       -webkit-transform: translate3d(33vw, 59vh, 464px) rotateX(343deg) rotateY(156deg);
               transform: translate3d(33vw, 59vh, 464px) rotateX(343deg) rotateY(156deg);
       -webkit-clip-path: polygon(0 0, 39% 100%, 100% 0);
               clip-path: polygon(0 0, 39% 100%, 100% 0);
     }
     .popup .popup__piece:nth-child(22) .popup__piece-inner:nth-child(3) {
       -webkit-transform: translate3d(56vw, -52vh, -305px) rotateX(395deg) rotateY(232deg);
               transform: translate3d(56vw, -52vh, -305px) rotateX(395deg) rotateY(232deg);
       -webkit-clip-path: polygon(100% 0, 100% 100%, 39% 100%);
               clip-path: polygon(100% 0, 100% 100%, 39% 100%);
     }
     .popup.s--closed .popup__piece:nth-child(22) {
       -webkit-transform: translate3d(0, 142vh, 0);
               transform: translate3d(0, 142vh, 0);
     }
     .popup.s--closed .popup__piece:nth-child(22) .popup__piece-inner:nth-child(1) {
       -webkit-transform: translate3d(-34vw, 0, 0) rotateX(127deg) rotateY(227deg);
               transform: translate3d(-34vw, 0, 0) rotateX(127deg) rotateY(227deg);
     }
     .popup.s--closed .popup__piece:nth-child(22) .popup__piece-inner:nth-child(2) {
       -webkit-transform: translate3d(-76vw, 0, 0) rotateX(263deg) rotateY(420deg);
               transform: translate3d(-76vw, 0, 0) rotateX(263deg) rotateY(420deg);
     }
     .popup.s--closed .popup__piece:nth-child(22) .popup__piece-inner:nth-child(3) {
       -webkit-transform: translate3d(52vw, 0, 0) rotateX(375deg) rotateY(463deg);
               transform: translate3d(52vw, 0, 0) rotateX(375deg) rotateY(463deg);
     }
     .popup .popup__piece:nth-child(23) {
       height: 18.66667%;
       width: 11.66667%;
     }
     .popup .popup__piece:nth-child(23) .popup__piece-inner:nth-child(1) {
       -webkit-transform: translate3d(-39vw, -15vh, -541px) rotateX(224deg) rotateY(358deg);
               transform: translate3d(-39vw, -15vh, -541px) rotateX(224deg) rotateY(358deg);
       -webkit-clip-path: polygon(0 0, 0 100%, 51% 100%);
               clip-path: polygon(0 0, 0 100%, 51% 100%);
     }
     .popup .popup__piece:nth-child(23) .popup__piece-inner:nth-child(2) {
       -webkit-transform: translate3d(-42vw, 17vh, 401px) rotateX(165deg) rotateY(212deg);
               transform: translate3d(-42vw, 17vh, 401px) rotateX(165deg) rotateY(212deg);
       -webkit-clip-path: polygon(0 0, 51% 100%, 100% 0);
               clip-path: polygon(0 0, 51% 100%, 100% 0);
     }
     .popup .popup__piece:nth-child(23) .popup__piece-inner:nth-child(3) {
       -webkit-transform: translate3d(-33vw, -2vh, 589px) rotateX(419deg) rotateY(137deg);
               transform: translate3d(-33vw, -2vh, 589px) rotateX(419deg) rotateY(137deg);
       -webkit-clip-path: polygon(100% 0, 100% 100%, 51% 100%);
               clip-path: polygon(100% 0, 100% 100%, 51% 100%);
     }
     .popup.s--closed .popup__piece:nth-child(23) {
       -webkit-transform: translate3d(0, 137vh, 0);
               transform: translate3d(0, 137vh, 0);
     }
     .popup.s--closed .popup__piece:nth-child(23) .popup__piece-inner:nth-child(1) {
       -webkit-transform: translate3d(-67vw, 0, 0) rotateX(214deg) rotateY(381deg);
               transform: translate3d(-67vw, 0, 0) rotateX(214deg) rotateY(381deg);
     }
     .popup.s--closed .popup__piece:nth-child(23) .popup__piece-inner:nth-child(2) {
       -webkit-transform: translate3d(-45vw, 0, 0) rotateX(445deg) rotateY(314deg);
               transform: translate3d(-45vw, 0, 0) rotateX(445deg) rotateY(314deg);
     }
     .popup.s--closed .popup__piece:nth-child(23) .popup__piece-inner:nth-child(3) {
       -webkit-transform: translate3d(27vw, 0, 0) rotateX(405deg) rotateY(437deg);
               transform: translate3d(27vw, 0, 0) rotateX(405deg) rotateY(437deg);
     }
     .popup .popup__piece:nth-child(24) {
       height: 18.66667%;
       width: 16.66667%;
     }
     .popup .popup__piece:nth-child(24) .popup__piece-inner:nth-child(1) {
       -webkit-transform: translate3d(-47vw, 52vh, 828px) rotateX(410deg) rotateY(451deg);
               transform: translate3d(-47vw, 52vh, 828px) rotateX(410deg) rotateY(451deg);
       -webkit-clip-path: polygon(0 0, 0 100%, 64% 100%);
               clip-path: polygon(0 0, 0 100%, 64% 100%);
     }
     .popup .popup__piece:nth-child(24) .popup__piece-inner:nth-child(2) {
       -webkit-transform: translate3d(50vw, 24vh, -667px) rotateX(204deg) rotateY(393deg);
               transform: translate3d(50vw, 24vh, -667px) rotateX(204deg) rotateY(393deg);
       -webkit-clip-path: polygon(0 0, 64% 100%, 100% 0);
               clip-path: polygon(0 0, 64% 100%, 100% 0);
     }
     .popup .popup__piece:nth-child(24) .popup__piece-inner:nth-child(3) {
       -webkit-transform: translate3d(10vw, -59vh, 215px) rotateX(141deg) rotateY(472deg);
               transform: translate3d(10vw, -59vh, 215px) rotateX(141deg) rotateY(472deg);
       -webkit-clip-path: polygon(100% 0, 100% 100%, 64% 100%);
               clip-path: polygon(100% 0, 100% 100%, 64% 100%);
     }
     .popup.s--closed .popup__piece:nth-child(24) {
       -webkit-transform: translate3d(0, 107vh, 0);
               transform: translate3d(0, 107vh, 0);
     }
     .popup.s--closed .popup__piece:nth-child(24) .popup__piece-inner:nth-child(1) {
       -webkit-transform: translate3d(71vw, 0, 0) rotateX(141deg) rotateY(406deg);
               transform: translate3d(71vw, 0, 0) rotateX(141deg) rotateY(406deg);
     }
     .popup.s--closed .popup__piece:nth-child(24) .popup__piece-inner:nth-child(2) {
       -webkit-transform: translate3d(54vw, 0, 0) rotateX(402deg) rotateY(280deg);
               transform: translate3d(54vw, 0, 0) rotateX(402deg) rotateY(280deg);
     }
     .popup.s--closed .popup__piece:nth-child(24) .popup__piece-inner:nth-child(3) {
       -webkit-transform: translate3d(11vw, 0, 0) rotateX(200deg) rotateY(376deg);
               transform: translate3d(11vw, 0, 0) rotateX(200deg) rotateY(376deg);
     }
     .popup .popup__piece:nth-child(25) {
       height: 15.66667%;
       width: 21.66667%;
     }
     .popup .popup__piece:nth-child(25) .popup__piece-inner:nth-child(1) {
       -webkit-transform: translate3d(16vw, -5vh, 506px) rotateX(200deg) rotateY(192deg);
               transform: translate3d(16vw, -5vh, 506px) rotateX(200deg) rotateY(192deg);
       -webkit-clip-path: polygon(0 0, 0 100%, 35% 100%);
               clip-path: polygon(0 0, 0 100%, 35% 100%);
     }
     .popup .popup__piece:nth-child(25) .popup__piece-inner:nth-child(2) {
       -webkit-transform: translate3d(-10vw, -50vh, 524px) rotateX(145deg) rotateY(136deg);
               transform: translate3d(-10vw, -50vh, 524px) rotateX(145deg) rotateY(136deg);
       -webkit-clip-path: polygon(0 0, 35% 100%, 100% 0);
               clip-path: polygon(0 0, 35% 100%, 100% 0);
     }
     .popup .popup__piece:nth-child(25) .popup__piece-inner:nth-child(3) {
       -webkit-transform: translate3d(33vw, -24vh, 315px) rotateX(231deg) rotateY(388deg);
               transform: translate3d(33vw, -24vh, 315px) rotateX(231deg) rotateY(388deg);
       -webkit-clip-path: polygon(100% 0, 100% 100%, 35% 100%);
               clip-path: polygon(100% 0, 100% 100%, 35% 100%);
     }
     .popup.s--closed .popup__piece:nth-child(25) {
       -webkit-transform: translate3d(0, 137vh, 0);
               transform: translate3d(0, 137vh, 0);
     }
     .popup.s--closed .popup__piece:nth-child(25) .popup__piece-inner:nth-child(1) {
       -webkit-transform: translate3d(-58vw, 0, 0) rotateX(479deg) rotateY(241deg);
               transform: translate3d(-58vw, 0, 0) rotateX(479deg) rotateY(241deg);
     }
     .popup.s--closed .popup__piece:nth-child(25) .popup__piece-inner:nth-child(2) {
       -webkit-transform: translate3d(-74vw, 0, 0) rotateX(379deg) rotateY(150deg);
               transform: translate3d(-74vw, 0, 0) rotateX(379deg) rotateY(150deg);
     }
     .popup.s--closed .popup__piece:nth-child(25) .popup__piece-inner:nth-child(3) {
       -webkit-transform: translate3d(-36vw, 0, 0) rotateX(217deg) rotateY(309deg);
               transform: translate3d(-36vw, 0, 0) rotateX(217deg) rotateY(309deg);
     }
     .popup .popup__piece:nth-child(26) {
       height: 15.66667%;
       width: 13.66667%;
     }
     .popup .popup__piece:nth-child(26) .popup__piece-inner:nth-child(1) {
       -webkit-transform: translate3d(41vw, 0vh, -494px) rotateX(282deg) rotateY(158deg);
               transform: translate3d(41vw, 0vh, -494px) rotateX(282deg) rotateY(158deg);
       -webkit-clip-path: polygon(0 0, 0 100%, 37% 100%);
               clip-path: polygon(0 0, 0 100%, 37% 100%);
     }
     .popup .popup__piece:nth-child(26) .popup__piece-inner:nth-child(2) {
       -webkit-transform: translate3d(-16vw, 10vh, -707px) rotateX(160deg) rotateY(338deg);
               transform: translate3d(-16vw, 10vh, -707px) rotateX(160deg) rotateY(338deg);
       -webkit-clip-path: polygon(0 0, 37% 100%, 100% 0);
               clip-path: polygon(0 0, 37% 100%, 100% 0);
     }
     .popup .popup__piece:nth-child(26) .popup__piece-inner:nth-child(3) {
       -webkit-transform: translate3d(1vw, -16vh, -241px) rotateX(321deg) rotateY(342deg);
               transform: translate3d(1vw, -16vh, -241px) rotateX(321deg) rotateY(342deg);
       -webkit-clip-path: polygon(100% 0, 100% 100%, 37% 100%);
               clip-path: polygon(100% 0, 100% 100%, 37% 100%);
     }
     .popup.s--closed .popup__piece:nth-child(26) {
       -webkit-transform: translate3d(0, 121vh, 0);
               transform: translate3d(0, 121vh, 0);
     }
     .popup.s--closed .popup__piece:nth-child(26) .popup__piece-inner:nth-child(1) {
       -webkit-transform: translate3d(70vw, 0, 0) rotateX(298deg) rotateY(190deg);
               transform: translate3d(70vw, 0, 0) rotateX(298deg) rotateY(190deg);
     }
     .popup.s--closed .popup__piece:nth-child(26) .popup__piece-inner:nth-child(2) {
       -webkit-transform: translate3d(48vw, 0, 0) rotateX(463deg) rotateY(323deg);
               transform: translate3d(48vw, 0, 0) rotateX(463deg) rotateY(323deg);
     }
     .popup.s--closed .popup__piece:nth-child(26) .popup__piece-inner:nth-child(3) {
       -webkit-transform: translate3d(-13vw, 0, 0) rotateX(319deg) rotateY(183deg);
               transform: translate3d(-13vw, 0, 0) rotateX(319deg) rotateY(183deg);
     }
     .popup .popup__piece:nth-child(27) {
       height: 15.66667%;
       width: 14.66667%;
     }
     .popup .popup__piece:nth-child(27) .popup__piece-inner:nth-child(1) {
       -webkit-transform: translate3d(-48vw, 52vh, -326px) rotateX(341deg) rotateY(147deg);
               transform: translate3d(-48vw, 52vh, -326px) rotateX(341deg) rotateY(147deg);
       -webkit-clip-path: polygon(0 0, 0 100%, 43% 100%);
               clip-path: polygon(0 0, 0 100%, 43% 100%);
     }
     .popup .popup__piece:nth-child(27) .popup__piece-inner:nth-child(2) {
       -webkit-transform: translate3d(-21vw, 21vh, -464px) rotateX(278deg) rotateY(324deg);
               transform: translate3d(-21vw, 21vh, -464px) rotateX(278deg) rotateY(324deg);
       -webkit-clip-path: polygon(0 0, 43% 100%, 100% 0);
               clip-path: polygon(0 0, 43% 100%, 100% 0);
     }
     .popup .popup__piece:nth-child(27) .popup__piece-inner:nth-child(3) {
       -webkit-transform: translate3d(59vw, 36vh, 409px) rotateX(458deg) rotateY(347deg);
               transform: translate3d(59vw, 36vh, 409px) rotateX(458deg) rotateY(347deg);
       -webkit-clip-path: polygon(100% 0, 100% 100%, 43% 100%);
               clip-path: polygon(100% 0, 100% 100%, 43% 100%);
     }
     .popup.s--closed .popup__piece:nth-child(27) {
       -webkit-transform: translate3d(0, 132vh, 0);
               transform: translate3d(0, 132vh, 0);
     }
     .popup.s--closed .popup__piece:nth-child(27) .popup__piece-inner:nth-child(1) {
       -webkit-transform: translate3d(54vw, 0, 0) rotateX(296deg) rotateY(206deg);
               transform: translate3d(54vw, 0, 0) rotateX(296deg) rotateY(206deg);
     }
     .popup.s--closed .popup__piece:nth-child(27) .popup__piece-inner:nth-child(2) {
       -webkit-transform: translate3d(57vw, 0, 0) rotateX(332deg) rotateY(422deg);
               transform: translate3d(57vw, 0, 0) rotateX(332deg) rotateY(422deg);
     }
     .popup.s--closed .popup__piece:nth-child(27) .popup__piece-inner:nth-child(3) {
       -webkit-transform: translate3d(-28vw, 0, 0) rotateX(128deg) rotateY(273deg);
               transform: translate3d(-28vw, 0, 0) rotateX(128deg) rotateY(273deg);
     }
     .popup .popup__piece:nth-child(28) {
       height: 15.66667%;
       width: 14.66667%;
     }
     .popup .popup__piece:nth-child(28) .popup__piece-inner:nth-child(1) {
       -webkit-transform: translate3d(34vw, -7vh, 684px) rotateX(148deg) rotateY(248deg);
               transform: translate3d(34vw, -7vh, 684px) rotateX(148deg) rotateY(248deg);
       -webkit-clip-path: polygon(0 0, 0 100%, 65% 100%);
               clip-path: polygon(0 0, 0 100%, 65% 100%);
     }
     .popup .popup__piece:nth-child(28) .popup__piece-inner:nth-child(2) {
       -webkit-transform: translate3d(46vw, -19vh, -234px) rotateX(460deg) rotateY(402deg);
               transform: translate3d(46vw, -19vh, -234px) rotateX(460deg) rotateY(402deg);
       -webkit-clip-path: polygon(0 0, 65% 100%, 100% 0);
               clip-path: polygon(0 0, 65% 100%, 100% 0);
     }
     .popup .popup__piece:nth-child(28) .popup__piece-inner:nth-child(3) {
       -webkit-transform: translate3d(6vw, 15vh, -509px) rotateX(131deg) rotateY(153deg);
               transform: translate3d(6vw, 15vh, -509px) rotateX(131deg) rotateY(153deg);
       -webkit-clip-path: polygon(100% 0, 100% 100%, 65% 100%);
               clip-path: polygon(100% 0, 100% 100%, 65% 100%);
     }
     .popup.s--closed .popup__piece:nth-child(28) {
       -webkit-transform: translate3d(0, 141vh, 0);
               transform: translate3d(0, 141vh, 0);
     }
     .popup.s--closed .popup__piece:nth-child(28) .popup__piece-inner:nth-child(1) {
       -webkit-transform: translate3d(-12vw, 0, 0) rotateX(176deg) rotateY(250deg);
               transform: translate3d(-12vw, 0, 0) rotateX(176deg) rotateY(250deg);
     }
     .popup.s--closed .popup__piece:nth-child(28) .popup__piece-inner:nth-child(2) {
       -webkit-transform: translate3d(-3vw, 0, 0) rotateX(189deg) rotateY(384deg);
               transform: translate3d(-3vw, 0, 0) rotateX(189deg) rotateY(384deg);
     }
     .popup.s--closed .popup__piece:nth-child(28) .popup__piece-inner:nth-child(3) {
       -webkit-transform: translate3d(-14vw, 0, 0) rotateX(474deg) rotateY(253deg);
               transform: translate3d(-14vw, 0, 0) rotateX(474deg) rotateY(253deg);
     }
     .popup .popup__piece:nth-child(29) {
       height: 15.66667%;
       width: 14.66667%;
     }
     .popup .popup__piece:nth-child(29) .popup__piece-inner:nth-child(1) {
       -webkit-transform: translate3d(-55vw, -46vh, -548px) rotateX(204deg) rotateY(404deg);
               transform: translate3d(-55vw, -46vh, -548px) rotateX(204deg) rotateY(404deg);
       -webkit-clip-path: polygon(0 0, 0 100%, 38% 100%);
               clip-path: polygon(0 0, 0 100%, 38% 100%);
     }
     .popup .popup__piece:nth-child(29) .popup__piece-inner:nth-child(2) {
       -webkit-transform: translate3d(-46vw, 29vh, -399px) rotateX(418deg) rotateY(339deg);
               transform: translate3d(-46vw, 29vh, -399px) rotateX(418deg) rotateY(339deg);
       -webkit-clip-path: polygon(0 0, 38% 100%, 100% 0);
               clip-path: polygon(0 0, 38% 100%, 100% 0);
     }
     .popup .popup__piece:nth-child(29) .popup__piece-inner:nth-child(3) {
       -webkit-transform: translate3d(58vw, -30vh, 355px) rotateX(465deg) rotateY(138deg);
               transform: translate3d(58vw, -30vh, 355px) rotateX(465deg) rotateY(138deg);
       -webkit-clip-path: polygon(100% 0, 100% 100%, 38% 100%);
               clip-path: polygon(100% 0, 100% 100%, 38% 100%);
     }
     .popup.s--closed .popup__piece:nth-child(29) {
       -webkit-transform: translate3d(0, 114vh, 0);
               transform: translate3d(0, 114vh, 0);
     }
     .popup.s--closed .popup__piece:nth-child(29) .popup__piece-inner:nth-child(1) {
       -webkit-transform: translate3d(29vw, 0, 0) rotateX(199deg) rotateY(245deg);
               transform: translate3d(29vw, 0, 0) rotateX(199deg) rotateY(245deg);
     }
     .popup.s--closed .popup__piece:nth-child(29) .popup__piece-inner:nth-child(2) {
       -webkit-transform: translate3d(-45vw, 0, 0) rotateX(184deg) rotateY(370deg);
               transform: translate3d(-45vw, 0, 0) rotateX(184deg) rotateY(370deg);
     }
     .popup.s--closed .popup__piece:nth-child(29) .popup__piece-inner:nth-child(3) {
       -webkit-transform: translate3d(-28vw, 0, 0) rotateX(472deg) rotateY(423deg);
               transform: translate3d(-28vw, 0, 0) rotateX(472deg) rotateY(423deg);
     }
     .popup .popup__piece:nth-child(30) {
       height: 15.66667%;
       width: 20.66667%;
     }
     .popup .popup__piece:nth-child(30) .popup__piece-inner:nth-child(1) {
       -webkit-transform: translate3d(-41vw, 16vh, -135px) rotateX(264deg) rotateY(419deg);
               transform: translate3d(-41vw, 16vh, -135px) rotateX(264deg) rotateY(419deg);
       -webkit-clip-path: polygon(0 0, 0 100%, 47% 100%);
               clip-path: polygon(0 0, 0 100%, 47% 100%);
     }
     .popup .popup__piece:nth-child(30) .popup__piece-inner:nth-child(2) {
       -webkit-transform: translate3d(-59vw, 58vh, -197px) rotateX(172deg) rotateY(397deg);
               transform: translate3d(-59vw, 58vh, -197px) rotateX(172deg) rotateY(397deg);
       -webkit-clip-path: polygon(0 0, 47% 100%, 100% 0);
               clip-path: polygon(0 0, 47% 100%, 100% 0);
     }
     .popup .popup__piece:nth-child(30) .popup__piece-inner:nth-child(3) {
       -webkit-transform: translate3d(0vw, 53vh, -175px) rotateX(425deg) rotateY(273deg);
               transform: translate3d(0vw, 53vh, -175px) rotateX(425deg) rotateY(273deg);
       -webkit-clip-path: polygon(100% 0, 100% 100%, 47% 100%);
               clip-path: polygon(100% 0, 100% 100%, 47% 100%);
     }
     .popup.s--closed .popup__piece:nth-child(30) {
       -webkit-transform: translate3d(0, 141vh, 0);
               transform: translate3d(0, 141vh, 0);
     }
     .popup.s--closed .popup__piece:nth-child(30) .popup__piece-inner:nth-child(1) {
       -webkit-transform: translate3d(-77vw, 0, 0) rotateX(280deg) rotateY(469deg);
               transform: translate3d(-77vw, 0, 0) rotateX(280deg) rotateY(469deg);
     }
     .popup.s--closed .popup__piece:nth-child(30) .popup__piece-inner:nth-child(2) {
       -webkit-transform: translate3d(-78vw, 0, 0) rotateX(181deg) rotateY(290deg);
               transform: translate3d(-78vw, 0, 0) rotateX(181deg) rotateY(290deg);
     }
     .popup.s--closed .popup__piece:nth-child(30) .popup__piece-inner:nth-child(3) {
       -webkit-transform: translate3d(30vw, 0, 0) rotateX(146deg) rotateY(465deg);
               transform: translate3d(30vw, 0, 0) rotateX(146deg) rotateY(465deg);
     }
     .popup .popup__piece:nth-child(31) {
       height: 12.66667%;
       width: 18.66667%;
     }
     .popup .popup__piece:nth-child(31) .popup__piece-inner:nth-child(1) {
       -webkit-transform: translate3d(-23vw, 53vh, -457px) rotateX(378deg) rotateY(398deg);
               transform: translate3d(-23vw, 53vh, -457px) rotateX(378deg) rotateY(398deg);
       -webkit-clip-path: polygon(0 0, 0 100%, 51% 100%);
               clip-path: polygon(0 0, 0 100%, 51% 100%);
     }
     .popup .popup__piece:nth-child(31) .popup__piece-inner:nth-child(2) {
       -webkit-transform: translate3d(26vw, -53vh, -262px) rotateX(273deg) rotateY(427deg);
               transform: translate3d(26vw, -53vh, -262px) rotateX(273deg) rotateY(427deg);
       -webkit-clip-path: polygon(0 0, 51% 100%, 100% 0);
               clip-path: polygon(0 0, 51% 100%, 100% 0);
     }
     .popup .popup__piece:nth-child(31) .popup__piece-inner:nth-child(3) {
       -webkit-transform: translate3d(7vw, 38vh, 262px) rotateX(392deg) rotateY(282deg);
               transform: translate3d(7vw, 38vh, 262px) rotateX(392deg) rotateY(282deg);
       -webkit-clip-path: polygon(100% 0, 100% 100%, 51% 100%);
               clip-path: polygon(100% 0, 100% 100%, 51% 100%);
     }
     .popup.s--closed .popup__piece:nth-child(31) {
       -webkit-transform: translate3d(0, 149vh, 0);
               transform: translate3d(0, 149vh, 0);
     }
     .popup.s--closed .popup__piece:nth-child(31) .popup__piece-inner:nth-child(1) {
       -webkit-transform: translate3d(3vw, 0, 0) rotateX(461deg) rotateY(184deg);
               transform: translate3d(3vw, 0, 0) rotateX(461deg) rotateY(184deg);
     }
     .popup.s--closed .popup__piece:nth-child(31) .popup__piece-inner:nth-child(2) {
       -webkit-transform: translate3d(-40vw, 0, 0) rotateX(418deg) rotateY(160deg);
               transform: translate3d(-40vw, 0, 0) rotateX(418deg) rotateY(160deg);
     }
     .popup.s--closed .popup__piece:nth-child(31) .popup__piece-inner:nth-child(3) {
       -webkit-transform: translate3d(46vw, 0, 0) rotateX(323deg) rotateY(155deg);
               transform: translate3d(46vw, 0, 0) rotateX(323deg) rotateY(155deg);
     }
     .popup .popup__piece:nth-child(32) {
       height: 12.66667%;
       width: 19.66667%;
     }
     .popup .popup__piece:nth-child(32) .popup__piece-inner:nth-child(1) {
       -webkit-transform: translate3d(16vw, -34vh, -878px) rotateX(123deg) rotateY(185deg);
               transform: translate3d(16vw, -34vh, -878px) rotateX(123deg) rotateY(185deg);
       -webkit-clip-path: polygon(0 0, 0 100%, 31% 100%);
               clip-path: polygon(0 0, 0 100%, 31% 100%);
     }
     .popup .popup__piece:nth-child(32) .popup__piece-inner:nth-child(2) {
       -webkit-transform: translate3d(2vw, -24vh, 591px) rotateX(219deg) rotateY(192deg);
               transform: translate3d(2vw, -24vh, 591px) rotateX(219deg) rotateY(192deg);
       -webkit-clip-path: polygon(0 0, 31% 100%, 100% 0);
               clip-path: polygon(0 0, 31% 100%, 100% 0);
     }
     .popup .popup__piece:nth-child(32) .popup__piece-inner:nth-child(3) {
       -webkit-transform: translate3d(-8vw, 9vh, -678px) rotateX(414deg) rotateY(224deg);
               transform: translate3d(-8vw, 9vh, -678px) rotateX(414deg) rotateY(224deg);
       -webkit-clip-path: polygon(100% 0, 100% 100%, 31% 100%);
               clip-path: polygon(100% 0, 100% 100%, 31% 100%);
     }
     .popup.s--closed .popup__piece:nth-child(32) {
       -webkit-transform: translate3d(0, 107vh, 0);
               transform: translate3d(0, 107vh, 0);
     }
     .popup.s--closed .popup__piece:nth-child(32) .popup__piece-inner:nth-child(1) {
       -webkit-transform: translate3d(27vw, 0, 0) rotateX(325deg) rotateY(355deg);
               transform: translate3d(27vw, 0, 0) rotateX(325deg) rotateY(355deg);
     }
     .popup.s--closed .popup__piece:nth-child(32) .popup__piece-inner:nth-child(2) {
       -webkit-transform: translate3d(2vw, 0, 0) rotateX(419deg) rotateY(175deg);
               transform: translate3d(2vw, 0, 0) rotateX(419deg) rotateY(175deg);
     }
     .popup.s--closed .popup__piece:nth-child(32) .popup__piece-inner:nth-child(3) {
       -webkit-transform: translate3d(60vw, 0, 0) rotateX(343deg) rotateY(443deg);
               transform: translate3d(60vw, 0, 0) rotateX(343deg) rotateY(443deg);
     }
     .popup .popup__piece:nth-child(33) {
       height: 12.66667%;
       width: 16.66667%;
     }
     .popup .popup__piece:nth-child(33) .popup__piece-inner:nth-child(1) {
       -webkit-transform: translate3d(30vw, -19vh, -78px) rotateX(185deg) rotateY(257deg);
               transform: translate3d(30vw, -19vh, -78px) rotateX(185deg) rotateY(257deg);
       -webkit-clip-path: polygon(0 0, 0 100%, 50% 100%);
               clip-path: polygon(0 0, 0 100%, 50% 100%);
     }
     .popup .popup__piece:nth-child(33) .popup__piece-inner:nth-child(2) {
       -webkit-transform: translate3d(15vw, 24vh, -605px) rotateX(418deg) rotateY(434deg);
               transform: translate3d(15vw, 24vh, -605px) rotateX(418deg) rotateY(434deg);
       -webkit-clip-path: polygon(0 0, 50% 100%, 100% 0);
               clip-path: polygon(0 0, 50% 100%, 100% 0);
     }
     .popup .popup__piece:nth-child(33) .popup__piece-inner:nth-child(3) {
       -webkit-transform: translate3d(42vw, 3vh, -304px) rotateX(466deg) rotateY(448deg);
               transform: translate3d(42vw, 3vh, -304px) rotateX(466deg) rotateY(448deg);
       -webkit-clip-path: polygon(100% 0, 100% 100%, 50% 100%);
               clip-path: polygon(100% 0, 100% 100%, 50% 100%);
     }
     .popup.s--closed .popup__piece:nth-child(33) {
       -webkit-transform: translate3d(0, 101vh, 0);
               transform: translate3d(0, 101vh, 0);
     }
     .popup.s--closed .popup__piece:nth-child(33) .popup__piece-inner:nth-child(1) {
       -webkit-transform: translate3d(-50vw, 0, 0) rotateX(256deg) rotateY(455deg);
               transform: translate3d(-50vw, 0, 0) rotateX(256deg) rotateY(455deg);
     }
     .popup.s--closed .popup__piece:nth-child(33) .popup__piece-inner:nth-child(2) {
       -webkit-transform: translate3d(-50vw, 0, 0) rotateX(406deg) rotateY(256deg);
               transform: translate3d(-50vw, 0, 0) rotateX(406deg) rotateY(256deg);
     }
     .popup.s--closed .popup__piece:nth-child(33) .popup__piece-inner:nth-child(3) {
       -webkit-transform: translate3d(37vw, 0, 0) rotateX(176deg) rotateY(350deg);
               transform: translate3d(37vw, 0, 0) rotateX(176deg) rotateY(350deg);
     }
     .popup .popup__piece:nth-child(34) {
       height: 12.66667%;
       width: 15.66667%;
     }
     .popup .popup__piece:nth-child(34) .popup__piece-inner:nth-child(1) {
       -webkit-transform: translate3d(29vw, -33vh, -889px) rotateX(373deg) rotateY(151deg);
               transform: translate3d(29vw, -33vh, -889px) rotateX(373deg) rotateY(151deg);
       -webkit-clip-path: polygon(0 0, 0 100%, 48% 100%);
               clip-path: polygon(0 0, 0 100%, 48% 100%);
     }
     .popup .popup__piece:nth-child(34) .popup__piece-inner:nth-child(2) {
       -webkit-transform: translate3d(-59vw, -9vh, 44px) rotateX(283deg) rotateY(202deg);
               transform: translate3d(-59vw, -9vh, 44px) rotateX(283deg) rotateY(202deg);
       -webkit-clip-path: polygon(0 0, 48% 100%, 100% 0);
               clip-path: polygon(0 0, 48% 100%, 100% 0);
     }
     .popup .popup__piece:nth-child(34) .popup__piece-inner:nth-child(3) {
       -webkit-transform: translate3d(1vw, -54vh, 857px) rotateX(218deg) rotateY(443deg);
               transform: translate3d(1vw, -54vh, 857px) rotateX(218deg) rotateY(443deg);
       -webkit-clip-path: polygon(100% 0, 100% 100%, 48% 100%);
               clip-path: polygon(100% 0, 100% 100%, 48% 100%);
     }
     .popup.s--closed .popup__piece:nth-child(34) {
       -webkit-transform: translate3d(0, 134vh, 0);
               transform: translate3d(0, 134vh, 0);
     }
     .popup.s--closed .popup__piece:nth-child(34) .popup__piece-inner:nth-child(1) {
       -webkit-transform: translate3d(53vw, 0, 0) rotateX(397deg) rotateY(147deg);
               transform: translate3d(53vw, 0, 0) rotateX(397deg) rotateY(147deg);
     }
     .popup.s--closed .popup__piece:nth-child(34) .popup__piece-inner:nth-child(2) {
       -webkit-transform: translate3d(11vw, 0, 0) rotateX(443deg) rotateY(376deg);
               transform: translate3d(11vw, 0, 0) rotateX(443deg) rotateY(376deg);
     }
     .popup.s--closed .popup__piece:nth-child(34) .popup__piece-inner:nth-child(3) {
       -webkit-transform: translate3d(60vw, 0, 0) rotateX(154deg) rotateY(382deg);
               transform: translate3d(60vw, 0, 0) rotateX(154deg) rotateY(382deg);
     }
     .popup .popup__piece:nth-child(35) {
       height: 12.66667%;
       width: 10.66667%;
     }
     .popup .popup__piece:nth-child(35) .popup__piece-inner:nth-child(1) {
       -webkit-transform: translate3d(-17vw, -10vh, -496px) rotateX(211deg) rotateY(365deg);
               transform: translate3d(-17vw, -10vh, -496px) rotateX(211deg) rotateY(365deg);
       -webkit-clip-path: polygon(0 0, 0 100%, 39% 100%);
               clip-path: polygon(0 0, 0 100%, 39% 100%);
     }
     .popup .popup__piece:nth-child(35) .popup__piece-inner:nth-child(2) {
       -webkit-transform: translate3d(8vw, 59vh, -162px) rotateX(189deg) rotateY(271deg);
               transform: translate3d(8vw, 59vh, -162px) rotateX(189deg) rotateY(271deg);
       -webkit-clip-path: polygon(0 0, 39% 100%, 100% 0);
               clip-path: polygon(0 0, 39% 100%, 100% 0);
     }
     .popup .popup__piece:nth-child(35) .popup__piece-inner:nth-child(3) {
       -webkit-transform: translate3d(-4vw, -13vh, 464px) rotateX(197deg) rotateY(201deg);
               transform: translate3d(-4vw, -13vh, 464px) rotateX(197deg) rotateY(201deg);
       -webkit-clip-path: polygon(100% 0, 100% 100%, 39% 100%);
               clip-path: polygon(100% 0, 100% 100%, 39% 100%);
     }
     .popup.s--closed .popup__piece:nth-child(35) {
       -webkit-transform: translate3d(0, 113vh, 0);
               transform: translate3d(0, 113vh, 0);
     }
     .popup.s--closed .popup__piece:nth-child(35) .popup__piece-inner:nth-child(1) {
       -webkit-transform: translate3d(-8vw, 0, 0) rotateX(471deg) rotateY(172deg);
               transform: translate3d(-8vw, 0, 0) rotateX(471deg) rotateY(172deg);
     }
     .popup.s--closed .popup__piece:nth-child(35) .popup__piece-inner:nth-child(2) {
       -webkit-transform: translate3d(8vw, 0, 0) rotateX(274deg) rotateY(261deg);
               transform: translate3d(8vw, 0, 0) rotateX(274deg) rotateY(261deg);
     }
     .popup.s--closed .popup__piece:nth-child(35) .popup__piece-inner:nth-child(3) {
       -webkit-transform: translate3d(56vw, 0, 0) rotateX(387deg) rotateY(323deg);
               transform: translate3d(56vw, 0, 0) rotateX(387deg) rotateY(323deg);
     }
     .popup .popup__piece:nth-child(36) {
       height: 12.66667%;
       width: 18.66667%;
     }
     .popup .popup__piece:nth-child(36) .popup__piece-inner:nth-child(1) {
       -webkit-transform: translate3d(2vw, 53vh, 174px) rotateX(200deg) rotateY(420deg);
               transform: translate3d(2vw, 53vh, 174px) rotateX(200deg) rotateY(420deg);
       -webkit-clip-path: polygon(0 0, 0 100%, 67% 100%);
               clip-path: polygon(0 0, 0 100%, 67% 100%);
     }
     .popup .popup__piece:nth-child(36) .popup__piece-inner:nth-child(2) {
       -webkit-transform: translate3d(48vw, -12vh, 451px) rotateX(175deg) rotateY(217deg);
               transform: translate3d(48vw, -12vh, 451px) rotateX(175deg) rotateY(217deg);
       -webkit-clip-path: polygon(0 0, 67% 100%, 100% 0);
               clip-path: polygon(0 0, 67% 100%, 100% 0);
     }
     .popup .popup__piece:nth-child(36) .popup__piece-inner:nth-child(3) {
       -webkit-transform: translate3d(-2vw, 10vh, -53px) rotateX(366deg) rotateY(402deg);
               transform: translate3d(-2vw, 10vh, -53px) rotateX(366deg) rotateY(402deg);
       -webkit-clip-path: polygon(100% 0, 100% 100%, 67% 100%);
               clip-path: polygon(100% 0, 100% 100%, 67% 100%);
     }
     .popup.s--closed .popup__piece:nth-child(36) {
       -webkit-transform: translate3d(0, 117vh, 0);
               transform: translate3d(0, 117vh, 0);
     }
     .popup.s--closed .popup__piece:nth-child(36) .popup__piece-inner:nth-child(1) {
       -webkit-transform: translate3d(-75vw, 0, 0) rotateX(469deg) rotateY(131deg);
               transform: translate3d(-75vw, 0, 0) rotateX(469deg) rotateY(131deg);
     }
     .popup.s--closed .popup__piece:nth-child(36) .popup__piece-inner:nth-child(2) {
       -webkit-transform: translate3d(52vw, 0, 0) rotateX(263deg) rotateY(279deg);
               transform: translate3d(52vw, 0, 0) rotateX(263deg) rotateY(279deg);
     }
     .popup.s--closed .popup__piece:nth-child(36) .popup__piece-inner:nth-child(3) {
       -webkit-transform: translate3d(-29vw, 0, 0) rotateX(315deg) rotateY(189deg);
               transform: translate3d(-29vw, 0, 0) rotateX(315deg) rotateY(189deg);
     }
     .popup__pieces {
       position: absolute;
       left: 0;
       top: 0;
       width: 100%;
       height: 100%;
     }
     .popup__piece {
       float: left;
       position: relative;
       -webkit-transform-style: preserve-3d;
               transform-style: preserve-3d;
       -webkit-transition: -webkit-transform 0s 0s;
       transition: -webkit-transform 0s 0s;
       transition: transform 0s 0s;
       transition: transform 0s 0s, -webkit-transform 0s 0s;
     }
     .popup.s--closed .popup__piece {
       -webkit-transition: -webkit-transform 0.7s 0.1s cubic-bezier(0.69, -0.47, 0.97, 1.04);
       transition: -webkit-transform 0.7s 0.1s cubic-bezier(0.69, -0.47, 0.97, 1.04);
       transition: transform 0.7s 0.1s cubic-bezier(0.69, -0.47, 0.97, 1.04);
       transition: transform 0.7s 0.1s cubic-bezier(0.69, -0.47, 0.97, 1.04), -webkit-transform 0.7s 0.1s cubic-bezier(0.69, -0.47, 0.97, 1.04);
     }
     .popup__piece:after {
       content: "";
       display: table;
       clear: both;
     }
     .popup__piece-inner {
       position: absolute;
       left: 0;
       top: 0;
       width: 100%;
       height: 100%;
       background: rgba(0, 0, 0, 0.8);
       opacity: 0;
       -webkit-transition: opacity 0.28s 0.55s ease-in, -webkit-transform 0.7s 0.1s ease-out;
       transition: opacity 0.28s 0.55s ease-in, -webkit-transform 0.7s 0.1s ease-out;
       transition: opacity 0.28s 0.55s ease-in, transform 0.7s 0.1s ease-out;
       transition: opacity 0.28s 0.55s ease-in, transform 0.7s 0.1s ease-out, -webkit-transform 0.7s 0.1s ease-out;
     }
     .popup.s--active .popup__piece-inner {
       -webkit-transition: opacity 0.35s, -webkit-transform 0.7s ease-in-out;
       transition: opacity 0.35s, -webkit-transform 0.7s ease-in-out;
       transition: opacity 0.35s, transform 0.7s ease-in-out;
       transition: opacity 0.35s, transform 0.7s ease-in-out, -webkit-transform 0.7s ease-in-out;
       -webkit-transform: translate3d(0, 0, 0) rotateX(0) rotateY(0) !important;
               transform: translate3d(0, 0, 0) rotateX(0) rotateY(0) !important;
       opacity: 1;
     }
     .popup__content {
       position: relative;
       min-height: 500px;
       padding: 30px;
       background: #000;
       color: #fff;
       -webkit-transition: opacity 0.2s;
       transition: opacity 0.2s;
       opacity: 0;
     }
     .popup.s--active .popup__content {
       -webkit-transition-delay: 0.6s;
               transition-delay: 0.6s;
       opacity: 1;
     }
     .popup__close {
       position: absolute;
       right: 30px;
       top: 30px;
       width: 30px;
       height: 30px;
       cursor: pointer;
     }
     .popup__close:before, .popup__close:after {
       content: '';
       position: absolute;
       left: 0;
       top: 14px;
       width: 100%;
       height: 2px;
       background: #fff;
     }
     .popup__close:before {
       -webkit-transform: rotate(45deg);
               transform: rotate(45deg);
     }
     .popup__close:after {
       -webkit-transform: rotate(-45deg);
               transform: rotate(-45deg);
     }
     .popup__heading {
       margin-bottom: 20px;
       font-size: 30px;
       letter-spacing: 1px;
       text-transform: uppercase;
     }
     .popup__text {
       font-size: 18px;
       line-height: 1.5;
     }

     .popup-btn {
       position: absolute;
       left: 45%;
       top: 50%;
       width: 250px;
       height: 50px;
       margin-left: -100px;
       margin-top: 310px;
       background: #fff;
       outline: none;
       font-size: 20px;
       text-transform: uppercase;
       font-weight: bold;
       color: #000;
       border: 2px solid #000;
       box-shadow: 0 2px 14px 0 rgba(8,8,8,0.50);
       border-radius: 45px;
       -webkit-transition: all 0.3s;
       transition: all 0.3s;
       cursor: pointer;
       z-index: 10;
     }
     .popup-btn:hover {
       background-color: #000;
       color: #fff;
       letter-spacing: 2px;
     }
     @media screen and (min-width: 1400px) {
       #demo-canvas{
         height: 880px;
       }
       #bnner_mar{
         margin-top: 260px;
       }
       .hover_related img {
         width: 500px;
       }
       .wrap_dev_by .img_dev_user{
         background: transparent;
         height: 700px;
       }
     }
   </style>
  </head>
  <body>
    <div id="large-header" class="large-header">
      <canvas id="demo-canvas" class="banner_img" style="background-image: url('image_user/landing_profile/<?php echo $json_data["user_img_lannding"] ?>');">
      </canvas>

    <section id="browse_wrap"></section> <!-- section -->

    <section class="container-fluid">
      <!-- nav -->
      <section class="row">
        <nav class="col-sm-12 wrap_nav_top">
          <article class="col-xs-4 col-sm-2 box_nav_top_l">
            <!-- logo-effect -->
            <a href="index.php">
              <svg width="109px" height="118px" viewBox="0 0 109 118" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                  <!-- Generator: Sketch 44.1 (41455) - http://www.bohemiancoding.com/sketch -->
                  <desc>Created with Sketch.</desc>
                  <defs></defs>
                  <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                      <g id="logo" fill="#FFFFFF" style="stroke: #fff; stroke-width: 2px;fill: transparent;">
                          <path d="M91.7683932,18.9085441 L99.6225514,14.3434763 C100.66267,13.7387418 101.996534,14.092222 102.601269,15.1323407 C103.206003,16.1730751 102.853139,17.5069395 101.81302,18.111674 L91.7683932,23.9496401 L91.7683932,33.3704424 C91.7683932,34.5737531 90.7929356,35.5498266 89.5896249,35.5498266 C88.3863141,35.5498266 87.4102407,34.5737531 87.4102407,33.3704424 L87.4102407,13.1641825 C87.4102407,11.0993407 88.7317887,8.8208096 90.5238226,7.79547062 L103.175212,0.557747458 C105.742563,-0.911597175 108.453399,0.663052542 108.453399,3.61960056 L108.453399,24.7323463 C108.453399,25.9362729 107.477941,26.9117305 106.274631,26.9117305 C105.07132,26.9117305 104.095862,25.9362729 104.095862,24.7323463 L104.095862,5.05261186 L92.6884271,11.578448 C92.2530429,11.827239 91.7683932,12.6622898 91.7683932,13.1641825 L91.7683932,18.9085441 Z M11.4437068,78.7016333 C10.1535655,79.4467746 8.35598927,79.4289158 7.08185932,78.6591418 L2.11342994,75.6551757 C0.868243503,74.9032605 -6.1581921e-05,73.361865 -6.1581921e-05,71.9066842 L-6.1581921e-05,60.5756107 C-6.1581921e-05,59.2780797 1.05175763,58.2268763 2.34805706,58.2268763 C3.64558814,58.2268763 4.69679153,59.2780797 4.69679153,60.5756107 L4.69679153,71.7287124 L9.30311921,74.5134469 L17.5587915,69.7439271 L17.5587915,39.9579836 C17.5587915,38.6610684 18.6106107,37.6092492 19.907526,37.6092492 C21.2044412,37.6092492 22.2556446,38.6610684 22.2556446,39.9579836 L22.2556446,69.9533056 C22.2556446,71.4257294 21.3639384,72.9689723 20.0904243,73.7054921 L11.4437068,78.7016333 Z M31.2761644,67.1739904 C29.1620571,68.3736062 26.7726785,66.9855497 26.7726785,64.552448 L26.7726785,44.9330638 C26.7726785,43.6361486 27.8238819,42.5843294 29.1207972,42.5843294 C30.4177124,42.5843294 31.4689158,43.6361486 31.4689158,44.9330638 L31.4689158,61.6642559 L39.8594525,56.902126 C40.9876333,56.2622898 42.4206446,56.6582616 43.0610966,57.7858266 C43.7015486,58.9140073 43.3055768,60.3470186 42.177396,60.9874706 L31.2761644,67.1739904 Z M39.6216232,41.7362232 C38.4971373,42.3822175 37.0616627,41.9942514 36.4156684,40.8703814 C35.7690582,39.7452797 36.1570243,38.3104209 37.2815102,37.6638107 L55.972239,26.8340141 C57.0973407,26.1880198 58.5328153,26.5759859 59.1788096,27.7004718 C59.824804,28.8249576 59.4368379,30.2604322 58.3129678,30.9070424 L52.3629226,34.2632571 L52.3629226,59.4009972 C52.3629226,60.6985282 51.3117192,61.7497316 50.014804,61.7497316 C48.7178887,61.7497316 47.6660695,60.6985282 47.6660695,59.4009972 L47.6660695,36.9623927 L39.6216232,41.7362232 Z M83.1661994,36.7110768 C82.5128153,37.8318678 81.0754932,38.2112124 79.9547023,37.5578282 L70.360239,31.9914384 C68.2547531,30.7647266 68.2596797,28.0003141 70.3651655,26.7791446 L78.7162898,21.9351107 L78.7162898,19.3431277 L72.393674,23.0090994 C71.2716514,23.6587887 69.8343294,23.2757492 69.1846401,22.1531107 C68.534335,21.0310881 68.9173746,19.5943819 70.040013,18.9440768 L78.8954932,13.8118395 C81.0083689,12.5888226 83.4131429,13.9731842 83.4131429,16.4142915 L83.4131429,22.1432576 C83.4131429,23.6132181 82.5232842,25.156461 81.2516175,25.8942124 L75.2245949,29.3902181 L82.319448,33.4995797 C83.4396232,34.1529638 83.8195836,35.5902859 83.1661994,36.7110768 Z M82.5954582,61.9966136 C81.4783621,62.6555401 80.0391927,62.2835853 79.3796503,61.1664893 C78.7213395,60.0493932 79.0932944,58.6096079 80.2103904,57.9506814 L86.4043,54.2988734 C87.521396,53.6405627 88.9611814,54.0119017 89.6201079,55.1296136 C90.2784186,56.2467096 89.9070797,57.6858791 88.7893678,58.3448056 L82.5954582,61.9966136 Z M92.2813706,40.8116322 C93.4003141,40.1557847 94.8388678,40.5314345 95.4947153,41.650378 C96.1499469,42.7693215 95.774913,44.208491 94.6559695,44.8643384 L82.5902237,51.8046209 C81.4712802,52.4604684 80.0321107,52.0848186 79.3768791,50.9658751 C78.7210316,49.8469316 79.0966814,48.408378 80.2156249,47.7525305 L92.2813706,40.8116322 Z M90.6263565,63.2114401 C91.7428367,62.5525136 93.1832379,62.9238525 93.8421644,64.0409486 C94.501091,65.1574288 94.1303678,66.5978299 93.0132718,67.2567565 L76.5080853,76.9953215 C74.3970571,78.2411237 71.9793508,76.8604571 71.9793508,74.4094966 L71.9793508,45.3101915 C71.9793508,44.0126605 73.0305542,42.9614571 74.3274695,42.9614571 C75.6250006,42.9614571 76.676204,44.0126605 76.676204,45.3101915 L76.676204,71.4430955 L90.6263565,63.2114401 Z M53.6802215,74.2429791 L49.6478373,71.9084085 L50.0579729,100.989239 C50.0770633,102.337883 48.9556565,103.436505 47.5860746,103.367533 C46.337809,103.304103 45.1381932,102.225804 45.1203345,100.975075 L45.1203345,92.6448887 L31.190504,100.750917 C29.0911763,101.963465 27.5836508,101.522538 26.9752215,100.295211 C26.4185209,99.1744198 26.8908542,97.8103802 27.9728486,97.1828605 L31.173261,95.3329395 L31.173261,77.5363802 L21.247487,83.3213859 C20.1236169,83.9673802 18.6875266,83.5794141 18.0415322,82.4549282 C17.394922,81.3304424 17.7828881,79.8949678 18.907374,79.2483576 L36.8936056,68.8330073 C38.0630463,68.1611486 39.5687243,68.6076175 40.1728429,69.8374085 C40.7246169,70.9600469 40.2479729,72.322239 39.1635153,72.945448 L35.8701141,74.8378605 L35.8701141,92.6110186 L45.1665209,87.2189056 L45.1203345,68.980804 C45.087696,66.6523915 47.3945548,65.1768887 49.4095153,66.3432503 L51.9725548,67.8273746 C53.0237582,68.435804 53.6716,69.5572107 53.6740633,70.7716062 L53.6802215,74.2429791 Z M63.9771497,7.24345028 C65.3448842,7.15477232 66.4816864,8.23799831 66.4816864,9.58664237 L66.4816864,76.7583542 C66.4816864,79.0762977 63.9709915,80.5240887 61.9646525,79.3626537 L59.8560876,78.1414842 C58.5973531,77.4129701 57.8214209,76.0704842 57.8189576,74.6159192 L57.8127994,71.5318966 L61.7848333,73.8319814 L61.7848333,9.66731469 C61.7848333,8.41658588 62.7295,7.3241226 63.9771497,7.24345028 Z M23.8280158,106.232816 C24.4721627,107.358534 24.0811175,108.792777 22.9560158,109.436924 L9.30022486,117.323105 C7.18673333,118.531958 4.79119661,117.145749 4.79119661,114.708952 L4.79119661,101.184331 L4.79119661,87.1455 C4.79119661,85.868291 5.8263887,84.8330989 7.10359774,84.8330989 L7.1504,84.8330989 C8.42699322,84.8330989 9.49851864,85.868291 9.49851864,87.1455 L9.49851864,102.174568 L9.48804972,102.174568 L9.48804972,111.804749 L20.6239085,105.360201 C21.749626,104.716669 23.1844847,105.107099 23.8280158,106.232816 Z" id="Combined-Shape"></path>
                      </g>
                  </g>
                  <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                      <g id="logo_2" fill="#FFFFFF">
                          <path d="M91.7683932,18.9085441 L99.6225514,14.3434763 C100.66267,13.7387418 101.996534,14.092222 102.601269,15.1323407 C103.206003,16.1730751 102.853139,17.5069395 101.81302,18.111674 L91.7683932,23.9496401 L91.7683932,33.3704424 C91.7683932,34.5737531 90.7929356,35.5498266 89.5896249,35.5498266 C88.3863141,35.5498266 87.4102407,34.5737531 87.4102407,33.3704424 L87.4102407,13.1641825 C87.4102407,11.0993407 88.7317887,8.8208096 90.5238226,7.79547062 L103.175212,0.557747458 C105.742563,-0.911597175 108.453399,0.663052542 108.453399,3.61960056 L108.453399,24.7323463 C108.453399,25.9362729 107.477941,26.9117305 106.274631,26.9117305 C105.07132,26.9117305 104.095862,25.9362729 104.095862,24.7323463 L104.095862,5.05261186 L92.6884271,11.578448 C92.2530429,11.827239 91.7683932,12.6622898 91.7683932,13.1641825 L91.7683932,18.9085441 Z M11.4437068,78.7016333 C10.1535655,79.4467746 8.35598927,79.4289158 7.08185932,78.6591418 L2.11342994,75.6551757 C0.868243503,74.9032605 -6.1581921e-05,73.361865 -6.1581921e-05,71.9066842 L-6.1581921e-05,60.5756107 C-6.1581921e-05,59.2780797 1.05175763,58.2268763 2.34805706,58.2268763 C3.64558814,58.2268763 4.69679153,59.2780797 4.69679153,60.5756107 L4.69679153,71.7287124 L9.30311921,74.5134469 L17.5587915,69.7439271 L17.5587915,39.9579836 C17.5587915,38.6610684 18.6106107,37.6092492 19.907526,37.6092492 C21.2044412,37.6092492 22.2556446,38.6610684 22.2556446,39.9579836 L22.2556446,69.9533056 C22.2556446,71.4257294 21.3639384,72.9689723 20.0904243,73.7054921 L11.4437068,78.7016333 Z M31.2761644,67.1739904 C29.1620571,68.3736062 26.7726785,66.9855497 26.7726785,64.552448 L26.7726785,44.9330638 C26.7726785,43.6361486 27.8238819,42.5843294 29.1207972,42.5843294 C30.4177124,42.5843294 31.4689158,43.6361486 31.4689158,44.9330638 L31.4689158,61.6642559 L39.8594525,56.902126 C40.9876333,56.2622898 42.4206446,56.6582616 43.0610966,57.7858266 C43.7015486,58.9140073 43.3055768,60.3470186 42.177396,60.9874706 L31.2761644,67.1739904 Z M39.6216232,41.7362232 C38.4971373,42.3822175 37.0616627,41.9942514 36.4156684,40.8703814 C35.7690582,39.7452797 36.1570243,38.3104209 37.2815102,37.6638107 L55.972239,26.8340141 C57.0973407,26.1880198 58.5328153,26.5759859 59.1788096,27.7004718 C59.824804,28.8249576 59.4368379,30.2604322 58.3129678,30.9070424 L52.3629226,34.2632571 L52.3629226,59.4009972 C52.3629226,60.6985282 51.3117192,61.7497316 50.014804,61.7497316 C48.7178887,61.7497316 47.6660695,60.6985282 47.6660695,59.4009972 L47.6660695,36.9623927 L39.6216232,41.7362232 Z M83.1661994,36.7110768 C82.5128153,37.8318678 81.0754932,38.2112124 79.9547023,37.5578282 L70.360239,31.9914384 C68.2547531,30.7647266 68.2596797,28.0003141 70.3651655,26.7791446 L78.7162898,21.9351107 L78.7162898,19.3431277 L72.393674,23.0090994 C71.2716514,23.6587887 69.8343294,23.2757492 69.1846401,22.1531107 C68.534335,21.0310881 68.9173746,19.5943819 70.040013,18.9440768 L78.8954932,13.8118395 C81.0083689,12.5888226 83.4131429,13.9731842 83.4131429,16.4142915 L83.4131429,22.1432576 C83.4131429,23.6132181 82.5232842,25.156461 81.2516175,25.8942124 L75.2245949,29.3902181 L82.319448,33.4995797 C83.4396232,34.1529638 83.8195836,35.5902859 83.1661994,36.7110768 Z M82.5954582,61.9966136 C81.4783621,62.6555401 80.0391927,62.2835853 79.3796503,61.1664893 C78.7213395,60.0493932 79.0932944,58.6096079 80.2103904,57.9506814 L86.4043,54.2988734 C87.521396,53.6405627 88.9611814,54.0119017 89.6201079,55.1296136 C90.2784186,56.2467096 89.9070797,57.6858791 88.7893678,58.3448056 L82.5954582,61.9966136 Z M92.2813706,40.8116322 C93.4003141,40.1557847 94.8388678,40.5314345 95.4947153,41.650378 C96.1499469,42.7693215 95.774913,44.208491 94.6559695,44.8643384 L82.5902237,51.8046209 C81.4712802,52.4604684 80.0321107,52.0848186 79.3768791,50.9658751 C78.7210316,49.8469316 79.0966814,48.408378 80.2156249,47.7525305 L92.2813706,40.8116322 Z M90.6263565,63.2114401 C91.7428367,62.5525136 93.1832379,62.9238525 93.8421644,64.0409486 C94.501091,65.1574288 94.1303678,66.5978299 93.0132718,67.2567565 L76.5080853,76.9953215 C74.3970571,78.2411237 71.9793508,76.8604571 71.9793508,74.4094966 L71.9793508,45.3101915 C71.9793508,44.0126605 73.0305542,42.9614571 74.3274695,42.9614571 C75.6250006,42.9614571 76.676204,44.0126605 76.676204,45.3101915 L76.676204,71.4430955 L90.6263565,63.2114401 Z M53.6802215,74.2429791 L49.6478373,71.9084085 L50.0579729,100.989239 C50.0770633,102.337883 48.9556565,103.436505 47.5860746,103.367533 C46.337809,103.304103 45.1381932,102.225804 45.1203345,100.975075 L45.1203345,92.6448887 L31.190504,100.750917 C29.0911763,101.963465 27.5836508,101.522538 26.9752215,100.295211 C26.4185209,99.1744198 26.8908542,97.8103802 27.9728486,97.1828605 L31.173261,95.3329395 L31.173261,77.5363802 L21.247487,83.3213859 C20.1236169,83.9673802 18.6875266,83.5794141 18.0415322,82.4549282 C17.394922,81.3304424 17.7828881,79.8949678 18.907374,79.2483576 L36.8936056,68.8330073 C38.0630463,68.1611486 39.5687243,68.6076175 40.1728429,69.8374085 C40.7246169,70.9600469 40.2479729,72.322239 39.1635153,72.945448 L35.8701141,74.8378605 L35.8701141,92.6110186 L45.1665209,87.2189056 L45.1203345,68.980804 C45.087696,66.6523915 47.3945548,65.1768887 49.4095153,66.3432503 L51.9725548,67.8273746 C53.0237582,68.435804 53.6716,69.5572107 53.6740633,70.7716062 L53.6802215,74.2429791 Z M63.9771497,7.24345028 C65.3448842,7.15477232 66.4816864,8.23799831 66.4816864,9.58664237 L66.4816864,76.7583542 C66.4816864,79.0762977 63.9709915,80.5240887 61.9646525,79.3626537 L59.8560876,78.1414842 C58.5973531,77.4129701 57.8214209,76.0704842 57.8189576,74.6159192 L57.8127994,71.5318966 L61.7848333,73.8319814 L61.7848333,9.66731469 C61.7848333,8.41658588 62.7295,7.3241226 63.9771497,7.24345028 Z M23.8280158,106.232816 C24.4721627,107.358534 24.0811175,108.792777 22.9560158,109.436924 L9.30022486,117.323105 C7.18673333,118.531958 4.79119661,117.145749 4.79119661,114.708952 L4.79119661,101.184331 L4.79119661,87.1455 C4.79119661,85.868291 5.8263887,84.8330989 7.10359774,84.8330989 L7.1504,84.8330989 C8.42699322,84.8330989 9.49851864,85.868291 9.49851864,87.1455 L9.49851864,102.174568 L9.48804972,102.174568 L9.48804972,111.804749 L20.6239085,105.360201 C21.749626,104.716669 23.1844847,105.107099 23.8280158,106.232816 Z" id="Combined-Shape"></path>
                      </g>
                  </g>
              </svg><!-- logo-effect -->
            </a>
          </article>
          <article class="col-sm-9 menu tablet">
            <span><a class="link link--kukuri" href="index.php" data-letters="HOME" onmouseover="playclip();">HOME</a></span>
            <span><a class="link link--kukuri" href="creator.php" data-letters="CREATOR" onmouseover="playclip();">CREATOR</a></span>
            <span><a class="link link--kukuri" target="_blank" href="https://ictsilpakorn.com/im11/ultraline11-3-collection-book" data-letters="COLLECTIONBOOK" onmouseover="playclip();">COLLECTION BOOK</a></span>
            <span><a class="link link--kukuri" href="https://ictsilpakorn.com/im11/portfolio/exhibition.php" data-letters="EXHIBITION" onmouseover="playclip();">EXHIBITION</a></span>
            <span><a class="link link--kukuri" href="thankyou.php" data-letters="THANKYOU" onmouseover="playclip();">THANK YOU</a></span>
            <span><a class="link link--kukuri" href="contact.php" data-letters="CONTACT" onmouseover="playclip();">CONTACT</a></span>
          </article> <!-- menu -->
          <!-- <article class="col-xs-8 col-sm-3 box_nav_top_r">
            <img src="image_web/logo_ict.png" alt="ictsu_logo">
          </article> -->
          <article class="col-xs-8 col-sm-3 logo_mobile">
            <img src="image_web/logo_ict.png" alt="" style="max-width: 70%;">
          </article>


          <hr class="hr_res">
        </nav> <!-- nav -->

        <!-- <article class="row"> -->
          <article class="col-xs-5 info">
          <h3 class="heading">CREATOR</h3>
          <h2 class="name_thai"><?php echo $json_data["user_name"]; ?></h2>
          <article class="wrap_sec_user_pin cate" style="margin-top: -30px;">
                  <article class="wrap_user_pinterest" style="width:280px;">
                    <span class="user_pinterest" style="text-transform: uppercase;"><?php echo $json_data["work_type"]; ?></span>
                  </article> <!-- wrap_user_footer -->
          </article>
          </article>
        <!-- </article> -->

        <div class='icon-scroll tablet'><div/>
    </section>


    <article class="row right_content">
    <article class="col-xs-12 video_showreel" style="padding-right: 80px; margin-top: -300px;">
      <span>VIDEO INTERVIEW</span><br>

        <br><br>

          <iframe src="<?php echo $json_data["user_video_interview"]; ?>" style="border:none; height: auto;" scrolling="no" frameborder="0" allowTransparency="true" allowFullScreen="true"></iframe>
          <br><br><br><br>
      <span>STUDENT ID</span>
      <h3 style="line-height: 2px;"><?php echo $json_data["student_id"]; ?></h3>
    </article>
    </article>
      <!-- banner -->
      <section class="row" style="margin-top: 130px;">
        <div class="logo_mobile">
          <div class="popups-cont">
              <div class="popups-cont__overlay"></div>
              <div class="popup">
                  <div class="popup__pieces"></div>
                  <div class="popup__content">
                      <div class="popup__close"></div>
                      <h3 class="popup__heading">VIDEO INTERVIEW</h3>
                      <p class="popup__text"><iframe src="<?php echo $json_data["user_video_interview"]; ?>" style="border:none; height: auto;" scrolling="no" frameborder="0" allowTransparency="true" allowFullScreen="true"></iframe>

                  </div>
              </div>
          </div>

          <button type="button" class="popup-btn">VIDEO INTERVIEW</button>

          <script src="js/index_popup_shtter.js"></script>
        </div>
        <article id="bnner_mar" class="col-xs-12 wrap_banner">
          <img src="image_user/head_preview/<?php echo $json_data["user_img_head"]; ?>" alt="banner_work">
        </article>
      </section> <!-- banner -->
      <!-- concept -->
      <section class="row">
        <section class="col-xs-12 col-sm-offset-1 col-sm-10 col-md-offset-3 col-md-6 wrap_concept">
          <h3>CONCEPT</h3>
          <p style="font-family: 'Kanit', sans-serif; font-size:1em;">
            	<?php echo $json_data["work_concept"]; ?>
          </p>
        </section>
      </section> <!-- concept -->
      <!-- design process -->
      <section class="row">
        <article class="col-xs-12 col-sm-offset-1 col-sm-11 wrap_design_process">
          <h3>DESIGN PROCESS</h3>
          <article class="row wrap_dp_user">
            <ul class="row col-sm-10 col-md-11">
              <li class="col-xs-5 col-sm-3 dp_img_user_a up_hig_dp">
                <a class="grouped_elements" rel="group1" href="image_user/design_process/<?php echo $json_data["work_design_process_a"]; ?>"><img src="image_user/design_process/<?php echo $json_data["work_design_process_a"]; ?>" alt="" style="max-width: 100%;"></a>
                <article class="middle_dp">
                  <article class="text_ho_dp">
                    <i class="fa fa-search"></i>
                  </article>
                </article>
              </li>
              <li class="col-xs-5 col-sm-3 dp_img_user_b up_hig_dp">
                <a class="grouped_elements" rel="group1" href="image_user/design_process/<?php echo $json_data["work_design_process_b"]; ?>" target="_blank"><img src="image_user/design_process/<?php echo $json_data["work_design_process_b"]; ?>" alt="" style="max-width: 100%;"></a>
                <article class="middle_dp">
                  <article class="text_ho_dp">
                    <i class="fa fa-search"></i>
                  </article>
                </article>
              </li>
              <li class="col-xs-5 col-sm-3 dp_img_user_b up_hig_dp">
                <a class="grouped_elements" rel="group1" href="image_user/design_process/<?php echo $json_data["work_design_process_c"]; ?>" target="_blank"><img src="image_user/design_process/<?php echo $json_data["work_design_process_c"]; ?>" alt="" style="max-width: 100%;"></a>
                <article class="middle_dp">
                  <article class="text_ho_dp">
                    <i class="fa fa-search"></i>
                  </article>
                </article>
              </li>
              <li class="col-xs-5 col-sm-3 dp_img_user_b up_hig_dp">
                <a class="grouped_elements" rel="group1" href="image_user/design_process/<?php echo $json_data["work_design_process_d"]; ?>" target="_blank"><img src="image_user/design_process/<?php echo $json_data["work_design_process_d"]; ?>" alt="" style="max-width: 100%;"></a>
                <article class="middle_dp">
                  <article class="text_ho_dp">
                    <i class="fa fa-search"></i>
                  </article>
                </article>
              </li>
            </ul>
          </article>
        </article>
      </section><!-- design process -->
      <!-- function -->
      <section class="row">
        <section class="row col-xs-12 col-sm-offset-2 col-sm-10 col-md-offset-0 col-md-12 col-xl-offset-2 col-xl-8 wrap_function">
          <h3 class="col-md-offset-2 col-md-4">FUNCTIONS</h3>
          <div class="row col-md-12" style="margin-left:auto; margin-right:auto;">
            <div class="col-md-offset-1 col-sm-10"><img src="image_user/function/<?php echo $json_data["work_fn_img_c"]; ?>" alt="" style="max-width:100%;">
              <article class="func_discription">
              <h4><?php echo $json_data["work_fn_name_a"]; ?></h4>
                <p style="font-family: 'Kanit', sans-serif; font-size:1em;"><?php echo $json_data["work_fn_disc_a"]; ?></p>
              </article>
            </div>
            <div class="col-sm-5 col-md-offset-1"><img src="image_user/function/<?php echo $json_data["work_fn_img_a"]; ?>" alt="" style="max-width:100%;">
              <article class="func_discription">
              <h4><?php echo $json_data["work_fn_name_b"]; ?></h4>
                <p style="font-family: 'Kanit', sans-serif; font-size:1em;"><?php echo $json_data["work_fn_disc_b"]; ?></p>
              </article>
            </div>
            <div class="col-sm-5"><img src="image_user/function/<?php echo $json_data["work_fn_img_b"]; ?>" alt="" style="max-width:100%;">
              <article class="func_discription">
              <h4><?php echo $json_data["work_fn_name_c"]; ?></h4>
                <p style="font-family: 'Kanit', sans-serif; font-size:1em;"><?php echo $json_data["work_fn_disc_c"]; ?></p>
              </article>
            </div>
          </div>
        </section>
      </section> <!-- function -->

      <section class="row">
        <section class="col-xs-12 col-sm-offset-1 col-sm-10 col-md-offset-3 col-md-6 wrap_concept">
          <h3>SHOWREEL</h3>
        <div class="box-video" style="">
            <div class="bg-video" style="background-image: url(image_user/head_preview/<?php echo $json_data["user_img_head"]; ?>); z-index:2;">
                <div class="bt-play">Play</div>
            </div>
            <div class="video-container">
                <iframe class="showreel_vdo_youtube" src='https://www.youtube.com/embed/<?php echo $json_data["user_video_showreel"]; ?>?rel=0&amp;showinfo=0' frameborder="0" allowfullscreen="allowfullscreen"></iframe>
            </div>
        </div>
          <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
          <script src="js/youtube.js"></script>
      </section>
      </section>
      <!-- tool develop -->
      <section class="row">
        <section class="col-xs-12 col-sm-offset-3 col-sm-6 wrap_tool">
          <h3>TOOL DEVELOP</h3>
          <article class="col-xs-3">
            <article class="c100 p<?php echo $json_data["skill_perc_a"]; ?> purple">
                <span><?php echo $json_data["skill_perc_a"]; ?>%</span>
                <article class="slice">
                    <article class="bar"></article>
                    <article class="fill"></article>
                </article>
            </article>
            <p style="text-align: center; font-size: 0.6em;"><?php echo $json_data["skill_name_a"]; ?></p>
          </article> <!--skill 1-->
          <article class="col-xs-3">
            <article class="c100 p<?php echo $json_data["skill_perc_b"]; ?> white">
                <span><?php echo $json_data["skill_perc_b"]; ?>%</span>
                <article class="slice">
                    <article class="bar"></article>
                    <article class="fill"></article>
                </article>
            </article>
            <p style="text-align: center; font-size: 0.6em;"><?php echo $json_data["skill_name_b"]; ?></p>
          </article> <!--skill 2-->
          <article class="col-xs-3">
            <article class="c100 p<?php echo $json_data["skill_perc_c"]; ?> green_r">
                <span><?php echo $json_data["skill_perc_c"]; ?>%</span>
                <article class="slice">
                    <article class="bar"></article>
                    <article class="fill"></article>
                </article>
            </article>
            <p style="text-align: center; font-size: 0.6em;"><?php echo $json_data["skill_name_c"]; ?></p>
          </article> <!--skill 3-->
          <article class="col-xs-3">
            <article class="c100 p<?php echo $json_data["skill_perc_d"]; ?> red_r">
                <span><?php echo $json_data["skill_perc_d"]; ?>%</span>
                <article class="slice">
                    <article class="bar"></article>
                    <article class="fill"></article>
                </article>
            </article>
            <p style="text-align: center; font-size: 0.6em;"><?php echo $json_data["skill_name_d"]; ?></p>
          </article> <!--skill 4-->
        </section>
      </section> <!-- tool develop -->
      <!-- Develop by -->
      <section class="row">
        <section class="col-xs-12 wrap_dev_by">
          <h3 class="row col-sm-offset-3 col-sm-6">DEVELOPED BY</h3>
          <section class="row">
            <article class="col-xs-12 img_dev_user">
              <img src="image_user/quote_footer/<?php echo $json_data["user_img_quote"]; ?>" alt="img_user">
            </article>
          </section>
          <article class="col-xs-offset-1 col-xs-10 col-md-4 wrap_quote_user">
            <h4>"MOTIVATION <br> QUOTE</h4>
            <p>
              	<?php echo $json_data["user_quote"]; ?>
            </p>
          </article>
        </section>
      </section><!-- Develop by -->

      <section class="row" style="margin-top: 30px;">
        <article class="col-xs-12">
          <h2 style="font-family: 'Titillium Web', sans-serif; color:#FFFFFF;">RELATED PROJECT</h2>
          <?php
          foreach ($rands as $value_rand) {
              // echo $value_rand."<br>";
              for ($i = 0; $i < 1; $i++) {
                  $data_rand = $conn->db_application_user($value_rand);
                // echo $data_rand["user_name"]."<br>";

                ?>
                <article class="col-xs-12 col-sm-4">
                  <a href="project_detail.php?stu_id=<?php echo $data_rand["student_id"]; ?>">
                  <article class="col-xs-12 hover_related">
                    <img src="image_user/function/<?php echo $data_rand["work_fn_img_a"]; ?>" alt="function" style="max-width: 100%;">
                  </article>
                  <article class="col-xs-12">
                    <h4 style="font-family: 'Titillium Web', sans-serif; color:#FFFFFF;"><?php echo  $data_rand["project_name"]; ?></h4>
                    <p style="font-family: 'Titillium Web', sans-serif; color:#FFFFFF;">by <?php echo $data_rand["user_name"]; ?></p>
                  </article>
                  </a>
                </article>
                <?php

              }
          }
           ?>
        </article>
      </section> <!-- Related project-->

      <!-- footer -->
      <div id="myID" class="bottomMenu hide">
      <footer class="row">
        <section class="wrap_footer">
          <article class="col-xs-12 wrap_r_footer">
            <article class="col-xs-3 col-sm-2 col-md-1 wrap_footer_l">
              <button id="browse_icon" type="button" name="button"><img src="image_web/btn_hamberger.png"></button>
            </article> <!-- wrap_footer_l -->
            <article class="col-xs-9 col-sm-3 col-md-6 wrap_footer_r">
              <p class="project_name_footer" style="font-family: 'Kanit', sans-serif;"><?php echo $json_data["project_name"]; ?> | <?php echo $json_data["work_name"]; ?> </p>
              <p class="tablet" style="font-size:0.8em; margin-top:-15px;text-transform: uppercase;">HOME > CATEGORY > <?php echo $json_data["work_type"]; ?><p>
            </article> <!-- wrap_footer_r -->
            <article class="col-sm-4 col-md-3 foot_email tablet">
              <h4>EMAIL</h4>
              <p><?php echo $json_data["user_email"]; ?></p>
            </article>
            <article class="col-sm-3 col-md-2 foot_fb tablet">
              <article class="row col-sm-4 wrap_logo_face">
                <img src="image_web/logo_facebook.png" alt="facebook">
              </article>
              <a href="https://www.facebook.com/<?php echo $json_data["user_facebook"]; ?>" target="_blank"><article class="col-sm-8">
                <h4>CONTACT</h4>
                <p>FB/<?php echo $json_data["user_facebook"]; ?></p>
              </article></a>
            </article>
          </article> <!-- wrap_r_footer -->
        </section> <!-- wrap_footer -->
      </footer>
      </div>
      <script src='https://www.marcoguglie.it/Codepen/AnimatedHeaderBg/demo-1/js/EasePack.min.js'></script>
      <script src='https://www.marcoguglie.it/Codepen/AnimatedHeaderBg/demo-1/js/rAF.js'></script>
      <script src='https://www.marcoguglie.it/Codepen/AnimatedHeaderBg/demo-1/js/TweenLite.min.js'></script>

      <script src="js/background_line.js"></script>
    </div>
    </section> <!-- container-fluid -->

    <section id="browse_wrap"></section> <!-- section -->

    <audio>
      <source src="audio/hover_effect.mp3"></source>
      <source src="audio/hover_effect.ogg"></source>
      </audio>

    <div id="sounddiv"><bgsound id="sound"></div>
  </body>
  <!-- Creator hover -->
  <script src="js/anime.min.js"></script>
  <script src="js/main.js"></script>

  <script>
  var a=0;

  var delayMillis = 4000;
  var x2 = document.getElementById('logo_2');
      x2.style.display = 'none';

    var svg = new Walkway({
      selector: "#logo",
      duration: 6000,
    }).draw();
    myFunction();



  function myFunction() {
            setTimeout(function(){
              var x = document.getElementById('logo');
                  x.style.WebkitTransition = "all 2s";
                  x.style.display = 'none';
                  x2.style.display = 'block';
             }, 2000);

        }


        (function() {
          [].slice.call(document.querySelectorAll('.grid--effect-vega > .grid__item')).forEach(function(stackEl) {
            new VegaFx(stackEl);
          });
          [].slice.call(document.querySelectorAll('.grid--effect-castor > .grid__item')).forEach(function(stackEl) {
            new CastorFx(stackEl);
          });
          [].slice.call(document.querySelectorAll('.grid--effect-hamal > .grid__item')).forEach(function(stackEl) {
            new HamalFx(stackEl);
          });
          [].slice.call(document.querySelectorAll('.grid--effect-polaris > .grid__item')).forEach(function(stackEl) {
            new PolarisFx(stackEl);
          });
          [].slice.call(document.querySelectorAll('.grid--effect-alphard > .grid__item')).forEach(function(stackEl) {
            new AlphardFx(stackEl);
          });
          [].slice.call(document.querySelectorAll('.grid--effect-altair > .grid__item')).forEach(function(stackEl) {
            new AltairFx(stackEl);
          });
          [].slice.call(document.querySelectorAll('.grid--effect-rigel > .grid__item')).forEach(function(stackEl) {
            new RigelFx(stackEl);
          });
          [].slice.call(document.querySelectorAll('.grid--effect-canopus > .grid__item')).forEach(function(stackEl) {
            new CanopusFx(stackEl);
          });
          [].slice.call(document.querySelectorAll('.grid--effect-pollux > .grid__item')).forEach(function(stackEl) {
            new PolluxFx(stackEl);
          });
          [].slice.call(document.querySelectorAll('.grid--effect-deneb > .grid__item')).forEach(function(stackEl) {
            new DenebFx(stackEl);
          });
        })();

        // animate.css

        $('.menu').addClass('animated fadeInDown');
        $('.heading').addClass('animated fadeInLeft');
        $('.name_thai').addClass('animated fadeInLeft');
        $('.name_eng').addClass('animated fadeInLeft');
        $('.cate').addClass('animated flipInX');
        $('.video_showreel').addClass('animated fadeInRight');


//
myID = document.getElementById("myID");

var myScrollFunc = function () {
    var y = window.scrollY;
    if (y >= 100) {
        myID.className = "bottomMenu show"
    } else {
        myID.className = "bottomMenu hide"
    }
};

window.addEventListener("scroll", myScrollFunc);

$(window).scroll(function() {

 if ($(this).scrollTop()>2700)
  {

     $('.wrap_footer').fadeOut();
  }
 else
  {
        $('.wrap_footer').fadeIn();
  }
});

  </script>
  <!-- fancy box popup -->
  <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.4/jquery.min.js"></script>
  <script type="text/javascript" src="js/fancybox/jquery.fancybox-1.3.4.pack.js"></script>
  <script type="text/javascript" src="js/fancybox/jquery.easing-1.4.pack.js"></script>
  <!-- <script type="text/javascript" src="js/fancybox/jquery.mousewheel-3.0.4.pack.js"></script> -->
  <link rel="stylesheet" href="js/fancybox/jquery.fancybox-1.3.4.css" type="text/css" media="screen" />
  <script type="text/javascript">
  $(document).ready(function() {

/* This is basic - uses default settings */

$("a.grouped_elements").fancybox();

/* Using custom settings */

$("a#inline").fancybox({
'hideOnContentClick': true
});

/* Apply fancybox to multiple items */

$("a.group").fancybox({
'transitionIn'	:	'elastic',
'transitionOut'	:	'elastic',
'speedIn'		:	600,
'speedOut'		:	200,
'overlayShow'	:	false
});



});
  </script>
</html>
