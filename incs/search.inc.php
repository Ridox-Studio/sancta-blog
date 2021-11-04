
 <?php
 require_once  "dbh.inc.php";
 require_once  "getfunc.inc.php";
  if (isset($_POST['searchpdf'])) {
      # code...
      $searchword = $_POST['keyword'];
      $sql = "SELECT * FROM pdfs WHERE Falculty LIKE '%$searchword%' OR Descriptions LIKE '%$searchword%' OR filesName LIKE '%$searchword%' OR levels LIKE '%$searchword%' OR Tags LIKE '%$searchword%';";
      $sql = "SELECT * FROM pdfs WHERE Falculty LIKE '%$searchword%' OR Descriptions LIKE '%$searchword%' OR filesName LIKE '%$searchword%'  OR Tags LIKE '%$searchword%';";
      $result = mysqli_query($conn, $sql);
      if (mysqli_num_rows($result) > 0) {
        # code...
        echo '<div class="pdf-table">';
        while ($row = $resultData = mysqli_fetch_assoc($result)){
          
          echo "
              <div class='table_column'>
              <div class='pdf-icon'>
                </div>
                <a href=''>
                <div class='table-column-details-wrapper'>
                    <div class='table-column-subject'>"
                    .$row['filesName']."
                    </div>
                    <div class='table-column-year'>"
                    .$row['Falculty']."
                    </div>
                    </div>
                    </a>
                  <div class='table-column-download'>
                  <a href='download/".$row['FileId']."' target='_blank'>
                      <img src='download.svg'>
                    </a>
                    </div>
                    
              </div>";
          

            }
        echo '</div>';
      }
      else {
        echo '<div class="">No Pdf for '.$searchword.'</div>';
      }
      
  }
  elseif (isset($_POST['searchnews'])) {
    # code...
    $searchword = $_POST['keyword'];
    $sql = "SELECT * FROM news WHERE Title LIKE '%$searchword%' OR Description LIKE '%$searchword%' OR Cat LIKE '%$searchword%' OR dateup LIKE '%$searchword%';";
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) > 0) {
      # code...
      echo '<section class="news-section">';
      echo '<div class="section-body">';
      echo '<div class="news-carousel">';
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
          
          echo '<div class="news-boards" moveto="news/00'.$row['NewsNo'].'/'.$urlName.'" onclick="window.location.assign(this.moveto)">
          <div class="news-image">
          <img src="uploads/image/'.$row['Img1'].'" alt="">
                  <div class="overlay-image-2"></div>
                  

                  </div>
                  <div class="news-headline">
                  <p href="news/00'.$row['NewsNo'].'/'.$urlName.'">'.$date.'</p>
                  <a href="news/00'.$row['NewsNo'].'/'.$urlName.'">
                  '.$row['Title'].'</a>
                </div>
                
              </div>';
              
              
            }
            echo '</div> </div> </section>';
            
          }
          else {
            
            echo '<div class="">No news search based on '.$searchword.'</div>';
          }
  }
  else {
      $sql = "SELECT * FROM pdfs ;";
      $result = mysqli_query($conn, $sql);
      if (mysqli_num_rows($result) > 0) {
        # code...
        while ($row = $resultData = mysqli_fetch_assoc($result)){
          
              echo "
              <div class='table_column'>
                <div class='pdf-icon'>
                </div>
                <a href=''>
                  <div class='table-column-details-wrapper'>
                    <div class='table-column-subject'>"
                      .$row['filesName']."
                    </div>
                    <div class='table-column-year'>"
                      .$row['Falculty']."
                    </div>
                    </div>
                </a>
                  <div class='table-column-download'>
                    <a href='download/".$row['FileId']."' target='_blank'>
                      <img src='download.svg'>
                    </a>
                  </div>
              </div>";
          

        }
        
      }
      else {
          echo '<div class="">No Pdf Here</div>';
      }

  }

            ?>
            
<?php

            
?>