<?php

require_once __DIR__."/app/autoload.php";

use Ultraline\Math;

$use_c = new Math();

$ans = $use_c->sum_m(4, 12);

echo $ans;

 ?>
 <!DOCTYPE html>
 <html>

 <head>
     <meta charset="UTF-8">
     <title>Mouse cursor motion blur with TweenMax #html5 #motion #blur #motionblur #css3 #tweenmax @greensock</title>
     <link href='https://fonts.googleapis.com/css?family=Lato:100,300,400,700,400italic,700italic,900&subset=cyrillic-ext,latin,latin-ext' rel='stylesheet' type='text/css'>


     <style>

     html {
       font-family: 'Lato', sans-serif;
       min-height: 100%;
       height: 100%;
       background: #000;
       overflow: hidden;
       cursor: none;
     }
     html body {
       min-height: 100%;
       height: 100%;
       cursor: none;
       margin: 0;
       padding: 0;
       background: #4a4a4a;
       /* Old browsers */
       background: -moz-radial-gradient(center, ellipse cover, #4a4a4a 0%, #2a2a2a 100%);
       /* FF3.6+ */
       background: -webkit-gradient(radial, center center, 0px, center center, 100%, color-stop(0%, #4a4a4a), color-stop(100%, #2a2a2a));
       /* Chrome,Safari4+ */
       background: -webkit-radial-gradient(center, ellipse cover, #4a4a4a 0%, #2a2a2a 100%);
       /* Chrome10+,Safari5.1+ */
       background: -o-radial-gradient(center, ellipse cover, #4a4a4a 0%, #2a2a2a 100%);
       /* Opera 12+ */
       background: -ms-radial-gradient(center, ellipse cover, #4a4a4a 0%, #2a2a2a 100%);
       /* IE10+ */
       background: radial-gradient(ellipse at center, #4a4a4a 0%, #2a2a2a 100%);
       /* W3C */
     }
     html body #copy {
       position: absolute;
       bottom: 0;
       height: 40px;
       width: 100%;
       text-align: center;
       text-transform: uppercase;
       line-height: 14px;
       font-size: 10px;
       font-weight: 400;
       z-index: 999;
     }
     html body #copy a {
       color: #898989;
       text-decoration: none;
       transition: all 0.3s ease-in-out 0s;
       cursor: none;
     }
     html body #copy a b {
       font-weight: 700;
     }
     html body #copy a:hover {
       color: #fff;
     }
     html body .box {
       position: absolute;
       width: 25px;
       height: 25px;
       top: 50%;
       left: 50%;
       margin: -50 0 0 -50px;
       background: rgba(255, 255, 255, 0.2);
       border-radius: 50px;
       -webkit-backface-visibility: hidden;
       opacity: 0;
       cursor: none;
     }
     html body .box.arrow {
       background: url('http://lmgtfy.com/assets/mouse_arrow_windows_aero-b118000dc97d4558d6db021793acc613.png') no-repeat 0 0 transparent;
       border-radius: 0;
     }

     </style>


 </head>

 <body>
  <a href="http://google.com"> xcxcxcxcxcxc
<?php include 'src/cursor.php';?>
