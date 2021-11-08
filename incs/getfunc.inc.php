<?php
    // for connection in connections
    require "dbh.inc.php";
    // to get latest version of Newsletter for hero section 
    include "getLatestNews.inc.php";
    // to get top Songs
    require "getTopSong.inc.php";
    // to get news to be read about the latest
    require "readnews.inc.php";
    // To get similar news
    require "getSimilarNews.inc.php";
    // to get pdf <details></details>
    require "pdf.inc.php";
    // for regex pattern change
    require "changepat.inc.php";
    // for proper url writing
    require "redirect.inc.php";


    function plusOne($conn){
        $countsql = "SELECT pageload FROM admin;";
      // $sql = "SELECT * FROM news LIMIT 19;";
      $resultcount = mysqli_query($conn, $countsql);
      // $resultData = mysqli_fetch_assoc($resultcount);
      $resultData = mysqli_fetch_assoc($resultcount);
      
        
          # code...;
          $plusone = $resultData['pageload'] + 1;
          echo $resultData['pageload'];
    
          $sql = "UPDATE admin SET pageload = ".$plusone.";";
          $result = mysqli_query($conn, $sql);
          echo $resultData['pageload'];

          // exit();
        
      
    }