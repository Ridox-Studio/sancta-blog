<?php


  include_once "header.php";  

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
                
                    echo "<div class='table_column'><div class='column_name'>".$row['filesName']."</div><div class='column_falculty'>".$row['Falculty']."</div><div class='column_falculty'><a href='download/".$row['FileId']."' target='_blank'>Download</a></div></div>";
                

              }
              
            }
            else {
                echo '<div class="">No Pdf Here</div>';
            }

            
          

?>