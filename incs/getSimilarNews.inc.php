<?php

    function getSimilarNews($conn, $cat){
            if ($cat == "All") {
                # code...
               $sql = "SELECT * FROM news LIMIT 7;";

            }
            else {
               $sql = "SELECT * FROM news WHERE Cat LIKE '%$cat%' LIMIT 7;";


            }
            $result = mysqli_query($conn, $sql);

            if (mysqli_num_rows($result) > 2) {
              # code...
              return mysqli_fetch_assoc($result);
              
              
            }
            else {
                getSimilarNews($conn, "All");

            }

    }