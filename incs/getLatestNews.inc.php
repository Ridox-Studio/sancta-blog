<?php


    function getLatestNews($conn){
        $sql = "SELECT * FROM news;";
        $result = mysqli_query($conn, $sql);
        $noRow =  mysqli_num_rows($result);

        $topnews = 0.90 * $noRow;
        $topnews = $noRow - $topnews;
        $selectfrom = random_int($topnews, $noRow);
         $sql = "SELECT * FROM news ORDER BY NewsNo DESC LIMIT 4";
        // $result = mysqli_query($conn, $lastNumber);

        // $sql = "SELECT * FROM news WHERE NewsNo BETWEEN ".$selectfrom." AND ".$noRow.";";
        $result = mysqli_query($conn, $sql);
        $noRow =  mysqli_num_rows($result);


        if ($noRow >= 1) {
            # code...
            // return mysqli_fetch_assoc($result);
            $n = random_int(0, $noRow);
            $o = 0;
            while ($row = mysqli_fetch_assoc($result)) {
                # code...
                if ($o  === $n) {
                    # code...
                    return $row;
                }
                $o++;
            }
        }
        
    }


// This php file is to get the newest news feed ....................................