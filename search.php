<?php
  include_once "header.php"; 
?> 

<div  class="search_result_type">
    <button  id="btn" class="pdf_button">pdf</button>
      <button id="hi" class="news_button">news</button>
    </div>

<div class="search_query_load">


   <?php
  if (isset($_GET['sw'])) {
      # code...
      // echo $_GET['sw'];
      $searchword = $_GET['sw'];
      $sql = "SELECT * FROM pdfs WHERE Falculty LIKE '%$searchword%' OR Descriptions LIKE '%$searchword%' OR filesName LIKE '%$searchword%'  OR Tags LIKE '%$searchword%';";
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
                echo '<script>window.addEventListener("load", function(){
                  document.querySelector(".news_button").click();
                });</script>';

            }
?>
</div>
</div>
<?php       
 include_once "footer.php";
?>
<script src="search.js"></script>
<script>

        

        $(document).ready(function() {
            var searchcount = 10;
            let keyword = "<?php echo $searchword; ?>";
            $(".pdf_button").click(function() {
                // searchcount = searchcount + 7;
                let searchpdf = "pdf";
                // searchpdf = "pdf";
                $(".search_query_load").load("incs/search.inc.php", {
                    searchpdf: searchpdf,
                    keyword: keyword
                });
            });
            $(".news_button").click(function() {
                let searchnews = "news";
                // searchcount = searchcount + 7;
                $(".search_query_load").load("incs/search.inc.php", {
                    searchnews: searchnews,
                    keyword: keyword
                });
            });
        });
    </script>
            
 