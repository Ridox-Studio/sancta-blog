<?php

    function getSimilarNews($conn, $cat){
            if ($cat == "All") {
                # code...
               $sql = "SELECT * FROM news LIMIT 7;";

            }
            else {
               $sql = "SELECT * FROM news WHERE Cat = '".$cat."' LIMIT 7;";


            }
            $result = mysqli_query($conn, $sql);

            if (mysqli_num_rows($result) > 4) {
              # code...
              while ($row = $resultData = mysqli_fetch_assoc($result)){
                

                
                echo '<div class="news-boards">
            <div class="news-image">
              <img src="uploads/image/'.$row['Img1'].'" alt="">

            </div>
            <div class="news-headline">
              '.$row['Title'].'
            </div>
          </div>';

              }
              
            }
            else {
                getSimilarNews($conn, "All");

            }

    }