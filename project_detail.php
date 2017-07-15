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
    <title><?php echo $json_data["project_name"]; ?> | <?php echo $json_data["work_name"]; ?> ULTRA LINE 11.3 Graduate Exhibition</title>
    <!-- css -->
    <link rel="stylesheet" href="stylesheet/css/style_project_detail.css">
    <link rel="stylesheet" href="css/style_browse.css">
    <!-- bootstrap -->
    <link rel="stylesheet" href="vendor/twbs/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="vendor/twbs/bootstrap/dist/css/bootstrap-theme.min.css">
    <script src="vendor/twbs/bootstrap/dist/js/jquery.min.js"></script>
    <script src="vendor/twbs/bootstrap/dist/js/bootstrap.min.js"></script>
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
     }
      @media screen and (min-width: 959px) {
         .wrap_user_pinterest{
           top: 5px;
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
       z-index: 99999;
     }
     .popup-btn:hover {
       background-color: #000;
       color: #fff;
       letter-spacing: 2px;
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

            <svg width="128px" height="35px" viewBox="0 0 128 35" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                <!-- Generator: Sketch 45.2 (43514) - http://www.bohemiancoding.com/sketch -->
                <desc>Created with Sketch.</desc>
                <defs></defs>
                <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                    <g id="Project-Detail" transform="translate(-611.000000, -29.000000)" fill="#FFFFFE">
                        <g id="Group-6-Copy" transform="translate(611.000000, 29.000000)">
                            <path d="M9.60138142,19.8288358 C9.77010368,19.6120691 9.81210475,19.4246126 9.7259487,19.2719419 C9.57230375,18.9984874 9.0765475,18.9785178 9.02054607,18.9772294 L9.01408437,19.1910973 C9.11926654,19.193674 9.43660798,19.2313585 9.51343046,19.3682468 C9.56727798,19.4642297 9.48471177,19.6049831 9.4057354,19.7064415 L9.60138142,19.8288358" id="Fill-498"></path>
                            <path d="M10.3639418,25.0895341 C10.4538225,25.114013 10.5443617,25.1259303 10.6355594,25.1259303 C10.8548289,25.1259303 11.0783785,25.0560368 11.3025865,24.9165717 L11.1853794,24.7362012 C10.922651,24.8995009 10.6661781,24.9494249 10.4232038,24.8837185 C9.9329751,24.7516616 9.63962804,24.1960561 9.63929881,24.1960561 C9.28800665,23.3405846 10.0419514,23.0246142 10.0742163,23.0114085 L9.99157867,22.8136452 C9.98170166,22.8175102 9.00289043,23.2201229 9.44011253,24.2836646 C9.45361111,24.310076 9.77856458,24.9313879 10.3639418,25.0895341" id="Fill-499"></path>
                            <path d="M10.3344952,23.5273969 C10.3172639,23.5631561 10.1697217,23.8842878 10.3327002,24.1090099 C10.4199332,24.2296095 10.5721423,24.2906105 10.7857375,24.2906105 C10.8266616,24.2906105 10.8700986,24.288507 10.9156895,24.2839495 L10.8916376,24.0525664 C10.7602496,24.0644861 10.5908094,24.0623827 10.5272693,23.9750881 C10.4565496,23.8779774 10.5215256,23.6862099 10.5498853,23.6262606 L10.3344952,23.5273969" id="Fill-500"></path>
                            <path d="M10.1094443,18.7466129 L9.95602145,18.8992836 C10.3023751,19.232969 10.2467346,19.6191551 10.24443,19.6352596 C10.1535616,20.1918314 9.96095995,20.5345353 9.67156369,20.6540307 C9.25936333,20.8234501 8.7638669,20.4878322 8.76156226,20.4865438 C8.64139203,20.3973249 8.58213,20.3042408 8.58147153,20.2021382 C8.57949613,20.0214457 8.76551306,19.8388206 8.83695674,19.783421 L8.70262946,19.6149679 C8.68880165,19.6255969 8.36022661,19.8794039 8.36286048,20.2031045 C8.36417741,20.3741344 8.45405816,20.5268051 8.63250272,20.6588621 C8.65159827,20.6717457 9.00914586,20.9162121 9.41607849,20.9162121 C9.5095808,20.9162121 9.60538776,20.8991413 9.70053624,20.8675765 C9.64654194,20.9719337 9.61559399,21.0788676 9.60999702,21.1880562 C9.58925531,21.5971107 9.92276886,21.8718536 9.94877831,21.8915011 C10.100555,21.9845851 10.2404792,22.0309661 10.3662464,22.0309661 C10.4297885,22.0309661 10.489709,22.0193708 10.5456787,21.9952141 C10.7926038,21.8905348 10.8544997,21.5961444 10.8568043,21.5835829 L10.6424733,21.5423553 C10.6421441,21.5442879 10.5993437,21.7397966 10.4590903,21.7990612 C10.3613079,21.8406108 10.2286268,21.8103343 10.0761917,21.7182166 C10.0735578,21.716284 9.8131341,21.501772 9.82827884,21.1983631 C9.84013125,20.958728 10.0208804,20.7219917 10.3530771,20.5016821 C10.4989275,20.4292118 10.9348327,20.2742864 11.2008534,20.4224479 C11.3536177,20.5074797 11.4402061,20.6878502 11.4579847,20.9419793 L11.4316461,21.2241303 L11.6492694,21.2437778 L11.6759373,20.944556 C11.652891,20.5976649 11.5297576,20.3596403 11.3091712,20.2366019 C10.9351619,20.0272433 10.4179361,20.2362798 10.2783411,20.3006978 C10.358674,20.126125 10.4199115,19.9161222 10.460078,19.6694011 C10.4636995,19.6487874 10.5387648,19.1608208 10.1094443,18.7466129" id="Fill-501"></path>
                            <path d="M8.07379345,20.9381142 C8.06457491,20.9625931 7.8512316,21.5372019 8.11363071,21.8969766 C8.24433641,22.0767029 8.462289,22.1675323 8.76913463,22.1675323 C8.78098704,22.1675323 8.79283944,22.1675323 8.80436262,22.1672102 C8.82806743,22.1652777 9.3818382,22.1111665 9.58234141,21.7848892 L9.39500754,21.6747344 C9.27582501,21.8683106 8.91366814,21.9420692 8.79185174,21.9539865 C8.55249898,21.9601063 8.38294372,21.898265 8.29174604,21.773294 C8.09651056,21.5059592 8.27693053,21.0173484 8.2785767,21.012195 L8.07379345,20.9381142" id="Fill-502"></path>
                            <path d="M12.8756642,26.8207687 C12.8957475,26.8227012 12.9155015,26.8236675 12.9349263,26.8236675 C13.2256395,26.8236675 13.4412874,26.611088 13.4508352,26.6014253 L13.2944493,26.4519755 C13.2924739,26.4542301 13.1100785,26.6271925 12.8980521,26.6078671 C12.7541771,26.5936951 12.6198498,26.4915925 12.5085689,26.3244278 C12.5075812,26.321851 12.4183589,26.0876915 12.5121904,25.9479044 C12.5592708,25.8783329 12.6527732,25.8396821 12.7874297,25.8316298 C12.855581,25.9614322 12.9767389,26.0831822 13.1624266,26.1933371 L13.2760122,26.010712 C13.0564134,25.8802654 12.9438156,25.7446655 12.9415109,25.6077772 C12.9375601,25.3848908 13.2187256,25.2019436 13.2216887,25.2003331 L13.1025061,25.0209289 C13.0867029,25.0309137 12.7176322,25.2692604 12.7228999,25.6103539 C12.7228999,25.6151853 12.7252045,25.6196945 12.7255338,25.6245259 C12.5441261,25.6448176 12.4091404,25.7121344 12.3294658,25.8303415 C12.1730799,26.0638568 12.2991764,26.3882016 12.3143211,26.4204106 C12.4730117,26.664555 12.6619917,26.7988665 12.8756642,26.8207687" id="Fill-503"></path>
                            <path d="M14.8951826,26.6584352 C14.892878,26.6793711 14.8461268,27.1692702 15.1901758,27.4465898 C15.3366848,27.5644748 15.5279694,27.6237394 15.7617252,27.6237394 C15.9342436,27.6237394 16.1298083,27.5915304 16.3477609,27.5274345 L16.284548,27.322263 C15.8463382,27.4517433 15.5253356,27.4385376 15.3301001,27.2823239 C15.076261,27.0787629 15.1121475,26.6838804 15.1124767,26.6796932 L14.8951826,26.6584352" id="Fill-504"></path>
                            <path d="M30.2572184,19.6845394 C30.2256119,18.9260171 29.4400608,18.4177588 29.4097713,18.3981113 C29.2902595,18.3163004 29.1226797,18.2199955 28.9847308,18.1439822 C29.2016957,18.0399471 29.3379984,17.8238246 29.3531431,17.7935481 C29.4561932,17.4646941 29.4367684,17.1876965 29.2961857,16.9702857 C29.086464,16.6459409 28.6851283,16.5850659 28.6660328,16.5821671 C28.1794257,16.5222583 27.7886255,16.6198516 27.5035092,16.8710819 C27.1295,17.2015464 27.049167,17.7017524 27.0327053,17.9281818 C26.7485768,17.9159424 26.5138333,17.993244 26.3386811,18.1549333 C25.9752073,18.4895849 26.0048383,19.0661263 26.0061552,19.090283 L26.224437,19.0783657 C26.2241078,19.0732123 26.2000738,18.5752609 26.4891408,18.3095365 C26.638942,18.172004 26.8522854,18.1191813 27.1248907,18.1494577 L27.2496702,18.1639518 L27.2470363,18.0412354 C27.2467071,18.0347936 27.2374886,17.3938342 27.6500182,17.0298724 C27.8857494,16.8218021 28.2182752,16.7432121 28.6360725,16.7941024 C28.6393649,16.7944245 28.9577337,16.8446705 29.1124734,17.0862381 C29.2168405,17.2482495 29.2273759,17.4653383 29.1549446,17.70755 C29.1536276,17.7101268 28.9988879,17.9545932 28.7934462,17.9842255 C28.6950053,17.9974312 28.5988691,17.9616792 28.5056961,17.8795462 C28.4912098,17.8640859 28.4391909,17.7912935 28.4480802,17.7236546 C28.4543356,17.678884 28.4879175,17.6366902 28.5488257,17.5977173 L28.4296431,17.4186352 C28.2841219,17.5113971 28.2416508,17.6205857 28.2314445,17.6959548 C28.208069,17.8698835 28.3292269,18.007416 28.3509563,18.0302844 C28.4454463,18.1140278 28.5438872,18.1633076 28.6449618,18.1852097 L28.6360725,18.2013142 C28.6403526,18.2035689 29.0614422,18.4206576 29.2876257,18.575583 C29.2948688,18.5800923 30.0119394,19.0439021 30.0389365,19.6935579 C30.0553982,20.0894067 29.8111069,20.4810683 29.3133059,20.8575917 L29.2352775,20.9171784 L29.2876257,20.9989893 C29.2889426,21.001566 29.4338053,21.2328267 29.3626909,21.4818024 C29.3152813,21.6476788 29.1789786,21.7887543 28.9623429,21.90213 C28.6021615,21.7262688 28.123456,21.8116227 27.8557891,21.9137253 L27.9351344,22.1130991 C27.9440237,22.1095561 28.8346003,21.7807021 29.1183996,22.3437156 C29.1200458,22.3466144 29.2761025,22.6735359 29.1325567,23.0420071 C29.0209465,23.3286673 28.7539381,23.5625047 28.3486517,23.7415869 C28.3196791,23.6282111 28.2745741,23.5235318 28.2004966,23.4356012 C27.9611438,23.1534503 27.5515773,23.0874218 27.3142,23.0745382 C27.333954,23.0088318 27.3379048,22.941837 27.3257232,22.873876 C27.2829228,22.6290875 27.0432408,22.4683645 27.0106467,22.4503275 C26.6725239,22.3243902 26.375226,22.3269669 26.1283009,22.4570914 C25.7276237,22.6680604 25.6163427,23.1370237 25.6120627,23.1566712 L25.6084411,23.1718094 L25.6094288,23.1872697 C25.6337921,23.5373817 25.7447438,23.7673541 25.9393208,23.870745 C26.2076461,24.0140751 26.5174549,23.849165 26.5306242,23.8417569 L26.4249403,23.6546225 C26.4229649,23.6555888 26.2053415,23.7699308 26.0430294,23.6826444 C25.9231884,23.6182263 25.8491108,23.4478407 25.8286984,23.1895244 C25.8484524,23.1183424 25.9518317,22.7930314 26.2320094,22.6455141 C26.4206602,22.5459882 26.6567207,22.5469545 26.9105597,22.6387502 C26.9122059,22.6397165 27.084395,22.7563131 27.1107337,22.9105943 C27.1222568,22.9798437 27.1025028,23.0471605 27.0498255,23.1164099 L26.9082551,23.302578 L27.1453032,23.2867956 C27.1509002,23.2864735 27.7586652,23.2494331 28.031929,23.5721675 C28.1721825,23.7377218 28.2011551,23.9783231 28.1181882,24.2872076 C28.1148959,24.299447 27.7866501,25.4911806 26.8045465,26.0493628 C26.2619697,26.3579251 25.6173304,26.4171897 24.8887367,26.2261903 L24.8696411,26.2960838 C24.6648579,25.8828422 24.2763623,25.6512594 24.2562791,25.6399862 L24.1456566,25.8242218 C24.1509244,25.8274427 24.6688087,26.1311737 24.762311,26.6416866 C24.8205853,26.9605558 24.703049,27.2990725 24.4123358,27.6482183 C24.3902771,27.6746297 23.8717344,28.2907881 23.269237,27.9094334 L23.1731008,27.8485583 L23.115485,27.9451854 C23.1118634,27.950983 22.7431219,28.554902 22.1719017,28.6257619 C21.8699946,28.6624801 21.5601859,28.5436289 21.248731,28.2727511 C21.3623165,28.0524414 21.3725228,27.8566106 21.3731812,27.8388956 C21.3715351,27.7876833 21.3665966,27.7403361 21.3613288,27.693633 C21.5098131,27.7442011 21.6540174,27.7719009 21.7922955,27.7719009 C21.9055518,27.7719009 22.0155158,27.7551522 22.1211998,27.7213327 C22.4468117,27.6169755 22.6440226,27.3786288 22.7302818,27.2504369 C23.0463459,27.3612359 23.3031481,27.3483523 23.4934451,27.2108198 C23.8786483,26.9328561 23.8164231,26.2529237 23.8137893,26.2239356 L23.5961659,26.2442273 C23.6119691,26.4072049 23.6004459,26.868438 23.3633978,27.0388237 C23.2218274,27.1409263 23.0068379,27.1341624 22.7256725,27.0191762 L22.6315117,26.9811696 L22.5857483,27.0700665 C22.5841021,27.0736094 22.410596,27.4047181 22.0507438,27.5190601 C21.8304866,27.5883095 21.5809276,27.5589993 21.3112853,27.4420806 C21.1196714,26.7901701 20.5458174,26.7276846 20.5306727,26.7270404 C20.144811,26.7270404 19.8768149,26.8233454 19.7335983,27.0143449 C19.5607507,27.2443172 19.6453637,27.5174497 19.6489853,27.529367 L19.8577194,27.4652711 C19.8570609,27.4636606 19.8033958,27.2823239 19.9097383,27.1406042 C20.0078498,27.0098356 20.2225101,26.9405862 20.5204664,26.9402641 C20.5260634,26.9405862 20.9948919,26.9911544 21.1229638,27.5786468 L21.1160499,27.5921746 C21.1193422,27.593785 21.1229638,27.5950734 21.1262561,27.5970059 C21.1410716,27.6694762 21.1519363,27.7483883 21.1548994,27.8376073 C21.1545702,27.8414724 21.1334992,28.2411862 20.7818778,28.4901619 C20.4562659,28.7207785 19.955831,28.7520212 19.296047,28.5874331 C19.3513582,28.458275 19.3938293,28.3039938 19.3938293,28.1268442 L19.1755475,28.1268442 C19.1755475,28.5452393 18.8822005,28.8328658 18.8805543,28.8344763 C18.5944504,29.0992344 18.3034079,29.2219507 18.0182917,29.2026253 C17.7516126,29.183622 17.5399154,29.0425465 17.4154652,28.9359347 C17.4556317,28.905014 17.4961274,28.8747376 17.5326723,28.8364088 C17.7341632,28.6257619 17.8256901,28.34039 17.818447,27.9941431 C17.9280817,28.0205545 18.0324488,28.0340823 18.1302311,28.0340823 C18.9490349,28.0340823 19.346749,27.2050222 19.3513582,27.1947153 L19.1525012,27.1061406 C19.1327472,27.1483344 18.6566755,28.1397278 17.6455994,27.7129584 L17.5965436,27.8237574 L17.5932513,27.8244016 C17.5932513,27.8266562 17.5932513,27.8289108 17.5935805,27.8311655 L17.559011,27.9094334 C17.5721803,27.915231 17.5846912,27.918774 17.5978605,27.9239274 C17.6195899,28.2473059 17.547817,28.5069106 17.3739817,28.6895357 C17.0338835,29.0457674 16.4251308,29.019356 16.4096568,29.0180677 C15.4713413,29.0592952 15.2178315,28.3877372 15.207296,28.3590712 L15.1635079,28.2373211 L15.0495931,28.3017392 C14.7766586,28.4556983 14.5330258,28.4920945 14.3242917,28.4089952 C14.0098737,28.2840242 13.8406477,27.9232833 13.7784225,27.761594 C14.1570411,27.5628644 14.5876785,27.1431809 14.4171356,26.4874054 C14.5399397,26.4191223 14.7582215,26.2693503 14.8527115,26.0264944 C14.926789,25.8367833 14.9113151,25.6319339 14.8072773,25.4170998 L14.6097372,25.5088955 C14.687107,25.6683301 14.7006056,25.8164916 14.6492452,25.9491927 C14.5508044,26.203644 14.2475803,26.3328021 14.2446172,26.3337684 L14.1524318,26.3724192 L14.1833798,26.4655032 C14.467179,27.3206526 13.5259004,27.6414544 13.5045003,27.6504729 C12.7275092,27.7622382 12.1434489,27.6379114 11.7694396,27.2810355 C11.2153396,26.7521635 11.293368,25.8702807 11.3012696,25.7926569 C11.5616933,25.6245259 11.9791614,25.2306096 11.846151,24.4775629 L11.6308323,24.513637 C11.7878767,25.4019616 11.0629045,25.6834684 11.0263596,25.6973182 C9.77132145,26.242939 8.99400112,25.0560368 8.95877314,25.0006373 C8.16301573,23.8797635 8.79185174,23.0813021 9.00354889,22.8629249 C9.02659524,22.8419891 9.04931235,22.820087 9.07202946,22.7975406 L8.92189898,22.6422932 C8.92058205,22.6435816 8.89984034,22.6612965 8.86757545,22.6944718 C8.67135228,22.8751644 8.45537509,22.9663159 8.22524087,22.9663159 C8.22096083,22.9663159 8.2166808,22.9663159 8.21240076,22.9663159 C7.68891947,22.9589078 7.2461004,22.4905887 7.24346653,22.4876899 C6.46812161,21.6154698 7.07819131,20.6475889 7.10452999,20.6070056 L7.16017045,20.5213296 L7.07588667,20.4623871 C6.68870806,20.1924755 6.47536474,19.8855236 6.44277063,19.5499057 C6.3914102,19.0248987 6.79702589,18.5907212 6.8167799,18.5701075 C6.83752161,18.5894329 6.85332482,18.6097245 6.8757127,18.62905 L6.90073444,18.6448324 C6.93168239,18.6596485 7.14239184,18.7546651 7.36429523,18.7546651 C7.39787705,18.7546651 7.43145887,18.7504779 7.46504068,18.7453245 C7.4976348,18.7759231 7.53022892,18.8020124 7.56315227,18.8271354 C7.47557616,18.9285938 7.33729808,19.1260351 7.34454122,19.3627713 C7.35079666,19.554737 7.44956671,19.7276994 7.63788828,19.8771493 L7.77517865,19.7106287 C7.63887598,19.6027285 7.56743231,19.4838772 7.56315227,19.3572958 C7.55689683,19.1740265 7.68661484,19.011371 7.74851074,18.9443762 C7.84859773,18.9907572 7.95131858,19.0139477 8.05535637,19.0139477 C8.07148882,19.0139477 8.08827973,19.0133035 8.1047414,19.0123372 C8.46492286,18.9868921 8.69933713,18.6886366 8.7128357,18.6709217 C8.93012982,18.3510862 8.99926886,18.0592725 8.91794818,17.8032108 C8.80699649,17.4527767 8.45537509,17.3110571 8.44023035,17.3052594 L8.35890967,17.5033449 C8.36154354,17.5046333 8.62855192,17.6122114 8.70921413,17.8663405 C8.77012233,18.0583062 8.71020183,18.2892449 8.53472037,18.546917 C8.5330742,18.5494937 8.35166654,18.7804323 8.08893819,18.7991136 C7.95757402,18.8052333 7.82390521,18.7562756 7.69188258,18.6538509 C7.75838774,18.6023165 7.82522215,18.5208277 7.85979167,18.3881265 C7.89172732,18.3195213 7.9269553,18.1281998 7.58191858,17.8222141 L7.43508043,17.9803604 C7.6694947,18.1884306 7.66126386,18.2911774 7.66554389,18.2911774 C7.66554389,18.2911774 7.66554389,18.2911774 7.66587313,18.2911774 L7.65006992,18.3262852 C7.62834051,18.4190472 7.58488168,18.4796001 7.51771805,18.511165 C7.36330753,18.5842794 7.10946849,18.5021464 7.00806457,18.4580201 C6.73973925,18.2245047 6.60047348,17.9758511 6.59421804,17.7185011 C6.58434104,17.3278058 6.8865774,17.0372804 6.8865774,17.0372804 C7.54438596,16.4733006 7.98621734,16.8330753 8.00432518,16.8482135 L8.16927117,16.7113252 C8.01881145,16.4768436 7.97173106,16.2655525 8.02901769,16.0838936 C8.11363071,15.8159146 8.40269773,15.688689 8.40203926,15.688689 C8.66180451,15.5991479 8.86988009,15.6010805 9.02165674,15.6931983 C9.21162447,15.8088286 9.26660647,16.0400893 9.27812964,16.1016086 C9.2600218,16.1811648 9.22479381,16.2739268 9.15598401,16.3035591 C9.10890362,16.3235287 9.05161699,16.3125776 9.0074997,16.2977615 C9.00717046,16.2294784 9.02066904,16.1737568 9.02461984,16.160229 L8.81456886,16.1016086 C8.76156226,16.2810128 8.75892839,16.6578583 9.13194996,16.7992558 C9.13688847,16.8008663 9.62909257,16.9654543 9.72950879,17.2955967 C9.77263838,17.4376385 9.73543499,17.5970731 9.61921556,17.7700355 C9.58892608,17.8090084 9.56423357,17.8425058 9.54711342,17.8666626 L9.72292412,17.9935661 C9.74893357,17.9616792 9.77296761,17.9297922 9.79469703,17.8975832 C9.94647368,17.7052954 10.1430261,17.52879 10.2180913,17.5365202 L10.2437715,17.3245849 C10.15422,17.3129896 10.0580838,17.3555055 9.96589845,17.4202456 C9.96655692,17.357116 9.95733838,17.2949526 9.93857207,17.2337554 C9.8052325,16.7973233 9.22578151,16.6043913 9.2060275,16.5982716 C9.15960558,16.5805566 9.12668223,16.5554336 9.09869738,16.528378 C9.1451193,16.5280559 9.19384586,16.5203258 9.24290166,16.499712 C9.37196119,16.4443125 9.45756191,16.3183752 9.49641146,16.1251211 L9.4997038,16.1086946 L9.4977284,16.0919459 C9.495753,16.0761634 9.44735567,15.7015726 9.13853463,15.5128278 C8.92815442,15.3843138 8.65620754,15.3752953 8.32302322,15.4893152 C8.30722001,15.4960791 7.93716154,15.6545474 7.82094211,16.0185093 C7.76892322,16.1814869 7.77583712,16.3563819 7.84168382,16.5409395 C7.58883249,16.4758773 7.19902001,16.48554 6.73875155,16.8794563 C6.72360681,16.8936282 6.36474228,17.2353659 6.37560699,17.7213999 C6.38153319,17.9848697 6.49939879,18.2351337 6.71570521,18.4689712 L6.66204015,18.4187251 C6.64162767,18.4396609 6.16423907,18.9347135 6.22514727,19.5682648 C6.26136296,19.9451103 6.47832784,20.2849154 6.87077419,20.57995 C6.72261911,20.8653219 6.33774513,21.7942298 7.08016671,22.6294096 C7.10057919,22.6516338 7.58883249,23.170521 8.20779149,23.1801837 C8.32434015,23.1805058 8.44154729,23.1650455 8.55249898,23.1299377 C8.32203552,23.5657256 8.17124657,24.2665938 8.77637777,25.1182002 C8.78362091,25.1294733 9.38513054,26.0548383 10.3823788,26.0548383 C10.5957222,26.0548383 10.8275026,26.010712 11.0750862,25.9079652 C11.0648799,26.2178159 11.1017541,26.9418746 11.6156876,27.4330621 C11.9412995,27.7445232 12.3966295,27.9020253 12.9816774,27.9020253 C13.1604512,27.9020253 13.3517359,27.8872092 13.554873,27.8575769 C13.5621161,27.8550001 13.570347,27.8517792 13.5779193,27.8492025 C13.6552892,28.0469659 13.8554632,28.4527995 14.2409956,28.6067585 C14.4866038,28.704996 14.7601969,28.6824497 15.0542024,28.5413742 C15.1770065,28.7626502 15.5302741,29.2338681 16.3148375,29.2338681 C16.3454562,29.2338681 16.3767334,29.2332239 16.4086691,29.2316134 C16.4313862,29.2325797 16.8488543,29.2496505 17.2268144,29.0570406 C17.3657509,29.1868429 17.6353931,29.3887934 18.0001839,29.4155269 C18.0268518,29.4174594 18.0535197,29.4184257 18.0798584,29.4184257 C18.4034949,29.4184257 18.7228514,29.2744514 19.0320017,28.9887575 C19.0385864,28.9823157 19.1136516,28.9072687 19.1933261,28.7829419 C19.5037933,28.8634644 19.7859465,28.9059803 20.0361639,28.9059803 C20.39009,28.9056582 20.6824493,28.8248136 20.9102789,28.6634464 C21.0001597,28.5996726 21.0692987,28.5275244 21.1279023,28.4540878 C21.4350771,28.7146587 21.747849,28.8467157 22.0606208,28.8467157 C22.1067135,28.8467157 22.1531354,28.8438169 22.1992281,28.8380193 C22.7365372,28.7710245 23.1059372,28.3339482 23.2438861,28.1423046 C23.8239955,28.4363729 24.3672308,28.0443892 24.581891,27.782852 C24.9150754,27.382816 25.0477565,26.9856788 24.9769713,26.6020695 C24.9674235,26.5495688 24.9499741,26.5018994 24.9341709,26.4532638 C25.1942654,26.5141389 25.4467875,26.5498909 25.6867987,26.5498909 C26.1335686,26.5498909 26.544452,26.4445674 26.9145105,26.2342425 C27.9743132,25.6316119 28.3157283,24.3938194 28.3295561,24.3416408 C28.3661011,24.2057188 28.3769658,24.0830024 28.3763073,23.9667279 C28.8741084,23.7609123 29.1974157,23.4758625 29.3366815,23.1180203 C29.5134798,22.6648395 29.3238413,22.2680244 29.3152813,22.2499874 C29.2718224,22.1643114 29.2174989,22.0947399 29.1562615,22.0364416 C29.3745433,21.9014859 29.5180891,21.7352873 29.5740588,21.5362356 C29.6402348,21.3011098 29.5704372,21.0859536 29.5180891,20.9712895 C30.0274134,20.5661001 30.2759847,20.133533 30.2572184,19.6845394" id="Fill-505"></path>
                            <path d="M25.8026889,25.4628366 C25.8800588,25.4628366 25.93109,25.4589715 25.9426132,25.4573611 C27.2822643,25.1201327 27.049167,23.9580314 27.0468624,23.9464362 L26.8328606,23.9899184 C26.8410914,24.0295355 27.0224991,24.9648852 25.9060682,25.2473583 C25.8991543,25.2486467 25.2476012,25.2982486 24.8505456,24.9500691 C24.653664,24.7774288 24.5496262,24.5307077 24.5420538,24.217314 L24.3234427,24.2221454 C24.3326613,24.5977025 24.4613916,24.8966021 24.7060121,25.1101479 C25.0605966,25.4203207 25.5603731,25.4628366 25.8026889,25.4628366" id="Fill-506"></path>
                            <path d="M27.0814319,19.7220629 C26.9859542,19.7442031 26.888501,19.7020653 26.7815002,19.5970779 L26.634662,19.772414 C26.7647092,19.9002557 26.8980488,19.9645337 27.0323761,19.9645337 C27.0629948,19.9645337 27.0939428,19.9613198 27.1245615,19.9545349 C27.4419426,19.8849004 27.623021,19.4703074 27.6305934,19.4524524 L27.432724,19.3524644 C27.4310779,19.3560354 27.2881905,19.6770683 27.0814319,19.7220629" id="Fill-507"></path>
                            <path d="M27.8241827,20.3699472 C27.4923153,20.1821686 27.0136098,20.2359577 26.9905634,20.2388565 L27.0172313,20.4511139 C27.1653864,20.433399 27.5927315,20.4272793 27.7975148,20.6124811 C27.8847617,20.6917153 27.9242697,20.798005 27.9183435,20.9303841 C27.9170265,20.9406909 27.8850909,21.1848353 27.6249964,21.284039 L27.7043417,21.4834128 C28.0911911,21.3358956 28.1339914,20.9687128 28.1359668,20.9468107 C28.1438684,20.7748145 28.0961296,20.6318065 27.9999934,20.5168203 C28.4461048,20.2626912 28.6782144,19.9769972 28.6844699,19.6661802 C28.6946761,19.1501918 28.0776925,18.7862299 28.051683,18.7714138 L27.9400729,18.9550052 C27.9456699,18.957904 28.4737604,19.2693652 28.4658588,19.6619931 C28.4609203,19.9074258 28.2446139,20.1454504 27.8241827,20.3699472" id="Fill-508"></path>
                            <path d="M18.6423439,11.095055 L18.7988608,10.9275296 C18.6383951,10.7584778 18.1903837,10.8149556 18.0564828,10.8367072 L18.0898683,11.0702506 C18.3066943,11.035906 18.5888554,11.0393404 18.6423439,11.095055" id="Fill-509"></path>
                            <path d="M18.3820948,11.3467783 C18.5865488,11.3585626 18.7775042,11.5378268 18.9490349,11.8799285 L19.1284671,11.7742269 C18.9203916,11.359991 18.6731372,11.1418029 18.3929595,11.1257334 C17.9195217,11.0982368 17.5596694,11.6613834 17.5445247,11.6853091 L17.7124338,11.8110082 C17.7983637,11.6760245 18.0900646,11.3353511 18.3820948,11.3467783" id="Fill-510"></path>
                            <path d="M22.0583162,24.5442355 L21.8551791,24.5258764 C21.8545206,24.5332845 21.792954,25.2699046 22.6871522,25.5440033 L22.7480604,25.3536481 C22.015845,25.1291512 22.0563408,24.5683923 22.0583162,24.5442355" id="Fill-511"></path>
                            <path d="M18.5895119,12.5592516 L18.7261438,12.7172485 L19.1548058,12.3143565 C19.1571104,12.3119522 19.410291,12.0883523 19.6772994,12.1975762 L19.7517062,11.9993932 C19.3681491,11.8427703 19.0349648,12.1409034 19.0194908,12.1549858 L18.5895119,12.5592516" id="Fill-512"></path>
                            <path d="M17.3930773,12.2172014 L17.787499,12.6884193 L17.9455311,12.5618378 L17.5376108,12.0774143 C17.5254292,12.0674295 17.233399,11.8271502 16.8264664,11.8970438 L16.8620236,12.0938409 C17.1622846,12.0423064 17.3897849,12.2172014 17.3930773,12.2172014" id="Fill-513"></path>
                            <path d="M29.4522424,15.1643262 C29.2365945,15.6062339 28.5636412,15.6419859 28.4678342,15.6452068 C28.2245306,15.5927061 27.6773445,15.7676011 27.4916568,15.8313749 C26.5454397,15.7444106 26.1980984,14.9675292 26.1276424,14.7791064 C26.325841,14.4463873 26.5849477,14.3098211 26.7140073,14.2608634 C26.7360659,14.3710182 26.785451,14.4927683 26.8707224,14.6251473 C26.7258597,14.6670191 26.6330158,14.7082466 26.6297235,14.709857 L26.7169704,14.8902275 C26.7275059,14.8850741 27.8047579,14.3980738 28.4079137,15.1746331 L28.5705551,15.0538493 C28.5669335,15.0496621 28.5633119,15.0464412 28.5600196,15.0422541 C28.9195426,14.899246 29.1691016,14.9836337 29.1802955,14.9878208 L29.2168405,14.895381 L29.2461422,14.8229107 C29.4094421,14.6905316 29.581302,14.6364205 29.7073984,14.6196718 C29.560231,14.8583406 29.454547,15.1572403 29.4522424,15.1643262 Z M27.0136098,16.2169168 C26.3261702,15.9766376 25.9403085,15.1859063 25.84088,14.9552897 C25.885985,14.9333876 25.9261515,14.9147064 25.9584164,14.9002123 C26.0703558,15.1585286 26.4321834,15.8194576 27.2463779,15.9949967 C27.1726296,16.0587706 27.094272,16.1338176 27.0136098,16.2169168 Z M26.2343141,17.1297203 C25.8207968,17.6147881 25.1136032,18.0489656 25.1149201,18.0489656 C24.1552044,18.4973151 23.3008434,18.025453 22.7500358,17.5487596 C22.7470727,17.3809506 22.765839,16.8005442 23.115485,16.2716722 L23.1431406,16.4356161 L23.284711,16.2842337 C23.2909664,16.2777919 23.4381338,16.1196456 23.5224176,15.9115754 C23.5448055,15.8555317 23.5583041,15.8020647 23.5675226,15.7498861 L23.5741073,15.7572942 C23.5790458,15.753107 24.0692745,15.3553257 24.6312761,15.5250672 L24.6365438,15.5086406 C24.64247,15.5147603 24.6483962,15.5202359 24.6543224,15.5263556 C24.3514276,15.8336296 24.1262319,16.2169168 24.1640937,16.6668768 L24.3672308,16.6507723 C24.3168581,16.0520067 24.8367178,15.5685494 25.3124602,15.2551557 C25.3898301,15.5640401 25.6706663,16.3515505 26.5474151,16.7409575 C26.3739091,16.9490277 26.2461665,17.1139379 26.2343141,17.1297203 Z M22.4168515,18.9762631 C22.4000606,19.0529206 21.9802878,20.8170083 19.8126144,21.2347593 C19.7414999,21.0376401 19.6572162,20.8643556 19.5587753,20.7168383 C19.93904,20.6791537 20.8628693,20.512311 21.5196901,19.7711816 C21.7899909,19.4658402 21.977654,19.0976911 22.0892641,18.6747868 C22.1672925,18.7842974 22.2789026,18.9073358 22.4168515,18.9762631 Z M22.7069062,19.0236104 C22.7187586,19.0207116 23.1401775,18.9269833 23.7087638,18.8760931 C23.6606957,19.0226441 23.5257099,19.2774174 23.1401775,19.4320207 L23.0443705,19.4709936 L23.0848663,19.5637556 C23.0865124,19.5672986 23.234009,19.9116129 23.0720262,20.1522143 C22.9594283,20.319057 22.7181001,20.4037667 22.3546263,20.4037667 L22.2673795,20.4037667 L22.2538809,20.4878322 C22.2505885,20.5071576 22.2091051,20.7435718 22.042513,20.9725779 C21.931232,21.0682386 21.8380589,21.1581018 21.7669445,21.2334709 C21.6056201,21.3381502 21.3939229,21.4122309 21.1127575,21.4122309 C21.0982712,21.4122309 21.0834557,21.4119088 21.068311,21.4115867 L20.9965381,21.4096542 L20.9705286,21.4750385 C20.9688825,21.4792257 20.803278,21.8882802 20.4763491,22.0174383 C20.3387295,22.0712274 20.1882698,22.0638193 20.0295793,22.0016559 C20.0002775,21.9063172 19.9739388,21.8145215 19.954514,21.7356094 C19.9314677,21.6264209 19.9047998,21.5236741 19.8758272,21.4247924 C22.1106643,20.9819185 22.5817975,19.1666184 22.61505,19.0229662 C22.6456688,19.0242546 22.6749705,19.0290859 22.7069062,19.0236104 Z M24.9815805,18.8731943 C24.6589317,19.0941481 24.1275488,19.5276815 23.9392272,20.0929497 L23.9415319,20.0939159 C23.6830836,20.1325668 23.4466939,20.1966627 23.229729,20.2755748 C23.2333506,20.2707434 23.2389475,20.2672004 23.2422399,20.262047 C23.4048812,20.0208015 23.3498992,19.726089 23.3054527,19.5782496 C23.7617704,19.361483 23.8898422,19.0174907 23.9257287,18.8593444 C24.2572668,18.8384086 24.6233745,18.8355097 24.9815805,18.8731943 Z M26.7209212,19.8629773 C26.7232258,19.8665203 26.7739278,19.9483312 26.8266051,20.0858637 L26.8042173,20.0845753 C26.8032296,20.1000357 26.6870101,21.6402707 25.1843884,22.5182885 C25.0194424,22.3955721 24.9009183,22.2651256 24.8380347,22.1894344 C25.7391468,21.537524 26.2178524,20.8572696 26.2537388,20.1660641 C26.2777729,19.7028985 26.0989991,19.3418355 25.9356993,19.1089643 C26.2869914,19.2655001 26.5721076,19.504491 26.7209212,19.8629773 Z M25.6640816,22.7547027 C25.5593854,22.727325 25.461603,22.6867416 25.371393,22.6371398 C26.4121002,21.9926374 26.7946695,21.0692049 26.9313014,20.530026 C26.9922096,21.0878861 26.819362,21.9227438 25.6640816,22.7547027 Z M22.4053283,20.6962245 C22.4175099,20.6614388 22.4287039,20.6276193 22.4356178,20.60153 C22.4869782,20.5999196 22.5307663,20.5918673 22.5778467,20.5863918 C22.5175969,20.622788 22.4603103,20.6591842 22.4053283,20.6962245 Z M25.1432342,23.1608583 C24.6213991,22.9959482 24.2602299,22.3801118 24.2566083,22.37367 C23.7459672,21.4782594 22.8916062,21.0128391 22.5439356,20.8527603 C22.6538996,20.7793238 22.775716,20.708786 22.9074094,20.6411471 C23.0970479,20.730044 24.0893577,21.2325046 24.6111928,22.2267969 C24.6263376,22.248699 24.9503034,22.7034903 25.4599568,22.9002874 C25.3667837,22.9685705 25.2531982,23.059722 25.1432342,23.1608583 Z M24.762311,19.2989975 C24.9065153,19.3592283 25.2508935,19.5325128 25.3424205,19.8446182 C25.4135349,20.0877962 25.3137772,20.3718797 25.0441349,20.6910711 C25.0398549,20.6962245 24.6398361,21.1825806 24.2809716,21.4119088 C24.1624476,21.2821065 24.0406312,21.1664761 23.9204609,21.0637294 C24.1061486,20.9471327 24.4982657,20.6901048 24.5983527,20.5432317 C24.6105344,20.5322806 24.893346,20.2742864 24.8288162,19.9934238 C24.793259,19.8381764 24.6582732,19.7173926 24.4373575,19.629784 C24.5390907,19.5064235 24.6513593,19.3956245 24.762311,19.2989975 Z M26.0499433,20.1560793 C26.0173492,20.7822226 25.5699208,21.4093321 24.727083,22.0216255 C24.6319345,21.8560711 24.5265798,21.7034004 24.413982,21.5652237 C24.7945759,21.3130272 25.1857053,20.8373 25.2024962,20.8166862 C25.5162558,20.4456384 25.6291829,20.0997136 25.5383144,19.7892187 C25.4402028,19.4542449 25.1320403,19.2555153 24.9338417,19.157922 C25.0859476,19.0410033 25.2169825,18.9582261 25.2861215,18.9169985 C25.3802823,18.9340693 25.4727969,18.9546831 25.5630069,18.9788399 C25.6173304,19.0284417 26.0851713,19.4764691 26.0499433,20.1560793 Z M24.2931533,20.0568756 C24.2496944,20.0591302 24.2095279,20.0652499 24.1670568,20.069115 C24.2068941,19.9734542 24.2569376,19.8816585 24.3148827,19.7950163 C24.4528315,19.8423635 24.6026328,19.9183768 24.6299591,20.0365839 C24.662224,20.1760489 24.518349,20.3435358 24.4449299,20.4134294 C24.3626215,20.5319585 23.9932215,20.7831889 23.7548565,20.930062 C23.5092483,20.7409951 23.2860279,20.6099044 23.1375436,20.5316365 C23.4713864,20.3889505 23.8595527,20.2804061 24.3043472,20.2562494 L24.2931533,20.0568756 Z M24.777785,23.6427052 C24.5364568,23.5473665 23.9649074,23.266826 23.6998745,22.6674162 C23.6932898,22.6538884 23.0782816,21.3938718 21.8979794,21.3938718 C21.897321,21.3938718 21.8963333,21.3938718 21.8956748,21.3938718 C21.9035764,21.3854974 21.9150996,21.3745464 21.9233304,21.366172 C22.0105773,21.3023982 22.0823502,21.2318604 22.1439169,21.1577797 C22.2068005,21.1027023 22.276598,21.0466586 22.3536386,20.9880382 C22.5455818,21.0675945 23.5332823,21.5146556 24.078493,22.4709412 C24.0942962,22.498641 24.443613,23.0925752 24.9898114,23.3161058 C24.8936752,23.4230397 24.813013,23.534805 24.777785,23.6427052 Z M23.2501415,23.677813 C22.8247718,22.7160518 21.6099001,22.5066932 21.1318531,22.4625669 C21.3261008,22.2042506 21.4703051,21.9907048 21.482816,21.9717015 C21.5572228,21.8541386 21.6688329,21.684075 21.7198641,21.6067734 C22.8833754,21.4724618 23.5085898,22.7385981 23.5135283,22.748905 C23.6113107,22.9698589 23.7449795,23.1502294 23.889513,23.2977466 C23.7321394,23.3640972 23.473691,23.4897124 23.2501415,23.677813 Z M22.9074094,24.095886 L22.9126771,24.0933093 C22.9120187,24.0945977 22.9116894,24.095886 22.9107017,24.0971744 C22.909714,24.0968523 22.9083971,24.0965302 22.9074094,24.095886 Z M23.803583,24.8350829 L23.8276171,24.8457119 C24.0896869,24.9652073 24.5193367,25.1745659 24.657944,25.2737697 C24.653664,25.3333564 24.6348976,25.4451217 24.5545647,25.5101839 C24.4785117,25.571381 24.3570246,25.5813658 24.1914201,25.5398162 C24.0919916,25.5163036 23.8737098,25.4290172 23.8737098,25.3227274 L23.6699142,25.3227274 C23.6699142,25.5375615 23.9010361,25.6525477 24.0412896,25.7024717 C24.0106709,25.785893 23.9579935,25.8838084 23.8891837,25.9060327 C23.8295925,25.9247139 23.7535395,25.8809096 23.694936,25.8329182 L23.604726,25.5733135 L23.4114659,25.6374095 L23.5194545,25.9472602 L23.5392085,25.9649752 C23.5971536,26.0158654 23.6537818,26.0516174 23.7094222,26.0757742 C23.6847297,26.1153913 23.6491725,26.157263 23.604726,26.1656373 C23.549744,26.1769105 23.4717156,26.1343946 23.3857857,26.0461419 L23.4104782,25.871569 L23.2083288,25.8445134 L23.1707962,26.1105599 L23.2014149,26.1447015 C23.2656155,26.2165276 23.3291575,26.2703166 23.3917119,26.307357 C23.3574716,26.3720971 23.3133543,26.4236315 23.2929418,26.4239536 L23.2926126,26.4239536 C23.2830648,26.4239536 23.235326,26.3962539 23.1780393,26.2741817 L23.1444575,26.1472782 L22.9472467,26.1975242 L22.9860962,26.3398881 C22.9959732,26.3617902 23.0130934,26.3972201 23.0358105,26.4355489 C22.8247718,26.5566548 22.571262,26.3057465 22.5597388,26.2941513 L22.5320832,26.2658074 L22.4919167,26.2632306 C21.9898356,26.2335983 21.5878415,25.6870114 21.5861953,25.6870114 C21.516727,25.5526998 20.7334805,24.9990268 20.4002962,24.7677661 C20.1616019,24.6006013 20.0315547,24.4021938 20.0141053,24.1789853 C19.9976436,23.9686604 20.0815982,23.7647774 20.1790513,23.6005114 C20.2567504,23.552842 20.8036072,23.2594179 21.5792814,23.8356372 C21.6793684,23.8891042 22.1745356,24.1425891 22.4395686,24.1329264 C22.7760452,24.2504893 23.6162492,24.581598 23.788109,24.813825 L23.803583,24.8350829 Z M20.6126518,23.0890322 C20.67784,23.088066 22.0405376,23.0948299 22.6545581,23.9979706 C22.5715912,23.96705 22.510683,23.945792 22.486649,23.9374177 L22.4636026,23.9293654 L22.4389101,23.9325863 C22.2947058,23.9554547 21.8943579,23.7760505 21.6895746,23.6687945 C21.1397547,23.2587737 20.6827785,23.2458901 20.3914069,23.3093419 C20.4207087,23.2768108 20.4424381,23.2545866 20.4427673,23.2542645 C20.4977493,23.205951 20.5547067,23.1499073 20.6126518,23.0890322 Z M22.9284803,24.0604561 C22.4211315,23.0935415 21.2470848,22.920257 20.7884625,22.8932014 C20.8556261,22.8146114 20.9218021,22.7331226 20.9856734,22.652278 C21.2678265,22.6680604 22.7042723,22.8007615 23.0940848,23.8282291 C23.0298843,23.899089 22.9735853,23.9763906 22.9284803,24.0604561 Z M21.4535142,21.6428475 C21.4054461,21.7166061 21.3521103,21.7987391 21.3109561,21.8644455 C21.3060176,21.8721757 20.8885495,22.4905887 20.5072971,22.9051188 L20.4947862,22.8616366 C20.4891892,22.8629249 20.4779953,22.8658238 20.4539613,22.8526181 C20.3374126,22.7856233 20.20967,22.5176443 20.1072784,22.2348492 C20.164565,22.2470886 20.2215224,22.2548187 20.2771629,22.2548187 C20.3713236,22.2548187 20.463509,22.2374259 20.5524021,22.2023181 C20.8760386,22.0750924 21.064031,21.7507477 21.1318531,21.6112826 C21.2688142,21.6099943 21.388326,21.5900247 21.4989484,21.5613587 L21.4380402,21.6451021 L21.4535142,21.6428475 Z M20.4496812,25.9301894 C19.7582908,25.9208488 19.3648568,25.2798894 19.1399903,24.5419809 C19.1281379,24.4476085 19.1050916,24.360322 19.0678882,24.2820541 C18.8347908,23.3425172 18.8417047,22.3482249 18.8417047,22.3340529 C18.995786,20.9313503 18.3290882,20.4301781 18.1071848,20.3039187 C18.3287589,20.2594703 18.6063028,20.2481971 18.8736404,20.3680147 C19.301644,20.5606246 19.5982834,21.0344192 19.7553277,21.7790916 C19.7819957,21.8869918 20.0256285,22.8384461 20.3509112,23.0249363 C20.3604589,23.0304118 20.3703359,23.0329885 20.380213,23.0371757 C20.3538743,23.0622987 20.3281941,23.0864555 20.3031723,23.1086797 C20.2814429,23.1296156 19.7668509,23.627889 19.810639,24.1934793 C19.8326976,24.4785291 19.9913882,24.7265385 20.2821014,24.9300995 C20.6195657,25.1649032 20.9761256,25.4241858 21.198029,25.600047 C21.0696279,25.7900802 20.6050794,25.9034559 20.4496812,25.9301894 Z M19.1534889,26.636211 C18.8045014,26.6577911 18.5345299,26.4471441 18.437406,26.3588914 C18.4785602,26.250347 18.6059735,26.0384117 18.6935497,25.9069989 C18.8239261,25.7594816 18.9263178,25.5636508 18.9338901,25.5491568 C19.0145523,25.3626666 19.0701928,25.1916367 19.10575,25.0325242 C19.3171179,25.5130827 19.6242928,25.9076431 20.0694165,26.0596697 C19.7763987,26.4249199 19.4688946,26.6201065 19.1534889,26.636211 Z M17.3861634,27.3815276 L17.3324983,27.4069727 L17.3288767,27.4652711 C17.3222921,27.5780026 17.2669808,27.8878533 17.0961087,27.9674096 C16.9907539,28.0166894 16.8528051,27.9661212 16.7352687,27.8968719 C16.8965931,27.6813936 17.2139743,27.1972921 17.0124833,26.9589454 C16.9094333,26.8355848 16.8402942,26.3476183 16.8073709,25.9443614 C17.9139247,25.7530398 18.1424128,24.4962441 18.187847,24.0053787 L18.2003579,24.0050566 C18.2036502,24.0053787 18.6352753,23.995716 18.8370955,24.2843088 C18.8522402,24.3062109 18.8640926,24.3306897 18.8762743,24.3551686 C18.8960283,24.4324702 18.9174285,24.5094498 18.940804,24.5854631 C18.9654965,24.8167238 18.9026129,25.11047 18.7488609,25.4650912 C18.7478732,25.4667017 18.6530539,25.6477164 18.5315668,25.7868593 C18.4841571,25.857075 18.247109,26.2136288 18.2224165,26.3563147 C18.2201119,26.3637228 17.9804299,27.0984104 17.3861634,27.3815276 Z M16.4778081,27.472035 C16.4122906,27.4282307 16.394512,27.3241956 16.3922074,27.2584892 L16.7787275,26.9441292 C16.8017739,27.0017833 16.8264664,27.0520294 16.8547805,27.086171 C16.9044947,27.1444693 16.8616944,27.2861889 16.7810322,27.443691 C16.6766652,27.4874953 16.5515564,27.5216368 16.4778081,27.472035 Z M16.2417477,26.8423487 C16.2289076,26.8120722 16.2361507,26.7734214 16.2621602,26.7267184 C16.3727826,26.6835583 16.550898,26.6046462 16.6700805,26.5089854 C16.6832498,26.5878975 16.6983946,26.6635887 16.7158439,26.7354148 L16.4336908,26.9650651 C16.3688318,26.9467059 16.2674279,26.9038679 16.2417477,26.8423487 Z M16.3270192,26.2906083 C16.3938536,26.2793351 16.5258762,26.2519575 16.6282678,26.2087974 C16.6325479,26.2464819 16.6371571,26.2844886 16.6420956,26.3231394 L16.5910644,26.3060686 C16.5785536,26.3376335 16.4932821,26.3939992 16.3839766,26.450365 C16.3135206,26.425242 16.2503078,26.3830482 16.24504,26.3640449 C16.24504,26.3637228 16.2519539,26.3369893 16.3270192,26.2906083 Z M16.4363247,25.3317459 C17.2870641,24.8395922 17.3120858,23.7071232 17.2804794,23.2301077 C17.35324,23.2867956 17.4253422,23.3438055 17.4961274,23.4011376 L17.4793365,23.4043585 C17.4915181,23.4665219 17.7647819,24.9252682 16.5614334,25.4119464 C16.5219254,25.3842466 16.480442,25.3575131 16.4363247,25.3317459 Z M16.5133653,22.6574314 C16.644071,22.7514818 16.8425988,22.8961002 17.0592345,23.0603662 C17.0799762,23.2172241 17.2505192,24.7471523 16.2229814,25.2190144 C16.1219067,25.1703788 16.0284044,25.1307617 15.9576192,25.1020957 C16.2206767,24.5561529 16.4939406,23.7319242 16.5133653,22.6574314 Z M15.3933129,25.6602779 C15.287629,25.5675159 15.1319015,25.4879596 14.9699186,25.4209649 C15.9181111,24.2053967 15.9299635,22.741497 15.9029664,22.2596501 C16.0988603,22.370127 16.246357,22.4683645 16.3131914,22.5147455 C16.3194468,24.2379278 15.6221302,25.3443074 15.3933129,25.6602779 Z M11.2785525,23.8952239 C10.9496482,23.4149875 10.8403427,22.9266988 10.953599,22.4448519 C11.0994494,21.8245063 11.5850689,21.3317084 11.9501888,21.0357075 C12.046325,21.0531004 12.2665822,21.0952942 12.5352368,21.1635773 C12.2603268,21.3507117 11.6535494,21.8344911 11.5758503,22.5063712 C11.5211976,22.9772669 11.7388209,23.4407547 12.2244404,23.8855612 C12.2652653,23.9209911 13.19535,24.7091457 14.3888215,24.7838706 C14.283796,24.9407285 14.1662596,25.0724634 14.0322616,25.1632928 C11.817837,24.7973984 11.2884295,23.9119726 11.2785525,23.8952239 Z M11.5949459,20.3316185 C10.9321988,20.3103605 10.9009216,19.2584141 10.9009216,19.2477851 L10.7728498,19.2503619 C10.9519528,19.1601766 11.1649669,19.0677367 11.3259621,19.0210337 L11.4658863,19.1534127 C12.6642963,17.9423538 13.3066309,18.3568838 13.3237511,18.3678348 C13.5670546,18.4982814 13.7017111,18.6345255 13.7030281,18.7511221 C13.7040158,18.8380865 13.6309259,18.9157102 13.5719931,18.9617691 C13.4468844,18.7839753 13.1986423,18.6760751 13.1640728,18.6619032 L13.085386,18.8461387 C13.1696698,18.8806024 13.4156072,19.0100826 13.4396413,19.1466488 C13.4422751,19.161465 13.4482013,19.1997937 13.4067179,19.2571257 C13.2901692,19.1260351 13.119297,19.0619391 13.1087616,19.0587182 L13.0396225,19.2461747 C13.1025061,19.2683989 13.2868769,19.3608388 13.3079478,19.4899969 C13.320788,19.5701974 13.2717322,19.665214 13.1660482,19.7695712 C13.1370757,19.690337 13.0926291,19.6130354 13.0287578,19.5383104 L12.8720427,19.6661802 C12.9721297,19.783099 13.0122962,19.8990514 12.9941883,20.0201573 C12.9550095,20.2855596 12.6504685,20.4865438 12.6359822,20.4971728 C12.5642093,20.5603025 12.4996796,20.5876801 12.4558915,20.5809163 C12.4101281,20.5712535 12.381814,20.5200412 12.380497,20.5200412 L12.3801678,20.5203633 C12.3630477,20.4540127 12.4713655,20.2820166 12.5803418,20.1679967 L12.4733409,20.0053412 C12.4953995,19.9979331 12.5131781,20.0021203 12.5184459,20.004697 C12.4782794,19.9863378 12.3495491,19.8481612 12.2425482,19.7077299 L12.0789191,19.8275474 C12.1233657,19.8855236 12.161886,19.9322267 12.1981017,19.9737763 C12.1911878,20.0913392 12.1595814,20.187 12.0891254,20.2459425 C11.9195701,20.3883063 11.6137122,20.333551 11.5949459,20.3316185 Z M11.7325655,15.024217 C11.8991576,14.8779881 12.0667375,14.7504404 12.2336589,14.6354542 C12.4651101,14.6982618 12.9510587,14.8570522 13.1453065,15.0332355 C13.0959215,15.2094189 13.10514,15.3469514 13.1749375,15.4490539 C13.2460519,15.5534111 13.3737946,15.6088106 13.5440083,15.6088106 C13.6381691,15.6088106 13.7138928,15.5910957 13.7171851,15.5904515 L13.7264036,15.588519 C13.8406477,15.7608372 13.9436978,16.0832494 13.8686325,16.6755732 C13.7161974,16.7058497 13.535119,16.7155124 13.3379081,16.6733186 C13.2723906,16.2874546 12.9941883,16.1012865 12.9813482,16.0935563 L12.8700673,16.260399 C12.8727011,16.2620095 13.1153462,16.4204778 13.1466234,16.7602829 C13.1808637,17.1293982 12.9504003,17.5777477 12.4776209,18.0673247 C11.63182,17.5490817 10.6974553,18.0186891 10.3399077,18.2422197 C10.1117489,16.5235467 11.7141284,15.0409657 11.7325655,15.024217 Z M10.2813042,14.1101252 C10.5009029,14.2850201 10.8838015,14.5211122 11.3618485,14.5227227 C11.3634947,14.5227227 11.3651409,14.5227227 11.3667871,14.5227227 C11.7740489,14.5227227 12.1638614,14.3504044 12.5289814,14.0122098 C12.5253598,14.0824254 12.5177874,14.1529632 12.5065935,14.2231788 C12.2083079,14.395175 11.9004746,14.6083986 11.5952751,14.8766997 C11.5840812,14.8866845 11.0764031,15.356292 10.6576181,16.0768076 C10.3073136,15.4377808 10.2427838,14.7150105 10.2813042,14.1101252 Z M11.3654701,10.2843384 C11.43856,10.3236334 11.5057236,10.372269 11.5294284,10.4250918 C11.5300869,10.4263802 11.5300869,10.4286348 11.5307453,10.4302452 C11.4556801,10.4569787 11.3786395,10.4911203 11.2999526,10.5342804 C11.2936972,10.5371792 11.2614323,10.5529616 11.2140227,10.5845264 C11.2594569,10.4424847 11.2857956,10.3355507 11.2969895,10.2601817 C11.3197067,10.2695223 11.3424238,10.2788629 11.3654701,10.2843384 Z M10.764619,8.93413651 C10.7445357,8.84813844 10.7343295,8.72381165 10.7774591,8.57693854 C10.8255272,8.41460511 10.9269311,8.25935765 11.0810124,8.11184037 C11.0273473,8.22586028 10.9914608,8.35179753 10.9904731,8.48578703 C10.9898147,8.62654042 11.0270181,8.7611741 11.1024125,8.88839971 C11.0243842,8.82945722 10.8969708,8.82849095 10.764619,8.93413651 Z M11.2367398,9.37346748 L11.2492507,9.32547604 C11.2492507,9.2810276 11.2452999,9.13930794 11.1969026,9.02142294 C11.248263,9.08229798 11.3085127,9.14124048 11.377981,9.19857252 C11.3519715,9.3235435 11.3157559,9.58991205 11.4379015,9.75707684 C11.4958466,9.83663311 11.582435,9.88398036 11.6887774,9.89525351 C11.6950329,9.89879651 11.7032637,9.90491622 11.7042514,9.90910339 C11.7042514,9.90942548 11.7101776,9.94743212 11.6156876,10.0382615 C11.6150291,10.0389057 11.5547794,10.0975261 11.4645694,10.0975261 C11.4537047,10.0975261 11.4425108,10.0943052 11.4313168,10.0926948 C11.3832487,10.0688601 11.3374853,10.0498568 11.3006111,10.036329 C11.2660416,10.0121722 11.2311428,9.98318412 11.1959149,9.94453331 C11.189001,9.93680314 11.0270181,9.74644787 11.2367398,9.37346748 Z M11.8738067,9.14639392 L12.1925047,9.40245559 L12.1928339,9.4021335 C12.2030402,9.50230353 12.2010648,9.61632345 12.1516797,9.68492865 C12.1342304,9.70908541 12.1016363,9.74161651 11.9972692,9.75031295 C11.9877215,9.75288967 11.9297764,9.77446971 11.8840129,9.82342741 C11.8425295,9.74032815 11.7579165,9.7061866 11.7467225,9.70264361 L11.7207131,9.69749016 C11.6499279,9.69330299 11.6199676,9.6636707 11.6038352,9.64176857 C11.5514871,9.56994247 11.5521455,9.44303895 11.5643272,9.3367492 L11.8738067,9.14639392 Z M11.6542079,8.73476271 C11.7134699,8.64135657 11.8112523,8.47483596 11.8922437,8.27481798 C11.9357026,8.44488158 11.9982569,8.62364161 12.0855038,8.7350848 C12.012414,8.80626673 11.9261548,8.90224959 11.8846714,8.99275692 C11.8504311,8.94669803 11.7533072,8.82140496 11.6542079,8.73476271 Z M12.3765462,9.24720814 C12.4611593,9.18053548 12.5326029,9.11160819 12.5908773,9.04010417 C12.5424799,9.13318822 12.5227259,9.25751502 12.5227259,9.37185702 L12.5227259,9.39794633 L12.5358953,9.42081473 C12.7505555,9.7944393 12.5839634,9.98125158 12.576391,9.98930384 C12.4782794,10.0926948 12.381814,10.1448734 12.2899578,10.1448734 C12.1918462,10.1448734 12.1256703,10.0830321 12.1227072,10.0798112 C12.0301926,9.99542355 12.0328265,9.957739 12.0328265,9.957739 C12.0341434,9.95419601 12.042045,9.94839839 12.0506051,9.94388913 C12.1651783,9.93326015 12.2573637,9.88398036 12.3182719,9.79991483 C12.4397591,9.63210586 12.4035434,9.37153493 12.3765462,9.24720814 Z M12.6830626,8.15113536 C12.8559102,8.30638282 12.9691666,8.47000461 13.0182224,8.63684731 C13.0603642,8.78114369 13.0485118,8.90289377 13.0267824,8.98599303 C12.9477664,8.92382963 12.8746765,8.89355316 12.8058667,8.89355316 C12.7436416,8.89355316 12.6932689,8.91642156 12.6534316,8.95442819 C12.7396908,8.82140496 12.7824912,8.68097366 12.7815035,8.53313428 C12.7805158,8.39624597 12.7410077,8.26708782 12.6830626,8.15113536 Z M12.0084632,10.3832201 C11.9175947,10.3671156 11.8231047,10.3638947 11.7233469,10.3806434 C11.7197254,10.368726 11.7213715,10.3561645 11.7161038,10.3445693 C11.7006298,10.3104277 11.6775835,10.2798292 11.651574,10.2511631 C11.7157746,10.2199204 11.7562703,10.1832021 11.7612088,10.1777266 C11.8017045,10.1390758 11.8310063,10.1013912 11.8547111,10.0640288 C11.8794036,10.1155632 11.9212163,10.168708 11.9798199,10.2224971 C11.9831122,10.2253959 11.99266,10.2347365 12.0084632,10.246976 L12.0084632,10.3832201 Z M12.3146503,10.7964617 C12.0565313,10.7977501 11.7793166,10.9417244 11.7391502,10.9633044 L11.8379202,11.1381994 C11.9488719,11.0782906 12.3021395,10.9301292 12.4601716,11.0274004 C12.5210798,11.065407 12.5507108,11.1465737 12.5526862,11.265425 C12.3228812,11.2718668 12.075956,11.3929727 12.0380942,11.4122981 L12.1335719,11.5888035 C12.2669115,11.5198762 12.5790248,11.4061784 12.6932689,11.4915323 C12.7436416,11.5292168 12.7568109,11.6242334 12.7347523,11.7572567 C12.5042888,11.7179617 12.250779,11.7714286 12.2099541,11.7807692 L12.2573637,11.9749896 C12.3821432,11.9453573 12.7643833,11.8944671 12.8815904,12.0348984 C12.9606065,12.130237 12.8990398,12.312218 12.8463625,12.4278483 C12.7778819,12.5106255 12.6702225,12.6523452 12.6366407,12.7612116 C12.5968035,12.7844021 12.5493938,12.7995404 12.5302983,12.7898777 C12.5302983,12.7898777 12.5299691,12.7892335 12.5296398,12.7892335 C12.5293106,12.7885893 12.5279937,12.7850463 12.5279937,12.7847242 L12.5263475,12.7853684 C12.5075812,12.7702302 12.4815717,12.708711 12.4851933,12.5637704 C12.5408338,12.4951652 12.5941696,12.4503947 12.5951573,12.4494284 L12.4660978,12.2951472 C12.4522699,12.3060983 12.1279749,12.5689238 12.1556306,12.9026092 L12.2201603,12.8974558 C11.8935607,13.1747754 11.576838,13.3036115 11.2798694,13.2617397 C10.8643767,13.2050519 10.5960514,12.8459214 10.5308632,12.7499385 C10.6108669,11.0982602 11.3783102,10.718838 11.3924673,10.7120741 C11.4988097,10.6540979 11.5975797,10.6177017 11.6914113,10.5941891 L11.7062268,10.6015972 C11.7082022,10.59741 11.707873,10.5932229 11.7095191,10.5893578 C11.8379202,10.5600476 11.9554566,10.5597255 12.0581774,10.5967659 C12.1796646,10.6405701 12.2623022,10.7246356 12.3146503,10.7964617 Z M10.3491263,13.523599 C10.5539095,13.702037 10.9542575,13.9867647 11.4395477,13.9867647 C11.4553509,13.9867647 11.4714833,13.9864426 11.4872865,13.9857984 C11.8543819,13.9716264 12.1918462,13.7922222 12.4930949,13.4530613 C12.5075812,13.5406698 12.5197628,13.6321434 12.5263475,13.7297367 C12.1595814,14.1226867 11.7697689,14.3230268 11.3667871,14.3230268 C11.3657994,14.3230268 11.3648117,14.3230268 11.3641532,14.3230268 C10.8548289,14.3223826 10.4551395,14.0038354 10.3023751,13.86276 C10.3158737,13.7429424 10.3313477,13.6279562 10.3491263,13.523599 Z M11.2499092,13.459181 C11.2983065,13.4659449 11.3467038,13.4691658 11.3954304,13.4691658 C11.7210423,13.4691658 12.0552143,13.3139183 12.391691,13.0172733 C12.407165,13.0675194 12.4239559,13.1287165 12.441076,13.1979659 C12.1513505,13.5738451 11.8283724,13.7725747 11.4800434,13.7864246 C10.9628175,13.8121918 10.5213154,13.4169872 10.3945605,13.2916941 C10.4195822,13.1747754 10.444604,13.0749275 10.4660042,12.9973037 C10.6108669,13.1667231 10.8752414,13.4073245 11.2499092,13.459181 Z M13.7096127,10.4817797 C13.7168559,10.4676077 14.4675083,9.04010417 16.2219937,7.61260064 C16.295742,7.56718593 17.8757336,6.58513307 18.3402821,5.58761988 C18.5134589,5.9628549 18.9964445,6.65212782 20.3420219,7.61163437 C20.3792253,7.63546904 23.5905689,9.75450012 23.2214982,12.7244934 L23.0555645,12.6581428 C22.9515267,12.6169153 22.591016,12.1080128 22.3128137,11.654832 C22.1165905,11.3771903 21.8920532,11.2299951 21.6688329,11.1597794 C21.7814308,11.029655 21.9496691,10.8805273 22.0227589,10.8196522 L22.1103351,10.7468599 L22.0263805,10.6705245 C21.722498,10.393527 21.4107138,10.1667755 21.0959666,9.98189576 C20.7558684,9.03559491 19.3994263,7.95498247 19.0382572,7.68023957 C19.0985069,7.5191945 19.0975192,7.26055611 18.7982459,7.02510821 C18.5730502,6.85375625 18.3620115,6.65051737 18.3465375,6.59125278 L18.2474383,6.60735729 L18.1457051,6.58932024 C18.1295727,6.64987319 17.9159001,6.85311207 17.6870828,7.02575239 C17.3868218,7.26023402 17.3858341,7.51822822 17.4467423,7.6792733 C16.0830571,8.43393051 15.5282987,9.88398036 15.5029477,9.95194138 C15.0548609,10.1532477 14.7848894,10.3233113 14.7743539,10.3300752 L14.6745962,10.3944932 L14.7555876,10.4808134 C14.9847341,10.7252798 15.2336347,11.0293329 15.2882874,11.1462516 C15.211576,11.1491505 15.1332184,11.1575248 15.0535439,11.1771723 C14.7318828,11.2580169 14.4694837,11.4776824 14.2745774,11.8281165 C14.2604204,11.8519512 14.1359701,12.0680736 14.1379455,12.2368489 C14.1366286,12.2426465 14.0164584,12.8365807 13.8521708,13.1029493 L13.7807272,13.2195459 L13.9157129,13.2514329 C14.0553079,13.284286 14.3819076,13.3863886 14.5972263,13.5393814 C14.4230618,13.5548418 14.1629673,13.5909159 13.8452569,13.6730489 C13.6793233,13.3490262 12.9938591,11.8519512 13.7096127,10.4817797 Z M15.9655208,11.5095693 C15.9618992,11.6490344 15.9618992,11.8999426 15.9981149,12.0861107 C15.7633714,11.965649 15.3854113,11.8219968 15.0331315,11.9137925 C14.7740247,11.9811093 14.5751676,12.1614798 14.4444619,12.4452412 C14.4428158,12.44814 14.3483258,12.6259338 14.1995122,12.8005066 C14.2834667,12.5412241 14.3354856,12.2848403 14.3397657,12.2561743 C14.3397657,12.1421544 14.4204279,11.9804651 14.4526928,11.9257098 C14.6199434,11.6239113 14.8388837,11.4374211 15.102929,11.3710706 C15.4743044,11.2766982 15.840412,11.4435409 15.9655208,11.5095693 Z M16.0876664,11.0286887 C16.0511215,11.1130764 16.0205028,11.2032616 15.996798,11.3002107 C15.8848586,11.24771 15.7077309,11.1807153 15.5016307,11.1549481 C15.4894491,11.0731372 15.4048361,10.9072608 15.087455,10.547164 C15.3982514,10.5999868 15.8950648,10.7301112 16.0876664,11.0286887 Z M16.6641543,9.74000606 L16.7622659,9.89783024 C16.4330324,10.000577 16.0521092,10.1812696 15.6385919,10.4850006 C15.4617935,10.4196163 15.2830197,10.3780666 15.1388154,10.3526215 C15.4364425,10.1938311 15.9783609,9.9348706 16.6641543,9.74000606 Z M16.191375,9.11869417 C16.319776,9.23690125 16.4662849,9.43691923 16.5525441,9.56478902 C16.2654525,9.64885455 16.0043703,9.74258278 15.7752238,9.83566684 C15.8529229,9.67043459 15.9895548,9.41018575 16.191375,9.11869417 Z M17.6057621,7.81841624 L17.7598434,7.81551743 C17.5639495,8.01714586 17.2416299,8.37949728 17.1675523,8.63684731 C17.0118249,8.84427336 16.7869584,9.15541245 16.6671174,9.37443375 C16.5759197,9.2452756 16.439617,9.07070274 16.3089113,8.95636073 C16.61444,8.55181551 17.040139,8.11699381 17.6057621,7.81841624 Z M19.8432331,9.29197867 C19.7296475,9.0587854 19.5110365,8.83493275 19.4474944,8.77276935 C19.3263365,8.39624597 18.9763612,8.00426226 18.7689441,7.79619202 L18.8555326,7.79458157 C18.9984199,7.90183759 19.6684101,8.41653765 20.2172424,9.02077876 C20.050321,9.10838728 19.924883,9.21016777 19.8432331,9.29197867 Z M19.9396985,9.48555485 C20.0058744,9.40954157 20.1425064,9.27748461 20.3538743,9.17538203 C20.533965,9.38796153 20.6906802,9.60730492 20.8029488,9.82181696 C20.5158572,9.67752057 20.2271194,9.56833201 19.9396985,9.48555485 Z M20.9497869,10.5954775 C20.4486935,9.76802791 19.1120055,9.76609536 18.716596,9.78542077 C18.6059735,9.63661513 18.497985,9.53741136 18.4281874,9.4804014 C18.5269575,9.48007931 18.6270445,9.48265604 18.7274607,9.48748739 L18.7370085,9.52388357 L18.7705903,9.48974202 C19.0836914,9.50810116 19.4040356,9.55448214 19.7270137,9.63629304 L19.7480846,9.75868729 L19.8145898,9.65948353 C20.39437,9.81795188 20.9804056,10.0914064 21.5453704,10.5291269 C21.3481595,10.5207526 21.138767,10.5519953 20.9497869,10.5954775 Z M20.624175,11.2731552 C20.5998117,11.1491505 20.5619499,11.0389956 20.5175033,10.9359268 C20.8253367,10.8180418 21.41236,10.6518433 21.7728707,10.7703724 C21.6724545,10.8612019 21.5374688,10.9932588 21.4498926,11.1137205 C21.1084775,11.0773244 20.7947179,11.1919884 20.624175,11.2731552 Z M20.5109187,10.4038339 C20.5998117,10.4737274 20.67784,10.5552162 20.742699,10.6492665 C20.6090302,10.6885615 20.4990662,10.7285007 20.4259764,10.7565226 C20.3828468,10.6885615 20.3328033,10.6280086 20.2781506,10.5726091 C20.3242433,10.5288048 20.414124,10.4637426 20.5109187,10.4038339 Z M20.0236531,10.147128 C20.129337,10.1835242 20.2310702,10.2282947 20.3272064,10.2817617 C20.2488488,10.3332961 20.1760882,10.389984 20.1230816,10.4457056 C20.0950967,10.4263802 20.0710627,10.4025455 20.0407732,10.3854747 C19.969988,10.3455355 19.895252,10.3159032 19.8195283,10.2917465 C19.8715472,10.2476201 19.9462832,10.193509 20.0236531,10.147128 Z M19.4093033,10.011206 C19.5255227,10.0250558 19.6463514,10.0453475 19.7684971,10.0736915 C19.6845425,10.1342444 19.6289021,10.1896439 19.5946618,10.2411783 C19.4965502,10.2266843 19.3984386,10.2183099 19.3019732,10.2199204 C19.3227149,10.1664534 19.3635399,10.0868972 19.4093033,10.011206 Z M18.9694473,10.250841 C18.9312563,10.1526035 18.8891144,10.0617741 18.8433509,9.98189576 C18.9371825,9.9806074 19.0537311,9.98189576 19.1873999,9.99027011 C19.1455873,10.0662834 19.1031162,10.1593674 19.0906053,10.2340923 C19.0487926,10.2386016 19.0096138,10.2447213 18.9694473,10.250841 Z M18.3060418,9.64048021 C18.4130427,9.72969918 18.6201306,9.94582167 18.7626887,10.290136 C18.5914873,10.3300752 18.4548554,10.375812 18.3926302,10.3993246 C18.3099926,10.3713028 18.1029047,10.3097835 17.8447857,10.2714548 C17.9112908,10.1458396 18.052532,9.9120022 18.3060418,9.64048021 Z M17.3947235,9.97931904 C17.5593402,9.96707962 17.688729,9.97448769 17.7786097,9.98543876 C17.7012399,10.1049342 17.653501,10.1957636 17.6291377,10.2476201 C17.5925928,10.2450434 17.5547309,10.2440771 17.5171983,10.2427888 C17.512589,10.1584012 17.4585948,10.0633846 17.3947235,9.97931904 Z M17.1000595,10.2688781 C17.0668069,10.2231413 16.9999725,10.1606558 16.8705837,10.0778786 C16.9716584,10.0485684 17.0671361,10.0257 17.1560292,10.0099176 C17.2422883,10.1052563 17.3163659,10.2134786 17.323609,10.2337703 L17.3380953,10.2447213 C17.25875,10.2482643 17.179734,10.2556724 17.1000595,10.2688781 Z M18.1756653,9.48684321 C18.0693229,9.59925267 17.9801006,9.70554242 17.9066816,9.80281364 C17.7486495,9.77028254 17.34468,9.7226132 16.789263,9.89010007 L16.789263,9.7061866 C17.209365,9.59442132 17.6785227,9.5100337 18.1756653,9.48684321 Z M17.2804794,8.82398168 C17.4059174,8.93574696 17.5353062,9.1699065 17.6097129,9.33803756 C17.3384245,9.37507793 17.0789885,9.42693444 16.8340388,9.48845366 C16.9163472,9.33900383 17.099401,9.06973647 17.2804794,8.82398168 Z M18.1183787,8.60077321 C17.9550789,8.76697173 17.8260194,8.97085479 17.738114,9.13383241 C17.659098,8.97729659 17.5306969,8.76310665 17.3789202,8.64779837 C17.4816411,8.38980416 17.8859399,7.96754398 18.0462766,7.81487325 L18.0416673,7.8100419 L18.1183787,7.80875354 L18.1183787,8.60077321 Z M19.6713732,9.41630546 C19.431362,9.36090596 19.1929969,9.32225514 18.9579242,9.30131928 C19.0715097,9.19084236 19.2341511,9.0391379 19.3464197,8.95764909 C19.4504575,9.06683765 19.6045388,9.25429412 19.6713732,9.41630546 Z M17.8770505,9.30743899 C17.9504696,9.16088798 18.0709691,8.94895266 18.2270258,8.77695652 C18.3656331,8.89902869 18.5842441,9.11354073 18.6662233,9.28296014 C18.3959226,9.27297535 18.1325358,9.28328223 17.8770505,9.30743899 Z M18.4841571,7.80166755 C18.5335422,7.846116 19.0692051,8.34020228 19.2364557,8.79145058 C19.1067377,8.88324627 18.9361948,9.04074835 18.8245846,9.14929273 C18.6922327,8.91738783 18.4245659,8.6796853 18.3221743,8.59304305 L18.3221743,7.80456637 L18.4841571,7.80166755 Z M16.6608619,10.4105978 C16.5963322,10.3516553 16.4870267,10.3039859 16.3773919,10.2675897 C16.4610172,10.2270064 16.5416794,10.1931869 16.620037,10.1625883 C16.7204532,10.2189541 16.8142848,10.279185 16.8728883,10.3200904 C16.8001277,10.3432809 16.730001,10.3754899 16.6608619,10.4105978 Z M16.1949965,10.8351126 C16.1037988,10.7304333 15.9842871,10.6463677 15.8535814,10.5790509 C15.9454375,10.514955 16.0359767,10.4563346 16.1238821,10.4048001 C16.270391,10.439908 16.409986,10.4878994 16.480442,10.5271944 C16.3685026,10.6119041 16.2726956,10.7140067 16.1949965,10.8351126 Z M22.0546946,12.1701762 C21.4314556,11.6628842 20.9063281,11.8319816 20.6126518,12.0139625 L20.6449167,11.4867009 C20.8319213,11.3800891 21.6059493,11.004532 22.141283,11.7630543 C22.2291884,11.9067065 22.4448363,12.2494104 22.6483026,12.5125581 C22.3651618,12.3692279 22.0553531,12.1698541 22.0546946,12.1698541 C22.0546946,12.1698541 22.0546946,12.1698541 22.0546946,12.1701762 Z M17.8131792,7.18293238 C17.918534,7.10337611 18.1220003,6.94136477 18.2454628,6.79578002 C18.3672792,6.94136477 18.5681117,7.10273193 18.671491,7.18132193 C18.8861513,7.35009717 18.8798958,7.50792134 18.8525694,7.59488568 L17.6406609,7.61807617 C17.6074083,7.53916408 17.5767896,7.36684586 17.8131792,7.18293238 Z M21.8953456,13.4060361 C21.7201934,13.6778802 21.1618133,14.3584567 20.6959479,14.2363845 L20.658086,14.2267218 L20.6231873,14.2444368 C20.6182488,14.2470135 20.1171554,14.4966334 19.7714602,14.3851902 C19.6601793,14.3491161 19.5798463,14.2795446 19.5261812,14.1719665 L19.3427981,14.2592529 C19.3615645,14.2969375 19.3832939,14.3314011 19.4069987,14.362966 L19.3918539,14.3706961 C19.4481529,14.47763 19.4254358,14.5784443 19.3941586,14.6464053 C19.3266657,14.6003464 19.2611482,14.5852082 19.1979354,14.6016348 C19.1185901,14.6219264 19.0724974,14.684734 19.0474757,14.7365905 C19.0217955,14.7439986 18.9977614,14.7565601 18.9757028,14.7742751 C18.7452393,14.9607653 18.7485317,15.8310528 18.7587379,16.1180352 C19.0300263,17.0659465 18.3406113,17.4688812 18.3221743,17.4804765 C18.1177202,17.5648641 17.9428973,17.5738826 17.8019853,17.5068879 C17.5837035,17.4028528 17.5063336,17.1461469 17.5053459,17.1461469 C17.4793365,16.9619114 17.5106136,16.8160045 17.5975313,16.7126136 C17.7335047,16.5512464 17.967919,16.5367524 17.9702236,16.5367524 L17.9603466,16.3373786 C17.9471773,16.3377006 17.6363808,16.3547714 17.4418038,16.5837775 C17.3157074,16.7325832 17.2692855,16.9309907 17.3058304,17.185764 C17.3087935,17.1967151 17.363117,17.3886808 17.5178568,17.5458608 C17.2169374,17.6134997 16.8307464,17.6833933 16.6598742,17.671798 C16.5620919,17.6244508 16.4264477,17.5951406 16.2664402,17.6167206 L16.2697325,17.5996498 C15.6306903,17.4759672 15.22277,17.2437402 15.057824,16.9090886 C14.8655516,16.5187153 15.0769195,16.1096608 15.0788949,16.1057957 L14.8981457,16.0133559 C14.887281,16.0336475 14.6373928,16.5119514 14.873124,16.9934762 C15.0393869,17.3326371 15.4002268,17.578714 15.9457668,17.7284859 C15.9227204,17.7413695 15.9006618,17.750388 15.8772862,17.7655263 C15.8604953,17.7729343 15.7090479,17.8454046 15.6402381,18.0528307 C15.5727452,18.2557475 15.6142286,18.5134196 15.7528359,18.8152181 C15.1592279,18.7585302 14.708178,18.247051 14.6713038,18.2032468 C14.4194402,17.7107709 14.474093,16.7786421 14.4862746,16.6150203 C15.0680302,15.9135079 14.5540967,15.0280821 14.4418281,14.8535092 C14.4421573,14.8528651 14.4428158,14.8522209 14.443145,14.8518988 C14.5270995,14.7214523 14.5405981,14.5687816 14.4836407,14.398718 C14.4085755,14.1722886 14.2446172,14.0473176 14.0223846,14.0473176 C13.8673156,14.0473176 13.7362806,14.1091589 13.7306837,14.1117356 L13.6941388,14.1291285 C13.6144642,14.0814592 13.5311682,14.0405537 13.4557737,14.0070563 C14.1260931,13.766455 14.6456236,13.730703 14.787194,13.7265158 C14.9067058,13.8495543 15.1786527,14.1088368 15.3887037,14.1461993 C15.4703536,14.2834097 15.7202418,14.6467274 16.1037988,14.7101791 C16.1419899,14.7162988 16.1808395,14.7195197 16.2193598,14.7195197 C16.4415924,14.7195197 16.6648128,14.6138742 16.8844115,14.4045156 L16.7418534,14.2615076 C16.5337778,14.4602372 16.3303115,14.5455911 16.1383684,14.5133821 C15.7765407,14.4537954 15.5444311,14.0099551 15.5421265,14.0054459 L15.5095324,13.9423162 L15.4377594,13.9513347 C15.346891,13.9645404 15.0884427,13.7529272 14.9172413,13.573523 C14.7694154,13.341296 14.40232,13.191202 14.1672473,13.1155108 C14.4385357,12.8861826 14.6173095,12.5524972 14.6281742,12.5315614 C14.7345167,12.3012669 14.8882687,12.1579368 15.0848211,12.1067245 C15.5424557,11.9894837 16.1021527,12.3788906 16.1077496,12.3827557 L16.1288206,12.3544118 C16.1992766,12.4474958 16.264794,12.540902 16.2835603,12.5763319 C16.2321999,12.7006587 16.0777894,13.1454652 16.3698195,13.4169872 C16.3991213,13.591238 16.5077684,14.1127019 16.7691798,14.234452 L16.8570851,14.0540815 C16.7197947,13.9903077 16.6039046,13.6047657 16.5657135,13.3516029 L16.5601165,13.3132742 L16.529827,13.2887953 C16.2723664,13.0816913 16.480442,12.6326977 16.4824174,12.6281884 L16.4919652,12.5863167 C16.4919652,12.5576507 16.4919652,12.4816374 16.2266029,12.1508508 C16.1805103,12.0848223 16.1607562,11.7450172 16.1709625,11.4647988 C16.2427354,11.0563885 16.4271062,10.7661853 16.7191363,10.6025635 C17.3673971,10.2389237 18.3488422,10.5957996 18.3587192,10.5993426 L18.3969103,10.6135145 L18.4347721,10.5980542 C18.4436614,10.593867 19.3464197,10.2250738 19.9393693,10.5587592 C20.2182301,10.7156171 20.3874561,11.0109738 20.4434258,11.4348444 L20.4075393,12.0632423 C20.4068809,12.0661411 20.3137078,12.3875871 20.1049737,12.5847062 L20.0592103,12.6288326 L20.0786351,12.6877751 C20.0829151,12.7013029 20.1826728,13.0221047 19.8353315,13.4111896 L19.8168944,13.4318033 L19.8119559,13.4585368 C19.8112974,13.4614356 19.7490723,13.769998 19.4876609,13.9648625 L19.6111235,14.1233309 C19.8873504,13.9178374 19.9821696,13.616361 20.0058744,13.5232769 C20.3255602,13.1531954 20.3114031,12.8217646 20.2873691,12.6871309 C20.3894315,12.5785865 20.4631798,12.451683 20.5145402,12.3424945 L20.5168449,12.344427 C20.5412081,12.3160831 21.1209884,11.669326 21.9328782,12.3299329 C21.9542784,12.3437828 22.3645033,12.6078967 22.6937369,12.7547698 C22.4487871,12.8578387 22.1119812,13.0539916 21.8953456,13.4060361 Z M21.8976502,13.8795086 C21.5256163,14.0730848 20.9405684,14.5558979 20.6054087,15.7511745 C20.6014579,15.7659906 20.204073,17.232145 19.5271689,18.3723441 C19.5176211,18.3884486 18.5881949,19.9270733 16.5232423,19.8413973 C16.590406,19.7254448 16.6420956,19.6049831 16.6809452,19.497405 C16.6832498,19.497405 16.6852252,19.4977271 16.6872006,19.4977271 C19.0797406,19.4977271 19.8712179,16.6807267 19.8787903,16.6536711 C20.3035015,15.1801087 20.6218703,14.599058 20.7196527,14.441878 C21.138767,14.4992101 21.543395,14.1500644 21.7985509,13.8617937 C21.8163295,13.8643704 21.8512283,13.870168 21.8976502,13.8795086 Z M22.8402458,15.4751432 C22.6269024,15.4236088 22.5449233,15.3086226 22.5442648,15.3086226 C22.5442648,15.3086226 22.5442648,15.3086226 22.5442648,15.3089447 C22.5100245,15.2416279 22.4771012,15.1498322 22.5133169,15.0925001 C22.5521664,15.031303 22.6746413,14.992008 22.846172,14.9845999 L22.8438673,14.9874987 C22.8320149,15.002637 22.816541,15.0229287 22.8060055,15.0470854 C22.7944823,15.0738189 22.7888853,15.1050617 22.8013962,15.1411357 C22.8280641,15.2177932 22.9139941,15.2522568 23.0716969,15.2925181 C23.3528623,15.4075043 23.4358292,15.5811109 23.3327791,15.8384609 C23.3117082,15.8903174 23.2853695,15.9392751 23.2590308,15.981791 C23.1233866,15.5460031 22.8695475,15.4809409 22.8402458,15.4751432 Z M22.6117577,15.6036572 L22.6110992,15.6026909 C22.6624597,15.6281361 22.7213925,15.6519707 22.7925069,15.6690415 C22.7928361,15.6693636 22.7987623,15.6716182 22.8076516,15.6754833 C22.6832014,15.8052856 22.2966812,16.2806907 22.2802196,17.0727104 C22.2308345,17.01409 22.1913265,16.9651323 22.1633417,16.9277698 C22.2634286,15.8832314 22.6081361,15.606556 22.6117577,15.6036572 Z M23.1661869,14.8016527 L23.1247035,14.7961772 C23.1247035,14.7961772 23.0312012,14.7836157 22.909714,14.7836157 C22.6176839,14.7836157 22.4257408,14.8518988 22.3401401,14.9874987 C22.2713303,15.0960431 22.2785734,15.2338977 22.3661495,15.4055718 C22.3681249,15.4087927 22.3954513,15.4445447 22.4412147,15.4877047 C22.3661495,15.5646843 22.2196406,15.7563279 22.1027627,16.142514 L21.9572415,16.178266 C21.9585584,16.1843857 22.1070427,16.7905594 21.7359966,17.2076661 C21.4436372,17.5365202 20.9086327,17.667933 20.1484326,17.6054475 C20.5642545,16.6797604 20.7996564,15.81366 20.8022903,15.803031 C21.2098814,14.3504044 22.0092604,14.0254155 22.2189821,13.9642183 C22.5548003,14.0682535 23.0562229,14.2718144 23.6323816,14.6657307 C23.4997005,14.6876328 23.3304745,14.7285383 23.1661869,14.8016527 Z M23.3031481,15.1904155 C23.2537631,15.1591728 23.200098,15.1295405 23.1372144,15.1040954 C23.1092295,15.0966873 23.0927679,15.0912118 23.0736723,15.0857362 C23.2501415,14.9594769 23.5052975,14.8754114 23.8434203,14.8393373 L23.8691005,14.8361164 C23.9145347,14.8702579 23.9606274,14.9079425 24.0067201,14.9443387 C23.8055584,14.9742931 23.5148452,15.0432203 23.3031481,15.1904155 Z M17.2162789,22.9260546 C18.1733607,21.7945519 17.5893005,20.6678806 17.5013951,20.5145657 C17.5507801,20.4987833 17.6123468,20.4839671 17.6837905,20.4730161 C17.8135085,20.7165162 18.5180682,22.152072 17.8461026,23.4298036 C17.6511964,23.263283 17.4273176,23.0867776 17.2162789,22.9260546 Z M13.6388275,18.0035509 C13.7313421,18.0119252 13.9367839,18.0499319 13.9611471,18.2225722 L13.7632778,18.4425598 C13.6885418,18.3623593 13.5854917,18.2853798 13.4534691,18.2129095 L13.6388275,18.0035509 Z M14.142884,18.1162824 C14.073745,17.9156203 13.8623771,17.832521 13.6947972,17.8096526 C13.7013819,17.7661705 13.7234405,17.7178569 13.7925796,17.6982094 C13.863694,17.7156023 14.1181915,17.7938702 14.1856844,18.0312506 C14.1870013,18.0463889 14.1817336,18.0840734 14.142884,18.1162824 Z M13.8916789,15.467091 C13.829783,15.3762616 13.7639363,15.316997 13.7076373,15.277702 C13.7326591,15.2525789 13.7688748,15.2226246 13.8274783,15.1875167 C13.849537,15.1839737 13.8870696,15.1765657 13.9325038,15.1652925 C14.0332493,15.3340677 14.3693967,15.9718062 14.0902067,16.5148502 C14.1257639,16.0391231 14.0444432,15.7347479 13.9361254,15.5398834 L14.0207384,15.5202359 L13.8916789,15.467091 Z M14.3183655,16.5019666 C14.5481705,15.9267136 14.2554819,15.3182853 14.1283978,15.0979757 C14.1853552,15.0728526 14.2433003,15.0422541 14.2966361,15.0032812 C14.4293172,15.2235908 14.7960833,15.9434623 14.3183655,16.5019666 Z M15.7765407,19.0178128 L15.7933316,19.058074 C15.8160488,19.1121852 15.8140734,19.1846555 15.7982701,19.2642117 C15.1355231,19.2577699 14.7154211,18.897029 14.6298204,18.814896 C14.5616691,18.643544 14.5353304,18.4976372 14.533355,18.4886187 C14.5238072,18.457698 14.5162348,18.4161484 14.5323673,18.3910253 C14.5373058,18.3836173 14.5458659,18.3797522 14.5537675,18.3749208 C14.6976425,18.5324229 15.1638372,18.9801282 15.7765407,19.0178128 Z M15.637275,19.6700453 C15.5576004,19.6494315 15.386399,19.6033727 15.2685334,19.5598905 C15.1496801,19.4613309 15.0647379,19.3820967 15.0193037,19.3379704 L15.022596,19.3266972 L14.9646509,19.2861139 C14.9554323,19.2796721 14.9481892,19.2706535 14.9392999,19.2635675 C15.1447416,19.3647039 15.4120792,19.4494136 15.7373619,19.4626193 C15.7087186,19.5328349 15.6738199,19.6036947 15.637275,19.6700453 Z M17.1428598,18.0821409 C17.0431021,18.1130615 17.0226896,18.1426938 17.0203849,18.1481694 C16.9762677,18.1900411 16.8505005,18.2747508 16.7721429,18.2721741 C16.7425119,18.2705636 16.7194655,18.2589684 16.6974069,18.2338453 L16.6476926,18.1778017 L16.5782243,18.2080781 C16.4890021,18.2473731 16.3428224,18.361393 16.3632349,18.5395089 C16.3645518,18.5501379 16.366198,18.5604448 16.3671857,18.5710737 C16.3072652,18.5697854 16.2529416,18.5768714 16.2091536,18.5858899 C16.2269322,18.3800743 16.2894865,18.1140278 16.4672726,18.0051613 C16.6210247,17.9107889 16.8485251,17.9368782 17.1428598,18.0821409 Z M17.5092967,21.9407809 C17.0635145,22.1340349 16.5403625,21.662495 16.5350947,21.6573415 L16.4919652,21.6177244 L16.4356662,21.6338289 C15.7156325,21.8444759 15.4077992,21.1961084 15.3952883,21.1684087 L15.3630234,21.0988372 L15.286312,21.1107545 C14.4790315,21.2350813 14.3183655,20.5776953 14.3117808,20.5499956 L14.2857714,20.437264 L14.1758074,20.4784916 C13.8811434,20.5886464 13.4017794,20.3216337 13.1871191,20.1737943 C13.3797208,20.104867 13.9591717,19.9837611 14.3325225,19.9138676 C14.4342557,19.8942201 14.5168933,19.8626552 14.5913001,19.8272253 C14.8092527,20.0858637 15.9734224,21.3880742 17.313732,21.3880742 C17.3917603,21.3880742 17.4711056,21.3764789 17.5501217,21.3671383 C17.5652664,21.5401007 17.557694,21.733999 17.5092967,21.9407809 Z M17.3450092,20.6508098 C17.3891265,20.7339091 17.4750564,20.9203993 17.5231245,21.1709854 C16.2381261,21.3168922 15.0209498,20.0130713 14.7664523,19.7206135 C14.8431637,19.6587722 14.8981457,19.5933879 14.9343614,19.5373442 C15.2431824,19.829802 16.2084951,20.6508098 17.3272306,20.6508098 C17.3331568,20.6508098 17.339083,20.6508098 17.3450092,20.6508098 Z M16.0333429,20.079744 C15.9283174,20.0230561 15.8275719,19.9634694 15.7343988,19.9029165 C15.8483136,19.7254448 16.0712047,19.3299181 16.0014072,19.0416474 L16.2121167,18.7897729 C16.2815849,18.7701254 16.4178876,18.7485454 16.4978914,18.8087763 C16.5834921,18.8731943 16.5881013,19.0226441 16.5782243,19.1270013 C16.5364117,19.3357157 16.3579671,19.8987293 16.0333429,20.079744 Z M19.6377914,15.0071462 C19.6091481,14.9140622 19.5719447,14.8448128 19.5409967,14.7987539 C19.5772124,14.7410998 19.6193543,14.6502704 19.6272559,14.5401155 C19.6532654,14.552677 19.6789456,14.5655607 19.7075889,14.5749013 C19.7540108,14.5897174 19.8024081,14.5997022 19.8514639,14.6054998 C19.7935188,14.6969734 19.7131859,14.8370826 19.6377914,15.0071462 Z M16.7800445,19.1556673 C16.7866292,19.086418 16.784983,19.0248987 16.7790568,18.9675667 C17.1863186,18.9646679 18.3498299,18.8239145 19.0165277,17.3886808 C19.0501096,17.3065478 19.3190933,16.6491618 19.3974509,16.4017966 C19.514658,16.3454308 19.6331821,16.2491259 19.7388661,16.0900133 C19.7629001,16.0474974 19.8771441,15.8275099 19.7635586,15.6902994 C19.7362322,15.6571242 19.7013334,15.6365104 19.6631424,15.6236268 C19.7467677,15.0886351 20.0914752,14.6103312 20.0950967,14.6058219 L20.0927921,14.6042115 C20.2172424,14.5913279 20.3357664,14.5636281 20.4368411,14.5317412 C20.2797967,14.8367606 20.0127883,15.4532411 19.6819087,16.6008483 C19.6746655,16.6279039 18.936524,19.2452084 16.7461334,19.293844 C16.7672044,19.2181528 16.7780691,19.1659742 16.7800445,19.1556673 Z M18.9589119,16.0884029 C18.9447548,15.5218463 19.0142231,14.9791244 19.0991654,14.9282342 L19.1982646,14.9494921 L19.2203233,14.852543 C19.2249326,14.8325734 19.241065,14.8000423 19.2469912,14.7948888 C19.2473204,14.7948888 19.2776099,14.7981097 19.339835,14.8663929 L19.3414812,14.8683254 C19.355309,14.8837857 19.5864309,15.156274 19.3882324,15.6291023 C19.3589306,15.6361883 19.3325919,15.6435964 19.3141548,15.649394 C19.2920962,15.6574463 19.2456743,15.6648543 19.235468,15.6519707 L19.0731559,15.7727545 C19.1617197,15.8864523 19.3148133,15.8645502 19.3816477,15.8371726 C19.5647015,15.7833835 19.604868,15.8155925 19.604868,15.8155925 C19.6193543,15.8329854 19.5999295,15.9225264 19.5640431,15.9872666 C19.3520167,16.3058137 19.1097008,16.2848779 18.997103,16.2526688 C18.9868967,16.1992019 18.9753735,16.1450907 18.9589119,16.0884029 Z M17.7265908,17.7020745 L17.7232985,17.689513 C17.8102161,17.7291301 17.9037185,17.750388 18.0051224,17.750388 C18.1295727,17.750388 18.2648876,17.7201116 18.4123842,17.6589144 C18.4199566,17.6547273 19.0744728,17.2782039 19.0244293,16.4581624 C19.0534019,16.4623495 19.080399,16.4687913 19.1120055,16.4687913 C19.1278087,16.4687913 19.1442703,16.4671809 19.160732,16.4658925 C19.0800698,16.6881347 18.9332317,17.0559617 18.8288646,17.3100908 C18.1588744,18.7527326 16.995034,18.7833311 16.7191363,18.768515 C16.6934561,18.7224561 16.6628374,18.6809065 16.6213539,18.6499858 C16.60588,18.6383906 16.5894183,18.6309825 16.5729566,18.6222861 L16.5910644,18.6032827 L16.5192915,18.5981293 L16.574932,18.5839573 C16.5722981,18.5739725 16.5696643,18.5546471 16.5660427,18.5188951 C16.5614334,18.4783118 16.5861259,18.4457807 16.6114769,18.4235564 C16.6565819,18.4528666 16.7079423,18.4689712 16.7632536,18.4715479 C16.9545382,18.4747688 17.1425306,18.3101807 17.1636015,18.2886007 C17.1919156,18.2702415 17.3229505,18.2422197 17.4441085,18.2286919 L17.7417356,18.1955166 L17.3581785,17.9690872 C17.2584208,17.9133656 17.16426,17.8698835 17.0743792,17.8357419 C17.3519231,17.7922598 17.6396732,17.7236546 17.7265908,17.7020745 Z M16.4231554,17.8119073 C16.4024136,17.82157 16.3780504,17.8244688 16.3586256,17.8363861 C16.0260997,18.0405913 15.9977857,18.5385426 15.9994318,18.72922 L15.9569607,18.7797881 C15.7926732,18.4441702 15.795307,18.2386767 15.8321812,18.1211138 C15.8723477,17.9916336 15.9595946,17.9481514 15.9753978,17.939777 C16.1627316,17.8199595 16.3122037,17.7993457 16.4231554,17.8119073 Z M13.7731548,14.4396234 C13.6882126,14.4644243 13.6115011,14.4985659 13.544996,14.5388272 C13.4264719,14.4434885 13.1607805,14.3082106 12.9619234,14.2138382 C13.0366594,14.1780862 13.1104077,14.1442667 13.1831683,14.1136682 C13.374453,14.1813071 13.6519969,14.3101432 13.7731548,14.4396234 Z M12.7354108,14.3288244 C12.9882621,14.4450989 13.2611967,14.584564 13.3784038,14.6637981 C13.3007047,14.7343359 13.2483566,14.8006865 13.2226764,14.8370826 C13.0129546,14.6831236 12.676478,14.5613735 12.4539161,14.4921241 C12.5484061,14.4335037 12.6422377,14.3790705 12.7354108,14.3288244 Z M13.4722354,15.4039613 C13.4215334,15.3959091 13.3714899,15.3775499 13.3444928,15.3382549 C13.2964247,15.2683614 13.3138741,15.1269638 13.3846593,14.9559339 C13.3866347,14.9530351 13.5729808,14.6747492 13.8943127,14.6138742 L13.93843,14.6058219 L13.9621348,14.5681374 C13.9697072,14.5558979 14.0358831,14.4441327 14.0006552,14.3156187 C13.9950582,14.2959712 13.9864981,14.2731028 13.9729995,14.2499123 C13.9888028,14.2479798 14.0052644,14.2466914 14.0223846,14.2466914 C14.1563826,14.2466914 14.2413249,14.3146524 14.2897222,14.4605593 C14.327584,14.5732908 14.3213286,14.6663749 14.2709559,14.745287 C14.1652719,14.9095529 13.8798265,14.9797686 13.7787518,14.9932964 L13.7399022,15.0058579 C13.5453252,15.1185894 13.454786,15.2326093 13.4633461,15.3546815 C13.4643338,15.3720744 13.4676261,15.388501 13.4722354,15.4039613 Z M13.3497605,16.8781679 C13.7491208,16.9480615 14.0829635,16.8433822 14.2735897,16.7554516 C14.2620666,17.0218201 14.2610789,17.5249249 14.3667628,17.9481514 C14.2317771,17.5793582 13.8278076,17.5007682 13.810029,17.4975473 L13.7915919,17.4946485 L13.7728256,17.4978694 C13.5459837,17.5400632 13.4804662,17.7268755 13.4883678,17.8685951 L13.2621844,18.1243347 C13.1393803,18.0879385 12.9510587,18.064748 12.7008412,18.1220801 C13.1169924,17.6714759 13.3346158,17.2546913 13.3497605,16.8781679 Z M12.0782607,18.3939241 C11.4810311,18.1716819 10.7438772,18.5137417 10.4386778,18.6815507 C10.4146437,18.6065036 10.3948897,18.5317787 10.3780988,18.4573759 C10.6197562,18.296975 11.53305,17.7642379 12.3284781,18.2129095 C12.305761,18.2348116 12.2856778,18.2560696 12.2616437,18.2782938 L12.2688869,18.2853798 C12.2076494,18.3169446 12.1437781,18.3530187 12.0782607,18.3939241 Z M11.5491824,18.7962147 C11.3101589,18.7604627 10.8149917,19.0013862 10.6161346,19.1054213 C10.5753097,19.0274755 10.5404109,18.9501738 10.5088045,18.8725501 C10.7445357,18.7408152 11.3539469,18.4419156 11.8626127,18.5407973 C11.7621965,18.614878 11.6584879,18.6976552 11.5491824,18.7962147 Z M13.5094388,19.4590763 C13.5084511,19.454567 13.5064757,19.451024 13.505488,19.4465148 C13.6180858,19.3382925 13.6463999,19.2358678 13.6434368,19.1569557 C13.7106004,19.1144398 13.9084698,18.9701434 13.9071528,18.7508 C13.9068236,18.7050632 13.8956297,18.6606148 13.8785095,18.6164884 L14.12313,18.3446444 C14.3315348,18.2879565 14.3888215,18.1385067 14.3878338,18.0318948 C14.4049539,18.0908373 14.4243787,18.1481694 14.4467666,18.2019584 C14.4168063,18.2196734 14.3868461,18.2447964 14.362812,18.2799042 C14.3295594,18.329184 14.297953,18.4155042 14.3351564,18.5333892 C14.3391072,18.557868 14.4342557,19.1022004 14.7815971,19.3985233 C14.7325413,19.4893527 14.6021648,19.6587722 14.293673,19.7177147 C14.2110354,19.733175 13.624012,19.8446182 13.2750245,19.9386685 C13.4518229,19.7750467 13.5344605,19.6143237 13.5094388,19.4590763 Z M12.3011518,22.4590239 C12.2751423,22.7688746 12.4634639,23.0603662 12.8568979,23.3228697 C12.8914675,23.3479927 13.6806402,23.9193806 14.7187135,24.1074813 C14.6568176,24.2788332 14.5860323,24.4408446 14.5063578,24.5893281 C13.3339573,24.5609842 12.3693031,23.7444857 12.3617307,23.7377218 C11.9281302,23.3409067 11.731907,22.934429 11.7783289,22.5298837 C11.8649174,21.776837 12.7627371,21.2556951 12.7719557,21.2505417 L12.755494,21.2234861 C12.9240616,21.2714775 13.099543,21.3281654 13.2681106,21.3938718 C12.9826651,21.5465425 12.3449398,21.9430355 12.3011518,22.4590239 Z M13.1489281,22.3263228 L13.3382373,22.359498 C13.5002202,22.6783673 13.9252607,23.2252764 14.9402876,23.3299557 C14.8968288,23.5248202 14.8444807,23.7229056 14.782914,23.9158376 C13.7787518,23.7409427 12.9872744,23.1689106 12.9757512,23.1605362 C12.6435546,22.9389382 12.4848641,22.7086438 12.5046181,22.4757726 C12.5497231,21.9394925 13.4807954,21.5107905 13.490014,21.5066033 L13.47882,21.4830908 C13.5891133,21.533981 13.6921634,21.5887363 13.7817149,21.648323 C13.6187443,21.7288455 13.2154332,21.9610725 13.1489281,22.3263228 Z M15.1085259,22.3488691 C14.5162348,22.3147275 14.1204962,21.9607504 13.9677318,21.7926194 C14.3463503,21.70179 14.7694154,21.7787695 15.1536309,21.9143695 C15.1477047,21.9932815 15.1335477,22.1459523 15.1085259,22.3488691 Z M14.981771,23.1338028 C13.83966,23.0255805 13.5262297,22.334375 13.4607122,22.1375779 C13.5519099,22.0248464 13.6766894,21.9372379 13.7744717,21.8795837 C13.9120913,22.0451381 14.3608366,22.4996073 15.0825165,22.5459882 C15.0571655,22.723782 15.0235837,22.9238 14.981771,23.1338028 Z M14.7720493,25.34624 C14.5659491,25.2750581 14.3809199,25.2289992 14.2953192,25.2090296 C15.0956858,24.4662897 15.3096876,22.5063712 15.3528172,21.9900606 C15.4719997,22.0393404 15.5855853,22.0921632 15.6902816,22.1453081 C15.710694,22.3704491 15.8183534,24.0453179 14.7720493,25.34624 Z M16.479125,22.3859094 L16.4764912,22.3839769 C16.4192046,22.341461 15.1286092,21.3999915 14.0260061,21.5790736 C13.5555315,21.190955 12.6050343,20.962271 12.1638614,20.873052 C12.2484744,20.8131432 12.3126749,20.7719157 12.3492199,20.7493694 C12.3689739,20.7590321 12.3870817,20.7703053 12.4111158,20.7754587 C12.4318575,20.779968 12.4529284,20.7822226 12.4739994,20.7822226 C12.5688186,20.7822226 12.6669302,20.7377742 12.7601033,20.654997 C12.770968,20.647911 12.9480956,20.5290597 13.0751798,20.340637 C13.244735,20.4572336 13.7412192,20.7670844 14.1458471,20.6926815 C14.2317771,20.9100924 14.5089917,21.4028903 15.2461455,21.3175364 C15.3590726,21.5062812 15.736045,22.012607 16.4386293,21.8402887 C16.5581411,21.9394925 16.9012024,22.1936216 17.2804794,22.1936216 C17.3321691,22.1936216 17.3848464,22.1858915 17.437853,22.1752625 C17.3601539,22.3794676 17.2366914,22.591725 17.0552837,22.8049487 C16.7556812,22.580774 16.5150115,22.4110325 16.479125,22.3859094 Z M16.7895923,25.6725173 L16.7820199,25.6390199 C16.7701675,25.610676 16.7490965,25.5826542 16.7253917,25.5549544 C17.7097999,25.0959759 17.7404186,24.0237378 17.704203,23.5728116 C17.8151546,23.667184 17.9139247,23.7560809 17.9949161,23.8366035 C17.9880022,24.0498271 17.8981215,25.532086 16.7935431,25.7443434 C16.7922261,25.7205087 16.79058,25.6947415 16.7895923,25.6725173 Z M18.7896858,23.9680162 C18.5832564,23.8359593 18.3478545,23.8101921 18.2451336,23.806327 C18.1684222,23.7193626 18.0610921,23.6172601 17.9373003,23.5083936 L18.0149994,23.5483328 C18.7086944,22.2657698 18.1147571,20.8743404 17.9053646,20.4588441 C17.9280817,20.4588441 17.9491527,20.4575557 17.9731867,20.4588441 C18.0897354,20.5161761 18.7916612,20.9216876 18.6382384,22.3221356 C18.6372507,22.3910629 18.6323122,23.1476526 18.7896858,23.9680162 Z M21.3669258,19.6391247 C20.6643415,20.4330769 19.5940033,20.5184308 19.4122664,20.5274493 C19.2792561,20.3783215 19.1281379,20.2626912 18.9569365,20.1860337 C18.2945186,19.8897108 17.6077375,20.2572157 17.578765,20.2729981 L17.5883128,20.2894247 C17.3568616,20.3351615 17.2310944,20.4166503 17.2238513,20.4214816 L17.2409714,20.4459605 C16.8870454,20.429856 16.5462887,20.3258209 16.2404308,20.1837791 C16.2947543,20.140619 16.3438101,20.0910171 16.3885858,20.0365839 C16.4926236,20.043992 16.5953445,20.0494675 16.6941145,20.0494675 C18.7607133,20.0494675 19.6947488,18.4876524 19.7039673,18.4715479 C19.8326976,18.2547812 19.9515509,18.0264193 20.0598687,17.7983795 C20.2123039,17.8131956 20.3584835,17.821892 20.4954447,17.821892 C21.1371208,17.821892 21.6056201,17.6595586 21.8910655,17.3371464 C21.9256351,17.2981735 21.9506568,17.2563017 21.9779832,17.2153963 C22.0777409,18.2476952 21.8752623,19.0638717 21.3669258,19.6391247 Z M22.5505203,17.3642019 C22.5294493,17.3435882 22.5070614,17.3223302 22.4873074,17.3023606 C22.4231069,16.4475334 22.8428796,15.9334775 22.9558067,15.8130158 C22.9897178,15.8616514 23.0229704,15.9276799 23.0526014,16.013678 C22.6660812,16.5006783 22.5706035,17.0524187 22.5505203,17.3642019 Z M23.5625841,15.5205579 C23.5444762,15.4490539 23.5105652,15.3830254 23.4601925,15.3237609 C23.7281885,15.1614274 24.1413766,15.1259975 24.2207219,15.120522 C24.282947,15.174311 24.3455014,15.2290664 24.408385,15.2873647 C24.034705,15.2664288 23.7242377,15.4184554 23.5625841,15.5205579 Z M24.0791515,14.2215684 C24.2414636,14.3175512 24.587488,14.4876148 25.0536827,14.5436585 C25.082326,14.7691216 25.0898984,14.9852441 25.0582919,15.1607832 L25.082326,15.1649704 C24.9871775,15.2322873 24.8923583,15.3073343 24.8008313,15.3875347 C24.4446007,15.0274379 24.0956132,14.7398114 23.7686843,14.5137041 C23.8878668,14.4441327 23.9912461,14.3397755 24.0791515,14.2215684 Z M24.3965326,13.6862546 C24.3883017,13.6830336 24.3804001,13.6801348 24.3721693,13.6765918 C24.3754616,13.6678954 24.3794124,13.659199 24.3827048,13.6505025 L24.3965326,13.6862546 Z M24.164423,8.39656806 C24.1963586,8.3920588 24.2500237,8.39044834 24.2980918,8.42555617 C24.3599877,8.47161506 24.4594162,8.61526727 24.4271513,9.06587138 C24.4271513,9.06715974 24.4271513,9.06941438 24.4271513,9.07070274 L24.3665723,9.02045667 C24.3669016,9.01723577 24.3672308,9.01143815 24.3672308,9.01111606 L24.3537322,9.0098277 L24.3316736,8.99146856 L24.3185042,9.00692889 L24.2431098,9.00016499 C24.1663984,8.82269332 24.0623606,8.58499079 24.0623606,8.58499079 L24.0491912,8.59046633 C24.08409,8.52475994 24.1212934,8.45969773 24.164423,8.39656806 Z M25.1001046,9.5393439 C25.0352456,9.57606218 24.9789467,9.63210586 24.937134,9.68267402 C24.9051984,9.65014291 24.8706288,9.62244316 24.8360593,9.59796431 L24.8972968,9.5915225 C24.887749,9.5032698 24.903223,9.41308456 24.9239647,9.39118243 C24.9848729,9.4346646 25.0451226,9.48265604 25.1001046,9.5393439 Z M25.3259588,9.98608294 C25.2476012,9.94453331 25.1531112,9.92295327 25.0691566,9.9152231 C25.0661935,9.90266159 25.0665228,9.88977798 25.062572,9.87753856 C25.0605966,9.87238511 25.0576335,9.86819794 25.0556581,9.8630445 C25.1109693,9.78219987 25.1896561,9.70715287 25.2242256,9.70103316 C25.2499058,9.74226069 25.2742691,9.78413241 25.29106,9.8301913 C25.3098263,9.88075946 25.3203618,9.93293806 25.3259588,9.98608294 Z M24.2269773,10.8682879 C24.2408051,10.9146688 24.2556206,10.958151 24.27307,10.9961576 L24.4590869,10.9140247 C24.4406499,10.8740855 24.4251759,10.8251278 24.4113481,10.7729492 L24.4143112,10.7706945 C24.4129943,10.768762 24.4110189,10.7674736 24.4097019,10.7655411 C24.4014711,10.7336542 24.3935695,10.700801 24.3869848,10.6653711 C24.4291267,10.7291449 24.4620501,10.7896979 24.4620501,10.8299591 L24.4953026,10.8299591 C24.5032042,10.8769843 24.5117643,10.9204665 24.5209828,10.9587952 C24.2951287,10.9897158 24.1328165,11.0525234 24.1110871,11.0621861 C24.078493,11.0834441 24.0534713,11.1059904 24.0244987,11.1278925 C23.9919046,11.0325538 23.9435073,10.8773064 23.898073,10.6811535 C24.0110001,10.7165834 24.1449982,10.7774584 24.2269773,10.8682879 Z M24.1525705,10.479203 L24.1548752,10.4775925 C24.1584968,10.5110899 24.163106,10.5432989 24.1673861,10.5755079 C24.0462281,10.5127003 23.9244117,10.4769483 23.8523096,10.4601996 C23.8381525,10.3809655 23.8256417,10.2975441 23.8151062,10.2109019 C23.9250702,10.2730653 24.0682868,10.3677598 24.1525705,10.479203 Z M24.1298534,10.0740135 C24.1308411,10.1100876 24.1318288,10.1458396 24.133475,10.1819137 C24.0030985,10.0798112 23.8644912,10.0066967 23.7940353,9.97287724 C23.7907429,9.91941028 23.788109,9.86562122 23.7871213,9.81118799 C23.9105839,9.8859129 24.0554467,9.98576085 24.1298534,10.0740135 Z M24.1282073,9.6962018 C24.127878,9.73002127 24.1272196,9.76448491 24.1268903,9.79927065 C24.0067201,9.70650869 23.8733805,9.62663033 23.7917306,9.58121562 C23.7953522,9.51873013 23.8019369,9.45592255 23.8095092,9.39311497 C23.90795,9.47106079 24.0307541,9.57928308 24.1282073,9.6962018 Z M24.1374258,9.41082993 C24.0284495,9.30679481 23.9194732,9.22111884 23.8467126,9.16732978 C23.8707467,9.05137733 23.9016946,8.93606905 23.944495,8.82269332 C23.9978308,8.94508758 24.0682868,9.10742101 24.1068071,9.19857252 L24.1499367,9.18085757 C24.1459859,9.2452756 24.1413766,9.32289932 24.1374258,9.41082993 Z M24.4241882,9.54900661 L24.3395752,9.46719571 C24.3425383,9.39408124 24.3458306,9.32708649 24.3494522,9.26782191 L24.4241882,9.32966321 C24.423859,9.3956917 24.423859,9.47009452 24.4241882,9.54900661 Z M24.628313,9.48619903 C24.6279837,9.39440333 24.628313,9.30454018 24.6289714,9.21822002 C24.6665041,9.23561289 24.7089752,9.25783711 24.7553971,9.28360432 C24.708646,9.3531758 24.6938304,9.44239477 24.6921843,9.51389878 C24.6665041,9.50198144 24.6447747,9.49264083 24.628313,9.48619903 Z M24.7662618,10.2885256 C24.7557263,10.3139707 24.7056829,10.4373312 24.6697964,10.5887136 C24.6474085,10.3442472 24.6352269,10.0247338 24.6302884,9.70650869 C24.7158891,9.74999086 24.8314501,9.8269704 24.8686534,9.93970195 C24.8999306,10.0337523 24.8693119,10.1445513 24.7662618,10.2885256 Z M24.8393517,10.9459116 C24.8321085,10.893733 24.8344132,10.8341463 24.8419855,10.7729492 C24.9305493,10.829637 25.0168085,10.9017852 25.0510488,10.9707125 C24.9786174,10.9571847 24.9084907,10.9488104 24.8393517,10.9459116 Z M24.3359536,10.1567907 L24.443613,10.2849826 C24.4455884,10.3271764 24.4482222,10.3693702 24.4508561,10.4102757 C24.4100312,10.3619621 24.3715108,10.3210567 24.3428675,10.2920686 C24.3399044,10.247298 24.337929,10.2022054 24.3359536,10.1567907 Z M24.4304436,9.95484019 L24.3445137,9.85241552 L24.3306859,9.86336659 C24.3310151,9.82149487 24.3313443,9.78058942 24.3316736,9.73968397 L24.4278098,9.83212385 C24.4284682,9.8727072 24.4294559,9.91329056 24.4304436,9.95484019 Z M25.1086647,10.7230252 C25.0332702,10.6537758 24.9476695,10.5983763 24.8857736,10.5632685 C24.8969675,10.5213968 24.9088199,10.4840343 24.9193554,10.4524695 C25.0082484,10.4875773 25.1047139,10.5410443 25.1297356,10.5925787 C25.1353326,10.6041739 25.1369788,10.615125 25.1290771,10.633162 L25.1366495,10.636705 C25.1277602,10.6611839 25.1182124,10.690172 25.1086647,10.7230252 Z M25.2844754,10.2302273 L25.3058755,10.2302273 C25.2917185,10.2898139 25.2706476,10.3513332 25.2423335,10.4144628 C25.1751698,10.3503669 25.0862768,10.3036638 25.01187,10.2733873 C25.0401841,10.2205646 25.061255,10.168386 25.0727782,10.1174957 C25.1623297,10.129091 25.2844754,10.1596895 25.2844754,10.2302273 Z M25.8849973,11.9933487 C25.8876312,12.0010789 26.1322517,12.7721627 26.1121684,13.252077 C26.0637711,13.3155288 25.895862,13.5084608 25.6591431,13.5290746 C25.5386436,13.3052219 25.4243996,13.1213084 25.3753438,13.0449731 L25.3414328,13.0121199 C25.1801083,12.9183916 25.0299779,12.8932686 24.893346,12.9386833 C24.6885627,13.0069664 24.6042789,13.2105274 24.6006574,13.2192238 L24.7494709,13.2775222 C24.7603356,13.3100533 24.772188,13.3477378 24.7853574,13.3889653 L24.7274123,13.3992722 C24.7550679,13.5487221 24.7330092,13.6079866 24.7175353,13.6186156 C24.6967935,13.6331097 24.6316053,13.6176493 24.5785987,13.5934926 L24.3883017,13.1132562 C24.3293689,13.0069664 24.3188335,12.9177475 24.3557076,12.8404458 C24.4343944,12.6765019 24.7142429,12.5885713 24.8159761,12.5682796 L24.7758096,12.3727709 C24.758031,12.3763139 24.3593292,12.4594132 24.1989925,12.7132202 C24.1601429,12.6214245 24.1367673,12.5164231 24.1710076,12.4288146 C24.2177588,12.3093192 24.3665723,12.2284745 24.6138267,12.1878912 L24.5799156,11.9914162 C24.3481353,12.0294228 24.1815431,12.1047919 24.0768468,12.2136584 C24.0607144,12.151495 24.0547882,12.079991 24.0814561,12.0123521 C24.1305119,11.8889915 24.2780085,11.7991284 24.5196659,11.7459835 L24.4748902,11.551119 C24.1930663,11.6136045 24.0110001,11.7289127 23.9221071,11.8893136 C23.8928053,11.8310153 23.8677836,11.7588671 23.8756852,11.6751237 C23.8905007,11.5195541 24.0077078,11.369138 24.2059064,11.2377252 C24.2111741,11.2354706 24.6800026,11.0579989 25.1369788,11.1971419 C25.1396126,11.2006849 25.1406003,11.2051941 25.1435634,11.208415 L25.151465,11.2022953 C25.1889976,11.2142127 25.2271887,11.2241975 25.2643921,11.2409462 C25.5495083,11.3697822 25.7585716,11.6235892 25.8849973,11.9933487 Z M25.6031734,14.849 C25.5834194,14.7533392 25.5495083,14.6370647 25.5040741,14.5056519 C25.6591431,14.5517108 25.7974212,14.6122637 25.8280399,14.6621877 L25.8372584,14.6567122 C25.8339661,14.6789364 25.8336369,14.7043815 25.8250768,14.7208081 L25.84516,14.7307929 C25.781618,14.7594589 25.6989804,14.799076 25.6031734,14.849 Z M25.6594723,15.0483738 C25.7733871,15.3124877 26.1576026,16.085182 26.8641378,16.3766736 C26.8019126,16.4449567 26.7406752,16.514206 26.6817424,16.5824892 C25.771741,16.2062879 25.5369975,15.3353561 25.495514,15.1404916 C25.5528007,15.1066721 25.6074534,15.0763956 25.6594723,15.0483738 Z M25.2808538,14.8448128 L25.4003656,14.9159947 L25.4125472,14.8963472 C25.4174857,14.9185715 25.4188026,14.9337097 25.4204488,14.9494921 C25.3740269,14.9762256 25.326288,15.0048916 25.2778907,15.0354902 C25.2818415,14.9742931 25.2825,14.9105192 25.2808538,14.8448128 Z M24.9628142,14.0502164 C24.9638019,14.0502164 24.9641312,14.0502164 24.9651189,14.0502164 C24.9861898,14.1442667 25.0052853,14.2408938 25.0220763,14.3375208 C24.6279837,14.2798667 24.3310151,14.1355703 24.1901032,14.0537594 C24.2282943,13.9886972 24.2622053,13.923635 24.2924948,13.8605053 C24.4745609,13.9339419 24.7909543,14.0502164 24.9628142,14.0502164 Z M24.8831397,13.7226507 C24.8940044,13.7632341 24.9051984,13.8054279 24.9160631,13.848588 C24.8772135,13.8434345 24.8255238,13.8311951 24.7646156,13.8138022 C24.7886497,13.8073604 24.811696,13.7973757 24.8337547,13.7825595 C24.856801,13.7667771 24.8683242,13.7435866 24.8831397,13.7226507 Z M24.9493157,13.2327516 C24.9387802,13.2005426 24.9292324,13.1721987 24.9213308,13.1486861 C24.9341709,13.141278 24.9453648,13.1319374 24.9601804,13.1271061 C25.0319533,13.1029493 25.1178832,13.1187317 25.2156656,13.1718766 C25.2245549,13.1857265 25.2337734,13.201831 25.2426627,13.2160029 C25.1343449,13.1998984 25.0309656,13.2121379 24.9493157,13.2327516 Z M25.1389542,13.5960693 C25.1106401,13.5322955 25.0833137,13.4704542 25.0579627,13.4137663 C25.1590374,13.3976618 25.2848046,13.4034594 25.3871962,13.4894575 L25.3970732,13.4781843 C25.4286796,13.534228 25.4596276,13.5902717 25.4899171,13.6479258 C25.3598698,13.6099192 25.2304811,13.5983239 25.1389542,13.5960693 Z M25.3898301,14.1970895 C25.5155973,14.1967674 25.6733001,14.2135161 25.7723994,14.2760016 C25.7888611,14.323671 25.8003843,14.366831 25.8115782,14.4099911 C25.6792264,14.3436405 25.5205358,14.2998363 25.420778,14.2769679 C25.4105718,14.2505565 25.4003656,14.223823 25.3898301,14.1970895 Z M25.2331149,14.3600671 C25.2729522,14.4634581 25.3085094,14.5600851 25.337482,14.6451169 L25.2650506,14.6019568 C25.2568198,14.5220785 25.2462843,14.4412339 25.2331149,14.3600671 Z M25.6255613,13.9223466 C25.6416937,13.9571324 25.6584846,13.9919181 25.6733001,14.0260597 C25.5389729,13.9957832 25.4020117,13.9941727 25.3104848,13.9993262 C25.2828292,13.9320093 25.2551736,13.8659809 25.2271887,13.8002745 C25.3595406,13.8125139 25.5185604,13.8469775 25.6196351,13.9291105 L25.6255613,13.9223466 Z M26.1714305,13.4862366 C26.1911845,13.5509767 26.2109385,13.6237691 26.2297048,13.7013928 C26.21456,13.7194298 26.0585034,13.8965794 25.8583294,13.9355523 C25.8263937,13.8621158 25.7924827,13.7890013 25.7572547,13.7178194 C25.9380039,13.6804569 26.0785866,13.5764218 26.1714305,13.4862366 Z M26.2425449,14.3230268 L26.2425449,14.3227047 L26.0051675,14.3462173 C25.9900228,14.2872748 25.9715857,14.2267218 25.9495271,14.1645584 L25.9538071,14.1603712 C25.9515025,14.1584387 25.9485394,14.1571503 25.9462347,14.1552178 C25.9422839,14.1442667 25.9386624,14.1333157 25.9347116,14.1223646 C26.0772697,14.0856463 26.1964522,14.0054459 26.2774436,13.9361965 C26.2978561,14.066643 26.3037823,14.1893594 26.2866622,14.2853422 C26.2721759,14.2972596 26.2573604,14.3098211 26.2425449,14.3230268 Z M28.2584417,13.4517729 C28.9570752,13.4517729 29.3738848,13.5838299 29.4114175,13.641484 C29.3728971,13.7158868 28.9544413,13.848588 28.2584417,13.848588 C27.5621128,13.848588 27.1429986,13.7158868 27.1044782,13.6579106 C27.1420109,13.5838299 27.5594789,13.4517729 28.2584417,13.4517729 Z M29.0110695,14.7601031 C28.862256,14.7536613 28.6551681,14.7768518 28.4148276,14.8860404 C27.9950549,14.4982438 27.4564289,14.5030752 27.0807734,14.5749013 C26.8065219,14.1932244 26.9072674,13.9345861 26.9948435,13.8112255 C27.2289285,13.9938506 27.8551306,14.0479618 28.2584417,14.0479618 C28.6571435,14.0479618 29.2728101,13.995139 29.5124921,13.8170232 C29.5763634,13.9246013 29.6491241,14.1281622 29.5819604,14.4405897 C29.4101005,14.4785963 29.1993911,14.5652386 29.0110695,14.7601031 Z M29.9214002,14.4170771 C29.9151447,14.4161108 29.8651012,14.4112795 29.7916822,14.4135341 C29.8687228,13.9436046 29.6734873,13.6762698 29.6036898,13.6005786 C29.5026151,13.2633502 28.3907936,13.2523991 28.2584417,13.2523991 C28.1264191,13.2523991 27.0188775,13.2633502 26.9125351,13.5976798 C26.8529438,13.6559781 26.7176289,13.8141243 26.699521,14.0550478 C26.6547453,14.0685756 26.5849477,14.0956311 26.4990178,14.14169 C26.4914454,13.7970536 26.3502043,13.3686737 26.315964,13.2714024 C26.3413149,12.7557361 26.090439,11.9672594 26.0789158,11.9318295 C25.9337239,11.5060263 25.6881157,11.2126022 25.3496636,11.0596094 C25.3289219,11.0502688 25.3078509,11.0460816 25.28678,11.0380294 C25.2584659,10.9414023 25.3002786,10.7639306 25.3434082,10.6621502 C25.5393021,10.3432809 25.5860533,10.039872 25.4826739,9.76126401 C25.3160818,9.31227035 24.8133422,9.07392364 24.6319345,9.00016499 C24.6470793,8.63008341 24.5772818,8.37917519 24.4169451,8.26386692 C24.2868978,8.17013868 24.1341335,8.19010827 24.0646652,8.21684176 L24.0360219,8.22811491 L24.0182433,8.25259376 C23.1938426,9.40309977 23.7624288,11.0187039 23.8608697,11.2754098 C23.7525518,11.3949052 23.6857174,11.5218088 23.6728773,11.6567645 C23.6462094,11.9353725 23.8384818,12.1341021 23.8618574,12.1572926 C23.8723928,12.287095 23.9250702,12.3969277 23.9579935,12.4532935 C23.9221071,12.698082 24.0870531,12.9438368 24.1397304,13.0143745 C24.1502659,13.0746054 24.1693615,13.1354804 24.2036017,13.1966775 L24.2671438,13.3577226 C24.2605591,13.3809131 24.0379973,14.1671351 23.6284308,14.3636101 L23.6709019,14.4483198 C23.0851955,14.0589129 22.5778467,13.8585728 22.2403823,13.7584027 L22.2393946,13.7538935 C22.2384069,13.7538935 22.2334684,13.7548598 22.2305053,13.7555039 C22.1109935,13.7203961 22.0161743,13.6988161 21.9444014,13.6846441 C22.017162,13.5899496 22.0619377,13.5216665 22.0688516,13.5107154 C22.3882081,12.991184 23.0348228,12.8507527 23.0414074,12.8494643 L23.2076704,12.8137123 C23.1517007,13.1924904 23.0404197,13.584152 22.8530859,13.9874088 L23.0391028,14.0698639 C23.7634165,12.5083709 23.544147,10.8660332 22.4046698,9.31967842 C21.5499796,8.16015389 20.498737,7.47377978 20.4582413,7.44769048 C18.4956803,6.04820879 18.4476122,5.26681809 18.447283,5.26069838 L18.2454628,5.2404067 C18.0340949,6.24983722 16.1324422,7.43190807 16.1024819,7.45155556 C14.3022331,8.9148111 13.535119,10.3771004 13.5278758,10.3912723 C12.7841373,11.8152329 13.4360197,13.3168172 13.645083,13.7297367 C13.3655637,13.8138022 13.0537796,13.9326535 12.7245461,14.1033613 C12.7637249,13.652113 12.6679179,13.2253436 12.5951573,12.9850643 C12.6945858,12.9676714 12.7782111,12.9096952 12.7913805,12.8997104 L12.8305593,12.8720107 L12.8305593,12.823375 C12.8354978,12.7856905 12.9168184,12.6597533 13.0178931,12.5331718 C13.1495865,12.2600394 13.1568297,12.0500366 13.0396225,11.9092832 C13.0093331,11.8725649 12.9714712,11.8445431 12.9299878,11.8216747 C12.9750928,11.5888035 12.9385478,11.4232492 12.816073,11.3324198 C12.7979651,11.3185699 12.7762357,11.3114839 12.755494,11.3024654 C12.761091,11.0905301 12.7001828,10.9397919 12.5691478,10.8586251 C12.5671724,10.8576589 12.5648678,10.8573368 12.5628924,10.8563705 L12.5777079,10.850895 C12.5730986,10.8386556 12.4660978,10.5677777 12.1875662,10.4366871 L12.2122587,10.4366871 L12.2122587,10.3336182 C12.2376097,10.3381275 12.2613145,10.3445693 12.2899578,10.3445693 C12.441076,10.3445693 12.5875849,10.2708106 12.7245461,10.1268363 C12.73574,10.1152411 12.9981391,9.84146446 12.7271799,9.34705608 C12.7321184,9.22337347 12.770968,9.09324905 12.8058667,9.09324905 C12.8157437,9.09324905 12.8713842,9.09969085 12.9905667,9.22723855 L13.0814352,9.32515395 L13.1525496,9.21306658 C13.1594635,9.20211552 13.3181541,8.94573176 13.2160917,8.5882117 C13.1081031,8.21007786 12.7584571,7.87156112 12.1767015,7.58200207 L12.0710175,7.75206567 C12.075956,7.75560866 12.5747448,8.11119619 12.5777079,8.53442264 C12.5790248,8.74571378 12.4522699,8.94540967 12.2010648,9.1273906 L12.1855908,9.13866376 L12.0799068,9.05395405 C12.1154641,8.99436737 12.2066617,8.89290897 12.3011518,8.8104539 L12.4101281,8.71575939 L12.2823855,8.64812046 C12.1730799,8.59014424 12.0581774,8.17464795 12.0147186,7.82356968 L11.8128985,7.82002669 C11.7424425,8.26483319 11.4365846,8.6957898 11.4332922,8.69997698 L11.3700794,8.78855177 L11.4652279,8.84362918 C11.5198806,8.87487193 11.6005428,8.96151418 11.6644141,9.03945999 L11.5732165,9.09550368 L11.5544502,9.0816538 C11.3144389,8.89935078 11.1936102,8.69997698 11.1945979,8.48771957 C11.1969026,8.0651373 11.6719865,7.70761723 11.6765958,7.70407424 L11.5672903,7.53658736 C11.0194457,7.82163714 10.6872491,8.15532254 10.579919,8.52765875 C10.4752227,8.89097643 10.6296332,9.1534799 10.6362179,9.16443097 L10.7079908,9.28360432 L10.8008346,9.17956921 C10.9163956,9.05008897 10.9680853,9.04622389 10.9736822,9.04622389 C10.9963993,9.04622389 11.0398582,9.15959962 11.0447967,9.30131928 C10.8920323,9.58636906 10.914091,9.79637184 10.9608421,9.92649626 L10.9391127,9.91941028 L10.9825715,9.9806074 C11.0112149,10.0392278 11.0408459,10.0740135 11.043809,10.0775565 C11.0517106,10.086253 11.0599414,10.0920506 11.067843,10.1001028 L11.1027418,10.1493826 C11.1201912,10.2263622 11.0016671,10.6035297 10.8791922,10.9114479 C10.6355594,11.229673 10.3692095,11.7917203 10.3254214,12.7570245 C10.293815,12.8491423 10.1459892,13.3094091 10.0863979,13.920092 L10.0791548,13.9262117 C10.0798132,13.9265338 10.0840933,13.9310431 10.085081,13.9323314 C10.018905,14.6277241 10.0705947,15.5147603 10.5420571,16.2864883 C10.100555,17.1387388 9.83848508,18.2782938 10.5637865,19.4197813 L10.7017354,19.3360378 C10.723794,19.6175446 10.8498904,20.5071576 11.5722288,20.5293818 C11.5788134,20.5303481 11.6499279,20.5435538 11.7477102,20.5435538 C11.8784159,20.5435538 12.0565313,20.5177866 12.1967847,20.4137515 C12.1803231,20.4730161 12.1720922,20.5326027 12.1888831,20.5889685 C12.1898708,20.5912231 12.1948093,20.5999196 12.1981017,20.6063614 C11.9143024,20.7857656 10.9815838,21.4386423 10.7550712,22.3991151 C10.6283163,22.9370057 10.7471696,23.4781171 11.1037295,23.9976485 C11.1271051,24.0404865 11.7019468,25.0396102 14.2156446,25.3955198 C14.572863,25.4741098 15.186225,25.6725173 15.3133092,25.8712469 L15.3873867,25.9871994 L15.4775967,25.8825201 C15.4950461,25.8625505 15.6675644,25.6557686 15.8667507,25.2814999 C16.1515377,25.3948756 16.5146823,25.5771786 16.5867844,25.7015054 C16.5894183,25.7552945 16.5966614,25.8773666 16.6095015,26.0245618 L16.5900767,26.0052364 C16.5617627,26.0313257 16.4113029,26.07513 16.2743418,26.0970321 L16.2391138,26.1092715 C16.0972142,26.1914045 16.0310382,26.2838444 16.0422322,26.3843365 C16.050463,26.4571289 16.0988603,26.5122063 16.1538423,26.5537559 L16.1261867,26.5640628 L16.1080789,26.5907963 C16.0099673,26.7363811 16.0241243,26.8494347 16.0530969,26.9186841 C16.0922757,27.0117681 16.1762302,27.0726432 16.2542586,27.1109719 L16.1923627,27.161218 L16.1890703,27.2030897 C16.1867657,27.2336882 16.1706332,27.5068207 16.3612595,27.6359788 C16.4205215,27.675918 16.4906482,27.6958876 16.5709812,27.6958876 C16.5907352,27.6958876 16.6137816,27.6894458 16.6351817,27.6871912 C16.5933691,27.7480662 16.5505687,27.8073308 16.5080976,27.8595094 L16.4415924,27.9413203 L16.5285101,28.0025174 C16.7033331,28.1255559 16.8616944,28.1870751 17.0016186,28.1870751 C17.0664776,28.1870751 17.1273858,28.1738694 17.184014,28.147458 C17.4421331,28.0269963 17.5099552,27.6784947 17.5274046,27.5348425 C17.9998546,27.2852227 18.2556691,26.8056304 18.3616823,26.5579431 C18.5045696,26.671963 18.7686149,26.8368732 19.1106885,26.8368732 C19.1274794,26.8368732 19.1442703,26.836229 19.1613905,26.8355848 C19.5604215,26.8162594 19.9383816,26.5734034 20.2850645,26.1134587 C20.3430096,26.1221551 20.4026008,26.1276307 20.464826,26.1282749 C20.5359404,26.1170017 21.1351454,26.0103899 21.351781,25.7279168 C21.3804244,25.7540061 21.4028122,25.7762303 21.4117015,25.789436 C21.4301386,25.8148811 21.856496,26.400441 22.440227,26.4593835 C22.5468987,26.5585873 22.7279771,26.6732514 22.9176156,26.6732514 C23.0035456,26.6732514 23.0907925,26.6474842 23.1740885,26.5888638 C23.2086581,26.6101217 23.2481661,26.6236495 23.2926126,26.6236495 C23.2942588,26.6236495 23.2962342,26.6236495 23.2982096,26.6233274 C23.4559124,26.6194623 23.5530363,26.4461778 23.5895812,26.3666216 C23.6080183,26.3662995 23.6264554,26.364689 23.6448925,26.3614681 C23.8230078,26.3266824 23.90367,26.1550083 23.9257287,26.0996088 C23.9349472,26.0973542 23.9441657,26.0979984 23.953055,26.0950996 C24.1196472,26.0416326 24.203931,25.8599738 24.2417928,25.7469201 C24.2852517,25.7533619 24.3313443,25.7646351 24.3705231,25.7646351 C24.4962903,25.7646351 24.6013158,25.7308156 24.6842827,25.664143 C24.877872,25.5079292 24.8633857,25.2331863 24.862398,25.2215911 L24.8600934,25.1835845 L24.8324378,25.156851 C24.7014028,25.0302695 24.1048317,24.7526278 23.9359349,24.6750041 C23.7904137,24.5026859 23.4266107,24.3181282 23.0980356,24.1757644 C23.3024896,23.7609123 23.8855622,23.5119366 24.0534713,23.4478407 C24.423859,23.7535042 24.807416,23.8665578 24.8321085,23.8733217 L24.9759836,23.9139051 L24.9621558,23.7683204 C24.9433894,23.570557 25.4069502,23.1695548 25.7447438,22.9463463 C27.9413898,21.3948381 26.9033166,19.7711816 26.9010119,19.7711816 C26.1855875,18.0428459 22.8040301,18.7962147 22.665752,18.8281017 C22.435947,18.8690071 22.2183237,18.525659 22.15116,18.3849056 C22.2087759,18.046711 22.2219452,17.6772736 22.1886926,17.2756272 C22.5686281,17.7052954 23.3512162,18.4274215 24.3277228,18.4274215 C24.608559,18.4274215 24.9051984,18.3675128 25.2127025,18.2235385 C25.2429919,18.2051793 25.9554533,17.768103 26.3939923,17.253725 C26.6198465,16.960623 27.2671196,16.167637 27.534128,16.0272057 C27.8222073,15.9270357 28.2907066,15.8036752 28.4286554,15.8410376 L28.456311,15.8449027 C28.4925267,15.8449027 29.3491923,15.8381388 29.6408932,15.2400174 C29.6425394,15.2355082 29.8025469,14.7839378 29.9839545,14.5816652 L30.1084048,14.4428443 L29.9214002,14.4170771 L29.9214002,14.4170771 Z" id="Fill-514"></path>
                            <path d="M17.2478853,15.4013846 C17.2794917,15.3723965 17.3529108,15.324405 17.4905304,15.3395433 L17.5060044,15.220692 C17.5208199,15.2818891 17.5385985,15.3437305 17.5596694,15.4055718 C17.408222,15.4342378 17.3097812,15.4245751 17.2478853,15.4013846 Z M16.9805477,14.8518988 C17.0207142,14.7778181 17.0681238,14.734658 17.1224473,14.7233848 C17.2185835,14.705992 17.333486,14.7800727 17.3700309,14.8106713 L17.4388407,14.7340138 C17.4441085,14.8422361 17.4569486,14.9852441 17.4882258,15.1404916 C17.2926611,15.1221324 17.1715031,15.195569 17.1086195,15.2541894 C17.0055694,15.120522 16.9841693,14.9185715 16.9805477,14.8518988 Z M17.6403317,14.5513887 L17.4365361,14.5430143 C17.4362069,14.5481678 17.4355484,14.5736129 17.4355484,14.6109754 C17.3581785,14.5616956 17.2264851,14.4992101 17.0819516,14.5278761 C16.9565136,14.5533212 16.8567559,14.6406077 16.7856415,14.7871587 L16.7760937,14.8296746 C16.7760937,14.8438465 16.7780691,15.1688355 16.9505874,15.3846359 C16.9660614,15.4239309 17.0058987,15.4980116 17.0990718,15.5537332 C17.1777586,15.6014026 17.2755409,15.6252372 17.3914311,15.6252372 C17.4651794,15.6252372 17.5484755,15.6129978 17.6367101,15.5933503 C17.6837905,15.6880448 17.7404186,15.777908 17.8112038,15.8555317 C17.8148254,15.8616514 18.1638129,16.4852179 17.8615766,16.7754212 L18.0047932,16.9181071 C18.417652,16.5206479 18.0070978,15.7891811 17.9768083,15.7405455 C17.6123468,15.3382549 17.6400024,14.5591189 17.6403317,14.5513887 L17.6403317,14.5513887 Z" id="Fill-515"></path>
                            <path d="M18.0361459,13.1213084 L17.9262969,12.9477018 C17.9187583,12.9515669 17.1645339,13.3454832 17.4811573,14.1101252 L17.6893678,14.0405537 C17.4398742,13.4372789 18.011735,13.134192 18.0361459,13.1213084" id="Fill-516"></path>
                            <path d="M18.6674708,12.9563983 L18.5292621,13.1129341 C18.5342879,13.1164771 19.0411727,13.4846261 18.8889636,13.8836958 L19.099328,13.9484359 C19.3025127,13.4153767 18.6933176,12.9747574 18.6674708,12.9563983" id="Fill-517"></path>
                            <path d="M17.8543334,13.8561361 L18.0259276,14.0068708 C18.0273635,14.0053444 18.1325457,13.8763613 18.2524462,13.8729268 C18.3174222,13.8710188 18.3745006,13.9034553 18.4344508,13.9725262 L18.5977883,13.8122513 C18.4929651,13.6916636 18.3770135,13.6405283 18.2459845,13.6363306 C18.0259276,13.6431995 17.8715646,13.8343845 17.8543334,13.8561361" id="Fill-518"></path>
                            <path d="M18.2794954,14.2052013 C18.2757379,14.2052013 18.2719804,14.2048197 18.268223,14.2048197 C18.0543883,14.2048197 17.9003316,14.3708186 17.8938415,14.3780692 L18.0417495,14.5467394 C18.0427742,14.5459762 18.1462757,14.4242436 18.2743716,14.4414159 C18.3543034,14.4437055 18.4321857,14.48988 18.5059689,14.579176 L18.6613919,14.4189011 C18.5476427,14.281141 18.4188637,14.2090174 18.2794954,14.2052013" id="Fill-519"></path>
                            <path d="M18.0113778,14.9973478 L18.1987672,15.1244229 C18.2156394,15.0969472 18.2662561,15.0381798 18.312565,15.0347453 C18.3473864,15.0252051 18.3915414,15.0709979 18.4181062,15.1034345 L18.5857515,14.9477389 C18.4759025,14.8141766 18.3685664,14.792425 18.2949748,14.7989123 C18.1258936,14.8130317 18.0225063,14.9786491 18.0113778,14.9973478" id="Fill-520"></path>
                            <path d="M18.1391204,15.4594648 L18.2644057,15.6548475 C18.2662006,15.6533211 18.4550259,15.5239564 18.5655929,15.6140156 L18.7016476,15.4274099 C18.5099504,15.269043 18.257585,15.3732217 18.1391204,15.4594648" id="Fill-521"></path>
                            <path d="M17.484581,12.8067359 L17.6710575,12.7117473 C17.5851451,12.5178421 17.4692633,12.4057127 17.326742,12.3785731 C17.1019713,12.3335785 16.9114989,12.5324832 16.903507,12.5410536 L17.0473603,12.6992488 C17.0533542,12.6931781 17.064343,12.6842506 17.0746658,12.6756802 C17.0776627,12.8017365 17.1742309,12.90351 17.2937756,12.90351 C17.3723621,12.90351 17.4379619,12.8574441 17.4765892,12.7913806 C17.4792531,12.7967371 17.4822501,12.8010223 17.484581,12.8067359" id="Fill-522"></path>
                            <path d="M19.5317019,12.63292 C19.5434571,12.6375623 19.5541752,12.6386336 19.5659305,12.6454185 L19.6665418,12.4500848 C19.2910644,12.2433239 19.0002942,12.5482873 18.8989914,12.7386216 L19.0867301,12.8453945 C19.088113,12.8428948 19.0971024,12.8275395 19.1098949,12.8082561 C19.1437777,12.8946743 19.2257189,12.9557383 19.3225271,12.9557383 C19.4473405,12.9557383 19.548989,12.850751 19.548989,12.7214808 C19.548989,12.690056 19.5427656,12.6600596 19.5317019,12.63292" id="Fill-523"></path>
                            <path d="M20.8398725,16.7802525 C20.6948432,16.7802525 20.5810454,16.882026 20.5810454,17.0120104 C20.5810454,17.1409235 20.6969971,17.2455537 20.8398725,17.2455537 C20.9834659,17.2455537 21.1004946,17.1409235 21.1004946,17.0120104 C21.1004946,16.882026 20.9859788,16.7802525 20.8398725,16.7802525" id="Fill-524"></path>
                            <path d="M16.402011,16.6842696 C16.2559047,16.6842696 16.1367222,16.7888999 16.1367222,16.9181701 C16.1367222,17.0485116 16.2533918,17.1502851 16.402011,17.1502851 C16.5538611,17.1502851 16.6723256,17.0485116 16.6723256,16.9181701 C16.6723256,16.7888999 16.5509892,16.6842696 16.402011,16.6842696" id="Fill-525"></path>
                            <path d="M3.64823656,11.9865848 C3.61366704,11.9865848 3.57909752,11.9698362 3.5267494,11.9543758 C3.37299735,11.8893136 3.34007399,11.7749716 3.42666241,11.594279 C3.49316758,11.4805812 3.56263585,11.4135865 3.64823656,11.3981261 L3.64823656,11.5775304 C3.64823656,11.5775304 3.63276259,11.5775304 3.61366704,11.594279 C3.57909752,11.6113498 3.56263585,11.6280985 3.54617417,11.6603075 C3.51028772,11.7427626 3.5267494,11.8068585 3.59621767,11.822963 C3.61366704,11.8413222 3.63276259,11.8413222 3.64823656,11.8413222 L3.64823656,11.9865848 Z M5.51499058,11.0212807 L5.4149036,11.2489984 L4.23196758,10.7278565 C4.12792979,10.6943592 4.04232908,10.7278565 3.99228558,10.8425206 L5.1232027,11.8413222 L5.03793122,12.0207264 C5.00171554,12.0696841 4.96879219,12.1186418 4.93323497,12.1360347 C4.88286224,12.151495 4.83117258,12.151495 4.78112908,12.1360347 L3.90470947,11.7427626 C3.90470947,11.758545 3.88791856,11.758545 3.88791856,11.7749716 L3.88791856,11.8068585 C3.85433674,11.8893136 3.80330555,11.9389155 3.73383728,11.9698362 C3.69828006,11.9698362 3.68280608,11.9865848 3.64823656,11.9865848 L3.64823656,11.8413222 C3.66634441,11.8413222 3.68280608,11.8413222 3.68280608,11.822963 C3.71671713,11.822963 3.74931125,11.7917203 3.7684068,11.758545 C3.7861854,11.7256918 3.7861854,11.6928386 3.7684068,11.6603075 C3.7684068,11.6280985 3.73383728,11.6113498 3.71671713,11.594279 C3.69828006,11.5775304 3.66634441,11.5775304 3.64823656,11.5775304 L3.64823656,11.3981261 C3.69828006,11.3981261 3.74931125,11.4135865 3.80330555,11.4309793 L4.84763425,11.8893136 L3.7684068,10.9227211 L3.90470947,10.6447573 C3.93993746,10.5474861 4.00775956,10.49724 4.0759109,10.4643868 C4.14537917,10.4489265 4.23196758,10.4489265 4.29946045,10.49724 L5.51499058,11.0212807 L5.51499058,11.0212807 Z" id="Fill-530"></path>
                            <path d="M5.26049308,10.0556544 L5.26049308,9.79347303 C5.24238524,9.79347303 5.20979112,9.79347303 5.19036634,9.7780127 C5.14032285,9.74354905 5.1232027,9.69555762 5.17291696,9.6308175 C5.19036634,9.59764222 5.22592356,9.56414484 5.26049308,9.56414484 L5.26049308,9.43337624 C5.24238524,9.43337624 5.22592356,9.44883657 5.20979112,9.44883657 C5.15678452,9.46558526 5.10476563,9.49779427 5.07282998,9.56414484 C5.02081108,9.6308175 5.00171554,9.67880893 5.02081108,9.74354905 C5.02081108,9.79347303 5.0543929,9.84210864 5.10476563,9.89203261 L5.26049308,10.0556544 Z M5.26049308,9.18762146 L5.22592356,9.1699065 C5.08896242,9.08873978 4.96879219,9.12255925 4.8647544,9.28618105 L4.66062962,9.59764222 C4.55725029,9.75965356 4.5740412,9.87528393 4.72779325,9.95677273 L5.26049308,10.2849826 L5.26049308,10.5790509 L4.5740412,10.1699964 C4.36958719,10.0401941 4.35246705,9.84210864 4.52169307,9.58089353 L4.79726152,9.1699065 C4.93323497,8.9412225 5.08896242,8.86102205 5.26049308,8.90869139 L5.26049308,9.18762146 Z M5.26049308,10.2849826 L5.26049308,10.5790509 L5.49885814,10.7094974 C5.601579,10.7752038 5.68915511,10.7433169 5.77475583,10.6125483 L5.89525529,10.4331441 L5.37835868,9.87528393 C5.39745422,9.85821315 5.43136527,9.82568204 5.44749771,9.79347303 C5.48206723,9.74354905 5.49885814,9.67880893 5.49885814,9.61245836 C5.48206723,9.54804034 5.44749771,9.49779427 5.39745422,9.46558526 C5.34642303,9.43337624 5.31086581,9.43337624 5.26049308,9.43337624 L5.26049308,9.56414484 C5.27695475,9.56414484 5.29341643,9.56414484 5.32996135,9.58089353 C5.37835868,9.61245836 5.39745422,9.66206025 5.34642303,9.72680037 C5.32996135,9.7780127 5.29341643,9.79347303 5.26049308,9.79347303 L5.26049308,10.0556544 L5.63549005,10.4643868 C5.61902837,10.4817797 5.601579,10.4817797 5.56898488,10.4643868 L5.26049308,10.2849826 Z M6.42532125,9.59764222 L6.28737241,9.80957753 L5.26049308,9.18762146 L5.26049308,8.90869139 C5.29341643,8.92544008 5.32996135,8.9412225 5.361897,8.95668282 L6.42532125,9.59764222 L6.42532125,9.59764222 Z" id="Fill-531"></path>
                            <path d="M6.71768061,9.15444617 L6.71768061,9.15444617 C6.64854157,9.1699065 6.57940253,9.15444617 6.51190966,9.10484429 L4.95134281,7.97495205 C4.91776099,7.95949173 4.88286224,7.94113259 4.83117258,7.94113259 C4.79726152,7.94113259 4.76269201,7.97495205 4.71166081,8.0422689 L4.52169307,8.26966454 L4.40415671,8.18656528 C4.24842926,8.07190119 4.26390323,7.91278866 4.41963068,7.71341485 L4.64219254,7.45155556 C4.71166081,7.35267389 4.79726152,7.30468246 4.88286224,7.28857795 C4.95134281,7.27247344 5.02081108,7.28857795 5.08896242,7.33689147 L4.91776099,7.53336646 C4.88286224,7.51629568 4.84763425,7.499547 4.79726152,7.51629568 C4.74623033,7.51629568 4.71166081,7.55011515 4.66062962,7.59810658 L4.55725029,7.72951936 C4.50556063,7.7968362 4.48712356,7.84482763 4.48712356,7.89378534 C4.48712356,7.92728271 4.50556063,7.95949173 4.54013015,7.97495205 L4.59116135,8.00780525 L4.71166081,7.84482763 C4.83117258,7.69763244 4.95134281,7.66445715 5.08896242,7.76301674 L6.47832784,8.77727861 L6.49446029,8.76181828 L6.52902981,8.71125013 C6.56327009,8.6632587 6.6320799,8.61494518 6.7008897,8.59819649 L6.71768061,8.59819649 L6.71768061,8.72960927 C6.68344032,8.74603587 6.66599095,8.76181828 6.6320799,8.79563775 C6.59816884,8.82688049 6.59816884,8.86102205 6.59816884,8.89323107 C6.59816884,8.92544008 6.61495975,8.95668282 6.6320799,8.97600823 C6.66599095,8.99179065 6.7008897,9.00725098 6.71768061,9.00725098 L6.71768061,9.15444617 Z M6.8895405,8.64779837 C6.95802107,8.69707817 6.99160289,8.74603587 6.99160289,8.81077599 C6.99160289,8.87648238 6.97514122,8.95668282 6.90501448,9.02399966 C6.85398328,9.08873978 6.80361056,9.13995212 6.71768061,9.15444617 L6.71768061,9.00725098 C6.75060396,8.99179065 6.78649041,8.97600823 6.82007223,8.9412225 C6.87110343,8.86102205 6.87110343,8.81077599 6.80361056,8.76181828 C6.76904104,8.74603587 6.75060396,8.72960927 6.71768061,8.72960927 L6.71768061,8.59819649 C6.78649041,8.59819649 6.83818007,8.61494518 6.8895405,8.64779837 L6.8895405,8.64779837 Z" id="Fill-532"></path>
                            <path d="M6.27091073,7.89378534 L6.27091073,7.89378534 C6.20374709,7.89378534 6.13427882,7.87639247 6.08225993,7.8264685 C5.9620897,7.72951936 5.9620897,7.59810658 6.100697,7.45155556 C6.16818987,7.38713753 6.21823337,7.35267389 6.27091073,7.33689147 L6.27091073,7.499547 C6.23634121,7.51629568 6.21823337,7.53336646 6.18531002,7.55011515 C6.13427882,7.61485527 6.13427882,7.68152793 6.18531002,7.72951936 C6.20374709,7.74497969 6.23634121,7.76301674 6.27091073,7.74497969 L6.27091073,7.89378534 Z M7.95066012,7.76301674 L7.95066012,7.76301674 C7.88250878,7.76301674 7.81501591,7.74497969 7.76299701,7.69763244 C7.74653534,7.68152793 7.7294152,7.64867473 7.71196582,7.61485527 L7.52397348,8.30283982 L7.35277206,8.48385449 L6.49446029,7.72951936 C6.49446029,7.74497969 6.49446029,7.74497969 6.47832784,7.76301674 L6.46054923,7.7968362 C6.40853034,7.84482763 6.3393913,7.89378534 6.27091073,7.89378534 L6.27091073,7.74497969 C6.30482178,7.74497969 6.3393913,7.72951936 6.37429005,7.71341485 C6.3914102,7.68152793 6.40853034,7.64867473 6.40853034,7.61485527 C6.40853034,7.58264625 6.3914102,7.55011515 6.37429005,7.53336646 C6.35684068,7.499547 6.32391733,7.499547 6.28737241,7.499547 L6.27091073,7.499547 L6.27091073,7.33689147 C6.35684068,7.32014278 6.44408756,7.33689147 6.51190966,7.41934655 L7.3679168,8.15725508 L7.50619487,7.68152793 C7.50619487,7.64867473 7.52397348,7.61485527 7.54142286,7.58264625 L7.60891573,7.499547 C7.65994692,7.45155556 7.64282678,7.38713753 7.59245405,7.33689147 L6.85398328,6.69818671 L7.02485548,6.51781623 L7.78044639,7.17326968 C7.81501591,7.20547869 7.83246529,7.23833189 7.83246529,7.28857795 C7.8650594,7.25572475 7.918066,7.23833189 7.95066012,7.23833189 L7.95066012,7.36974467 C7.918066,7.36974467 7.90094586,7.38713753 7.8650594,7.41934655 C7.81501591,7.48408667 7.81501591,7.53336646 7.8650594,7.59810658 C7.88250878,7.61485527 7.918066,7.61485527 7.95066012,7.63095978 C7.95066012,7.63095978 7.95066012,7.63095978 7.95066012,7.61485527 L7.95066012,7.76301674 Z M8.15610183,7.30468246 C8.20976689,7.35267389 8.24367794,7.40324204 8.2255701,7.46766007 C8.2255701,7.53336646 8.19264675,7.59810658 8.13964015,7.66445715 C8.08860896,7.71341485 8.01914069,7.76301674 7.95066012,7.76301674 L7.95066012,7.61485527 C7.98555887,7.61485527 8.01914069,7.59810658 8.03560236,7.56686384 C8.10704604,7.51629568 8.10704604,7.45155556 8.05568561,7.40324204 C8.01914069,7.36974467 8.00300825,7.36974467 7.96909719,7.36974467 L7.95066012,7.36974467 L7.95066012,7.23833189 C8.01914069,7.22351574 8.08860896,7.23833189 8.15610183,7.30468246 L8.15610183,7.30468246 Z" id="Fill-533"></path>
                            <path d="M8.65324443,7.19066254 C8.63777046,7.19066254 8.62032108,7.19066254 8.58542233,7.19066254 C8.51727099,7.20547869 8.44977812,7.17326968 8.39677153,7.10885165 L7.09366528,5.71677803 C7.06074193,5.68263647 7.02485548,5.66782033 6.99160289,5.66782033 C6.95802107,5.66782033 6.90501448,5.68263647 6.85398328,5.73191627 L6.61495975,5.92839126 L6.51190966,5.82822122 C6.3914102,5.68263647 6.42532125,5.53640755 6.6320799,5.35539288 L6.8895405,5.14216921 C6.99160289,5.06196876 7.07786207,5.02911556 7.16181662,5.02911556 C7.2480758,5.02911556 7.30174086,5.06196876 7.35277206,5.10931601 L7.14634264,5.27519244 C7.1292225,5.25908793 7.07786207,5.24137297 7.04164639,5.22559055 C6.99160289,5.22559055 6.94024246,5.24137297 6.8895405,5.29065276 L6.76904104,5.40435059 C6.7008897,5.45395247 6.66599095,5.50291017 6.66599095,5.5509016 C6.64854157,5.58472107 6.66599095,5.61660799 6.7008897,5.64978328 L6.73249612,5.68263647 L6.8895405,5.5509016 C7.04164639,5.42270972 7.16181662,5.42270972 7.26684211,5.53640755 L8.44977812,6.78128597 L8.4662398,6.7638931 L8.48270147,6.73232826 C8.53636654,6.68111593 8.60320094,6.66533351 8.65324443,6.64922901 L8.65324443,6.78128597 C8.63777046,6.78128597 8.60320094,6.79674629 8.58542233,6.83088785 C8.55184051,6.84473773 8.53636654,6.87887928 8.53636654,6.9110883 C8.51727099,6.94394149 8.53636654,6.97615051 8.55184051,6.99354337 C8.58542233,7.04250108 8.62032108,7.04250108 8.65324443,7.04250108 L8.65324443,7.19066254 Z M8.87778169,6.73232826 C8.91202198,6.78128597 8.94593303,6.84473773 8.92848365,6.9110883 C8.92848365,6.97615051 8.87778169,7.04250108 8.80831342,7.10885165 C8.75794069,7.14138275 8.7069095,7.17326968 8.65324443,7.19066254 L8.65324443,7.04250108 C8.68781395,7.02575239 8.7069095,7.02575239 8.74082055,6.99354337 C8.80831342,6.94394149 8.80831342,6.87887928 8.75794069,6.83088785 C8.72337117,6.79674629 8.68781395,6.78128597 8.65324443,6.78128597 L8.65324443,6.64922901 C8.67135228,6.64922901 8.67135228,6.64922901 8.68781395,6.64922901 C8.75794069,6.64922901 8.82642126,6.66533351 8.87778169,6.73232826 L8.87778169,6.73232826 Z" id="Fill-534"></path>
                            <path d="M9.2540956,5.0932115 L9.2540956,4.86420541 C9.16750718,4.86420541 9.06643249,4.91380729 8.96305317,4.98112413 L8.55184051,5.27519244 C8.43134105,5.35539288 8.34606957,5.45395247 8.32927866,5.5509016 C8.29536761,5.66782033 8.31018311,5.74737659 8.38063909,5.82822122 L8.41586707,5.87975564 L8.62032108,5.73191627 L8.60320094,5.69938516 C8.49982162,5.56861656 8.53636654,5.45395247 8.68781395,5.3386442 L8.96305317,5.14216921 C9.08355264,5.06196876 9.16750718,5.04522007 9.2540956,5.0932115 Z M9.2540956,5.84754663 L9.22051378,5.81469343 C9.15269167,5.78184024 9.08355264,5.78184024 9.0144136,5.82822122 L8.94593303,5.87975564 C8.86099078,5.94610621 8.84354141,6.01116842 8.89490183,6.09136887 L9.04898312,6.28913222 L9.06643249,6.25692321 L9.10001431,6.24017452 C9.15269167,6.20828759 9.2040521,6.19218309 9.2540956,6.17446813 L9.2540956,6.32295169 C9.23862162,6.32295169 9.2040521,6.32295169 9.18462733,6.3387341 C9.15269167,6.37094312 9.13359613,6.38640345 9.11713446,6.41990082 C9.11713446,6.45404238 9.11713446,6.48625139 9.13359613,6.51781623 C9.15269167,6.53359864 9.18462733,6.55034733 9.22051378,6.56709602 C9.23862162,6.56709602 9.23862162,6.56709602 9.2540956,6.55034733 L9.2540956,6.69818671 C9.23862162,6.71396913 9.2040521,6.71396913 9.16750718,6.71396913 C9.10001431,6.71396913 9.03153374,6.68111593 8.97951485,6.60091548 L8.67135228,6.2243921 C8.56731449,6.09136887 8.62032108,5.96060027 8.79283944,5.82822122 L9.04898312,5.64978328 C9.10001431,5.60243603 9.15269167,5.58472107 9.2040521,5.58472107 C9.22051378,5.58472107 9.23862162,5.58472107 9.2540956,5.60243603 L9.2540956,5.84754663 Z M9.2540956,6.17446813 L9.2540956,6.32295169 C9.27220344,6.30459255 9.27220344,6.30459255 9.28866512,6.32295169 C9.32455157,6.32295169 9.34068401,6.3387341 9.35879185,6.35548279 C9.40916458,6.41990082 9.39171521,6.47014688 9.32455157,6.51781623 C9.30710219,6.53359864 9.27220344,6.55034733 9.2540956,6.55034733 L9.2540956,6.69818671 C9.30710219,6.68111593 9.35879185,6.66533351 9.39171521,6.6331245 C9.47665745,6.58352262 9.51221467,6.51781623 9.53032251,6.45404238 C9.54612572,6.38640345 9.53032251,6.32295169 9.47665745,6.27302771 C9.4437341,6.20828759 9.37525353,6.17446813 9.30710219,6.17446813 C9.28866512,6.17446813 9.27220344,6.17446813 9.2540956,6.17446813 Z M10.1805587,5.84754663 C10.2496977,5.92839126 10.2319191,6.02630666 10.0939703,6.10972801 L9.94087671,6.2243921 L9.2540956,5.84754663 L9.2540956,5.60243603 C9.28866512,5.60243603 9.32455157,5.61660799 9.35879185,5.63432295 L9.97544622,5.99441974 L9.34068401,5.17598867 C9.30710219,5.14216921 9.28866512,5.10931601 9.2540956,5.0932115 L9.2540956,4.86420541 C9.35879185,4.86420541 9.45986654,4.91380729 9.53032251,5.01140061 L10.1805587,5.84754663 L10.1805587,5.84754663 Z" id="Fill-535"></path>
                            <path d="M26.3834568,6.04241117 C26.3320964,6.04241117 26.2813944,6.01116842 26.2287171,5.97734896 C26.1444333,5.92839126 26.1092053,5.87975564 26.0752943,5.79794475 C26.0588326,5.73191627 26.0752943,5.66782033 26.1259962,5.60243603 L26.3834568,5.24137297 L26.3834568,5.66782033 C26.3673244,5.66782033 26.3673244,5.66782033 26.3488873,5.66782033 C26.3149763,5.68263647 26.2813944,5.68263647 26.2649328,5.71677803 C26.245508,5.73191627 26.245508,5.76444737 26.245508,5.79794475 C26.245508,5.82822122 26.2813944,5.86300696 26.3149763,5.87975564 C26.3320964,5.89553806 26.3673244,5.91228675 26.3834568,5.91228675 L26.3834568,6.04241117 Z M27.2562549,6.43600533 C27.1894205,6.53359864 27.0876873,6.55034733 26.9678463,6.45404238 L26.7956572,6.35548279 L26.9836495,5.56861656 C27.0007697,5.48616148 26.9836495,5.43817005 26.9135228,5.3876019 L26.8295682,5.3386442 C26.744626,5.27519244 26.6761454,5.29065276 26.6221511,5.35539288 L26.4700452,5.56861656 L26.5046148,5.56861656 L26.5365504,5.60243603 C26.5885693,5.63432295 26.6405882,5.69938516 26.6577084,5.76444737 C26.6761454,5.82822122 26.6577084,5.87975564 26.6221511,5.94610621 C26.5714492,6.01116842 26.5200887,6.04241117 26.4525959,6.04241117 C26.4180264,6.04241117 26.400577,6.04241117 26.3834568,6.04241117 L26.3834568,5.91228675 C26.4180264,5.92839126 26.4700452,5.91228675 26.5046148,5.86300696 C26.5200887,5.84754663 26.5200887,5.81469343 26.5046148,5.78184024 C26.5046148,5.74737659 26.4865069,5.71677803 26.4525959,5.69938516 C26.4354757,5.68263647 26.400577,5.66782033 26.3834568,5.66782033 L26.3834568,5.24137297 L26.4180264,5.20851978 C26.5200887,5.06196876 26.6577084,5.06196876 26.8466884,5.19209318 L27.1038198,5.35539288 C27.154851,5.40435059 27.1894205,5.43817005 27.2058822,5.48616148 C27.2253069,5.53640755 27.2253069,5.58472107 27.2058822,5.63432295 L27.0521301,6.30459255 L27.6694429,5.47005698 C27.7560314,5.3386442 27.7224495,5.22559055 27.568039,5.12542052 L27.2927998,4.93055598 C27.1212691,4.81524771 27.0007697,4.83070803 26.8987073,4.96179872 L26.8822456,4.99465192 L26.6761454,4.86420541 L26.7090688,4.81524771 C26.7617461,4.71797648 26.8466884,4.68383493 26.9678463,4.6683746 C27.0692502,4.6683746 27.1894205,4.70219406 27.3099199,4.78400496 L27.738582,5.07742909 C27.9785932,5.24137297 28.0296244,5.40435059 27.8735677,5.60243603 L27.2562549,6.43600533 L27.2562549,6.43600533 Z" id="Fill-547"></path>
                            <path d="M27.8416321,7.15652099 C27.8416321,7.15652099 27.8416321,7.15652099 27.823195,7.14138275 C27.7030248,7.04250108 27.6190702,6.92783698 27.568039,6.81252871 C27.5314941,6.69818671 27.5489435,6.58352262 27.6190702,6.5023559 C27.6694429,6.45404238 27.738582,6.41990082 27.8060748,6.41990082 C27.823195,6.43600533 27.8416321,6.43600533 27.8416321,6.43600533 L27.8416321,6.56709602 C27.8416321,6.56709602 27.8416321,6.56709602 27.8416321,6.55034733 C27.8060748,6.55034733 27.7896132,6.56709602 27.7560314,6.58352262 C27.7030248,6.6331245 27.7224495,6.69818671 27.772493,6.74778859 C27.8060748,6.7638931 27.823195,6.78128597 27.8416321,6.78128597 L27.8416321,6.9110883 C27.823195,6.9110883 27.7896132,6.89530588 27.772493,6.87887928 C27.7896132,6.9110883 27.8060748,6.94394149 27.8416321,6.99354337 L27.8416321,7.15652099 Z M28.4744189,5.69938516 L28.4744189,5.82822122 C28.4589449,5.84754663 28.4408371,5.84754663 28.4243754,5.86300696 C28.3898059,5.91228675 28.3898059,5.96060027 28.4589449,6.02630666 C28.4589449,6.02630666 28.4589449,6.02630666 28.4744189,6.02630666 L28.4744189,6.17446813 C28.4589449,6.15868571 28.4589449,6.15868571 28.4408371,6.15868571 C28.4589449,6.17446813 28.4589449,6.17446813 28.4744189,6.19218309 L28.4744189,6.38640345 C28.3549071,6.28913222 28.2874142,6.19218309 28.2521863,6.09136887 C28.202472,5.96060027 28.2182752,5.86300696 28.3038759,5.78184024 C28.3549071,5.73191627 28.406926,5.69938516 28.4744189,5.69938516 Z M27.8416321,6.43600533 C27.8926633,6.43600533 27.9436945,6.47014688 27.9957134,6.5023559 C28.0470738,6.55034733 28.0819725,6.61766417 28.0990927,6.66533351 C28.1142374,6.73232826 28.0990927,6.79674629 28.0470738,6.84473773 C27.9957134,6.9110883 27.9265743,6.92783698 27.8416321,6.9110883 L27.8416321,6.78128597 C27.8926633,6.79674629 27.9107711,6.78128597 27.9436945,6.74778859 C27.9957134,6.69818671 27.9785932,6.64922901 27.9265743,6.60091548 C27.8926633,6.58352262 27.8735677,6.56709602 27.8416321,6.56709602 L27.8416321,6.43600533 Z M28.4744189,7.33689147 C28.4243754,7.35267389 28.3733442,7.36974467 28.3038759,7.36974467 C28.1662563,7.35267389 28.0128335,7.28857795 27.8416321,7.15652099 L27.8416321,6.99354337 C27.8735677,7.00803743 27.9107711,7.04250108 27.9608146,7.07471009 C28.0296244,7.15652099 28.1142374,7.19066254 28.202472,7.19066254 C28.2874142,7.19066254 28.3733442,7.15652099 28.4408371,7.07471009 L28.4744189,7.05924976 L28.4744189,7.33689147 Z M28.4744189,6.17446813 C28.5610073,6.20828759 28.6469372,6.19218309 28.7328672,6.12551043 C28.7838984,6.05915986 28.8003601,6.01116842 28.7838984,5.94610621 C28.7674367,5.87975564 28.7328672,5.82822122 28.6824945,5.78184024 C28.61138,5.73191627 28.5610073,5.69938516 28.4908806,5.69938516 C28.4744189,5.69938516 28.4744189,5.69938516 28.4744189,5.69938516 L28.4744189,5.82822122 C28.4908806,5.82822122 28.4908806,5.82822122 28.5103053,5.82822122 C28.5438872,5.82822122 28.5787859,5.84754663 28.595906,5.86300696 C28.6633989,5.92839126 28.6633989,5.97734896 28.6294879,6.02630666 C28.5787859,6.07462018 28.5274255,6.07462018 28.4744189,6.02630666 L28.4744189,6.17446813 Z M28.4744189,6.38640345 L28.4744189,6.19218309 C28.4908806,6.24017452 28.5610073,6.28913222 28.6294879,6.35548279 C28.7164055,6.41990082 28.8003601,6.45404238 28.8876069,6.47014688 C28.9705738,6.47014688 29.0584791,6.43600533 29.1286059,6.35548279 L29.1612,6.32295169 L29.1786494,6.28913222 L29.3837618,6.45404238 C29.2816995,6.58352262 29.1437506,6.64922901 28.9899986,6.6331245 C28.8346003,6.6331245 28.6633989,6.56709602 28.5103053,6.41990082 C28.4908806,6.40444049 28.4744189,6.40444049 28.4744189,6.38640345 Z M28.7164055,7.19066254 C28.6469372,7.25572475 28.5610073,7.32014278 28.4744189,7.33689147 L28.4744189,7.04250108 L28.5103053,7.00803743 L28.7164055,7.19066254 L28.7164055,7.19066254 Z" id="Fill-548"></path>
                            <path d="M29.4683749,8.76181828 L29.2971734,8.58176989 L30.2417444,7.78008751 C30.3615854,7.68152793 30.3451237,7.55011515 30.2246242,7.41934655 L30.0185241,7.20547869 C29.8980246,7.07471009 29.760405,7.05924976 29.6399055,7.15652099 L29.6082991,7.19066254 L29.7949745,7.40324204 L29.7103615,7.48408667 C29.5724126,7.33689147 29.4538886,7.32014278 29.35018,7.41934655 L28.7164055,7.95949173 L28.5438872,7.76301674 L29.1786494,7.22351574 C29.2816995,7.14138275 29.4021989,7.14138275 29.5388308,7.25572475 L29.3673002,7.07471009 L29.4874704,6.95940182 C29.6580134,6.81252871 29.8644428,6.84473773 30.0876631,7.07471009 L30.3615854,7.38713753 C30.4636478,7.48408667 30.5153374,7.56686384 30.5317991,7.66445715 C30.5522116,7.78008751 30.5153374,7.87639247 30.4116289,7.95949173 L29.4683749,8.76181828" id="Fill-549"></path>
                            <path d="M30.3777178,9.94099032 L30.2246242,9.74354905 L31.2360296,9.05588659 C31.3736492,8.95668282 31.3901109,8.84266291 31.2705991,8.67871903 L31.1491119,8.51638559 C31.0309171,8.36854621 30.9100884,8.33601511 30.7734565,8.43328633 L30.7398747,8.4506792 L30.5848057,8.25388212 L30.6358369,8.22102893 C30.7224253,8.15725508 30.8248169,8.13857385 30.9281963,8.17207122 C31.0309171,8.20621278 31.1319918,8.26966454 31.2185802,8.40107732 L31.4421298,8.69707817 C31.5626292,8.84266291 31.5797494,8.99179065 31.5287182,9.10484429 C31.4921733,9.15444617 31.4585914,9.2027597 31.4082187,9.23625707 L30.3777178,9.94099032" id="Fill-550"></path>
                            <path d="M31.2185802,11.1865129 C31.2021185,11.1865129 31.1849984,11.1681538 31.1849984,11.1681538 C31.1155301,11.1359448 31.0480373,11.0853766 31.01248,11.0212807 C30.963095,10.9397919 30.9453164,10.857981 30.963095,10.7942071 C30.9779105,10.7278565 31.01248,10.6788988 31.082936,10.6447573 C31.1319918,10.6276865 31.1849984,10.6125483 31.2185802,10.6125483 L31.2185802,10.7594214 C31.2021185,10.7594214 31.1849984,10.7594214 31.1491119,10.7752038 C31.082936,10.8103116 31.082936,10.8747297 31.1155301,10.9397919 C31.1491119,10.9893937 31.1849984,11.0212807 31.2185802,11.0212807 L31.2185802,11.1865129 Z M32.316574,10.6788988 L32.1799421,10.4489265 C32.2309733,10.4163954 32.2645551,10.3819317 32.2829922,10.3336182 C32.2994538,10.2849826 32.2829922,10.2344144 32.2480934,10.1867451 L32.0594426,9.85821315 C31.9738419,9.69555762 31.8543301,9.66206025 31.7163813,9.72680037 L31.6465838,9.75965356 L32.0084114,10.3819317 C32.1450433,10.6125483 32.1269355,10.7594214 31.9563925,10.8425206 L31.4082187,11.1526935 C31.338092,11.1865129 31.2880485,11.1865129 31.2185802,11.1865129 L31.2185802,11.0212807 C31.2531497,11.0212807 31.2705991,11.0212807 31.2880485,11.0051762 C31.3552121,10.9565406 31.3736492,10.9059724 31.3216303,10.8241615 C31.3045102,10.7942071 31.2880485,10.7752038 31.2531497,10.7594214 C31.2360296,10.7594214 31.2360296,10.7594214 31.2185802,10.7594214 L31.2185802,10.6125483 C31.2705991,10.6276865 31.3216303,10.6447573 31.3736492,10.6788988 C31.4082187,10.7094974 31.4250096,10.7433169 31.4421298,10.7752038 C31.4585914,10.7942071 31.477687,10.8241615 31.477687,10.8241615 L31.7842034,10.6621502 C31.8358931,10.6276865 31.8698041,10.5957996 31.8698041,10.5474861 C31.8698041,10.49724 31.8543301,10.4331441 31.8013235,10.3490785 L31.3736492,9.6308175 L31.6123435,9.49779427 C31.7163813,9.44883657 31.8177852,9.43337624 31.9047029,9.48233394 C31.9886574,9.51518714 32.0594426,9.59764222 32.1098153,9.67880893 L32.4186364,10.2038159 C32.5391358,10.4163954 32.5220157,10.5790509 32.316574,10.6788988 L32.316574,10.6788988 Z" id="Fill-551"></path>
                            <path d="M31.6465838,11.9698362 C31.6123435,11.9698362 31.5797494,11.9698362 31.5626292,11.9543758 C31.4921733,11.922811 31.4421298,11.8735312 31.4082187,11.7917203 C31.3736492,11.7089431 31.3736492,11.6280985 31.3901109,11.5607817 C31.4082187,11.4973299 31.4585914,11.4309793 31.5287182,11.3981261 L31.6465838,11.3659171 L31.6465838,11.5775304 C31.6297929,11.5607817 31.6123435,11.5775304 31.5952234,11.5775304 C31.5626292,11.5775304 31.5448506,11.6113498 31.5287182,11.6435588 C31.5096226,11.6760899 31.5287182,11.7089431 31.5448506,11.7427626 C31.5626292,11.8068585 31.5952234,11.8413222 31.6465838,11.8413222 L31.6465838,11.9698362 Z M33.569966,12.2349163 C33.49951,12.2661591 33.4300417,12.2661591 33.3625489,12.2349163 C33.3095423,12.2004527 33.259828,12.1682437 33.2242708,12.1186418 C33.1923351,12.2004527 33.1228669,12.2661591 33.0188291,12.2990123 L32.0238854,12.7083889 C31.9228107,12.7399537 31.8358931,12.7083889 31.7664248,12.562482 L31.6992611,12.3975719 L32.2829922,11.8068585 C32.3336941,11.758545 32.350485,11.6928386 32.316574,11.6280985 L32.2829922,11.5453213 C32.2309733,11.4461176 32.1799421,11.4135865 32.0930244,11.4461176 L31.8358931,11.5453213 L31.8698041,11.5775304 L31.8879119,11.6113498 C31.9047029,11.6760899 31.9228107,11.7427626 31.9047029,11.8068585 C31.8698041,11.8735312 31.8358931,11.922811 31.7502923,11.9543758 C31.7163813,11.9698362 31.6818118,11.9698362 31.6465838,11.9698362 L31.6465838,11.8413222 C31.6627162,11.8413222 31.6818118,11.8413222 31.6992611,11.822963 C31.7321845,11.8068585 31.7502923,11.7917203 31.7664248,11.758545 C31.7664248,11.7256918 31.7664248,11.6928386 31.7502923,11.6603075 C31.7321845,11.6280985 31.7163813,11.594279 31.6818118,11.5775304 C31.6627162,11.5775304 31.6627162,11.5775304 31.6465838,11.5775304 L31.6465838,11.3659171 L32.0084114,11.2161452 C32.1598588,11.1526935 32.2829922,11.2161452 32.3676052,11.4135865 L32.4877754,11.7089431 C32.5220157,11.758545 32.5220157,11.8068585 32.5220157,11.8580709 C32.5042371,11.9060623 32.4699968,11.9543758 32.4360857,11.9865848 L31.9382847,12.4784165 L32.8983296,12.0851444 C33.0524109,12.0207264 33.0873096,11.9060623 33.0188291,11.7427626 L32.8818679,11.4309793 C32.7962672,11.2673575 32.6932171,11.2161452 32.5391358,11.2673575 L32.5042371,11.2844283 L32.4015162,11.0541339 L32.4545228,11.036741 C32.5555975,10.9893937 32.6596353,11.0051762 32.745236,11.0541339 C32.8472984,11.1037357 32.9154497,11.2000407 32.9677979,11.3317756 L33.1571071,11.7256918 L33.2433663,11.922811 C33.259828,12.0046219 33.328967,12.0207264 33.4145677,11.9865848 C33.4300417,11.9865848 33.4484788,11.9865848 33.4484788,11.9698362 L33.569966,12.2349163 L33.569966,12.2349163 Z" id="Fill-552"></path>
                            <path d="M33.5156424,11.9865848 L33.1228669,10.8905121 C33.259828,10.8425206 33.3964599,10.857981 33.5156424,10.9565406 L33.5156424,11.1865129 C33.4649405,11.1359448 33.3964599,11.1201623 33.344441,11.1201623 L33.5156424,11.594279 L33.5156424,11.9865848 Z M33.5860984,12.1843482 L33.5156424,11.9865848 L33.5156424,11.594279 L33.6190218,11.8580709 C33.7062686,11.7427626 33.7210842,11.5775304 33.6371296,11.3826658 C33.6190218,11.2995666 33.569966,11.2345043 33.5156424,11.1865129 L33.5156424,10.9565406 C33.6190218,11.036741 33.7062686,11.1526935 33.7566414,11.315349 L33.8086603,11.4309793 L33.8086603,11.4973299 L33.9452922,11.4651209 L34.0137727,11.6603075 L33.8241342,11.7256918 L33.8086603,11.8580709 L34.0657916,11.7749716 L34.1507339,12.0046219 L33.5860984,12.1843482 L33.5860984,12.1843482 Z" id="Fill-553"></path>
                            <polyline id="Fill-554" points="34.2797161 12.0251656 34.1853034 11.7714777 34.5590053 11.6435588 34.6527 11.8993966 34.2797161 12.0251656"></polyline>
                            <path d="M32.6932171,14.2476577 C32.4699968,14.3123978 32.2994538,14.2154487 32.2309733,13.9358744 L32.0749166,13.4595031 C32.0429809,13.3464494 32.0429809,13.2488561 32.0749166,13.166079 C32.1269355,13.0684856 32.1957453,13.0034234 32.316574,12.9712144 L32.7271282,12.8559062 C32.7616977,12.8401237 32.7962672,12.8401237 32.8301783,12.8401237 L32.8301783,13.0188838 C32.8137166,13.0188838 32.7962672,13.0188838 32.7801348,13.0188838 C32.7616977,13.0346662 32.7271282,13.0530253 32.7096788,13.0852343 C32.6932171,13.1180875 32.6932171,13.1499745 32.7096788,13.1825056 C32.7271282,13.2646385 32.7616977,13.298458 32.8301783,13.298458 L32.8301783,13.4276162 C32.7096788,13.4276162 32.6405398,13.3635202 32.5904963,13.2166471 L32.5904963,13.2011868 C32.5727177,13.1825056 32.5727177,13.166079 32.5727177,13.1499745 L32.4015162,13.2011868 C32.2480934,13.2488561 32.1957453,13.3464494 32.2480934,13.5255316 L32.3336941,13.8044616 C32.3843961,13.9867647 32.4877754,14.0502164 32.6405398,14.002225 L32.8301783,13.9532673 L32.8301783,14.2154487 L32.6932171,14.2476577 Z M32.8301783,13.9532673 L32.8301783,14.2154487 L33.569966,14.0189737 C33.6371296,14.002225 33.6875023,13.9693718 33.7210842,13.9358744 C33.8241342,13.8395695 33.8405959,13.6894755 33.7912109,13.5100712 L33.670053,13.0852343 C33.6190218,12.9383612 33.5498827,12.8401237 33.4649405,12.7879451 C33.3790105,12.7261038 33.2769481,12.7083889 33.1729104,12.7261038 L33.1228669,12.7399537 L33.1923351,12.9860306 L33.2242708,12.9712144 C33.3964599,12.9383612 33.49951,13.0034234 33.5498827,13.1825056 L33.6371296,13.4595031 C33.6875023,13.6260237 33.6371296,13.7400436 33.4820606,13.7896455 L32.8301783,13.9532673 Z M32.8301783,12.8401237 C32.8647478,12.8559062 32.8983296,12.8559062 32.9328991,12.8890814 C33.0023674,12.9219346 33.0369369,12.9860306 33.0698603,13.0852343 C33.0873096,13.1499745 33.0873096,13.2321074 33.0698603,13.2810651 C33.0369369,13.3464494 32.9862349,13.3960513 32.9154497,13.4115117 C32.8818679,13.4276162 32.8472984,13.4276162 32.8301783,13.4276162 L32.8301783,13.298458 C32.8301783,13.298458 32.8472984,13.2810651 32.8647478,13.2810651 C32.8983296,13.2810651 32.9154497,13.2488561 32.9328991,13.2321074 C32.9503485,13.2011868 32.9503485,13.166079 32.9503485,13.1180875 C32.9328991,13.0852343 32.9154497,13.0530253 32.8818679,13.0346662 C32.8647478,13.0346662 32.8472984,13.0188838 32.8301783,13.0188838 L32.8301783,12.8401237 L32.8301783,12.8401237 Z" id="Fill-555"></path>
                            <path d="M32.6932171,15.1630379 C32.6405398,15.1630379 32.5904963,15.1466113 32.5391358,15.0986198 C32.4877754,15.0667329 32.4545228,14.9994161 32.4360857,14.9024669 C32.4360857,14.8213002 32.4360857,14.7549497 32.4699968,14.6892433 C32.5042371,14.6232148 32.5727177,14.5752234 32.6596353,14.5752234 L32.6932171,14.5591189 L32.6932171,14.7549497 L32.676097,14.7549497 C32.6405398,14.7549497 32.6257243,14.7723425 32.5904963,14.7878029 C32.5727177,14.8213002 32.5727177,14.8528651 32.5727177,14.9024669 C32.5904963,14.9839558 32.6257243,15.0177752 32.6932171,15.0177752 L32.6932171,15.1630379 Z M32.6932171,15.9176951 C32.6405398,15.899336 32.6082749,15.8345958 32.5904963,15.7537512 L32.5727177,15.5585646 L32.6932171,15.492214 L32.6932171,15.9176951 Z M34.4253146,15.8345958 C34.3574925,15.852955 34.2873658,15.8345958 34.2353469,15.7856381 C34.1853034,15.7537512 34.1507339,15.7031831 34.1158351,15.638765 C34.0657916,15.7199317 33.9963234,15.7695336 33.8761531,15.7856381 L32.8137166,15.9331554 C32.7616977,15.9499041 32.7271282,15.9499041 32.6932171,15.9176951 L32.6932171,15.492214 L33.2940683,15.1330835 C33.344441,15.0986198 33.3790105,15.0335576 33.3625489,14.9688175 L33.344441,14.8712242 C33.328967,14.7723425 33.2769481,14.7214523 33.1923351,14.738201 L32.9154497,14.7878029 L32.9328991,14.8051957 L32.9503485,14.8528651 C32.9503485,14.9192156 32.9503485,14.9839558 32.9154497,15.0506284 C32.8818679,15.1140802 32.8137166,15.1466113 32.745236,15.1466113 C32.7271282,15.1630379 32.7096788,15.1630379 32.6932171,15.1630379 L32.6932171,15.0177752 L32.7096788,15.0177752 C32.745236,15.0177752 32.7801348,14.9839558 32.7962672,14.9688175 C32.8137166,14.9349981 32.8137166,14.9024669 32.8137166,14.8712242 C32.8137166,14.8213002 32.7962672,14.8051957 32.7616977,14.7723425 C32.745236,14.7549497 32.7096788,14.7549497 32.6932171,14.7549497 L32.6932171,14.5591189 L33.1571071,14.4943787 C33.328967,14.4592709 33.4300417,14.5591189 33.4649405,14.7723425 L33.5156424,15.0828374 C33.533421,15.1466113 33.5156424,15.1971794 33.49951,15.2293884 C33.4649405,15.2806008 33.4300417,15.3118435 33.3964599,15.3440525 L32.7801348,15.6877227 L33.8241342,15.5411717 C33.9792032,15.5076743 34.0466961,15.4113694 34.0137727,15.2293884 L33.9607661,14.9024669 C33.9291597,14.7214523 33.8241342,14.6415739 33.670053,14.6737829 L33.6371296,14.6737829 L33.6015724,14.4280282 L33.6535913,14.4103132 C33.7566414,14.4103132 33.8405959,14.4280282 33.9291597,14.5082286 C33.9963234,14.5752234 34.0466961,14.6737829 34.0812656,14.8213002 L34.1507339,15.2461371 L34.1853034,15.4603271 C34.1853034,15.5411717 34.2353469,15.5740249 34.3413601,15.5740249 C34.3574925,15.5585646 34.3732957,15.5585646 34.3732957,15.5585646 L34.4253146,15.8345958 L34.4253146,15.8345958 Z" id="Fill-556"></path>
                            <path d="M32.7096788,17.4241107 L32.6932171,17.178678 L33.9452922,17.1281099 C34.1158351,17.1123275 34.1853034,17.0134458 34.1853034,16.8346857 L34.1688417,16.6230725 C34.1688417,16.4420579 34.0812656,16.3596028 33.9107227,16.3596028 L33.8587038,16.3596028 L33.8587038,16.1141701 L33.9107227,16.1141701 C34.0302344,16.1141701 34.1158351,16.1476675 34.1853034,16.2294784 C34.253784,16.3106451 34.3061321,16.4075942 34.3061321,16.5560778 L34.3219353,16.9326011 C34.3219353,17.1123275 34.2718918,17.2434181 34.1507339,17.3255511 C34.098715,17.3580822 34.0466961,17.3748309 33.9792032,17.3748309 L32.7096788,17.4241107" id="Fill-557"></path>
                            <path d="M32.8818679,18.9633795 L32.8818679,18.9633795 C32.7962672,18.9633795 32.7271282,18.9302042 32.6932171,18.8628874 C32.6405398,18.8152181 32.6257243,18.7334072 32.6405398,18.6512742 C32.6405398,18.5713958 32.676097,18.5056894 32.7271282,18.4564096 C32.7616977,18.4058415 32.8301783,18.3903812 32.8818679,18.3903812 L32.8818679,18.5217939 C32.8137166,18.5217939 32.7801348,18.5713958 32.7616977,18.6512742 C32.7616977,18.7334072 32.7962672,18.782687 32.8818679,18.782687 L32.8818679,18.9633795 Z M33.9291597,19.0600066 L33.9452922,18.782687 C33.9963234,18.782687 34.0466961,18.7662604 34.0812656,18.7334072 C34.1329553,18.7176247 34.1507339,18.668667 34.1507339,18.6036048 L34.1853034,18.2270815 C34.1853034,18.0457447 34.1158351,17.9471851 33.9607661,17.9471851 L33.8761531,17.9314027 L33.8405959,18.6512742 C33.8241342,18.897029 33.7210842,19.0110489 33.533421,19.0110489 L32.8818679,18.9633795 L32.8818679,18.782687 C32.9677979,18.782687 33.0023674,18.7488675 33.0023674,18.668667 C33.0023674,18.636458 33.0023674,18.6036048 32.9862349,18.5713958 C32.9677979,18.554003 32.9328991,18.5372543 32.8983296,18.5217939 C32.8983296,18.5217939 32.8983296,18.5217939 32.8818679,18.5217939 L32.8818679,18.3903812 C32.8983296,18.3903812 32.8983296,18.3903812 32.8983296,18.3903812 C33.0188291,18.3903812 33.0873096,18.4564096 33.1228669,18.554003 C33.1393285,18.6036048 33.1393285,18.636458 33.1393285,18.668667 C33.1393285,18.6999098 33.1393285,18.7334072 33.1228669,18.7334072 L33.4820606,18.7662604 C33.5498827,18.7662604 33.5860984,18.7488675 33.6371296,18.6999098 C33.6535913,18.668667 33.670053,18.6036048 33.6875023,18.5056894 L33.739192,17.6869363 L34.0137727,17.7027187 C34.1158351,17.7027187 34.2007774,17.750388 34.253784,17.8328431 C34.3061321,17.914654 34.3219353,17.9977533 34.3219353,18.1124174 L34.2873658,18.6999098 C34.2718918,18.9466308 34.1507339,19.0600066 33.9291597,19.0600066 L33.9291597,19.0600066 Z" id="Fill-558"></path>
                            <path d="M5.68915511,28.0514751 C5.63549005,28.0672576 5.56898488,28.0514751 5.49885814,27.9696642 L5.43136527,27.9036358 C5.361897,27.8221469 5.32996135,27.7561185 5.34642303,27.6736634 C5.361897,27.5934629 5.39745422,27.5284007 5.46692249,27.4620502 C5.53408613,27.39731 5.61902837,27.3634906 5.68915511,27.3634906 L5.68915511,27.5284007 C5.67104727,27.5432169 5.63549005,27.561576 5.601579,27.5934629 C5.5515355,27.6250278 5.51499058,27.6736634 5.51499058,27.7248757 C5.51499058,27.7561185 5.51499058,27.7889717 5.5515355,27.8037878 L5.56898488,27.8388956 L5.68915511,27.7248757 L5.68915511,28.0514751 Z M6.44408756,28.7236773 C6.35684068,28.7893837 6.27091073,28.7893837 6.18531002,28.6901799 L6.08225993,28.5932308 L6.1517282,28.0002628 C6.1517282,27.9841583 6.1517282,27.9542039 6.16818987,27.9190961 C6.1517282,27.8878533 6.1517282,27.8550001 6.11715868,27.8221469 L6.04834888,27.7561185 L5.75566028,28.0002628 C5.74018631,28.018944 5.72207846,28.0337602 5.68915511,28.0514751 L5.68915511,27.7248757 L5.87583051,27.5773584 C5.84159023,27.5432169 5.81064228,27.5284007 5.75566028,27.5284007 C5.74018631,27.5284007 5.72207846,27.5284007 5.68915511,27.5284007 L5.68915511,27.3634906 C5.70495832,27.3634906 5.72207846,27.3634906 5.72207846,27.3634906 C5.82710395,27.3634906 5.89525529,27.4140587 5.97920984,27.4775105 L6.30482178,27.1998688 C6.30482178,27.1837643 6.28737241,27.1837643 6.27091073,27.1837643 L6.25379059,27.1502669 C6.20374709,27.1016313 6.16818987,27.0359249 6.16818987,26.9698964 C6.16818987,26.8880855 6.18531002,26.8233454 6.23634121,26.7743877 C6.30482178,26.7241416 6.35684068,26.7080371 6.44408756,26.7241416 L6.44408756,26.8555544 C6.40853034,26.8555544 6.37429005,26.8723031 6.3393913,26.8880855 C6.32391733,26.9045121 6.30482178,26.9386537 6.30482178,26.9698964 C6.30482178,27.0027496 6.32391733,27.0359249 6.35684068,27.0700665 C6.37429005,27.0845605 6.40853034,27.1016313 6.44408756,27.1177358 L6.44408756,27.4140587 L6.1517282,27.6736634 L6.28737241,27.8037878 C6.35684068,27.8711047 6.37429005,27.9542039 6.37429005,28.0514751 L6.30482178,28.4937049 L6.44408756,28.3941791 L6.44408756,28.7236773 Z M6.44408756,26.7241416 L6.44408756,26.7241416 C6.51190966,26.7408903 6.57940253,26.7743877 6.6320799,26.8394499 C6.78649041,26.9866451 6.78649041,27.1177358 6.64854157,27.232722 L6.44408756,27.4140587 L6.44408756,27.1177358 C6.47832784,27.1177358 6.51190966,27.1016313 6.52902981,27.0845605 C6.56327009,27.0700665 6.56327009,27.0359249 6.56327009,27.0027496 C6.56327009,26.9698964 6.56327009,26.9386537 6.52902981,26.9045121 C6.49446029,26.8723031 6.46054923,26.8555544 6.44408756,26.8555544 L6.44408756,26.7241416 Z M6.44408756,28.7236773 L6.44408756,28.3941791 L7.33433498,27.6089233 L7.52397348,27.7889717 L6.44408756,28.7236773 L6.44408756,28.7236773 Z" id="Fill-559"></path>
                            <path d="M7.81501591,29.3279184 L7.16181662,29.591066 L6.97514122,29.4284105 L7.71196582,28.5932308 L7.69385798,28.5748716 L7.65994692,28.5426626 C7.59245405,28.4937049 7.55887224,28.444103 7.54142286,28.3645468 C7.54142286,28.2972299 7.55887224,28.2315235 7.59245405,28.1819216 C7.65994692,28.1178257 7.74653534,28.0827179 7.81501591,28.1007549 L7.81501591,28.2315235 C7.78044639,28.2315235 7.74653534,28.2485943 7.71196582,28.2814475 C7.69385798,28.2972299 7.6764086,28.3310494 7.69385798,28.3645468 C7.69385798,28.3941791 7.71196582,28.4270322 7.74653534,28.4608517 C7.76299701,28.4785667 7.79756653,28.4785667 7.81501591,28.4937049 L7.81501591,28.8534796 L7.43837277,29.2805711 L7.81501591,29.1311213 L7.81501591,29.3279184 Z M7.81501591,30.1138183 L7.81501591,30.0977138 L7.81501591,30.1138183 Z M7.81501591,28.1007549 L7.81501591,28.2315235 C7.84892696,28.2485943 7.8650594,28.2643767 7.90094586,28.2814475 C7.93518614,28.2972299 7.95066012,28.3310494 7.95066012,28.3645468 C7.95066012,28.3941791 7.95066012,28.4270322 7.93518614,28.4608517 C7.90094586,28.4785667 7.88250878,28.4937049 7.84892696,28.4937049 C7.83246529,28.4937049 7.83246529,28.4937049 7.81501591,28.4937049 L7.81501591,28.8534796 L8.05568561,28.5748716 C8.17420967,28.444103 8.15610183,28.3123682 8.00300825,28.1970599 C7.93518614,28.1490684 7.88250878,28.1178257 7.81501591,28.1007549 Z M8.67135228,29.5105435 C8.67135228,29.5253596 8.65324443,29.5427525 8.63777046,29.5582128 L8.00300825,30.2610135 L7.81501591,30.1138183 L7.81501591,30.0977138 L8.43134105,29.3939469 C8.51727099,29.3127802 8.51727099,29.2464296 8.44977812,29.1820116 C8.39677153,29.1311213 8.31018311,29.1311213 8.24367794,29.14787 L7.81501591,29.3279184 L7.81501591,29.1311213 L8.19264675,28.9842482 C8.27824746,28.9523613 8.32927866,28.9674995 8.36220201,28.9997085 C8.38063909,28.9352905 8.39677153,28.8850444 8.43134105,28.8534796 C8.48270147,28.8054882 8.55184051,28.772635 8.63777046,28.7893837 C8.65324443,28.7893837 8.65324443,28.7893837 8.67135228,28.7893837 L8.67135228,28.9352905 C8.63777046,28.9201523 8.58542233,28.9352905 8.55184051,28.9674995 C8.49982162,29.0164572 8.51727099,29.0828078 8.60320094,29.14787 C8.62032108,29.1636524 8.65324443,29.1820116 8.67135228,29.1820116 L8.67135228,29.5105435 Z M8.92848365,29.262212 C8.86099078,29.3279184 8.79283944,29.344345 8.68781395,29.3279184 C8.68781395,29.3617379 8.7069095,29.3939469 8.68781395,29.4284105 C8.68781395,29.4570765 8.68781395,29.4918623 8.67135228,29.5105435 L8.67135228,29.1820116 C8.68781395,29.1820116 8.68781395,29.1974719 8.7069095,29.1974719 C8.74082055,29.1974719 8.77440237,29.1820116 8.79283944,29.1636524 C8.82642126,29.1311213 8.82642126,29.0995565 8.82642126,29.0673475 C8.80831342,29.0332059 8.79283944,28.9997085 8.75794069,28.9674995 C8.72337117,28.9523613 8.7069095,28.9352905 8.67135228,28.9352905 L8.67135228,28.7893837 C8.72337117,28.8054882 8.79283944,28.8360867 8.84354141,28.8689399 C8.91202198,28.9352905 8.96305317,28.9997085 8.97951485,29.0673475 C8.97951485,29.14787 8.96305317,29.1974719 8.92848365,29.262212 L8.92848365,29.262212 Z" id="Fill-560"></path>
                            <path d="M9.53032251,31.245321 L9.30710219,31.112942 L10.0093573,30.1138183 C10.0939703,29.9830497 10.0600592,29.8690298 9.88984551,29.7691819 L9.71732715,29.6574166 C9.54612572,29.5582128 9.42661396,29.5749615 9.34068401,29.705408 L9.30710219,29.7385833 L9.10001431,29.591066 L9.13359613,29.5427525 C9.18462733,29.4570765 9.27220344,29.4113397 9.37525353,29.4113397 C9.4947653,29.3939469 9.61625246,29.4284105 9.73576423,29.5105435 L10.0600592,29.7218346 C10.2154575,29.8200721 10.3010582,29.9334479 10.2845965,30.0812872 C10.2845965,30.1312112 10.2671471,30.1792026 10.2319191,30.2465195 L9.53032251,31.245321" id="Fill-561"></path>
                            <path d="M11.0039717,30.409175 C10.8847892,30.3924263 10.7962254,30.4275342 10.7471696,30.5405878 L10.7116124,30.5727968 L10.4900382,30.4587769 L10.5078168,30.409175 C10.5581895,30.3260758 10.6441195,30.2610135 10.7471696,30.2465195 C10.8307949,30.2281604 10.918371,30.2281604 11.0039717,30.2610135 L11.0039717,30.409175 Z M11.0039717,32.0131839 C10.9694022,31.9980457 10.9358204,31.9980457 10.9012509,31.9648704 C10.8156502,31.9323393 10.7652774,31.8827374 10.729391,31.817031 C10.7116124,31.7532572 10.7116124,31.6869066 10.7471696,31.6205561 C10.7962254,31.5232848 10.8847892,31.4907537 11.0039717,31.5052478 L11.0039717,31.6205561 C10.9868516,31.6205561 10.9694022,31.6205561 10.9512944,31.6379489 C10.9358204,31.6379489 10.9012509,31.6546976 10.8847892,31.6869066 C10.8498904,31.7532572 10.8673398,31.817031 10.9512944,31.8498842 C10.9694022,31.8666329 10.9868516,31.8666329 11.0039717,31.8666329 L11.0039717,32.0131839 Z M11.2950141,31.8827374 C11.2614323,31.949088 11.1919641,31.9980457 11.1244712,32.0131839 C11.0899017,32.0131839 11.0372243,32.0131839 11.0039717,32.0131839 L11.0039717,31.8666329 C11.0550029,31.8827374 11.1063633,31.8666329 11.1244712,31.8015707 C11.1583822,31.7348981 11.1409329,31.6869066 11.0550029,31.6379489 C11.0372243,31.6379489 11.0204334,31.6379489 11.0039717,31.6205561 L11.0039717,31.5052478 C11.0372243,31.5052478 11.0724523,31.5232848 11.1063633,31.5400335 C11.1409329,31.556138 11.1583822,31.556138 11.1748439,31.5715984 L11.517576,30.9167891 C11.6041644,30.7853763 11.5521455,30.670068 11.3816026,30.5895455 L11.1063633,30.4587769 C11.0724523,30.4407398 11.0372243,30.4275342 11.0039717,30.409175 L11.0039717,30.2610135 C11.0372243,30.2777622 11.0724523,30.294833 11.1063633,30.3099712 L11.5350254,30.5248054 C11.7055683,30.6066163 11.7931445,30.7219245 11.8086184,30.8526931 C11.8086184,30.9006846 11.7931445,30.9657468 11.7582457,31.0137382 L11.2950141,31.8827374 L11.2950141,31.8827374 Z" id="Fill-562"></path>
                            <path d="M11.4830065,30.2777622 L10.7652774,29.9682336 C10.8307949,29.8368208 10.9512944,29.7537216 11.1244712,29.7385833 C11.243983,29.7385833 11.3460453,29.7537216 11.4830065,29.8039676 L11.4830065,29.9334479 C11.3124635,29.8690298 11.1748439,29.8857785 11.1063633,29.9682336 L11.4830065,30.1312112 L11.4830065,30.2777622 Z M12.0845161,30.5248054 L11.4830065,30.2777622 L11.4830065,30.1312112 L11.8612958,30.294833 C11.8431879,30.162454 11.7411256,30.048112 11.5350254,29.9492303 C11.517576,29.9492303 11.5001266,29.9334479 11.4830065,29.9334479 L11.4830065,29.8039676 C11.517576,29.8039676 11.5521455,29.8200721 11.586715,29.8368208 C11.7582457,29.9186317 11.9136439,30.0159029 12.0157063,30.1466715 C12.1187564,30.2777622 12.1358765,30.409175 12.0845161,30.5248054 L12.0845161,30.5248054 Z" id="Fill-563"></path>
                            <path d="M12.4094696,32.5394793 L12.3933371,32.5716883 L12.2033694,32.5046935 C12.1358765,32.4731287 12.101307,32.4570242 12.0667375,32.4061339 C12.0502758,32.3752133 12.0502758,32.3233568 12.0667375,32.2592608 L12.3933371,31.3905837 L12.3228812,31.3905837 C12.256376,31.3599851 12.1869077,31.3103832 12.1513505,31.2598151 C12.1187564,31.1947529 12.1187564,31.1306569 12.1513505,31.0643064 C12.1869077,30.9489981 12.2892994,30.9006846 12.4094696,30.9167891 L12.4094696,31.0472356 C12.3574507,31.0320974 12.3064195,31.0472356 12.2892994,31.112942 C12.27185,31.145151 12.27185,31.1618997 12.2892994,31.1947529 C12.3064195,31.2269619 12.3419767,31.2598151 12.3768755,31.2598151 C12.3933371,31.2765638 12.4094696,31.2765638 12.4094696,31.2765638 L12.4094696,32.0798566 L12.3228812,32.3082185 L12.4094696,32.2096589 L12.4094696,32.5394793 Z M12.4094696,30.9167891 L12.4094696,31.0472356 C12.4259313,31.0472356 12.4430514,31.0472356 12.4624762,31.0472356 C12.496058,31.0643064 12.5125197,31.0800888 12.5299691,31.112942 C12.5464307,31.145151 12.5635509,31.1767158 12.5464307,31.2115016 C12.5299691,31.2269619 12.5125197,31.2598151 12.4786086,31.2765638 C12.4624762,31.2765638 12.4430514,31.2765638 12.4094696,31.2765638 L12.4094696,32.0798566 L12.7186199,31.2765638 C12.7861127,31.1306569 12.7186199,31.0137382 12.5125197,30.9335378 C12.4786086,30.9335378 12.4430514,30.9167891 12.4094696,30.9167891 Z M13.2839138,32.8821832 L13.0442318,32.7987618 L13.490014,31.6205561 C13.5249127,31.5232848 13.4728938,31.4569343 13.3533821,31.4089428 L12.4094696,32.5394793 L12.4094696,32.2096589 L13.2493443,31.2115016 L13.5413744,31.3103832 C13.6440953,31.3429144 13.7125758,31.3905837 13.7464869,31.4752934 C13.763607,31.5400335 13.763607,31.6044516 13.7464869,31.6869066 L13.2839138,32.8821832 L13.2839138,32.8821832 Z" id="Fill-564"></path>
                            <path d="M14.5014193,33.1768957 L14.2963069,33.1256833 C14.1751489,33.0944406 14.073745,33.0615874 14.0220553,32.9797765 C13.9506117,32.9140701 13.9193345,32.817121 13.9506117,32.7014906 L14.003289,32.4731287 C14.0220553,32.4061339 14.0562956,32.3752133 14.1073268,32.3233568 C14.1593457,32.2911477 14.2093892,32.2760095 14.278199,32.2911477 C14.1422256,32.2438005 14.073745,32.1445967 14.1073268,32.0299326 L14.1751489,31.7532572 C14.1932568,31.6869066 14.2278263,31.6205561 14.2963069,31.5893133 C14.3473381,31.556138 14.4158186,31.556138 14.5014193,31.556138 L14.5014193,31.6869066 C14.4342557,31.6869066 14.3812491,31.7197598 14.3637997,31.7861104 C14.3473381,31.8015707 14.3637997,31.8337797 14.3812491,31.8666329 C14.3983692,31.8985199 14.4342557,31.9162348 14.4668498,31.9162348 C14.4842992,31.9162348 14.4842992,31.9162348 14.5014193,31.9323393 L14.5014193,32.0460371 C14.4842992,32.0460371 14.4668498,32.0460371 14.4503881,32.0460371 L14.4158186,32.0299326 C14.3983692,32.0299326 14.3812491,32.0299326 14.3812491,32.0131839 L14.3637997,32.0798566 C14.3473381,32.1288143 14.3637997,32.1761616 14.3812491,32.1951649 C14.4158186,32.2270518 14.4503881,32.2438005 14.5014193,32.2592608 L14.5014193,32.4228826 L14.4668498,32.4061339 C14.3473381,32.3906736 14.278199,32.4228826 14.2614081,32.524341 L14.2093892,32.7353101 C14.1751489,32.8821832 14.244288,32.9797765 14.4342557,33.0142401 L14.5014193,33.0293784 L14.5014193,33.1768957 Z M14.5014193,32.2592608 L14.5014193,32.4228826 L14.6900701,32.4570242 L14.7249689,32.3082185 L14.5182102,32.2592608 C14.5014193,32.2592608 14.5014193,32.2592608 14.5014193,32.2592608 Z M14.5014193,31.556138 L14.5014193,31.6869066 C14.5014193,31.7036553 14.5182102,31.7036553 14.5182102,31.7036553 C14.5698999,31.7036553 14.5863616,31.7197598 14.6209311,31.7532572 C14.6383805,31.7861104 14.6383805,31.817031 14.6383805,31.8337797 C14.6209311,31.8985199 14.5698999,31.9323393 14.5014193,31.9323393 L14.5014193,32.0460371 C14.5544259,32.0460371 14.6044694,32.0460371 14.6555006,32.0299326 C14.7249689,31.9980457 14.7588799,31.949088 14.7769878,31.8666329 C14.7924618,31.7861104 14.7769878,31.7197598 14.7249689,31.6714463 C14.6900701,31.6205561 14.6209311,31.5893133 14.5359889,31.5715984 C14.5182102,31.5715984 14.5182102,31.5715984 14.5014193,31.556138 Z M15.3070537,32.995881 C15.2556933,33.2252092 15.0841627,33.3076643 14.8105696,33.2403474 L14.5014193,33.1768957 L14.5014193,33.0293784 L14.7249689,33.0767256 C14.912632,33.1256833 15.0341192,33.0615874 15.0686887,32.9140701 L15.3416233,31.7693617 L15.5984254,31.817031 L15.3070537,32.995881 L15.3070537,32.995881 Z" id="Fill-565"></path>
                            <path d="M17.0384928,33.5530969 L16.7648997,33.5208879 L16.9193103,32.3417159 C16.9357719,32.1761616 16.8508297,32.0943507 16.6444003,32.0798566 L16.4383001,32.0460371 C16.250637,32.0299326 16.1317837,32.0943507 16.1146636,32.2592608 L16.1146636,32.2911477 L15.855886,32.2760095 L15.855886,32.2096589 C15.8739939,32.1123877 15.925025,32.0299326 16.0260997,31.981297 C16.1146636,31.9162348 16.2331876,31.8985199 16.3875981,31.9162348 L16.7823491,31.949088 C16.9709999,31.981297 17.0905117,32.0460371 17.1415429,32.1761616 C17.1761124,32.2270518 17.1761124,32.2911477 17.1761124,32.360075 L17.0384928,33.5530969" id="Fill-566"></path>
                            <path d="M17.9313741,32.2096589 C17.8968046,32.2592608 17.8619058,32.3082185 17.8619058,32.3906736 L17.8619058,32.4389871 L17.6057621,32.4389871 L17.6057621,32.3752133 C17.6057621,32.2760095 17.6396732,32.1951649 17.7427233,32.1288143 C17.7947422,32.0798566 17.8619058,32.0614975 17.9313741,32.0460371 L17.9313741,32.2096589 Z M17.9313741,32.7504483 C17.8968046,32.7688074 17.8619058,32.817121 17.8619058,32.8651124 L17.8619058,33.1256833 L17.8968046,33.1105451 L17.9313741,33.1105451 L17.9313741,33.2403474 C17.8968046,33.2403474 17.8619058,33.2570961 17.8447857,33.2738448 C17.8112038,33.3076643 17.7947422,33.3231246 17.7947422,33.356622 C17.7947422,33.3885089 17.8112038,33.4062238 17.8273363,33.4384329 C17.8619058,33.4558257 17.8968046,33.471286 17.9313741,33.471286 L17.9313741,33.603343 C17.8273363,33.603343 17.7598434,33.5698456 17.7071661,33.5366703 C17.6396732,33.4886789 17.6057621,33.4223283 17.6057621,33.3411616 L17.6057621,32.8651124 C17.6057621,32.7014906 17.7071661,32.620646 17.9313741,32.602931 L17.9313741,32.7504483 Z M17.9313741,33.1105451 L17.9313741,33.2403474 C17.9824053,33.2403474 18.0169748,33.2570961 18.032778,33.2738448 C18.0683352,33.3076643 18.0683352,33.3231246 18.08348,33.356622 C18.08348,33.4384329 18.032778,33.471286 17.9313741,33.471286 L17.9313741,33.603343 C18.0169748,33.603343 18.08348,33.5698456 18.1539359,33.5366703 C18.2036502,33.4886789 18.223075,33.4223283 18.223075,33.356622 C18.223075,33.2738448 18.2036502,33.2252092 18.1354989,33.1768957 C18.08348,33.1440425 18.0169748,33.1105451 17.9478358,33.1105451 L17.9313741,33.1105451 Z M19.0458295,33.4062238 C19.0458295,33.5208879 18.9757028,33.585628 18.8232677,33.585628 L18.616509,33.585628 L18.2899094,32.8338696 C18.2559983,32.7688074 18.2036502,32.7353101 18.1193664,32.7353101 L18.0169748,32.7353101 C17.9824053,32.7353101 17.9642974,32.7504483 17.9313741,32.7504483 L17.9313741,32.602931 L18.2744354,32.602931 C18.3244789,32.602931 18.3946056,32.620646 18.4281874,32.6541433 C18.46144,32.6863524 18.496668,32.7179172 18.5141174,32.7688074 L18.7877104,33.4062238 L18.7877104,32.3906736 C18.7877104,32.2270518 18.6836727,32.1623117 18.496668,32.1623117 L18.1539359,32.1623117 C18.0492397,32.1623117 17.9824053,32.1761616 17.9313741,32.2096589 L17.9313741,32.0460371 C17.9824053,32.0299326 18.032778,32.0299326 18.08348,32.0299326 L18.5997181,32.0299326 C18.9088684,32.0299326 19.0458295,32.1445967 19.0458295,32.3752133 L19.0458295,33.4062238 L19.0458295,33.4062238 Z" id="Fill-567"></path>
                            <path d="M18.4446491,31.8604572 C18.4446491,31.8604572 18.4281874,31.8433164 18.4110673,31.8433164 C18.2559983,31.7865375 18.1875178,31.6790504 18.1694099,31.5519228 C18.1694099,31.4783603 18.2036502,31.4047977 18.2559983,31.3519469 C18.3073588,31.2980248 18.3764978,31.2783843 18.4446491,31.2783843 L18.4446491,31.4047977 C18.3600361,31.4047977 18.3244789,31.4426503 18.3244789,31.5158558 C18.3244789,31.588347 18.3764978,31.6251283 18.4446491,31.6251283 L18.4446491,31.8604572 Z M19.490624,31.2598151 L19.5090611,31.2783843 L19.5090611,31.3158798 C19.5090611,31.498715 19.439922,31.641912 19.2848531,31.7518988 C19.1492088,31.8247472 18.9938106,31.877598 18.8045014,31.8961672 C18.667211,31.8961672 18.5470407,31.877598 18.4446491,31.8604572 L18.4446491,31.6251283 C18.46144,31.6251283 18.46144,31.6251283 18.46144,31.6251283 C18.5470407,31.6251283 18.5822687,31.570492 18.5822687,31.498715 C18.5822687,31.4251524 18.5315668,31.3862285 18.4446491,31.4047977 L18.4446491,31.2783843 C18.5315668,31.2598151 18.5822687,31.2783843 18.6336292,31.3158798 C18.7027682,31.3519469 18.7202176,31.4047977 18.7366793,31.498715 C18.7366793,31.5319253 18.7202176,31.588347 18.6836727,31.641912 C18.6510785,31.6790504 18.616509,31.7161888 18.5654778,31.7333296 C18.5822687,31.7333296 18.616509,31.7518988 18.667211,31.7518988 L18.8397293,31.7518988 C18.9592411,31.7333296 19.061962,31.7161888 19.1307718,31.641912 C19.1999108,31.570492 19.2338219,31.4783603 19.2338219,31.3708732 C19.2338219,31.3337348 19.2173602,31.3158798 19.2173602,31.2783843 L19.490624,31.2598151 L19.490624,31.2598151 Z" id="Fill-568"></path>
                            <path d="M19.8155775,33.471286 C19.7991158,33.4558257 19.7819957,33.4558257 19.7819957,33.4558257 C19.679604,33.4062238 19.6289021,33.3076643 19.6101358,33.192356 L19.5765539,32.9620615 C19.5765539,32.9140701 19.5940033,32.8651124 19.6289021,32.7987618 C19.6614962,32.7504483 19.7145028,32.7179172 19.7819957,32.7179172 C19.6289021,32.7014906 19.5409967,32.6361063 19.5255227,32.524341 L19.490624,32.2438005 C19.4744916,32.1623117 19.490624,32.0943507 19.5409967,32.0460371 C19.5940033,31.9980457 19.679604,31.9648704 19.7661924,31.949088 C19.7819957,31.949088 19.7991158,31.949088 19.8155775,31.949088 L19.8155775,32.0798566 C19.7991158,32.0798566 19.7991158,32.0798566 19.7991158,32.0798566 C19.7145028,32.0798566 19.6614962,32.1288143 19.6614962,32.2096589 C19.679604,32.2270518 19.6960657,32.2592608 19.7145028,32.2760095 C19.7470969,32.2911477 19.7819957,32.3082185 19.8155775,32.3082185 L19.8155775,32.4228826 C19.7991158,32.4228826 19.7819957,32.4228826 19.7661924,32.4228826 L19.7819957,32.4892332 C19.7819957,32.524341 19.7991158,32.5394793 19.8155775,32.5716883 L19.8155775,33.471286 Z M19.8155775,31.949088 L19.8155775,32.0798566 C19.8521224,32.0798566 19.8847165,32.0798566 19.9011782,32.0943507 C19.9357477,32.1123877 19.9538556,32.1445967 19.9538556,32.1761616 C19.9538556,32.2438005 19.9186276,32.2911477 19.8340146,32.2911477 C19.8155775,32.3082185 19.8155775,32.3082185 19.8155775,32.3082185 L19.8155775,32.4228826 L19.8521224,32.4228826 C19.9186276,32.4061339 19.9887543,32.3906736 20.0387978,32.3417159 C20.089829,32.2911477 20.1092538,32.2270518 20.089829,32.1445967 C20.089829,32.0798566 20.0562472,32.0131839 19.9887543,31.981297 C19.9357477,31.949088 19.8847165,31.949088 19.8155775,31.949088 Z M20.9817226,33.0293784 C21.0166213,33.2738448 20.8799894,33.4062238 20.5882885,33.4384329 L20.089829,33.4886789 C19.9887543,33.5047834 19.8847165,33.5047834 19.8155775,33.471286 L19.8155775,32.5716883 C19.8155775,32.5716883 19.8340146,32.5877928 19.8521224,32.5877928 C19.8847165,32.602931 19.9357477,32.620646 19.9887543,32.602931 L20.194196,32.5877928 L20.2103285,32.7353101 L20.0058744,32.7688074 C19.8847165,32.7833015 19.8340146,32.8338696 19.8340146,32.9469233 L19.8685841,33.1440425 C19.8847165,33.3076643 19.9887543,33.3724044 20.1767466,33.3411616 L20.4684475,33.3076643 C20.6564399,33.2922039 20.7430283,33.2091047 20.7249204,33.0454829 L20.5724853,31.8666329 L20.828629,31.8337797 L20.9817226,33.0293784 L20.9817226,33.0293784 Z" id="Fill-569"></path>
                            <path d="M22.1656463,31.6869066 L21.8054648,31.7861104 C21.616814,31.817031 21.5483335,31.9162348 21.582903,32.0798566 L21.822585,32.995881 C21.822585,33.0142401 21.8380589,33.0293784 21.8749331,33.0293784 L21.8920532,32.2760095 C21.9085149,32.1951649 21.9256351,32.1445967 21.9585584,32.0943507 C21.9931279,32.0614975 22.0461345,32.0299326 22.1146151,32.0131839 C22.1307475,31.9980457 22.1485262,31.9980457 22.1656463,31.9980457 L22.1656463,32.1123877 L22.1485262,32.1123877 C22.0625962,32.1288143 22.0290144,32.1761616 22.0461345,32.2438005 C22.0625962,32.2911477 22.0955196,32.3233568 22.1656463,32.3233568 L22.1656463,32.4389871 C22.1485262,32.4389871 22.1307475,32.4389871 22.1146151,32.4389871 L22.0625962,33.1768957 L21.8584714,33.2252092 C21.7020855,33.2570961 21.616814,33.2252092 21.582903,33.1105451 L21.3244547,32.1123877 C21.2737527,31.8985199 21.3932645,31.7532572 21.7020855,31.6714463 L22.1656463,31.556138 L22.1656463,31.6869066 Z M22.1656463,31.9980457 L22.1656463,32.1123877 C22.2347853,32.1123877 22.2683672,32.1288143 22.2861458,32.1951649 C22.3016197,32.2592608 22.2683672,32.2911477 22.2002158,32.3233568 C22.1827664,32.3233568 22.1827664,32.3233568 22.1656463,32.3233568 L22.1656463,32.4389871 C22.1827664,32.4389871 22.2002158,32.4389871 22.2347853,32.4228826 C22.2861458,32.4061339 22.355614,32.3752133 22.3891959,32.3233568 C22.4231069,32.2592608 22.440227,32.2096589 22.4231069,32.1623117 C22.4066452,32.0943507 22.3707588,32.0460371 22.3016197,32.0131839 C22.2683672,31.9980457 22.2166775,31.9980457 22.1656463,31.9980457 Z M22.7819714,31.245321 C22.8004085,31.3103832 22.7819714,31.373835 22.7309402,31.4424402 C22.6973584,31.4907537 22.6627889,31.5232848 22.5949668,31.556138 C22.6808967,31.5893133 22.7309402,31.6714463 22.7655098,31.7693617 L23.0749893,32.931463 L22.816541,32.995881 L22.5258278,31.8498842 C22.475455,31.7036553 22.3707588,31.6546976 22.1827664,31.6869066 L22.1656463,31.6869066 L22.1656463,31.556138 L22.2002158,31.556138 L22.4066452,31.5052478 C22.4929044,31.4907537 22.5432771,31.4424402 22.5093661,31.3429144 C22.5093661,31.3264878 22.5093661,31.3264878 22.5093661,31.3103832 L22.7819714,31.245321 L22.7819714,31.245321 Z" id="Fill-570"></path>
                            <path d="M21.9434137,31.4615626 L21.2921898,31.6783222 C21.238854,31.5147705 21.2921898,31.370145 21.4117015,31.2426603 C21.5134347,31.1333877 21.6339342,31.0437556 21.8054648,30.9876909 C21.8584714,30.970193 21.8920532,30.970193 21.9434137,30.9516238 L21.9434137,31.0969635 C21.9085149,31.1148185 21.8920532,31.1148185 21.8584714,31.1148185 C21.6510543,31.1876669 21.5483335,31.2962253 21.5483335,31.4412079 L21.9434137,31.3147945 L21.9434137,31.4615626 Z M22.6627889,31.2240911 L21.9434137,31.4615626 L21.9434137,31.3147945 L22.33586,31.1876669 C22.2505885,31.0794656 22.1146151,31.0605393 21.9434137,31.0969635 L21.9434137,30.9516238 C22.0800456,30.9159138 22.2166775,30.9159138 22.355614,30.9516238 C22.5258278,30.9876909 22.6288778,31.0794656 22.6627889,31.2240911 L22.6627889,31.2240911 Z" id="Fill-571"></path>
                            <path d="M23.8799652,31.145151 L23.8799652,31.0137382 L23.5197837,31.145151 C23.3841395,31.1947529 23.2797725,31.2598151 23.2290705,31.3599851 C23.1599315,31.4424402 23.1599315,31.5400335 23.1941718,31.6379489 L23.2126089,31.6869066 L23.469411,31.6044516 L23.4506447,31.556138 C23.3841395,31.4089428 23.4506447,31.3103832 23.6238215,31.245321 L23.8799652,31.145151 Z M23.8799652,31.7861104 C23.8638328,31.7861104 23.8299217,31.7861104 23.8124723,31.8015707 L23.7268716,31.8337797 C23.6238215,31.8666329 23.5902397,31.9323393 23.6238215,32.0131839 L23.7268716,32.2438005 L23.7453087,32.2270518 L23.7943645,32.2096589 C23.8124723,32.1951649 23.8463834,32.1951649 23.8799652,32.1951649 L23.8799652,32.3233568 C23.8638328,32.3233568 23.8463834,32.3233568 23.8299217,32.3233568 C23.7943645,32.3417159 23.7607827,32.360075 23.7607827,32.3906736 C23.7453087,32.4228826 23.7268716,32.4570242 23.7453087,32.4892332 C23.7453087,32.5046935 23.7779028,32.5394793 23.8124723,32.5549396 C23.8299217,32.5549396 23.8463834,32.5549396 23.8799652,32.5549396 L23.8799652,32.6863524 C23.8299217,32.7014906 23.7779028,32.7014906 23.7268716,32.6863524 C23.6402832,32.6541433 23.5902397,32.602931 23.5533656,32.5394793 L23.3841395,32.0798566 C23.3150005,31.9323393 23.3841395,31.817031 23.6067014,31.7348981 L23.8799652,31.6379489 L23.8799652,31.7861104 Z M23.8799652,32.1951649 L23.8799652,32.3233568 C23.8964269,32.3233568 23.914864,32.3233568 23.9319841,32.3233568 C23.9668828,32.3417159 23.999477,32.360075 23.999477,32.3906736 C24.0360219,32.4570242 23.999477,32.5046935 23.914864,32.5394793 C23.8964269,32.5549396 23.8799652,32.5549396 23.8799652,32.5549396 L23.8799652,32.6863524 C23.8964269,32.6863524 23.9319841,32.6696037 23.9494335,32.6696037 C24.0360219,32.6361063 24.1035148,32.5877928 24.1370966,32.524341 C24.1719953,32.4731287 24.1719953,32.4061339 24.1370966,32.3417159 C24.1206349,32.2592608 24.0672991,32.2270518 23.999477,32.1951649 C23.9668828,32.1951649 23.914864,32.1761616 23.8799652,32.1951649 Z M24.927257,32.0943507 C24.9769713,32.2096589 24.927257,32.2911477 24.7708711,32.3417159 L24.6003281,32.4228826 L24.0175848,31.8337797 C23.9668828,31.7861104 23.9319841,31.7693617 23.8799652,31.7861104 L23.8799652,31.6379489 L23.8964269,31.6205561 C23.9668828,31.6044516 24.0175848,31.6044516 24.0672991,31.6044516 C24.1206349,31.6205561 24.1542167,31.6546976 24.1894447,31.6869066 L24.6855996,32.1951649 L24.3089565,31.245321 C24.2414636,31.0961933 24.1370966,31.0472356 23.9494335,31.112942 L23.8799652,31.145151 L23.8799652,31.0137382 L23.999477,30.9657468 C24.2740577,30.8684756 24.4636962,30.9167891 24.5492969,31.145151 L24.927257,32.0943507 L24.927257,32.0943507 Z" id="Fill-572"></path>
                            <path d="M25.0978,31.0137382 C25.0638889,31.0137382 25.0289902,31.0137382 24.9944206,30.9976337 C24.927257,30.9815292 24.8749089,30.9489981 24.8413271,30.8845801 C24.7547386,30.7538115 24.8057698,30.6223987 24.9944206,30.5405878 C25.0289902,30.5248054 25.0638889,30.5077346 25.0978,30.4919522 L25.0978,30.6391474 C25.0813383,30.6391474 25.0474272,30.655574 25.0289902,30.655574 C24.9608388,30.7051759 24.927257,30.7538115 24.9769713,30.8188737 C24.9769713,30.8526931 25.0125285,30.8684756 25.0474272,30.8684756 C25.0638889,30.8684756 25.0813383,30.8845801 25.0978,30.8684756 L25.0978,31.0137382 Z M26.8822456,30.9489981 C27.0007697,31.145151 26.9322891,31.3103832 26.6761454,31.4569343 L26.2122554,31.6869066 C26.0914267,31.7532572 25.9906813,31.7693617 25.9047513,31.7532572 C25.7832641,31.7532572 25.6983219,31.6869066 25.6446568,31.5893133 L25.2690014,30.9167891 C25.2690014,30.9335378 25.251552,30.9335378 25.2354196,30.9489981 L25.2179702,30.9657468 C25.1666098,30.9815292 25.133028,30.9976337 25.0978,31.0137382 L25.0978,30.8684756 C25.1149201,30.8684756 25.133028,30.8684756 25.1485019,30.8526931 C25.1843884,30.834334 25.2015085,30.8188737 25.2179702,30.7853763 C25.2354196,30.7538115 25.2354196,30.7219245 25.2179702,30.6874609 C25.2015085,30.670068 25.1843884,30.655574 25.1485019,30.6391474 C25.133028,30.6391474 25.1149201,30.6391474 25.0978,30.6391474 L25.0978,30.4919522 C25.2179702,30.4587769 25.3213495,30.5077346 25.3885132,30.6223987 L25.8691941,31.4569343 C25.9373454,31.5893133 26.0588326,31.6044516 26.2287171,31.5232848 L26.5046148,31.3905837 C26.6761454,31.2942787 26.7261889,31.1767158 26.6405882,31.0472356 L25.7997258,29.5582128 L26.0229461,29.4435488 L26.8822456,30.9489981 L26.8822456,30.9489981 Z" id="Fill-573"></path>
                            <path d="M28.5610073,30.2465195 L28.3549071,30.3924263 L27.6355319,29.4284105 C27.5314941,29.2960315 27.4123116,29.2805711 27.2397932,29.3939469 L27.0692502,29.5105435 C26.9135228,29.6252076 26.8822456,29.7385833 26.9836495,29.8690298 L27.0007697,29.9012389 L26.7956572,30.048112 L26.7617461,29.9997984 C26.6916194,29.9186317 26.6761454,29.8200721 26.7090688,29.7218346 C26.744626,29.6252076 26.8117896,29.5253596 26.9500677,29.4435488 L27.2562549,29.2309693 C27.4123116,29.1163052 27.568039,29.0995565 27.6855754,29.14787 C27.738582,29.1636524 27.7896132,29.2129322 27.823195,29.262212 L28.5610073,30.2465195" id="Fill-574"></path>
                            <path d="M30.0544105,29.0164572 L29.8644428,29.1820116 L29.0245681,28.2972299 C28.9202011,28.1819216 28.8003601,28.1819216 28.6469372,28.2972299 L28.4243754,28.4937049 C28.2874142,28.608369 28.2693064,28.7397818 28.3898059,28.8534796 L28.406926,28.8850444 L28.6294879,28.708539 L28.7164055,28.8054882 C28.5787859,28.9201523 28.5438872,29.0332059 28.6469372,29.1311213 L29.2125604,29.7385833 L29.0245681,29.9012389 L28.4408371,29.2960315 C28.3549071,29.1974719 28.3549071,29.0828078 28.4744189,28.9674995 L28.2874142,29.1311213 L28.1662563,28.9997085 C28.0128335,28.8360867 28.0470738,28.6425106 28.2874142,28.444103 L28.61138,28.1667834 C28.7164055,28.0827179 28.8174802,28.018944 28.9040686,28.0002628 C29.0245681,27.9841583 29.1286059,28.018944 29.2125604,28.1178257 L30.0544105,29.0164572" id="Fill-575"></path>
                            <path d="M30.3951672,26.8233454 L30.2075041,27.0188541 C30.173593,26.9866451 30.1215741,26.9698964 30.070543,26.9698964 C30.0185241,26.9698964 29.9658467,27.0027496 29.9335818,27.050419 L29.675792,27.3312816 C29.5388308,27.4620502 29.5388308,27.5773584 29.6580134,27.6736634 L29.7103615,27.7248757 L30.2075041,27.1998688 C30.3777178,27.0027496 30.5317991,26.9698964 30.6878558,27.0845605 L30.963095,27.3312816 L30.963095,27.6089233 C30.9281963,27.6089233 30.9100884,27.6250278 30.8748604,27.657881 C30.8409494,27.6920225 30.8409494,27.7248757 30.8409494,27.7561185 C30.8409494,27.7889717 30.8409494,27.8221469 30.8748604,27.8388956 C30.9100884,27.8711047 30.9281963,27.8711047 30.963095,27.8711047 L30.963095,28.0002628 C30.8923098,28.018944 30.8248169,28.0002628 30.7734565,27.9542039 C30.6878558,27.8711047 30.6694187,27.7889717 30.7033298,27.6736634 C30.7224253,27.6424206 30.7398747,27.6089233 30.7734565,27.5773584 C30.7892597,27.561576 30.8083553,27.5432169 30.8248169,27.5432169 L30.5673563,27.3154991 C30.5153374,27.2816797 30.4636478,27.2655752 30.4116289,27.2655752 C30.3615854,27.2816797 30.3095665,27.3312816 30.2417444,27.39731 L29.6580134,28.018944 L29.4538886,27.8388956 C29.3673002,27.7725451 29.3327306,27.6920225 29.35018,27.5934629 C29.3673002,27.4942592 29.4021989,27.4140587 29.4874704,27.3312816 L29.8980246,26.8880855 C30.070543,26.7080371 30.2417444,26.6764723 30.3951672,26.8233454 Z M30.963095,27.3312816 L31.1685367,27.4942592 C31.2360296,27.561576 31.2531497,27.6250278 31.2531497,27.6920225 C31.2531497,27.7561185 31.2185802,27.8221469 31.1685367,27.8878533 C31.1000561,27.9542039 31.0309171,28.0002628 30.963095,28.0002628 L30.963095,27.8711047 C30.9960184,27.8711047 31.0309171,27.8550001 31.0480373,27.8221469 C31.1155301,27.7561185 31.1155301,27.6920225 31.0480373,27.6424206 C31.0309171,27.6250278 30.9960184,27.6089233 30.963095,27.6089233 L30.963095,27.3312816 L30.963095,27.3312816 Z" id="Fill-576"></path>
                            <path d="M18.2899094,4.95761155 C11.0721231,4.95761155 5.20024335,10.5648789 5.20024335,17.4569639 C5.20024335,24.3487268 11.0721231,29.9550279 18.2899094,29.9550279 C25.4991356,29.9550279 31.3641014,24.3487268 31.3641014,17.4569639 C31.3641014,10.5648789 25.4991356,4.95761155 18.2899094,4.95761155 Z M18.2899094,30.2400777 C10.9117863,30.2400777 4.90887169,24.5055847 4.90887169,17.4569639 C4.90887169,10.4076989 10.9117863,4.67256177 18.2899094,4.67256177 C25.6598016,4.67256177 31.6554731,10.4076989 31.6554731,17.4569639 C31.6554731,24.5055847 25.6598016,30.2400777 18.2899094,30.2400777 L18.2899094,30.2400777 Z" id="Fill-577"></path>
                            <path d="M18.2899094,0.427735716 C8.44582732,0.427735716 0.436892872,8.06706984 0.436892872,17.4569639 C0.436892872,26.8558765 8.44582732,34.5019745 18.2899094,34.5019745 C28.1254314,34.5019745 36.1271227,26.8558765 36.1271227,17.4569639 C36.1271227,8.06706984 28.1254314,0.427735716 18.2899094,0.427735716 Z M18.2899094,34.9297102 C8.20482839,34.9297102 0,27.0916465 0,17.4569639 C0,7.83129985 8.20482839,0 18.2899094,0 C28.3664303,0 36.5643448,7.83129985 36.5643448,17.4569639 C36.5643448,27.0916465 28.3664303,34.9297102 18.2899094,34.9297102 L18.2899094,34.9297102 Z" id="Fill-578"></path>
                            <path d="M5.44815618,23.056179 C5.42148827,23.1254284 5.39811269,23.2107823 5.37440787,23.299035 C5.34214299,23.4188525 5.30559807,23.5544525 5.25654228,23.6336867 C5.19925564,23.7361113 5.10213176,23.7267707 4.7587412,23.631432 C4.77421518,23.5090378 4.75610734,23.3843889 4.70112534,23.2694027 C4.64680181,23.1557049 4.55790876,23.0648755 4.4522248,22.998847 C4.60103835,22.6899625 4.65766652,22.612983 4.78540912,22.6413269 C4.87627757,22.6561431 5.00994637,22.720239 5.12748274,22.7766048 C5.21044958,22.8162219 5.2911118,22.8548727 5.36420163,22.8816062 C5.41259896,22.8983549 5.45869165,22.9138152 5.50511358,22.9257325 C5.4847011,22.9669601 5.46659326,23.0101201 5.44815618,23.056179 Z M5.02278648,24.2311639 C5.00599557,24.3152294 4.94179504,24.4395562 4.88516687,24.549389 C4.84170805,24.6337766 4.79956616,24.7159096 4.77256901,24.7858031 C4.75446117,24.8325062 4.73767026,24.8775988 4.72450092,24.9239798 C4.67906669,24.9030439 4.63132783,24.8850069 4.58095511,24.8666478 C4.50654833,24.8402364 4.41403372,24.8167238 4.31888523,24.7932112 C4.18883799,24.7613243 4.05418148,24.7278269 3.97417774,24.6840226 C3.87376152,24.6315219 3.87409075,24.5548645 3.97845778,24.2099059 C4.00808879,24.2134489 4.03640288,24.2221454 4.06636312,24.2221454 C4.16645011,24.2221454 4.263574,24.2015316 4.35444245,24.1615924 C4.47527115,24.1084475 4.5740412,24.0250262 4.64548488,23.9219574 C4.98294923,24.0704409 5.04813746,24.1232637 5.02278648,24.2311639 Z M3.3479756,24.4592037 C3.25842408,24.4434213 3.13331535,24.3844788 3.01248665,24.3277909 C2.92589823,24.2868855 2.84161445,24.2475905 2.77115848,24.2227895 C2.72440732,24.2050746 2.67732693,24.188648 2.62728344,24.1754423 C2.64868362,24.1329264 2.66613299,24.0897663 2.68325313,24.0449958 C2.71156722,23.9731697 2.73625973,23.8845949 2.76095224,23.7931213 C2.79453406,23.6700829 2.82910358,23.5428572 2.87585474,23.4658777 C2.93347061,23.3640972 3.03158219,23.3734378 3.37431428,23.4700649 C3.35851107,23.591815 3.37596045,23.7154976 3.43028398,23.8295175 C3.48460751,23.9438595 3.57152515,24.0372656 3.67622141,24.1052266 C3.5297125,24.4108902 3.47242587,24.4856151 3.3479756,24.4592037 Z M3.11092747,22.873876 C3.12804761,22.7898105 3.19224815,22.666772 3.24920554,22.5579056 C3.2929936,22.47384 3.33513549,22.3920292 3.36279111,22.3218135 C3.38089895,22.2763988 3.39801909,22.2309841 3.41151767,22.1833147 C3.45728112,22.2042506 3.50403228,22.2222876 3.55242961,22.2396805 C3.62782408,22.266414 3.7203387,22.2899266 3.81548719,22.3131171 C3.94520519,22.3453261 4.07953247,22.3785014 4.16085314,22.4232719 C4.26094013,22.4751284 4.26094013,22.5527521 4.15756081,22.8919131 C4.03080591,22.8741981 3.89944173,22.8870817 3.77861303,22.9395824 C3.6564674,22.991761 3.55638041,23.0761486 3.48460751,23.18115 C3.16492177,23.0407187 3.08524725,22.9869297 3.11092747,22.873876 Z M3.69465849,23.7090558 C3.65087043,23.616938 3.64691963,23.513547 3.68379378,23.4175642 C3.7213264,23.320293 3.79672088,23.2429913 3.8961494,23.2004754 C3.95080216,23.1769628 4.00841803,23.1647234 4.06768006,23.1647234 C4.22669985,23.1647234 4.37156259,23.2532982 4.43740929,23.3905086 C4.48152659,23.4826264 4.48580662,23.5856952 4.44992017,23.6807118 C4.41238755,23.7786272 4.33633461,23.8572172 4.23493068,23.9013436 C4.03541517,23.9895963 3.78453924,23.8981227 3.69465849,23.7090558 Z M5.76158649,22.6648395 C5.6605118,22.6761127 5.59005583,22.6577535 5.46428862,22.6139493 C5.40140502,22.5904367 5.32996135,22.555973 5.25555458,22.5205431 C5.11365493,22.4525821 4.96681678,22.3823664 4.84104958,22.3614306 C4.70244227,22.3317983 4.59609985,22.3559551 4.50852373,22.4145755 C4.48185582,22.3185926 4.42028915,22.2351712 4.30077739,22.1733299 C4.18850876,22.1111665 4.03508594,22.073482 3.88693086,22.0367637 C3.80198861,22.0158279 3.719351,21.9958583 3.65284583,21.9720236 C3.53037096,21.9278972 3.46419503,21.8966545 3.39637292,21.8267609 L3.1013797,21.5220637 L3.14582622,21.9394925 C3.15603246,22.0348312 3.13627845,22.1053689 3.09084422,22.2190667 C3.06648094,22.2821964 3.02828986,22.3540225 2.98976954,22.4281032 C2.92095973,22.559516 2.85017453,22.6954381 2.82548201,22.8152556 C2.7968387,22.9428033 2.82021428,23.041685 2.87552551,23.1234959 C2.77478005,23.1482968 2.68819164,23.2082056 2.6230034,23.3244801 C2.5581444,23.4314141 2.51797791,23.5782872 2.47945759,23.7200068 C2.45739894,23.8005294 2.436328,23.8787973 2.41097702,23.9435374 C2.36653049,24.0594898 2.33393638,24.1222974 2.2585419,24.1902584 L1.93095456,24.4836826 L2.3724567,24.4369795 C2.47715296,24.4263505 2.54727969,24.4437434 2.66975456,24.4901244 C2.73461356,24.5129928 2.80934957,24.5481006 2.88606098,24.5844968 C3.02466829,24.6498811 3.1682141,24.71752 3.29068897,24.7384559 C3.33052622,24.7471523 3.36772961,24.7513395 3.4029576,24.7513395 C3.48921678,24.7513395 3.56033121,24.7242839 3.62288558,24.681768 C3.64790733,24.781938 3.7104617,24.8695466 3.83458273,24.9342867 C3.94586366,24.9951617 4.09895724,25.0328463 4.24711232,25.0695645 C4.33205457,25.0908225 4.41469218,25.1107921 4.48053888,25.1343047 C4.60400145,25.1790752 4.67017739,25.2080633 4.74030413,25.2802115 L5.03826046,25.5845867 L4.9905216,25.1655474 C4.97998612,25.0734296 4.99875244,25.0054686 5.04484513,24.8872615 C5.06920841,24.8244539 5.10674103,24.7523058 5.14526135,24.6779029 C5.21341269,24.5455239 5.28419789,24.4083135 5.30757347,24.2907506 C5.33852142,24.1609482 5.31349967,24.060134 5.25456688,23.9767127 C5.35630003,23.9522338 5.44387615,23.8932913 5.50906438,23.7760505 C5.57655725,23.667184 5.61705297,23.5167679 5.65623176,23.3718274 C5.67697347,23.2938816 5.69738595,23.2178683 5.72010306,23.1586037 C5.76784192,23.0397524 5.79813141,22.9769449 5.87187971,22.9144594 L6.21428257,22.6213573 L5.76158649,22.6648395 L5.76158649,22.6648395 Z" id="Fill-579"></path>
                            <path d="M33.7826508,24.2195686 C33.7098902,24.2456579 33.6269234,24.2849529 33.5416519,24.3255363 C33.4254325,24.3809358 33.293739,24.4434213 33.1985906,24.46017 C33.0787496,24.4859372 33.0227799,24.410246 32.8756125,24.1039383 C32.979321,24.0362994 33.0659095,23.9435374 33.120233,23.8301617 C33.1755442,23.7161417 33.1936521,23.5924591 33.1781781,23.470387 C33.5205809,23.3731157 33.6183633,23.363453 33.6792715,23.470387 C33.725035,23.545434 33.7622383,23.6816781 33.7948325,23.8021398 C33.8185373,23.8894262 33.8415836,23.9747801 33.8685808,24.0446737 C33.8860301,24.0894442 33.9038088,24.1326043 33.9252089,24.1747981 C33.8771408,24.1870375 33.8307189,24.2024979 33.7826508,24.2195686 Z M32.5743638,24.6837006 C32.4969939,24.7271827 32.3633251,24.760358 32.2342656,24.7922449 C32.1387879,24.8164017 32.0452856,24.8395922 31.9705496,24.8669698 C31.9205061,24.8850069 31.8734257,24.9027219 31.8286499,24.9236577 C31.816139,24.8792093 31.7996774,24.8337946 31.7799234,24.7851589 C31.7522677,24.7155875 31.7107843,24.6350649 31.667984,24.5526099 C31.6103681,24.4418108 31.5448506,24.3161957 31.527072,24.2301976 C31.5020503,24.1187544 31.5817248,24.0659316 31.9066783,23.9226015 C31.9781219,24.0253483 32.0762335,24.1087696 32.196733,24.1615924 C32.2882599,24.2015316 32.3850546,24.2221454 32.4848123,24.2221454 C32.5151018,24.2221454 32.5430866,24.2134489 32.5723884,24.2099059 C32.6780724,24.553254 32.6784016,24.6302336 32.5743638,24.6837006 Z M31.177426,23.2977466 C31.153392,23.209816 31.1300164,23.1241401 31.1030193,23.0539244 C31.0858991,23.0107643 31.0684497,22.9676042 31.0470496,22.9254104 C31.0947884,22.9134931 31.142198,22.8980328 31.1919123,22.8806399 C31.2636852,22.8542285 31.3459936,22.8152556 31.4306066,22.7746722 C31.5530815,22.7163739 31.6798364,22.655821 31.7730095,22.6374618 C31.8941674,22.6145934 31.9498078,22.6889963 32.0992799,22.9985249 C31.9935959,23.0648755 31.9043736,23.156027 31.8500501,23.2697248 C31.7957266,23.3843889 31.777948,23.5083936 31.7934219,23.6298216 C31.4510191,23.7264486 31.353566,23.7357892 31.2926578,23.627889 C31.2465651,23.5541304 31.2096909,23.4175642 31.177426,23.2977466 Z M32.8568462,23.7087337 C32.7659777,23.8984448 32.5160895,23.9895963 32.3159155,23.9013436 C32.2154993,23.8572172 32.1394464,23.7786272 32.1019137,23.6807118 C32.0660273,23.5856952 32.0703073,23.4826264 32.1140954,23.3905086 C32.1796128,23.2532982 32.3251341,23.1647234 32.4844831,23.1647234 C32.5444036,23.1647234 32.6023487,23.1769628 32.6570014,23.2004754 C32.75643,23.2439576 32.8321537,23.3222255 32.8693571,23.4207851 C32.9052435,23.5154796 32.9009635,23.6175822 32.8568462,23.7087337 Z M32.3942731,22.4213394 C32.4709845,22.3788235 32.6105795,22.3440377 32.7340421,22.3137612 C32.8301783,22.2902487 32.9240098,22.2667361 32.9977581,22.2396805 C33.0471431,22.2222876 33.094882,22.2042506 33.1413039,22.1826706 C33.154144,22.2280853 33.1702765,22.2735 33.1883843,22.3211693 C33.2157107,22.3910629 33.2575234,22.4719075 33.3009822,22.5553289 C33.3582688,22.6648395 33.4234571,22.7894884 33.4412357,22.8796736 C33.4659282,22.9875738 33.3869121,23.0400745 33.0672264,23.1814721 C32.9957827,23.0771149 32.8966834,22.9927273 32.774867,22.9399045 C32.6533799,22.8870817 32.5216865,22.873876 32.3946023,22.891591 C32.2892476,22.5475987 32.2889184,22.4757726 32.3942731,22.4213394 Z M34.2936212,24.1902584 C34.2192145,24.1229416 34.187608,24.0623887 34.1411861,23.9435374 C34.1174813,23.8823403 34.0973981,23.8066491 34.0763271,23.7290254 C34.0368191,23.5834406 33.9959941,23.4333466 33.9311351,23.327701 C33.86463,23.2104602 33.7773831,23.1499073 33.6769669,23.1244621 C33.7319489,23.0439396 33.7549952,22.9469905 33.7266811,22.8220195 C33.7019886,22.6960822 33.6302157,22.5585498 33.5604182,22.4252044 C33.5222271,22.35209 33.4846945,22.2812301 33.4613189,22.2206772 C33.414897,22.098605 33.3974476,22.0325765 33.4073246,21.9394925 L33.4514419,21.5259287 L33.1571071,21.8261168 C33.0879681,21.8966545 33.0214629,21.9278972 32.8973419,21.9723457 C32.831166,21.9961804 32.7478699,22.016472 32.6629276,22.0374079 C32.5147726,22.0738041 32.361679,22.1118107 32.2543488,22.1713974 C32.1328617,22.2338829 32.0703073,22.3176263 32.0429809,22.4132871 C31.9567218,22.355633 31.8510378,22.3311541 31.7140767,22.3582097 C31.5853463,22.3839769 31.4418005,22.4525821 31.302864,22.5186106 C31.2268111,22.5550068 31.153392,22.5901146 31.0921545,22.6126609 C30.9624365,22.6577535 30.8919806,22.673858 30.7948567,22.6632291 L30.3533545,22.6136272 L30.6792957,22.9093059 C30.7520563,22.9756565 30.7859674,23.041685 30.8307431,23.1547386 C30.8544479,23.2165799 30.8745312,23.2925932 30.8956021,23.370539 C30.9351102,23.5164459 30.9759351,23.667184 31.0407941,23.770575 C31.1069701,23.8891042 31.1948754,23.9490129 31.2959501,23.9747801 C31.2370173,24.0572352 31.2123248,24.1580494 31.2419558,24.2891401 C31.2669775,24.4108902 31.3387504,24.5487448 31.4082187,24.6820901 C31.4464098,24.7555267 31.4839424,24.8267086 31.5086349,24.8885499 C31.5534107,25.0006373 31.5728355,25.0708529 31.5626292,25.1668358 L31.5175242,25.5845867 L31.8131759,25.2795673 C31.8826442,25.2080633 31.9481617,25.1790752 32.0722827,25.1343047 C32.1384587,25.1101479 32.2214255,25.0895341 32.3060385,25.0689204 C32.4541936,25.0322021 32.6069579,24.9938734 32.7142881,24.9336425 C32.8390676,24.8695466 32.9029389,24.7832264 32.9286191,24.6837006 C32.9901858,24.7255723 33.0599833,24.7519837 33.1452547,24.7519837 C33.1791658,24.7519837 33.2157107,24.7481186 33.2548895,24.7397442 C33.3846075,24.7171979 33.5294702,24.6482706 33.6690653,24.5819201 C33.7451182,24.545846 33.8188665,24.510094 33.8820793,24.4872256 C34.0091635,24.4430992 34.0792902,24.4257063 34.1793772,24.4369795 L34.6212086,24.4840047 L34.2936212,24.1902584 L34.2936212,24.1902584 Z" id="Fill-580"></path>
                            <polygon id="Fill-581" points="42.0503628 17.1828652 43.2886101 17.1828652 43.2886101 7.49246101 42.0503628 7.49246101"></polygon>
                            <path d="M52.5074777,16.5808787 C52.1311638,16.8185812 51.6797846,17.0137679 51.1539987,17.1648281 C50.6275543,17.3146001 50.133704,17.3899692 49.6721186,17.3899692 C48.1836539,17.3899692 46.9819516,16.9222943 46.0666824,15.9875887 C45.1514133,15.052561 44.6937787,13.8311951 44.6937787,12.3257458 C44.6937787,10.868932 45.1596441,9.66528115 46.0920334,8.71318267 C47.0244227,7.76140629 48.2221743,7.28503496 49.6849588,7.28503496 C50.2578251,7.28503496 50.7743924,7.35106344 51.2340024,7.4831204 C51.6939417,7.61517736 52.1183236,7.81873833 52.5074777,8.09509168 L52.5074777,9.4446494 C52.0798033,9.10162339 51.6445566,8.84427336 51.2017375,8.67227722 C50.7592477,8.50092527 50.3029301,8.41557138 49.8324554,8.41557138 C48.6817842,8.41557138 47.7431395,8.7808216 47.0158627,9.5132546 C46.2889151,10.2456876 45.9254413,11.1829699 45.9254413,12.3257458 C45.9254413,13.4801169 46.2727826,14.4248073 46.9677946,15.1585286 C47.6628065,15.8932162 48.5599678,16.2607211 49.6592785,16.2607211 C50.1893445,16.2607211 50.6920841,16.1724684 51.1665096,15.9969293 C51.6415935,15.821068 52.0883634,15.5572762 52.5074777,15.2058759 L52.5074777,16.5808787" id="Fill-582"></path>
                            <polyline id="Fill-583" points="59.6116784 8.5717851 57.3659766 8.5717851 57.3659766 17.1828652 56.134314 17.1828652 56.134314 8.5717851 53.882686 8.5717851 53.882686 7.49246101 59.6116784 7.49246101 59.6116784 8.5717851"></polyline>
                            <path d="M61.8758173,15.4532411 C61.8758173,15.6748391 61.7971305,15.8632619 61.6387692,16.0181872 C61.4804078,16.1724684 61.2878062,16.24977 61.0612936,16.24977 C60.8347809,16.24977 60.6418501,16.1724684 60.483818,16.0181872 C60.3257859,15.8632619 60.2464406,15.6748391 60.2464406,15.4532411 C60.2464406,15.231321 60.3257859,15.0432203 60.483818,14.888295 C60.6418501,14.7333696 60.8347809,14.656068 61.0612936,14.656068 C61.2878062,14.656068 61.4804078,14.7333696 61.6387692,14.888295 C61.7971305,15.0432203 61.8758173,15.231321 61.8758173,15.4532411 Z M61.8758173,10.6209226 C61.8758173,10.8383335 61.7971305,11.0235353 61.6387692,11.1765281 C61.4804078,11.3285547 61.2878062,11.4045679 61.0612936,11.4045679 C60.8305009,11.4045679 60.6369116,11.3285547 60.4808549,11.1765281 C60.324469,11.0235353 60.2464406,10.8383335 60.2464406,10.6209226 C60.2464406,10.3986804 60.3257859,10.2105798 60.483818,10.0556544 C60.6418501,9.90072905 60.8347809,9.82342741 61.0612936,9.82342741 C61.2878062,9.82342741 61.4804078,9.90072905 61.6387692,10.0556544 C61.7971305,10.2105798 61.8758173,10.3986804 61.8758173,10.6209226 L61.8758173,10.6209226 Z" id="Fill-584"></path>
                            <path d="M69.3243963,14.5974476 C69.3243963,15.4680572 69.050474,16.1505663 68.5032879,16.6459409 C67.9554433,17.1419597 67.2011694,17.3899692 66.2384906,17.3899692 C65.5714635,17.3899692 64.9906956,17.2479274 64.4968453,16.9635218 C64.0026658,16.6791162 63.6424843,16.2771477 63.4159717,15.7579384 L64.2690157,14.999094 C64.4188169,15.392044 64.6733145,15.7009284 65.0325082,15.924459 C65.391702,16.1486337 65.8065362,16.2607211 66.2770109,16.2607211 C66.8544865,16.2607211 67.3012564,16.1206119 67.6176498,15.8397493 C67.9343724,15.5592088 68.0924045,15.1640041 68.0924045,14.6538134 C68.0924045,14.230909 67.9360186,13.8595391 67.6239052,13.5397035 C67.3121211,13.219868 66.7879813,12.8797408 66.0528029,12.519644 C65.197125,12.0970618 64.5982492,11.6812434 64.2561756,11.2712226 C63.914102,10.8605577 63.7429005,10.3458576 63.7429005,9.72680037 C63.7429005,8.99468946 63.9954226,8.4049424 64.5001376,7.95659292 C65.0048526,7.50953179 65.6758305,7.28503496 66.5143883,7.28503496 C67.0319433,7.28503496 67.483981,7.38198409 67.8714888,7.57394982 C68.2586674,7.76623764 68.5819747,8.05579668 68.8430569,8.44037232 L68.028204,9.22466183 C67.8787319,8.96988852 67.6670348,8.77051472 67.3934417,8.62879505 C67.1191902,8.48643121 66.8136615,8.41557138 66.4755387,8.41557138 C66.0139533,8.41557138 65.6485041,8.52765875 65.3788619,8.75408812 C65.1092196,8.97955122 64.9748924,9.28360432 64.9748924,9.66431488 C64.9748924,10.0199024 65.0825517,10.3242776 65.2988581,10.5774404 C65.5145061,10.8302812 65.9454727,11.1269262 66.5914289,11.4647988 C67.7249799,12.0642086 68.4634507,12.58374 68.8078289,13.0250035 C69.1518779,13.466267 69.3243963,13.9906297 69.3243963,14.5974476" id="Fill-585"></path>
                            <polygon id="Fill-586" points="70.7483312 17.1828652 71.9869077 17.1828652 71.9869077 7.49246101 70.7483312 7.49246101"></polygon>
                            <polyline id="Fill-587" points="77.8057808 17.1828652 73.879342 17.1828652 73.879342 7.49246101 75.1113338 7.49246101 75.1113338 16.0784181 77.8057808 16.0784181 77.8057808 17.1828652"></polyline>
                            <path d="M82.8223119,10.2415004 C82.8223119,9.67623221 82.6471597,9.26588937 82.2961967,9.00789516 C81.945563,8.75086722 81.3720383,8.62235325 80.5769393,8.62235325 L80.1021846,8.62235325 L80.1021846,11.8480861 L80.5769393,11.8480861 C81.4019985,11.8480861 81.9827664,11.7250476 82.3189138,11.4776824 C82.6544028,11.2312834 82.8223119,10.8190081 82.8223119,10.2415004 Z M84.0539745,10.2415004 C84.0539745,11.1285367 83.7523966,11.8062144 83.14957,12.2748555 C82.546085,12.7434967 81.6802008,12.9776562 80.5509299,12.9776562 L80.1021846,12.9776562 L80.1021846,17.1828652 L78.8639373,17.1828652 L78.8639373,7.49246101 L80.5509299,7.49246101 C81.7190504,7.49246101 82.5944823,7.72146711 83.1785425,8.1794793 C83.7619443,8.63781358 84.0539745,9.32547604 84.0539745,10.2415004 L84.0539745,10.2415004 Z" id="Fill-588"></path>
                            <path d="M89.5966207,13.3541796 L88.0060936,9.83341221 L86.4152372,13.3541796 L89.5966207,13.3541796 Z M92.6828556,17.1828652 L91.3165365,17.1828652 L90.0526091,14.3842239 L85.9401533,14.3842239 L84.6828105,17.1828652 L83.3164914,17.1828652 L88.0060936,7.20998795 L92.6828556,17.1828652 L92.6828556,17.1828652 Z" id="Fill-589"></path>
                            <polyline id="Fill-590" points="100.554829 17.1828652 99.0150038 17.1828652 94.8390059 12.1560043 94.8390059 17.1828652 93.6066848 17.1828652 93.6066848 7.49246101 94.8390059 7.49246101 94.8390059 12.0052661 98.9247938 7.49246101 100.380994 7.49246101 96.1789863 12.030067 100.554829 17.1828652"></polyline>
                            <path d="M109.049054,12.3376631 C109.049054,11.2412682 108.68097,10.3136486 107.945134,9.55383796 C107.209297,8.79467148 106.306538,8.41557138 105.237846,8.41557138 C104.082895,8.41557138 103.163675,8.79885865 102.479528,9.56639947 C101.794722,10.3349066 101.452319,11.2576948 101.452319,12.3376631 C101.452319,13.434058 101.816123,14.3616776 102.54307,15.1214882 C103.270347,15.8806547 104.168496,16.2607211 105.237846,16.2607211 C106.306538,16.2607211 107.209297,15.8800105 107.945134,15.1179453 C108.68097,14.3568462 109.049054,13.4295487 109.049054,12.3376631 Z M110.280058,12.3376631 C110.280058,13.7516389 109.791804,14.9475596 108.81431,15.924459 C107.836816,16.9016805 106.64532,17.3899692 105.237846,17.3899692 C103.838933,17.3899692 102.648096,16.8994259 101.664346,15.9183393 C100.680925,14.9369306 100.18905,13.7435866 100.18905,12.3376631 C100.18905,10.9108037 100.674999,9.71230631 101.648213,8.74152661 C102.621428,7.77106899 103.817533,7.28503496 105.237846,7.28503496 C106.657831,7.28503496 107.853277,7.77106899 108.823529,8.74152661 C109.794767,9.71230631 110.280058,10.9108037 110.280058,12.3376631 L110.280058,12.3376631 Z" id="Fill-591"></path>
                            <path d="M115.868138,10.1783708 C115.868138,9.63886976 115.692657,9.24495351 115.342352,8.99565573 C114.99106,8.74668005 114.439594,8.62235325 113.686966,8.62235325 L112.833593,8.62235325 L112.833593,11.6409821 L113.686966,11.6409821 C114.448483,11.6409821 115.002254,11.526318 115.348608,11.2960236 C115.694961,11.0660512 115.868138,10.6933929 115.868138,10.1783708 Z M117.599906,17.1828652 L116.105515,17.1828652 L113.186531,12.6574986 L112.833593,12.6574986 L112.833593,17.1828652 L111.595346,17.1828652 L111.595346,7.49246101 L113.834133,7.49246101 C114.895253,7.49246101 115.704509,7.7185683 116.26256,8.17046077 C116.82094,8.62235325 117.099801,9.27072072 117.099801,10.1162074 C117.099801,10.868932 116.868679,11.4673755 116.407093,11.9108937 C115.94485,12.3547339 115.314038,12.5866388 114.514988,12.6078967 L117.599906,17.1828652 L117.599906,17.1828652 Z" id="Fill-592"></path>
                            <polyline id="Fill-593" points="127.204306 17.4653383 119.967754 10.1162074 119.967754 17.1828652 118.729507 17.1828652 118.729507 7.20998795 125.972644 14.5468794 125.972644 7.49246101 127.204306 7.49246101 127.204306 17.4653383"></polyline>
                            <path d="M44.0455179,27.2803913 C44.0060099,27.3705766 43.9510279,27.4482003 43.8805719,27.5129404 C43.8097867,27.5776805 43.7261614,27.6285708 43.6293667,27.664967 C43.5325721,27.7013631 43.4288635,27.7200444 43.3188995,27.7200444 C42.9883491,27.7200444 42.7417532,27.5883095 42.5787826,27.3254839 L42.5787826,27.4675257 C42.5787826,27.5670516 42.5409207,27.640166 42.4661847,27.6875133 L42.0500336,27.6875133 C42.1688869,27.6011931 42.2281489,27.5019893 42.2281489,27.3902241 L42.2281489,25.1014515 L42.5787826,25.1014515 L42.5787826,26.846858 C42.5787826,27.0108019 42.651214,27.1554203 42.7967352,27.2803913 C42.9376471,27.400853 43.0831683,27.4610839 43.2329696,27.4610839 C43.3870509,27.4610839 43.5124888,27.4127704 43.6096127,27.3154991 C43.7064074,27.2188721 43.7548047,27.0884256 43.7548047,26.9244817 L43.7548047,25.1014515 L44.1051092,25.1014515 L44.1051092,26.9831021 C44.1051092,27.0906802 44.0853552,27.189884 44.0455179,27.2803913" id="Fill-594"></path>
                            <path d="M49.9197022,27.6875133 L49.9197022,25.9353429 C49.9197022,25.7069809 49.860111,25.592961 49.7412577,25.592961 C49.6576324,25.592961 49.5717024,25.6944194 49.4834678,25.896692 L48.7433509,27.6875133 L48.3930464,27.6875133 L48.3930464,25.3987407 C48.3930464,25.2824661 48.3337844,25.1832624 48.2146019,25.1014515 L48.6310823,25.1014515 C48.7058183,25.1491208 48.7433509,25.2222353 48.7433509,25.321439 L48.7433509,26.9244817 L49.2388473,25.728561 C49.3228019,25.5304755 49.4307905,25.4183882 49.5628131,25.3922989 L49.225678,25.3922989 L49.225678,25.1014515 L50.2700067,25.1014515 L50.2700067,25.3922989 L49.8801942,25.3922989 C50.1399595,25.4528518 50.2700067,25.6274247 50.2700067,25.9160175 L50.2700067,27.6875133 L49.9197022,27.6875133" id="Fill-595"></path>
                            <path d="M55.6565962,27.6875133 L55.6565962,25.9095757 C55.6565962,25.5217791 55.4979057,25.3278808 55.1808538,25.3278808 C55.0396126,25.3278808 54.9237224,25.3707188 54.8335124,25.457039 C54.7433025,25.5433592 54.6981975,25.6403083 54.6981975,25.7475643 L54.3413083,25.7475643 C54.3544777,25.5668717 54.4338229,25.4119464 54.5793442,25.2824661 C54.7465948,25.1404244 54.9447934,25.0689204 55.1739399,25.0689204 C55.7290276,25.0689204 56.0065714,25.3301355 56.0065714,25.8512773 L56.0065714,27.6875133 L55.6565962,27.6875133" id="Fill-596"></path>
                            <path d="M62.040434,26.3946434 C62.040434,27.2781367 61.7210775,27.7200444 61.0823645,27.7200444 C60.81799,27.7200444 60.6043175,27.6540159 60.4413469,27.5226031 C60.278047,27.3911903 60.1878371,27.2092094 60.1703877,26.9763382 L60.5338615,26.9763382 C60.5690895,27.2993946 60.7518141,27.4610839 61.0823645,27.4610839 C61.487651,27.4610839 61.6901296,27.1058185 61.6901296,26.3946434 C61.6901296,25.6831463 61.487651,25.3278808 61.0823645,25.3278808 C60.8091007,25.3278808 60.6349362,25.4679901 60.5602002,25.7475643 L60.1901417,25.7475643 C60.2253697,25.549801 60.3267736,25.3868233 60.4943535,25.2599198 C60.6616041,25.1326942 60.857498,25.0689204 61.0823645,25.0689204 C61.7210775,25.0689204 62.040434,25.5111501 62.040434,26.3946434" id="Fill-597"></path>
                            <polygon id="Fill-598" points="60.2036403 24.8583959 61.9745873 24.8583959 61.9745873 24.5519657 60.2036403 24.5519657"></polygon>
                            <path d="M67.7144444,27.6875133 L67.7144444,25.9289011 C67.7144444,25.5282209 67.5425845,25.3278808 67.199194,25.3278808 C67.1109594,25.3278808 67.0270048,25.3436633 66.9479888,25.3761944 C66.8686435,25.4084034 66.7981875,25.4515635 66.7366209,25.5053525 C66.674725,25.5594637 66.6263277,25.6242038 66.5910997,25.6995729 C66.5558717,25.774942 66.5384223,25.8557866 66.5384223,25.9417847 L66.5384223,27.6875133 L66.1877886,27.6875133 L66.1877886,25.3987407 C66.1877886,25.2824661 66.1285266,25.1832624 66.0096733,25.1014515 L66.4258244,25.1014515 C66.5005605,25.1491208 66.5384223,25.2222353 66.5384223,25.321439 L66.5384223,25.457039 C66.7056729,25.1984006 66.9654382,25.0689204 67.3180473,25.0689204 C67.8158483,25.0689204 68.0647489,25.3301355 68.0647489,25.8512773 L68.0647489,27.6875133 L67.7144444,27.6875133" id="Fill-599"></path>
                            <path d="M73.6462446,27.5097195 C73.4720801,27.6498287 73.2462259,27.7200444 72.9686821,27.7200444 C72.6911382,27.7200444 72.465284,27.6498287 72.2914487,27.5097195 C72.1172842,27.3696103 72.0303665,27.1811876 72.0303665,26.9441292 L72.0303665,26.7499088 C72.0303665,26.6078671 72.0777762,26.4828961 72.1725954,26.375318 C72.2670854,26.2674178 72.3892311,26.2091195 72.5393616,26.2007451 C72.3938403,26.1920487 72.2736701,26.1424468 72.1791801,26.0519395 C72.0843608,25.9611101 72.0346466,25.8448355 72.0303665,25.7027938 C72.0303665,25.6209829 72.0458405,25.5433592 72.0764592,25.4702447 C72.1074072,25.3968081 72.1525122,25.3333564 72.2121034,25.2789231 C72.2716947,25.2257783 72.3418214,25.1826182 72.4238006,25.1500871 C72.5051213,25.117556 72.5943436,25.1014515 72.6911382,25.1014515 L72.9752667,25.1014515 L73.160296,25.3729735 L72.8037361,25.3729735 C72.5169737,25.3729735 72.3760617,25.4895701 72.380671,25.7221192 C72.3892311,25.8470902 72.451127,25.9417847 72.5657002,26.0065248 C72.6628241,26.0583813 72.7836528,26.0799613 72.929174,26.0712649 L73.140542,26.0583813 L73.140542,26.3299033 L72.929174,26.3299033 C72.7662034,26.3299033 72.6338516,26.3695204 72.5324477,26.4493987 C72.4310437,26.5292771 72.380671,26.6317018 72.380671,26.7563507 L72.380671,26.9244817 C72.380671,27.0884256 72.4323607,27.2188721 72.53574,27.3154991 C72.6394485,27.4127704 72.7836528,27.4610839 72.9686821,27.4610839 C73.1537113,27.4610839 73.2979156,27.4127704 73.4016241,27.3154991 C73.5050035,27.2188721 73.5570223,27.0884256 73.5570223,26.9244817 L73.5570223,25.1014515 L73.9069976,25.1014515 L73.9069976,26.9441292 C73.9069976,27.1811876 73.8200799,27.3696103 73.6462446,27.5097195" id="Fill-600"></path>
                            <path d="M79.3828094,27.6875133 L79.3828094,25.9095757 C79.3828094,25.5217791 79.2241188,25.3278808 78.9067377,25.3278808 C78.7658258,25.3278808 78.6502648,25.3707188 78.5600548,25.457039 C78.4698448,25.5433592 78.4244106,25.6403083 78.4244106,25.7475643 L78.0675215,25.7475643 C78.0810201,25.5668717 78.1600361,25.4119464 78.3052281,25.2824661 C78.4731372,25.1404244 78.6713357,25.0689204 78.900153,25.0689204 C79.4552407,25.0689204 79.7327846,25.3301355 79.7327846,25.8512773 L79.7327846,27.6875133 L79.3828094,27.6875133" id="Fill-601"></path>
                            <path d="M85.2253873,27.6875133 L85.2253873,26.2329542 C85.1239834,26.3147651 84.8859475,26.396898 84.511609,26.4783869 C84.1810586,26.5521455 84.0269773,26.7241416 84.049036,26.9959857 C84.0707654,27.2803913 84.2735732,27.422111 84.656801,27.422111 C84.7493156,27.422111 84.8329409,27.4134146 84.9080062,27.3963438 L84.7163923,27.6875133 C84.6854443,27.6917004 84.6548256,27.6945993 84.6238777,27.6968539 C84.5929297,27.6991085 84.5619818,27.7003969 84.5313631,27.7003969 C84.2801579,27.7003969 84.0753746,27.6356568 83.9166841,27.5064986 C83.7579935,27.3770184 83.6789775,27.200513 83.6789775,26.9763382 C83.6789775,26.7953236 83.7494335,26.6317018 83.8903454,26.4848287 C84.0315866,26.3556705 84.2073973,26.2651632 84.4190944,26.2136288 C84.7098076,26.1443794 84.8836429,26.0989647 84.9412588,26.0777067 C85.1216787,26.000083 85.2118887,25.8879956 85.2118887,25.7411225 C85.2118887,25.6209829 85.1634914,25.5217791 85.0663675,25.4441554 C84.9695729,25.3665317 84.8487442,25.3278808 84.7032229,25.3278808 C84.5488124,25.3278808 84.4210698,25.3674979 84.3196659,25.4473763 C84.2185912,25.5269326 84.16328,25.6274247 84.1543907,25.7475643 L83.7579935,25.7475643 C83.7711629,25.6490047 83.8044155,25.5584974 83.8570928,25.4766865 C83.9100994,25.3945535 83.977263,25.3236937 84.058913,25.2631407 C84.1402336,25.2025878 84.2350529,25.1555626 84.3430415,25.1207769 C84.4510301,25.0863132 84.5642864,25.0689204 84.6834689,25.0689204 C84.8112115,25.0689204 84.9287479,25.085347 85.0367365,25.117556 C85.1447251,25.1500871 85.2385566,25.1974343 85.3179019,25.2599198 C85.396918,25.3224053 85.4598016,25.3968081 85.5062235,25.4831283 C85.5523162,25.5691264 85.5753625,25.6663976 85.5753625,25.7736536 L85.5753625,27.6875133 L85.2253873,27.6875133" id="Fill-602"></path>
                            <polyline id="Fill-603" points="84.5313631 24.86753 84.5313631 24.2868855 84.8813383 24.2868855 84.8813383 24.5807787 85.984929 24.5807787 85.984929 24.86753 84.5313631 24.86753"></polyline>
                            <path d="M91.4409868,27.5097195 C91.2668223,27.6498287 91.0412973,27.7200444 90.7634242,27.7200444 C90.4858804,27.7200444 90.2600262,27.6498287 90.0861909,27.5097195 C89.9120264,27.3696103 89.8251087,27.1811876 89.8251087,26.9441292 L89.8251087,26.7499088 C89.8251087,26.6078671 89.8721891,26.4828961 89.9670084,26.375318 C90.0618276,26.2674178 90.1839732,26.2091195 90.3341037,26.2007451 C90.1885825,26.1920487 90.0684123,26.1424468 89.973593,26.0519395 C89.879103,25.9611101 89.8293887,25.8448355 89.8251087,25.7027938 C89.8251087,25.6209829 89.8405827,25.5433592 89.8712014,25.4702447 C89.9021494,25.3968081 89.9472543,25.3333564 90.0068456,25.2789231 C90.0661076,25.2257783 90.1368929,25.1826182 90.2182135,25.1500871 C90.2998634,25.117556 90.3890857,25.1014515 90.4858804,25.1014515 L90.7700089,25.1014515 L90.9550381,25.3729735 L90.5984782,25.3729735 C90.3120451,25.3729735 90.1708039,25.4895701 90.1754132,25.7221192 C90.1839732,25.8470902 90.2458691,25.9417847 90.3604424,26.0065248 C90.4572371,26.0583813 90.578395,26.0799613 90.723587,26.0712649 L90.9352841,26.0583813 L90.9352841,26.3299033 L90.723587,26.3299033 C90.5609456,26.3299033 90.4285937,26.3695204 90.3271898,26.4493987 C90.2261151,26.5292771 90.1754132,26.6317018 90.1754132,26.7563507 L90.1754132,26.9244817 C90.1754132,27.0884256 90.2271028,27.2188721 90.3308114,27.3154991 C90.4341907,27.4127704 90.578395,27.4610839 90.7634242,27.4610839 C90.9484535,27.4610839 91.0926577,27.4127704 91.1963663,27.3154991 C91.2997456,27.2188721 91.3517645,27.0884256 91.3517645,26.9244817 L91.3517645,25.1014515 L91.7017397,25.1014515 L91.7017397,26.9441292 C91.7017397,27.1811876 91.6148221,27.3696103 91.4409868,27.5097195" id="Fill-604"></path>
                            <path d="M97.2799432,25.3149972 C97.4297444,25.4615483 97.5044804,25.6383757 97.5044804,25.8448355 L97.5044804,27.6875133 L97.1545052,27.6875133 L97.1545052,25.864483 C97.1545052,25.7008612 97.1024863,25.5700926 96.9994362,25.4731435 C96.8957276,25.3761944 96.7511941,25.3278808 96.5664941,25.3278808 C96.3811357,25.3278808 96.2369314,25.3761944 96.1335521,25.4731435 C96.0301727,25.5700926 95.9778246,25.7008612 95.9778246,25.864483 L95.9778246,26.2526017 C96.0617792,26.1314958 96.2073004,26.0712649 96.4143883,26.0712649 L96.8107854,26.0712649 L96.8107854,26.3621123 L96.3877203,26.3621123 C96.1147858,26.3621123 95.9778246,26.4655032 95.9778246,26.6722851 L95.9778246,27.6875133 L95.6278494,27.6875133 L95.6278494,25.8448355 C95.6278494,25.6080993 95.714767,25.4193544 95.8889316,25.2789231 C96.0630961,25.139136 96.2889503,25.0689204 96.5664941,25.0689204 C96.6195007,25.0689204 96.6741535,25.0734296 96.7314401,25.0821261 C96.7887268,25.0905004 96.8417334,25.0991968 96.8901307,25.1078933 C96.938528,25.1165897 96.9803407,25.1252861 97.0155686,25.1339826 C97.0511259,25.1423569 97.0751599,25.1468662 97.0886585,25.1468662 C97.2559091,25.1468662 97.3418391,25.0669878 97.3461191,24.9075532 L97.7622703,24.9075532 C97.7622703,25.1143351 97.6016043,25.2502571 97.2799432,25.3149972" id="Fill-605"></path>
                            <polygon id="Fill-606" points="95.7733706 24.8583959 97.5443177 24.8583959 97.5443177 24.5519657 95.7733706 24.5519657"></polygon>
                            <path d="M103.224583,27.6875133 L103.224583,26.2329542 C103.12318,26.3147651 102.885144,26.396898 102.510805,26.4783869 C102.180255,26.5521455 102.026173,26.7241416 102.048232,26.9959857 C102.070291,27.2803913 102.273099,27.422111 102.656326,27.422111 C102.748841,27.422111 102.832466,27.4134146 102.907202,27.3963438 L102.715918,27.6875133 C102.684641,27.6917004 102.654022,27.6945993 102.623403,27.6968539 C102.592455,27.6991085 102.561507,27.7003969 102.530559,27.7003969 C102.279683,27.7003969 102.074571,27.6356568 101.916209,27.5064986 C101.757519,27.3770184 101.678503,27.200513 101.678503,26.9763382 C101.678503,26.7953236 101.7483,26.6317018 101.889871,26.4848287 C102.030454,26.3556705 102.206923,26.2651632 102.418291,26.2136288 C102.709333,26.1443794 102.882839,26.0989647 102.940455,26.0777067 C103.120875,26.000083 103.211414,25.8879956 103.211414,25.7411225 C103.211414,25.6209829 103.163017,25.5217791 103.065893,25.4441554 C102.969098,25.3665317 102.84794,25.3278808 102.702419,25.3278808 C102.548338,25.3278808 102.420595,25.3674979 102.319191,25.4473763 C102.217787,25.5269326 102.162805,25.6274247 102.153916,25.7475643 L101.757519,25.7475643 C101.770688,25.6490047 101.803941,25.5584974 101.856947,25.4766865 C101.909625,25.3945535 101.976788,25.3236937 102.058109,25.2631407 C102.139759,25.2025878 102.234249,25.1555626 102.342238,25.1207769 C102.450226,25.0863132 102.563812,25.0689204 102.682665,25.0689204 C102.810408,25.0689204 102.928273,25.085347 103.036262,25.117556 C103.144251,25.1500871 103.237753,25.1974343 103.317098,25.2599198 C103.396773,25.3224053 103.459327,25.3968081 103.50542,25.4831283 C103.551512,25.5691264 103.575217,25.6663976 103.575217,25.7736536 L103.575217,27.6875133 L103.224583,27.6875133" id="Fill-607"></path>
                            <path d="M109.235729,27.5097195 C109.061894,27.6498287 108.836039,27.7200444 108.558825,27.7200444 C108.280952,27.7200444 108.055427,27.6498287 107.881262,27.5097195 C107.707098,27.3696103 107.62018,27.1811876 107.62018,26.9441292 L107.62018,25.1014515 L107.970155,25.1014515 L107.970155,26.9244817 C107.970155,27.0884256 108.022174,27.2188721 108.125883,27.3154991 C108.228933,27.4127704 108.373466,27.4610839 108.558825,27.4610839 C108.743525,27.4610839 108.888058,27.4127704 108.991438,27.3154991 C109.094817,27.2188721 109.146836,27.0884256 109.146836,26.9244817 L109.146836,24.3255363 L109.496811,24.3255363 L109.496811,26.9441292 C109.496811,27.1811876 109.409893,27.3696103 109.235729,27.5097195" id="Fill-608"></path>
                            <path d="M114.971964,27.6875133 L114.971964,25.9095757 C114.971964,25.5217791 114.813274,25.3278808 114.496551,25.3278808 C114.355639,25.3278808 114.239749,25.3707188 114.149539,25.457039 C114.059329,25.5433592 114.014224,25.6403083 114.014224,25.7475643 L113.657006,25.7475643 C113.670504,25.5668717 113.74985,25.4119464 113.895371,25.2824661 C114.062292,25.1404244 114.26082,25.0689204 114.489967,25.0689204 C115.045054,25.0689204 115.322598,25.3301355 115.322598,25.8512773 L115.322598,27.6875133 L114.971964,27.6875133" id="Fill-609"></path>
                            <path d="M121.032824,27.6875133 L121.032824,25.864483 C121.032824,25.7092356 120.97883,25.5810437 120.870841,25.4795853 C120.762853,25.3787711 120.622928,25.3278808 120.451398,25.3278808 C120.164965,25.3278808 119.966766,25.44641 119.856144,25.6831463 L120.114263,25.864483 C119.942403,25.9076431 119.856144,26.0152212 119.856144,26.1875394 L119.856144,27.6875133 L119.506168,27.6875133 L119.506168,26.2265124 C119.506168,26.0583813 119.581234,25.9459718 119.730706,25.8902502 L119.460076,25.7092356 C119.508473,25.5411045 119.618766,25.3945535 119.790297,25.2695825 C119.979935,25.1359151 120.200193,25.0689204 120.451398,25.0689204 C120.58342,25.0689204 120.706883,25.0872795 120.821127,25.1239978 C120.93603,25.1607161 121.035129,25.2135388 121.118754,25.2824661 C121.202379,25.3513934 121.267568,25.4335264 121.31366,25.5282209 C121.360082,25.6232375 121.382799,25.728561 121.382799,25.8448355 L121.382799,27.6875133 L121.032824,27.6875133" id="Fill-610"></path>
                            <path d="M127.288261,26.9312456 C127.288261,27.1811876 127.204636,27.3750858 127.037385,27.5129404 C126.869805,27.650795 126.647243,27.7200444 126.369699,27.7200444 C126.078986,27.7200444 125.846547,27.6478962 125.672383,27.5032777 C125.498218,27.3589813 125.413605,27.157675 125.417885,26.8987145 L125.801113,26.8987145 C125.792224,26.9763382 125.801113,27.0494527 125.827452,27.1187021 C125.85412,27.1876294 125.89264,27.2468939 125.943671,27.2961737 C125.994044,27.3457756 126.05594,27.3847485 126.128371,27.4127704 C126.201132,27.4407922 126.277185,27.4546421 126.35653,27.4546421 C126.514891,27.4546421 126.649548,27.4105157 126.759512,27.322263 C126.869805,27.2340103 126.924787,27.1209567 126.924787,26.9831021 C126.924787,26.711258 126.715395,26.5299213 126.297268,26.4400581 C125.759301,26.3234615 125.490975,26.1012193 125.490975,25.7736536 C125.490975,25.5668717 125.578551,25.3968081 125.755021,25.2631407 C125.9226,25.1339826 126.123104,25.0689204 126.35653,25.0689204 C126.594237,25.0689204 126.793752,25.1307617 126.954418,25.253478 C127.115413,25.3761944 127.204636,25.5411045 127.222414,25.7475643 L126.865525,25.7475643 C126.860916,25.6319339 126.807909,25.5324081 126.706835,25.4505972 C126.605101,25.3684642 126.488882,25.3278808 126.35653,25.3278808 C126.219898,25.3278808 126.101703,25.3665317 126.003263,25.4441554 C125.903834,25.5217791 125.85412,25.6187282 125.85412,25.7346807 C125.85412,25.8686702 125.917991,25.9720611 126.045734,26.0454977 C126.129688,26.0970321 126.290683,26.1488886 126.52839,26.2007451 C127.03508,26.3083233 127.288261,26.5521455 127.288261,26.9312456" id="Fill-611"></path>
                            <path d="M43.5770186,22.7282913 L43.5770186,20.9049389 C43.5770186,20.7416392 43.5253289,20.6108706 43.4219496,20.5135994 C43.3182411,20.4169724 43.1740368,20.3686588 42.9886783,20.3686588 C42.8039783,20.3686588 42.659774,20.4169724 42.5560655,20.5135994 C42.4523569,20.6108706 42.4009965,20.7416392 42.4009965,20.9049389 L42.4009965,21.2930576 C42.4842926,21.1722738 42.6298138,21.1120429 42.8369017,21.1120429 L43.2336281,21.1120429 L43.2336281,21.4028903 L42.810563,21.4028903 C42.5372992,21.4028903 42.4009965,21.5062812 42.4009965,21.7130631 L42.4009965,22.7282913 L42.0503628,22.7282913 L42.0503628,20.8856135 C42.0503628,20.6488773 42.1376097,20.4601324 42.3117742,20.3197011 C42.4856095,20.179914 42.7114637,20.1096984 42.9886783,20.1096984 C43.2665514,20.1096984 43.4924056,20.179914 43.6662409,20.3197011 C43.8400762,20.4601324 43.9273231,20.6488773 43.9273231,20.8856135 L43.9273231,22.7282913 L43.5770186,22.7282913" id="Fill-612"></path>
                            <path d="M48.4226775,22.7282913 C48.3476122,22.6764348 48.3100796,22.6033203 48.3100796,22.5083037 L48.3100796,22.4374439 C48.2178942,22.6526001 48.0061971,22.7605003 47.6759759,22.7605003 C47.4685587,22.7605003 47.2947234,22.7044566 47.1538115,22.5923692 C46.999401,22.4670762 46.9223603,22.29508 46.9223603,22.0750924 L46.9223603,20.9049389 C46.9223603,20.7500136 46.868366,20.6218217 46.7603775,20.5203633 C46.6523889,20.419227 46.5127938,20.3686588 46.340934,20.3686588 C46.0545008,20.3686588 45.8563022,20.487188 45.7463382,20.7239243 L46.0037988,20.9049389 C45.8319389,20.948099 45.7463382,21.0559992 45.7463382,21.2283174 L45.7463382,22.4693308 L46.0765594,22.4693308 L45.9708755,22.7282913 L45.3957045,22.7282913 L45.3957045,21.2672904 C45.3957045,21.0991593 45.4707698,20.9867498 45.620571,20.9310282 L45.3496118,20.7500136 C45.3980092,20.5818825 45.5079732,20.4353315 45.6801623,20.3103605 C45.8694716,20.1766931 46.090058,20.1096984 46.340934,20.1096984 C46.4729566,20.1096984 46.5964192,20.1280575 46.7109924,20.1647758 C46.8255657,20.2014941 46.924665,20.2539948 47.0086195,20.3232441 C47.0919156,20.3921714 47.1571038,20.4739823 47.2031965,20.5689989 C47.2496185,20.6636934 47.2726648,20.769339 47.2726648,20.8856135 L47.2726648,22.0042326 C47.2726648,22.3363076 47.4399154,22.5018619 47.7750751,22.5018619 C47.9156579,22.5018619 48.0404374,22.4512937 48.1484259,22.3498353 C48.2560853,22.248699 48.3100796,22.11632 48.3100796,21.9523761 L48.3100796,20.1422295 L48.6603841,20.1422295 L48.6603841,22.43068 C48.6603841,22.5427673 48.7199753,22.6419711 48.8388286,22.7282913 L48.4226775,22.7282913" id="Fill-613"></path>
                            <path d="M50.6163604,22.1182525 L49.8959974,22.1182525 L49.8959974,21.627065 L50.2463019,21.627065 L50.2463019,21.8599362 L50.7944757,21.8599362 L50.6163604,22.1182525 Z M50.6163604,20.6701352 L49.8959974,20.6701352 L49.8959974,20.1792698 L50.2463019,20.1792698 L50.2463019,20.4118189 L50.7944757,20.4118189 L50.6163604,20.6701352 L50.6163604,20.6701352 Z" id="Fill-614"></path>
                            <polyline id="Fill-615" points="52.2729861 22.7282913 51.7614345 22.7282913 51.7614345 20.1422295 52.1362133 20.1422295 52.1362133 22.4693308 52.4675551 22.4693308 52.2729861 22.7282913"></polyline>
                            <path d="M55.1071055,22.7282913 L55.1071055,20.9696791 C55.1071055,20.5689989 54.9352456,20.3686588 54.5915258,20.3686588 C54.5032912,20.3686588 54.4193367,20.3844413 54.3406499,20.4169724 C54.2613046,20.4491814 54.1908486,20.4923415 54.1289527,20.5461305 C54.067386,20.6002417 54.0189887,20.6646597 53.9834315,20.7400288 C53.9482035,20.81572 53.9307541,20.8965646 53.9307541,20.9825627 L53.9307541,22.7282913 L53.5801204,22.7282913 L53.5801204,20.4395187 C53.5801204,20.3232441 53.5211877,20.2240404 53.4020051,20.1422295 L53.8181563,20.1422295 C53.8932215,20.1895767 53.9307541,20.2626912 53.9307541,20.362217 L53.9307541,20.497817 C54.098334,20.2391786 54.35777,20.1096984 54.7103791,20.1096984 C55.2081802,20.1096984 55.4570807,20.3709135 55.4570807,20.8920553 L55.4570807,22.7282913 L55.1071055,22.7282913" id="Fill-616"></path>
                            <path d="M58.1077397,22.7282913 L58.1077397,20.9049389 C58.1077397,20.7416392 58.0557208,20.6108706 57.9523415,20.5135994 C57.848633,20.4169724 57.7044287,20.3686588 57.5193994,20.3686588 C57.3343702,20.3686588 57.1901659,20.4169724 57.0864574,20.5135994 C56.983078,20.6108706 56.9313884,20.7416392 56.9313884,20.9049389 L56.9313884,21.2930576 C57.0150137,21.1722738 57.1605349,21.1120429 57.3676228,21.1120429 L57.7640199,21.1120429 L57.7640199,21.4028903 L57.3409549,21.4028903 C57.0680203,21.4028903 56.9313884,21.5062812 56.9313884,21.7130631 L56.9313884,22.7282913 L56.5810839,22.7282913 L56.5810839,20.8856135 C56.5810839,20.6488773 56.6680016,20.4601324 56.8421661,20.3197011 C57.0160014,20.179914 57.2418556,20.1096984 57.5193994,20.1096984 C57.7969433,20.1096984 58.0227975,20.179914 58.196962,20.3197011 C58.3707973,20.4601324 58.457715,20.6488773 58.457715,20.8856135 L58.457715,22.7282913 L58.1077397,22.7282913" id="Fill-617"></path>
                            <path d="M60.3728663,18.8429178 C60.284961,18.8342214 60.1967264,18.847105 60.108821,18.8815686 C60.0070879,18.9160323 59.9567151,18.9633795 59.9567151,19.0239325 C59.9567151,19.0583961 60.0116971,19.1034887 60.1219904,19.1592103 C60.2319544,19.2155761 60.2869364,19.2780616 60.2869364,19.3469889 L60.2869364,22.4693308 L60.5911481,22.4693308 L60.4127036,22.7282913 L59.9435458,22.7282913 L59.9435458,19.4697052 C59.9435458,19.3920815 59.8816499,19.318645 59.7585166,19.2500398 C59.6396633,19.1769253 59.580072,19.0970469 59.580072,19.0110489 C59.580072,18.8815686 59.6636973,18.7781777 59.8309479,18.700554 C59.9632998,18.6358138 60.1196857,18.5990956 60.3004349,18.5903991 C60.5954282,18.5817027 60.8265501,18.6358138 60.9941299,18.7520884 L60.9941299,19.0629054 C60.8311594,18.9202194 60.6240715,18.847105 60.3728663,18.8429178" id="Fill-618"></path>
                            <path d="M63.4442857,22.7282913 C63.3688913,22.6764348 63.3316879,22.6033203 63.3316879,22.5083037 L63.3316879,22.3723817 C63.2082253,22.63102 62.9724941,22.7605003 62.6244943,22.7605003 C62.395677,22.7605003 62.2037339,22.6893184 62.0496526,22.5472766 C61.886682,22.4010477 61.8053613,22.2003855 61.8053613,21.9459343 L61.8053613,20.1422295 L62.1553365,20.1422295 L62.1553365,21.8683106 C62.1553365,22.2908928 62.3512305,22.5018619 62.7433476,22.5018619 C62.9194875,22.5018619 63.0617164,22.4448519 63.169705,22.330832 C63.2776936,22.2161679 63.3316879,22.0686506 63.3316879,21.887636 L63.3316879,20.1422295 L63.6819923,20.1422295 L63.6819923,22.43068 C63.6819923,22.5427673 63.7412544,22.6419711 63.8604369,22.7282913 L63.4442857,22.7282913" id="Fill-619"></path>
                            <path d="M65.4647918,18.8429178 C65.3765572,18.8342214 65.2883227,18.847105 65.2004173,18.8815686 C65.0990134,18.9160323 65.0483114,18.9633795 65.0483114,19.0239325 C65.0483114,19.0583961 65.1032934,19.1034887 65.2135866,19.1592103 C65.3235506,19.2155761 65.3788619,19.2780616 65.3788619,19.3469889 L65.3788619,22.4693308 L65.6827444,22.4693308 L65.5042998,22.7282913 L65.0351421,22.7282913 L65.0351421,19.4697052 C65.0351421,19.3920815 64.9735754,19.318645 64.8501128,19.2500398 C64.7312596,19.1769253 64.6716683,19.0970469 64.6716683,19.0110489 C64.6716683,18.8815686 64.7552936,18.7781777 64.9225442,18.700554 C65.0548961,18.6358138 65.211282,18.5990956 65.3920312,18.5903991 C65.6870244,18.5817027 65.9184756,18.6358138 66.0857262,18.7520884 L66.0857262,19.0629054 C65.9227556,18.9202194 65.7156678,18.847105 65.4647918,18.8429178" id="Fill-620"></path>
                            <path d="M68.2003931,22.7282913 L68.2003931,21.2737322 C68.0989892,21.3555431 67.8609533,21.437676 67.4866148,21.5191649 C67.1560644,21.5926014 67.0019831,21.7649196 67.0240417,22.0367637 C67.0461004,22.3211693 67.248579,22.462889 67.6318068,22.462889 C67.7246507,22.462889 67.8079467,22.4541925 67.883012,22.4374439 L67.6917273,22.7282913 C67.6607794,22.7324784 67.6298314,22.7353772 67.5988835,22.7376319 C67.5682647,22.7398865 67.5373168,22.7411749 67.5063688,22.7411749 C67.2551637,22.7411749 67.0503804,22.6764348 66.8920191,22.5472766 C66.7333285,22.4177964 66.6539833,22.241291 66.6539833,22.0171162 C66.6539833,21.8361016 66.7244392,21.6721577 66.8653512,21.5252846 C67.0065924,21.3964485 67.1827323,21.3059412 67.3941002,21.2544067 C67.6848134,21.1851574 67.8589779,21.1397427 67.9162646,21.1184847 C68.0966845,21.040861 68.1872237,20.9287736 68.1872237,20.7819005 C68.1872237,20.6617609 68.1388264,20.5625571 68.0417025,20.4849334 C67.9449079,20.4073097 67.8237499,20.3686588 67.6782287,20.3686588 C67.5238182,20.3686588 67.3964048,20.4082759 67.2950009,20.4881543 C67.193597,20.5677106 67.138615,20.6682027 67.1297257,20.7883423 L66.7333285,20.7883423 C66.7464979,20.6897827 66.7794212,20.5989533 66.8324278,20.5174645 C66.8851052,20.4353315 66.9522688,20.3641496 67.0339187,20.3039187 C67.1155687,20.2433658 67.2100587,20.1960185 67.3180473,20.1615549 C67.4260359,20.1270912 67.5392922,20.1096984 67.6584747,20.1096984 C67.7862173,20.1096984 67.9040829,20.126125 68.0120715,20.158334 C68.1200601,20.1908651 68.2135624,20.2382123 68.2929077,20.3006978 C68.3719237,20.3631833 68.4348073,20.437264 68.4812293,20.5239063 C68.5276512,20.6099044 68.5506975,20.7071756 68.5506975,20.8144316 L68.5506975,22.7282913 L68.2003931,22.7282913" id="Fill-621"></path>
                            <path d="M71.2030027,22.5504975 C71.0291674,22.6906067 70.8033132,22.7605003 70.5257694,22.7605003 C70.2482255,22.7605003 70.0223713,22.6906067 69.8485361,22.5504975 C69.6743715,22.4103883 69.5874539,22.2219656 69.5874539,21.9849072 L69.5874539,21.7906868 C69.5874539,21.6486451 69.6345343,21.5236741 69.7296828,21.416096 C69.8241728,21.3081958 69.9463184,21.2498975 70.0964489,21.2412011 C69.9509277,21.2328267 69.8307574,21.1829027 69.7359382,21.0927175 C69.6414482,21.0018881 69.5917339,20.8856135 69.5874539,20.7432497 C69.5874539,20.6617609 69.6025986,20.5838151 69.6335466,20.5107006 C69.6644945,20.437264 69.7095995,20.3741344 69.7691908,20.3197011 C69.828782,20.2662342 69.8989088,20.2230741 69.9808879,20.1908651 C70.0618794,20.158334 70.1514309,20.1422295 70.2482255,20.1422295 L70.5323541,20.1422295 L70.7173833,20.4137515 L70.3608234,20.4137515 C70.0743902,20.4137515 69.9331491,20.5303481 69.9374291,20.7628972 C69.9463184,20.8878682 70.0082143,20.9825627 70.1227876,21.0473028 C70.2195822,21.0991593 70.3407402,21.1207393 70.4859321,21.1120429 L70.6976293,21.0991593 L70.6976293,21.3706813 L70.4859321,21.3706813 C70.3232908,21.3706813 70.1909389,21.4106205 70.0898642,21.4901767 C69.9884603,21.5700551 69.9374291,21.6721577 69.9374291,21.7971286 L69.9374291,21.9652597 C69.9374291,22.1292036 69.9891188,22.259328 70.0928273,22.3562771 C70.1965359,22.4535484 70.3407402,22.5018619 70.5257694,22.5018619 C70.7107986,22.5018619 70.8550029,22.4535484 70.9587115,22.3562771 C71.0620908,22.259328 71.1141097,22.1292036 71.1141097,21.9652597 L71.1141097,20.1422295 L71.4640849,20.1422295 L71.4640849,21.9849072 C71.4640849,22.2219656 71.3771673,22.4103883 71.2030027,22.5504975" id="Fill-622"></path>
                            <polyline id="Fill-623" points="69.8649977 19.9146448 69.8649977 19.6278935 71.2856403 19.6278935 71.2856403 19.2693652 71.6356156 19.2693652 71.6356156 19.9146448 69.8649977 19.9146448"></polyline>
                            <path d="M74.9302553,20.4073097 C75.0273792,20.5280935 75.0757765,20.6636934 75.0757765,20.8144316 L75.0757765,22.7282913 L74.7254721,22.7282913 L74.7254721,21.2737322 C74.6240682,21.3555431 74.3860323,21.437676 74.0116938,21.5191649 C73.6814726,21.5926014 73.5270621,21.7649196 73.5491207,22.0367637 C73.5711794,22.3211693 73.7739872,22.462889 74.157215,22.462889 C74.2497297,22.462889 74.333355,22.4541925 74.4084202,22.4374439 L74.2164771,22.7282913 C74.1858584,22.7324784 74.1549104,22.7353772 74.1239625,22.7376319 C74.0930145,22.7398865 74.0623958,22.7411749 74.0317771,22.7411749 C73.7805719,22.7411749 73.5757887,22.6764348 73.4170981,22.5472766 C73.2584075,22.4177964 73.1790623,22.241291 73.1790623,22.0171162 C73.1790623,21.8361016 73.2495182,21.6721577 73.3907594,21.5252846 C73.5316714,21.3964485 73.7078113,21.3059412 73.9191792,21.2544067 C74.2098924,21.1851574 74.3837277,21.1397427 74.4413436,21.1184847 C74.6220928,21.040861 74.7123027,20.9287736 74.7123027,20.7819005 C74.7123027,20.6617609 74.6639054,20.5625571 74.5667815,20.4849334 C74.4699869,20.4073097 74.3488289,20.3686588 74.2033077,20.3686588 C74.0492264,20.3686588 73.9214838,20.4082759 73.8200799,20.4881543 C73.718676,20.5677106 73.663694,20.6682027 73.6548047,20.7883423 L73.2584075,20.7883423 C73.2715769,20.6897827 73.3045002,20.5989533 73.3575068,20.5174645 C73.4105134,20.4353315 73.4773478,20.3641496 73.5589977,20.3039187 C73.6406477,20.2433658 73.7351377,20.1960185 73.8431263,20.1615549 C73.9511149,20.1270912 74.0647004,20.1096984 74.1835537,20.1096984 C74.2717883,20.1096984 74.3817523,20.1293459 74.5141042,20.1679967 C74.6461268,20.2069696 74.7363368,20.2259729 74.7850634,20.2259729 C74.84235,20.2259729 74.896015,20.2060033 74.946717,20.1647758 C74.997419,20.1238703 75.0227699,20.0710475 75.0227699,20.0063074 C75.0227699,19.9805402 75.0207945,19.9612148 75.0161853,19.9480091 L75.4326657,19.9480091 C75.410607,20.2069696 75.2430272,20.3599624 74.9302553,20.4073097" id="Fill-624"></path>
                            <path d="M77.6566381,22.7282913 L77.6566381,20.9503536 C77.6566381,20.5625571 77.4979475,20.3686588 77.1805664,20.3686588 C77.0396545,20.3686588 76.9237643,20.4114968 76.8335543,20.497817 C76.7433443,20.5838151 76.6982393,20.6810863 76.6982393,20.7883423 L76.3413502,20.7883423 C76.3545195,20.6076497 76.4338648,20.4524023 76.579386,20.3232441 C76.7466366,20.1808803 76.9448352,20.1096984 77.1739817,20.1096984 C77.7290694,20.1096984 78.0066133,20.3709135 78.0066133,20.8920553 L78.0066133,22.7282913 L77.6566381,22.7282913" id="Fill-625"></path>
                            <path d="M80.9776165,21.9717015 C80.9776165,22.2219656 80.893662,22.4158638 80.7264113,22.5537184 C80.5588315,22.691573 80.3365989,22.7605003 80.0587258,22.7605003 C79.7680126,22.7605003 79.5355737,22.6886742 79.3617384,22.5440557 C79.1875739,22.3994372 79.1026316,22.1981309 79.1072409,21.9394925 L79.4904687,21.9394925 C79.4815794,22.0171162 79.4904687,22.0902307 79.5171366,22.1594801 C79.5434753,22.2284074 79.5816664,22.2876719 79.6326976,22.3372738 C79.6830703,22.3865536 79.7449662,22.4255265 79.8177268,22.4535484 C79.8904874,22.4815702 79.9665404,22.4954201 80.0455564,22.4954201 C80.204247,22.4954201 80.3385743,22.4512937 80.4485383,22.3627189 C80.5588315,22.2744662 80.6138135,22.1614126 80.6138135,22.023558 C80.6138135,21.7517139 80.404421,21.5706993 79.9859652,21.4808361 C79.4486561,21.3642395 79.1796723,21.1423194 79.1796723,20.8144316 C79.1796723,20.6076497 79.2679069,20.437264 79.444376,20.3039187 C79.6116267,20.1744385 79.8121299,20.1096984 80.0455564,20.1096984 C80.2835923,20.1096984 80.4827785,20.1712176 80.6437737,20.294256 C80.8044397,20.4169724 80.893662,20.5818825 80.9111113,20.7883423 L80.5545514,20.7883423 C80.5499422,20.6723899 80.4969356,20.5731861 80.3958609,20.4913752 C80.294457,20.4092422 80.1779083,20.3686588 80.0455564,20.3686588 C79.9089245,20.3686588 79.7910589,20.4073097 79.6919596,20.4849334 C79.5928603,20.5625571 79.5434753,20.6595062 79.5434753,20.7757808 C79.5434753,20.9094482 79.6073466,21.0128391 79.7350892,21.0862757 C79.8187145,21.1378101 79.9793805,21.1893445 80.2174163,21.2412011 C80.7241067,21.3491013 80.9776165,21.5926014 80.9776165,21.9717015" id="Fill-626"></path>
                            <path d="M83.5351024,20.4073097 C83.6322263,20.5280935 83.6806237,20.6636934 83.6806237,20.8144316 L83.6806237,22.7282913 L83.3303192,22.7282913 L83.3303192,21.2737322 C83.2289153,21.3555431 82.9908794,21.437676 82.6165409,21.5191649 C82.2859905,21.5926014 82.1319092,21.7649196 82.1539679,22.0367637 C82.1756973,22.3211693 82.3785051,22.462889 82.7620621,22.462889 C82.8545768,22.462889 82.9382021,22.4541925 83.0132673,22.4374439 L82.8213242,22.7282913 C82.7907055,22.7324784 82.7597575,22.7353772 82.7291388,22.7376319 C82.6981908,22.7398865 82.6672429,22.7411749 82.6366242,22.7411749 C82.3850898,22.7411749 82.1806358,22.6764348 82.0219452,22.5472766 C81.8632547,22.4177964 81.7839094,22.241291 81.7839094,22.0171162 C81.7839094,21.8361016 81.8543654,21.6721577 81.9952773,21.5252846 C82.1365185,21.3964485 82.3123292,21.3059412 82.5240263,21.2544067 C82.8150687,21.1851574 82.9885748,21.1397427 83.0461907,21.1184847 C83.2266106,21.040861 83.3168206,20.9287736 83.3168206,20.7819005 C83.3168206,20.6617609 83.2684233,20.5625571 83.1716286,20.4849334 C83.0745048,20.4073097 82.9536761,20.3686588 82.8084841,20.3686588 C82.6540736,20.3686588 82.526331,20.4082759 82.424927,20.4881543 C82.3235231,20.5677106 82.2685411,20.6682027 82.2596518,20.7883423 L81.8632547,20.7883423 C81.876424,20.6897827 81.9093473,20.5989533 81.9623539,20.5174645 C82.0153605,20.4353315 82.0821949,20.3641496 82.1638449,20.3039187 C82.2454948,20.2433658 82.340314,20.1960185 82.4479734,20.1615549 C82.555962,20.1270912 82.6695475,20.1096984 82.7884008,20.1096984 C82.8766354,20.1096984 82.9869286,20.1293459 83.118622,20.1679967 C83.2509739,20.2069696 83.3411839,20.2259729 83.3899105,20.2259729 C83.4471971,20.2259729 83.5008622,20.2060033 83.5515641,20.1647758 C83.6022661,20.1238703 83.6276171,20.0710475 83.6276171,20.0063074 C83.6276171,19.9805402 83.6256417,19.9612148 83.6210324,19.9480091 L84.0371835,19.9480091 C84.0151249,20.2069696 83.8478743,20.3599624 83.5351024,20.4073097" id="Fill-627"></path>
                            <path d="M86.7125351,22.7282913 C86.6374698,22.6764348 86.5999372,22.6033203 86.5999372,22.5083037 L86.5999372,22.3723817 C86.4768039,22.63102 86.2407435,22.7605003 85.8927436,22.7605003 C85.6635971,22.7605003 85.4719832,22.6893184 85.3179019,22.5472766 C85.1549313,22.4010477 85.0736106,22.2003855 85.0736106,21.9459343 L85.0736106,20.1422295 L85.4239151,20.1422295 L85.4239151,21.8683106 C85.4239151,22.2908928 85.6194798,22.5018619 86.0115969,22.5018619 C86.1880661,22.5018619 86.3299657,22.4448519 86.4379543,22.330832 C86.5459429,22.2161679 86.5999372,22.0686506 86.5999372,21.887636 L86.5999372,20.1422295 L86.9502417,20.1422295 L86.9502417,22.43068 C86.9502417,22.5427673 87.0098329,22.6419711 87.1286862,22.7282913 L86.7125351,22.7282913" id="Fill-628"></path>
                            <polyline id="Fill-629" points="88.834697 22.7282913 88.3231454 22.7282913 88.3231454 20.1422295 88.6982832 20.1422295 88.6982832 22.4693308 89.029266 22.4693308 88.834697 22.7282913"></polyline>
                            <path d="M91.2256681,22.7282913 L91.2256681,20.9696791 C91.2256681,20.5689989 91.0538082,20.3686588 90.7100884,20.3686588 C90.6218538,20.3686588 90.5382285,20.3844413 90.4588832,20.4169724 C90.379538,20.4491814 90.309082,20.4923415 90.2475153,20.5461305 C90.1856194,20.6002417 90.1372221,20.6646597 90.1019941,20.7400288 C90.0667661,20.81572 90.0493167,20.8965646 90.0493167,20.9825627 L90.0493167,22.7282913 L89.6990123,22.7282913 L89.6990123,20.4395187 C89.6990123,20.3232441 89.639421,20.2240404 89.5205677,20.1422295 L89.9370481,20.1422295 C90.0117841,20.1895767 90.0493167,20.2626912 90.0493167,20.362217 L90.0493167,20.497817 C90.2165674,20.2391786 90.4766618,20.1096984 90.8292709,20.1096984 C91.3267428,20.1096984 91.5759725,20.3709135 91.5759725,20.8920553 L91.5759725,22.7282913 L91.2256681,22.7282913" id="Fill-630"></path>
                            <path d="M94.3237554,20.3557752 C94.4735567,20.5023263 94.5486219,20.6788317 94.5486219,20.8856135 L94.5486219,22.7282913 L94.1983175,22.7282913 L94.1983175,20.9049389 C94.1983175,20.7416392 94.1462986,20.6108706 94.0429193,20.5135994 C93.9395399,20.4169724 93.7953357,20.3686588 93.6099772,20.3686588 C93.424948,20.3686588 93.2807437,20.4169724 93.1773643,20.5135994 C93.0736558,20.6108706 93.0219661,20.7416392 93.0219661,20.9049389 L93.0219661,21.2930576 C93.1055914,21.1722738 93.2507834,21.1120429 93.4582005,21.1120429 L93.8549269,21.1120429 L93.8549269,21.4028903 L93.4315326,21.4028903 C93.1582688,21.4028903 93.0219661,21.5062812 93.0219661,21.7130631 L93.0219661,22.7282913 L92.6716617,22.7282913 L92.6716617,20.8856135 C92.6716617,20.6488773 92.7585793,20.4601324 92.9327438,20.3197011 C93.1065791,20.179914 93.3324333,20.1096984 93.6099772,20.1096984 C93.6629838,20.1096984 93.7179658,20.1142076 93.7752524,20.122582 C93.832539,20.1312784 93.8852164,20.1399748 93.9336137,20.1486713 C93.9823403,20.1573677 94.0241529,20.1660641 94.0593809,20.1744385 C94.0946089,20.1831349 94.118643,20.1876442 94.1318123,20.1876442 C94.2993922,20.1876442 94.3856513,20.1077658 94.3899314,19.9480091 L94.8060825,19.9480091 C94.8060825,20.1551131 94.6454166,20.290713 94.3237554,20.3557752" id="Fill-631"></path>
                            <polyline id="Fill-632" points="96.3849794 22.7282913 95.8737868 22.7282913 95.8737868 20.1422295 96.2485656 20.1422295 96.2485656 22.4693308 96.5795484 22.4693308 96.3849794 22.7282913"></polyline>
                            <polyline id="Fill-633" points="98.0710437 22.7282913 97.5591332 22.7282913 97.5591332 20.1422295 97.934271 20.1422295 97.934271 22.4693308 98.2656128 22.4693308 98.0710437 22.7282913"></polyline>
                            <path d="M100.738212,22.7282913 L100.738212,21.2737322 C100.636808,21.3555431 100.398772,21.437676 100.024434,21.5191649 C99.6942125,21.5926014 99.539802,21.7649196 99.5618606,22.0367637 C99.5835901,22.3211693 99.7863979,22.462889 100.169955,22.462889 C100.26214,22.462889 100.346095,22.4541925 100.420831,22.4374439 L100.229217,22.7282913 C100.198269,22.7324784 100.167321,22.7353772 100.136702,22.7376319 C100.105754,22.7398865 100.074806,22.7411749 100.044517,22.7411749 C99.7929826,22.7411749 99.5881993,22.6764348 99.4295088,22.5472766 C99.2708182,22.4177964 99.1918022,22.241291 99.1918022,22.0171162 C99.1918022,21.8361016 99.2619289,21.6721577 99.4031701,21.5252846 C99.5444113,21.3964485 99.7205512,21.3059412 99.9322483,21.2544067 C100.222632,21.1851574 100.396468,21.1397427 100.454083,21.1184847 C100.634833,21.040861 100.725043,20.9287736 100.725043,20.7819005 C100.725043,20.6617609 100.676645,20.5625571 100.579521,20.4849334 C100.482727,20.4073097 100.36124,20.3686588 100.216048,20.3686588 C100.061637,20.3686588 99.9342237,20.4082759 99.8328198,20.4881543 C99.7317451,20.5677106 99.6764339,20.6682027 99.6675446,20.7883423 L99.2708182,20.7883423 C99.2839876,20.6897827 99.3172401,20.5989533 99.3702467,20.5174645 C99.4229241,20.4353315 99.4900877,20.3641496 99.5717376,20.3039187 C99.6530583,20.2433658 99.7478776,20.1960185 99.8558662,20.1615549 C99.9638548,20.1270912 100.077111,20.1096984 100.195964,20.1096984 C100.324036,20.1096984 100.441902,20.126125 100.549561,20.158334 C100.65755,20.1908651 100.751381,20.2382123 100.830727,20.3006978 C100.910072,20.3631833 100.972955,20.437264 101.019048,20.5239063 C101.065141,20.6099044 101.088516,20.7071756 101.088516,20.8144316 L101.088516,22.7282913 L100.738212,22.7282913" id="Fill-634"></path>
                            <path d="M102.936833,22.1182525 L102.21647,22.1182525 L102.21647,21.627065 L102.566775,21.627065 L102.566775,21.8599362 L103.114949,21.8599362 L102.936833,22.1182525 Z M102.936833,20.6701352 L102.21647,20.6701352 L102.21647,20.1792698 L102.566775,20.1792698 L102.566775,20.4118189 L103.114949,20.4118189 L102.936833,20.6701352 L102.936833,20.6701352 Z" id="Fill-635"></path>
                            <path d="M105.822894,22.7282913 L105.822894,20.9049389 C105.822894,20.7500136 105.769229,20.6218217 105.661241,20.5203633 C105.553252,20.419227 105.413328,20.3686588 105.241468,20.3686588 C104.955035,20.3686588 104.756836,20.487188 104.646872,20.7239243 L104.904333,20.9049389 C104.732473,20.948099 104.646872,21.0559992 104.646872,21.2283174 L104.646872,22.7282913 L104.296568,22.7282913 L104.296568,21.2672904 C104.296568,21.0991593 104.371633,20.9867498 104.521105,20.9310282 L104.250146,20.7500136 C104.298543,20.5818825 104.409166,20.4353315 104.581026,20.3103605 C104.770006,20.1766931 104.990592,20.1096984 105.241468,20.1096984 C105.37382,20.1096984 105.496953,20.1280575 105.611197,20.1647758 C105.7261,20.2014941 105.825199,20.2539948 105.909154,20.3232441 C105.99245,20.3921714 106.057638,20.4739823 106.103731,20.5689989 C106.150152,20.6636934 106.173199,20.769339 106.173199,20.8856135 L106.173199,22.7282913 L105.822894,22.7282913" id="Fill-636"></path>
                            <path d="M108.562446,22.7282913 L108.562446,20.9503536 C108.562446,20.5625571 108.403756,20.3686588 108.086704,20.3686588 C107.945463,20.3686588 107.829902,20.4114968 107.739692,20.497817 C107.649482,20.5838151 107.604048,20.6810863 107.604048,20.7883423 L107.247159,20.7883423 C107.260328,20.6076497 107.340002,20.4524023 107.485194,20.3232441 C107.652774,20.1808803 107.850644,20.1096984 108.07979,20.1096984 C108.634878,20.1096984 108.912422,20.3709135 108.912422,20.8920553 L108.912422,22.7282913 L108.562446,22.7282913" id="Fill-637"></path>
                            <path d="M111.883425,21.9717015 C111.883425,22.2219656 111.79947,22.4158638 111.63189,22.5537184 C111.46464,22.691573 111.242407,22.7605003 110.964863,22.7605003 C110.67415,22.7605003 110.441382,22.6886742 110.267547,22.5440557 C110.093712,22.3994372 110.008769,22.1981309 110.013049,21.9394925 L110.396606,21.9394925 C110.387717,22.0171162 110.396606,22.0902307 110.422945,22.1594801 C110.449613,22.2284074 110.487804,22.2876719 110.538506,22.3372738 C110.589208,22.3865536 110.650775,22.4255265 110.723864,22.4535484 C110.796296,22.4815702 110.872349,22.4954201 110.951365,22.4954201 C111.110055,22.4954201 111.244383,22.4512937 111.355005,22.3627189 C111.46464,22.2744662 111.519622,22.1614126 111.519622,22.023558 C111.519622,21.7517139 111.310559,21.5706993 110.891774,21.4808361 C110.354135,21.3642395 110.08581,21.1423194 110.08581,20.8144316 C110.08581,20.6076497 110.174044,20.437264 110.350184,20.3039187 C110.517435,20.1744385 110.717938,20.1096984 110.951365,20.1096984 C111.18973,20.1096984 111.388587,20.1712176 111.549582,20.294256 C111.710248,20.4169724 111.79947,20.5818825 111.817249,20.7883423 L111.46036,20.7883423 C111.455751,20.6723899 111.403402,20.5731861 111.301998,20.4913752 C111.200595,20.4092422 111.083717,20.3686588 110.951365,20.3686588 C110.815062,20.3686588 110.697197,20.4073097 110.597768,20.4849334 C110.498998,20.5625571 110.449613,20.6595062 110.449613,20.7757808 C110.449613,20.9094482 110.512826,21.0128391 110.640898,21.0862757 C110.724523,21.1378101 110.885189,21.1893445 111.123225,21.2412011 C111.629915,21.3491013 111.883425,21.5926014 111.883425,21.9717015" id="Fill-638"></path>
                            <path d="M114.525524,20.4073097 C114.621989,20.5280935 114.671045,20.6636934 114.671045,20.8144316 L114.671045,22.7282913 L114.320741,22.7282913 L114.320741,21.2737322 C114.219007,21.3555431 113.981301,21.437676 113.606962,21.5191649 C113.276412,21.5926014 113.122001,21.7649196 113.14406,22.0367637 C113.166119,22.3211693 113.368926,22.462889 113.752484,22.462889 C113.844998,22.462889 113.928294,22.4541925 114.00303,22.4374439 L113.811746,22.7282913 C113.780798,22.7324784 113.74985,22.7353772 113.719231,22.7376319 C113.688283,22.7398865 113.657664,22.7411749 113.626716,22.7411749 C113.375511,22.7411749 113.170728,22.6764348 113.012367,22.5472766 C112.853676,22.4177964 112.774331,22.241291 112.774331,22.0171162 C112.774331,21.8361016 112.844458,21.6721577 112.986028,21.5252846 C113.126611,21.3964485 113.302751,21.3059412 113.514448,21.2544067 C113.805161,21.1851574 113.978996,21.1397427 114.036283,21.1184847 C114.217032,21.040861 114.307242,20.9287736 114.307242,20.7819005 C114.307242,20.6617609 114.258845,20.5625571 114.16205,20.4849334 C114.064926,20.4073097 113.943768,20.3686588 113.798576,20.3686588 C113.644166,20.3686588 113.516423,20.4082759 113.415019,20.4881543 C113.313944,20.5677106 113.258633,20.6682027 113.249744,20.7883423 L112.853676,20.7883423 C112.866516,20.6897827 112.899769,20.5989533 112.952775,20.5174645 C113.005782,20.4353315 113.072616,20.3641496 113.154266,20.3039187 C113.235916,20.2433658 113.330406,20.1960185 113.438066,20.1615549 C113.546054,20.1270912 113.65964,20.1096984 113.778822,20.1096984 C113.866398,20.1096984 113.977021,20.1293459 114.109043,20.1679967 C114.241066,20.2069696 114.331605,20.2259729 114.380003,20.2259729 C114.437289,20.2259729 114.490954,20.2060033 114.541986,20.1647758 C114.592687,20.1238703 114.618038,20.0710475 114.618038,20.0063074 C114.618038,19.9805402 114.615405,19.9612148 114.611454,19.9480091 L115.027605,19.9480091 C115.005546,20.2069696 114.837966,20.3599624 114.525524,20.4073097" id="Fill-639"></path>
                            <polyline id="Fill-640" points="113.157229 19.9146448 113.157229 19.6278935 114.095874 19.6278935 114.095874 19.2693652 114.373418 19.2693652 114.373418 19.6278935 114.578201 19.6278935 114.578201 19.2693652 114.928506 19.2693652 114.928506 19.9146448 113.157229 19.9146448"></polyline>
                            <polygon id="Fill-641" points="114.750061 19.1250128 115.133836 19.1250128 115.133836 18.6229302 114.750061 18.6229302"></polygon>
                            <path d="M118.016716,22.5244082 C117.849136,22.6822324 117.61999,22.7605003 117.329606,22.7605003 C117.038563,22.7605003 116.809417,22.6822324 116.642166,22.5244082 C116.474586,22.3672282 116.390961,22.1443418 116.390961,21.855427 L116.390961,21.1764609 L117.329606,21.1764609 L117.329606,21.4676304 L116.740936,21.4676304 L116.740936,21.8361016 C116.740936,22.0432055 116.792955,22.205539 116.896664,22.3243902 C116.999714,22.4425973 117.144247,22.5018619 117.329606,22.5018619 C117.514306,22.5018619 117.658839,22.4425973 117.762218,22.3243902 C117.865598,22.205539 117.917617,22.0432055 117.917617,21.8361016 L117.917617,20.9696791 C117.917617,20.5689989 117.721394,20.3686588 117.329606,20.3686588 C117.144247,20.3686588 116.999714,20.4169724 116.896664,20.5135994 C116.792955,20.6108706 116.740936,20.7416392 116.740936,20.9049389 L116.390961,20.9049389 L116.390961,20.8856135 C116.390961,20.6530644 116.476891,20.465608 116.648751,20.3232441 C116.820611,20.1808803 117.047453,20.1096984 117.329606,20.1096984 C117.61999,20.1096984 117.849136,20.1844233 118.016716,20.3325847 C118.183967,20.4817125 118.267921,20.6875281 118.267921,20.9503536 L118.267921,21.855427 C118.267921,22.1443418 118.183967,22.3672282 118.016716,22.5244082" id="Fill-642"></path>
                            <path d="M121.467412,20.4073097 C121.563549,20.5280935 121.612934,20.6636934 121.612934,20.8144316 L121.612934,22.7282913 L121.261971,22.7282913 L121.261971,21.2737322 C121.160567,21.3555431 120.92286,21.437676 120.548522,21.5191649 C120.217971,21.5926014 120.06389,21.7649196 120.085949,22.0367637 C120.108007,22.3211693 120.310815,22.462889 120.694372,22.462889 C120.786558,22.462889 120.869854,22.4541925 120.944919,22.4374439 L120.753305,22.7282913 C120.722686,22.7324784 120.691738,22.7353772 120.66079,22.7376319 C120.629842,22.7398865 120.598894,22.7411749 120.568276,22.7411749 C120.317071,22.7411749 120.112287,22.6764348 119.953926,22.5472766 C119.795235,22.4177964 119.715561,22.241291 119.715561,22.0171162 C119.715561,21.8361016 119.786346,21.6721577 119.927258,21.5252846 C120.06817,21.3964485 120.244639,21.3059412 120.456007,21.2544067 C120.74672,21.1851574 120.920885,21.1397427 120.977842,21.1184847 C121.158591,21.040861 121.248801,20.9287736 121.248801,20.7819005 C121.248801,20.6617609 121.200404,20.5625571 121.103609,20.4849334 C121.006156,20.4073097 120.885657,20.3686588 120.740136,20.3686588 C120.585725,20.3686588 120.457983,20.4082759 120.356908,20.4881543 C120.255175,20.5677106 120.200522,20.6682027 120.191633,20.7883423 L119.795235,20.7883423 C119.808405,20.6897827 119.841657,20.5989533 119.894664,20.5174645 C119.947671,20.4353315 120.014176,20.3641496 120.095826,20.3039187 C120.177146,20.2433658 120.271636,20.1960185 120.379954,20.1615549 C120.487614,20.1270912 120.601528,20.1096984 120.720711,20.1096984 C120.807958,20.1096984 120.918251,20.1293459 121.050603,20.1679967 C121.182625,20.2069696 121.273494,20.2259729 121.321891,20.2259729 C121.379178,20.2259729 121.432843,20.2060033 121.483545,20.1647758 C121.533918,20.1238703 121.559927,20.0710475 121.559927,20.0063074 C121.559927,19.9805402 121.557293,19.9612148 121.552684,19.9480091 L121.969164,19.9480091 C121.947106,20.2069696 121.779526,20.3599624 121.467412,20.4073097" id="Fill-643"></path>
                            <path d="M123.870488,22.7282913 L123.870488,20.9503536 C123.870488,20.5625571 123.711797,20.3686588 123.394745,20.3686588 C123.253834,20.3686588 123.137943,20.4114968 123.048063,20.497817 C122.957523,20.5838151 122.912089,20.6810863 122.912089,20.7883423 L122.555529,20.7883423 C122.569028,20.6076497 122.648044,20.4524023 122.793565,20.3232441 C122.960816,20.1808803 123.159014,20.1096984 123.388161,20.1096984 C123.943248,20.1096984 124.220792,20.3709135 124.220792,20.8920553 L124.220792,22.7282913 L123.870488,22.7282913" id="Fill-644"></path>
                            <path d="M127.191796,21.9717015 C127.191796,22.2219656 127.107841,22.4158638 126.94059,22.5537184 C126.773011,22.691573 126.550449,22.7605003 126.273234,22.7605003 C125.982192,22.7605003 125.750082,22.6886742 125.575917,22.5440557 C125.401753,22.3994372 125.31714,22.1981309 125.32142,21.9394925 L125.704648,21.9394925 C125.695758,22.0171162 125.704648,22.0902307 125.730986,22.1594801 C125.757654,22.2284074 125.796175,22.2876719 125.846877,22.3372738 C125.897249,22.3865536 125.959475,22.4255265 126.031577,22.4535484 C126.104337,22.4815702 126.18039,22.4954201 126.260065,22.4954201 C126.418426,22.4954201 126.552753,22.4512937 126.663047,22.3627189 C126.773011,22.2744662 126.828322,22.1614126 126.828322,22.023558 C126.828322,21.7517139 126.618929,21.5706993 126.200473,21.4808361 C125.662835,21.3642395 125.394181,21.1423194 125.394181,20.8144316 C125.394181,20.6076497 125.482086,20.437264 125.658226,20.3039187 C125.825806,20.1744385 126.026309,20.1096984 126.260065,20.1096984 C126.497442,20.1096984 126.696958,20.1712176 126.857624,20.294256 C127.018619,20.4169724 127.107841,20.5818825 127.12562,20.7883423 L126.76873,20.7883423 C126.764121,20.6723899 126.711115,20.5731861 126.61004,20.4913752 C126.508307,20.4092422 126.392087,20.3686588 126.260065,20.3686588 C126.123104,20.3686588 126.005238,20.4073097 125.906468,20.4849334 C125.807369,20.5625571 125.757654,20.6595062 125.757654,20.7757808 C125.757654,20.9094482 125.821196,21.0128391 125.948939,21.0862757 C126.032894,21.1378101 126.193889,21.1893445 126.431595,21.2412011 C126.938286,21.3491013 127.191796,21.5926014 127.191796,21.9717015" id="Fill-645"></path>
                        </g>
                    </g>
                </g>
            </svg>
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
        <article class="col-xs-12 wrap_banner">
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
        <section class="row col-xs-12 col-sm-offset-1 col-sm-10 col-md-offset-0 col-md-12 wrap_function">
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
