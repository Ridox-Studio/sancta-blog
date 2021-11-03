<section class="news-section">
    <div class="topic-header">
        <p>recent posts</p>
      </div>
      <div class="section-title">
      </div>
      <div class="section-body">

        <div class="news-carousel">
          
         <?php
            
            if (!solve_url()) {
              # code...
              $sql = "SELECT * FROM news LIMIT 19;";
            }
            else {
              # code...
              $cats  = explode(' ', $row['Cat']);
      
      
              $cat = $cats[random_int(0, count($cats) - 1)];
              $sql = "SELECT * FROM news WHERE Description LIKE '%$cat%' OR Cat LIKE '%$cat%' LIMIT 7;";
              $sql = "SELECT * FROM news WHERE Description LIKE '%$cat%' OR Cat LIKE '%$cat%' OR NewsNo > 1  LIMIT 19;";

            }
            $result = mysqli_query($conn, $sql);

            if (mysqli_num_rows($result) > 0) {
              # code...
              while ($row = $resultData = mysqli_fetch_assoc($result)){

                $urlName = "";
                $urlbreak = explode(' ', $row['Title']);
                for ($i=0; $i < count($urlbreak); $i++) { 
                    if ($i > 0) {
                        # code...
                    $urlName = $urlName."-".$urlbreak[$i];
    
                    }
                    else {
                    $urlName = $urlbreak[$i];
    
                    }
                    # code...
                }
                $urlName = reg_change($urlName, '"' ,"'" );
                $date = date("d F Y", strtotime($row['dateup']));

                
                
                // to style each of the box
                echo '<div class="news-boards" moveto="'.$solve_url.'news/00'.$row['NewsNo'].'/'.$urlName.'" onclick="window.location.assign(this.moveto)">
            <div class="news-image">
            <img src="'.$solve_url.'uploads/image/'.$row['Img1'].'" alt="">
               <div class="overlay-image-2"></div>
              

            </div>
            <div class="news-headline">
            <p href="'.$solve_url.'news/00'.$row['NewsNo'].'/'.$urlName.'">'.$date.'</p>
            <a href="'.$solve_url.'news/00'.$row['NewsNo'].'/'.$urlName.'">
              '.$row['Title'].'</a>
            </div>
            
          </div>';

              }
              
            }

            
          ?>
        </div>
      </div>
    </section>