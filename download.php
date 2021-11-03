<?php
    if (!isset($_GET['fileId'])) {
        header("Location:../index.php");
        exit();
        # code...
    }
  include_once "header.php"; 
  
?>

<link rel="stylesheet" href="../css/master.css">
  <link rel="stylesheet" href="../css/smscreen.css">
  <link rel="stylesheet" href="../css/lgscreen.css">
  <link rel="apple-touch-icon" href="../favicon.png">
  <link rel='stylesheet' href="../css/animate/animate.min.css">


  <?php

  echo "<a class='download-btn' href='../uploads/pdfs/".$row['FileDirec']."' download>DOWNLOAD WILL START IN 5SEC IF IT HASNT CLICK HERE</a>";

  ?>
  

  <script>
      window.addEventListener("load", function(){
        setTimeout(() => {
        document.querySelector(".download-btn").click();
          
        }, 3400);
      });
  </script>

  <?php
    include_once "footer.php";
  ?>