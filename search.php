<?php


  include_once "header.php"; 
  ?> 

   <?php
  if (isset($_GET['cat'])) {
      # code...
      $sql = "SELECT * FROM pdfs WHERE Falculty = '".$_GET['cat']."';";
  }
  else {
      $sql = "SELECT * FROM pdfs ;";

  }

            $result = mysqli_query($conn, $sql);?>

            <div class="pdf-table">

            <?php

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
?>
</div>
            
  <?php       
 include_once "footer.php";
?>