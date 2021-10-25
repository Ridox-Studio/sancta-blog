<?php
  require "incs/getfunc.inc.php";
  plusOne($conn);
  
  
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=7">
  <meta name="description" content="">
  <meta name="keywords" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title>
    MEME_WORLD--<?php
          if (isset($_GET['fileId'])) {
            # code...
            if (!Pdfexist($conn, $_GET['fileId'])) {
        # code...
                // echo $_GET['fileId'];
                header("Location:../index.php");
            }
            else {
                $row = Pdfexist($conn, $_GET['fileId']);
            } 
            echo "Thanks for Downloading ".$row['filesName']."";
          }
          else if (isset($_GET['cat'])) {
      # code...
                  echo "Books from".$_GET['cat']." Falculty";

      }
      else if (isset($_GET['newsId'])) {
        $urlName = "";
        $urlbreak = explode('-', $_GET['title']);
        for ($i=0; $i < count($urlbreak); $i++) { 
            if ($i > 0) {
                # code...
            $urlName = $urlName." ".$urlbreak[$i];

            }
            else {
            $urlName = $urlbreak[$i];

            }
            # code...
        }

        $newsId = $_GET['newsId'];
          if (!Newsexist($conn, $newsId, $urlName)) {
              # code...
                header("Location:index.php");

          }
          else{
              $row = Newsexist($conn, $newsId, $urlName);
                  echo "".$row['Title']." ";

          }
      # code...

      }
   ?></title>
  <link rel="stylesheet" href="css/master.css">
  <link rel="stylesheet" href="css/smscreen.css">
  <link rel="stylesheet" href="css/lgscreen.css">
  <link rel="stylesheet" href="css/swiper-bundle.min.css">
  <link rel="apple-touch-icon" href="favicon.png">
  <link rel='stylesheet' href="css/animate/animate.min.css">


  <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
</head>

<body onloadstart="console.log('hi')">
  <div class="whatsapp-group-link">
    <a href="#">
      <p>whatsapp group link: +234 7066 599 5937</p>
    </a>
  </div>
  <header class="">
    <div class="header-logo">
      <div class="logo">
      <svg xmlns="http://www.w3.org/2000/svg" width="126" height="42" viewBox="0 0 126 42">
  <defs>
    <style>
      .cls-1, .cls-2 {
        fill: #fff;
      }

      .cls-1 {
        font-size: 18px;
        font-family: SegoeUI-Bold, Segoe UI;
        font-weight: 700;
      }

      .cls-2 {
        font-size: 16px;
        font-family: SegoeUI-Italic, Segoe UI;
        font-style: italic;
        font-weight:100;
      }
    </style>
  </defs>
  <g id="Group_7" data-name="Group 7" transform="translate(-19 -30)">
    <text id="SANCTA_s" data-name="SANCTA&apos;s" class="cls-1" transform="translate(19 30)"><tspan x="0" y="24">SANCTA&apos;s</tspan></text>
    <text id="blog" class="cls-2" transform="translate(84 45)"><tspan x="0" y="22">blog</tspan></text>
  </g>
</svg>
      </div>
      
    </div>
    
    <nav>
      <div class="menu-icon">
      
    </div>
      <ul>
        <li><a href="music.php">MUSIC</a></li>
        <li><a href="pdf.php">VIDEO</a></li>
        <li><a href="contact.php">CONTACTS</a></li>
      </ul>
    </nav>
  </header>
  <main class="">