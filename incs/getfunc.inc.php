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


    