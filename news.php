<link rel="stylesheet" href="../../css/master.css">
  <link rel="stylesheet" href="../../css/smscreen.css">
  <link rel="stylesheet" href="../../css/lgscreen.css">
  <link rel="apple-touch-icon" href="../../favicon.png">
  <link rel='stylesheet' href="../../css/animate/animate.min.css">
<?php
if (!isset($_GET['newsId'])) {
    # code...
    header("Location:../index.php");
}
  include_once "header.php";  
 

  $newsId = $_GET['newsId'];
  if (!Newsexist($conn, $newsId, $urlName)) {
      # code...
         header("Location:../index.php");

  }
  else{
      $row = Newsexist($conn, $newsId, $urlName);
  }

  echo $row['Title'];
  $cats  = explode(' ', $row['Cat']);
  
  $cat = $cats[random_int(0, count($cats) - 1)];
//   
    //  getSimilarNews($conn, $cat);
?>

