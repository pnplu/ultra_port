<?php

  require_once __DIR__."/app/autoload.php";
  use Ultraline\Database;

  $stu_id = $_GET["stu_id"];

  $conn = new Database();
  $json_data = $conn->db_application_user($stu_id);

 ?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width= device-width, initial-scale=1.0">
    <title>Project Detail</title>
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

   <!-- add sound -->
   <script type="text/javascript" src="js/sound-mouseover.js"></script>
  </head>
  <body>
    <div id="large-header" class="large-header">
      <canvas id="demo-canvas" style="background-image: url('image_user/landing_profile/<?php echo $json_data["user_img_lannding"] ?>'); background-position: center; background-attachment: fixed;background-repeat: no-repeat;
background-position: center center;
background-attachment: fixed;
background-size: cover;
">
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
            <span><a class="link link--kukuri" href="thankyou.php" data-letters="THANKYOU" onmouseover="playclip();">THANKYOU</a></span>
            <span><a class="link link--kukuri" href="contact.php" data-letters="CONTACT" onmouseover="playclip();">CONTACT</a></span>
          </article> <!-- menu -->
          <!-- <article class="col-xs-8 col-sm-3 box_nav_top_r">
            <img src="image_web/logo_ict.png" alt="ictsu_logo">
          </article> -->
          <hr>
        </nav> <!-- nav -->
      </section>
        <article class="row">
          <article class="col-xs-12 info">
          <h3 class="heading">CREATOR</h3>
          <h2 class="name_thai"><?php echo $json_data["user_name"]; ?></h2>
          <p class="name_eng"><?php echo $json_data["user_name"]; ?></p>
          <article class="wrap_sec_user_pin cate"style="max-width:350px;">
                  <article class="wrap_user_pinterest">
                    <span class="user_pinterest" style="text-transform: uppercase;"><?php echo $json_data["work_type"]; ?></span>
                  </article> <!-- wrap_user_footer -->
          </article>
          </article>
        </article>

        <div class="video-wrap js-video-wrap">
            <div class="video-inner">
                <video class="video-player js-video" preload="auto" muted>
                <source src="https://d8d913s460fub.cloudfront.net/videoserver/cat-test-video-320x240.mp4" type="video/mp4" />
                <p>Sorry, but your browser does not support this video format.</p>
            </video>
                <button class="action action--close js-close-video">
                <i class="fa fa-close"></i>
                <span class="action__label action__label--hidden">Close preview</span>
            </button>
            </div>
        </div>
        <div class='icon-scroll'><div/>
    </section>


    <article class="row right_content">
    <article class="col-xs-12 video_showreel" style="padding-right: 80px; margin-top: -400px;">
      <span>VIDEO SHOWREEL</span><br>
      <div class="col-xs-11" style="position: absolute;">
          <div class="loader">
              <i class="fa fa-spinner fa-pulse"></i>
          </div>
          <button class="action action--hidden action--play js-play-video" style="margin-right: 100px; margin-top: 84px;">

  <svg width="48px" height="48px" viewBox="0 0 48 48" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
      <!-- Generator: Sketch 45.1 (43504) - http://www.bohemiancoding.com/sketch -->
      <desc>Created with Sketch.</desc>
      <defs></defs>
      <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
          <g id="Project-Detail-Copy" transform="translate(-1193.000000, -237.000000)">
              <g id="Group-26" transform="translate(1044.722029, 153.000000)">
                  <g id="Group-27" transform="translate(148.000000, 84.000000)">
                      <rect id="Rectangle-20" fill="#FFFFFF" x="0.901124941" y="0.20146813" width="47.3385079" height="47.255926"></rect>
                      <polygon id="Triangle" stroke="#193852" stroke-width="2" points="32.7470303 24.2590305 17.2544277 31.9918183 17.2544277 16.5262426"></polygon>
                  </g>
              </g>
          </g>
      </g>
  </svg>
      </button>
      </div>
      <script src="js/video.js"></script>
      <img src="image_web/videoshowreel_thumb.jpg" style="padding-top:10px;"><br><br>
      <span>STUDENT ID</span>
      <h3 style="line-height: 2px;"><?php echo $json_data["student_id"]; ?></h3>
    </article>
    </article>
      <!-- banner -->
      <section class="row">
        <article class="col-xs-12 wrap_banner">
          <img class="row" src="image_user/head_preview/<?php echo $json_data["user_img_head"]; ?>" alt="banner_work" style="width:100%;">
        </article>
      </section> <!-- banner -->
      <!-- concept -->
      <section class="row">
        <section class="col-xs-12 col-sm-offset-1 col-sm-10 col-md-offset-3 col-md-6 wrap_concept">
          <h3>CONCEPT</h3>
          <p>
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
                <img src="image_user/design_process/<?php echo $json_data["work_design_process_a"]; ?>" alt="" style="max-width: 100%;">
              </li>
              <li class="col-xs-5 col-sm-3 dp_img_user_b up_hig_dp">
                <img src="image_user/design_process/<?php echo $json_data["work_design_process_b"]; ?>" alt="" style="max-width: 100%;">
              </li>
              <li class="col-xs-5 col-sm-3 dp_img_user_b up_hig_dp">
                <img src="image_user/design_process/<?php echo $json_data["work_design_process_c"]; ?>" alt="" style="max-width: 100%;">
              </li>
              <li class="col-xs-5 col-sm-3 dp_img_user_b up_hig_dp">
                <img src="image_user/design_process/<?php echo $json_data["work_design_process_d"]; ?>" alt="" style="max-width: 100%;">
              </li>
            </ul>
          </article>
        </article>
      </section><!-- design process -->
      <!-- function -->
      <section class="row">
        <section class="col-xs-12 col-sm-offset-1 col-sm-10 col-md-12 wrap_function">
          <h3 class="col-md-offset-2 col-md-12">FUNCTION</h3>
          <div class="row col-md-12" style="margin-left:auto; margin-right:auto;">
            <div class="col-sm-10"><img src="image_user/function/<?php echo $json_data["work_fn_img_c"]; ?>" alt="" style="max-width:100%;">
              <article class="func_discription">
              <h4><?php echo $json_data["work_fn_name_a"]; ?></h4>
                <p><?php echo $json_data["work_fn_disc_a"]; ?></p>
              </article>
            </div>
            <div class="col-sm-5"><img src="image_user/function/<?php echo $json_data["work_fn_img_a"]; ?>" alt="" style="max-width:100%;">
              <article class="func_discription">
              <h4><?php echo $json_data["work_fn_name_b"]; ?></h4>
                <p><?php echo $json_data["work_fn_disc_b"]; ?></p>
              </article>
            </div>
            <div class="col-sm-5"><img src="image_user/function/<?php echo $json_data["work_fn_img_b"]; ?>" alt="" style="max-width:100%;">
              <article class="func_discription">
              <h4><?php echo $json_data["work_fn_name_c"]; ?></h4>
                <p><?php echo $json_data["work_fn_disc_c"]; ?></p>
              </article>
            </div>
          </div>
        </section>
      </section> <!-- function -->
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
            <p><?php echo $json_data["skill_name_a"]; ?></p>
          </article> <!--skill 1-->
          <article class="col-xs-3">
            <article class="c100 p<?php echo $json_data["skill_perc_b"]; ?> white">
                <span><?php echo $json_data["skill_perc_b"]; ?>%</span>
                <article class="slice">
                    <article class="bar"></article>
                    <article class="fill"></article>
                </article>
            </article>
            <p><?php echo $json_data["skill_name_b"]; ?></p>
          </article> <!--skill 2-->
          <article class="col-xs-3">
            <article class="c100 p<?php echo $json_data["skill_perc_c"]; ?> green_r">
                <span><?php echo $json_data["skill_perc_c"]; ?>%</span>
                <article class="slice">
                    <article class="bar"></article>
                    <article class="fill"></article>
                </article>
            </article>
            <p><?php echo $json_data["skill_name_c"]; ?></p>
          </article> <!--skill 3-->
          <article class="col-xs-3">
            <article class="c100 p<?php echo $json_data["skill_perc_d"]; ?> red_r">
                <span><?php echo $json_data["skill_perc_d"]; ?>%</span>
                <article class="slice">
                    <article class="bar"></article>
                    <article class="fill"></article>
                </article>
            </article>
            <p><?php echo $json_data["skill_name_d"]; ?></p>
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
              <p style="font-size:0.8em; margin-top:-15px; text-transform: uppercase;">HOME > CATEGORY > <?php echo $json_data["work_type"]; ?><p>
            </article> <!-- wrap_footer_r -->
            <article class="col-sm-2 col-md-3 foot_email tablet">
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
        $('.name_thai').addClass('animated flip');
        $('.name_eng').addClass('animated fadeInLeft');
        $('.cate').addClass('animated flipInX');

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

  </script>
</html>
