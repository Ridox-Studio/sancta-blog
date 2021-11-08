


<?php
    if (!isset($_GET['newsId']) && !isset($_GET['title'])) {
        # code...
        header("Location:../index.php");
    }
      include_once "header.php";  
    

      $newsId = $_GET['newsId'];
                  $urlName = reg_change($urlName, "'", '"');
      if (!Newsexist($conn, $newsId, $urlName)) {
          # code...
            header("Location:../index.php");
            // echo $urlName;

      }
      else{
                  
          $row = Newsexist($conn, $newsId, $urlName);
      }

      // echo $row['Title'];
      $cats  = explode(' ', $row['Cat']);
      
      
      $cat = $cats[random_int(0, count($cats) - 1)];
    //   
        //  getSimilarNews($conn, $cat);

        
        
                    

                    
          

        
?>
<div style="news-article-image">
<img src="" alt="picture"></div>
<section class="news-article">
<?php 
      $date = date("d F Y", strtotime($row['dateup']));

        echo ' <div class="news-article-image">
        <img src="../../img/'.$row['Img1'].'" alt="">
    </div>
    
    <div class="news-article-description">
      <div>
      <div class="news-article-description-title">
            <h1>'.$row['Title'].'</h1>
            <p >'.$date.'</p>
          </div>
          <p class="news-article-description-paragraph">'.$row['Description'].'.</p>
        </div>
    </div>';


?>

  <!-- <div class="news-article-image">
      <img src="../../img/3.png" alt="">
  </div>
  <div class="news-article-description">
    <div>
    <div class="news-article-description-title">
          <h1>Silicon valley sacks workers</h1>
          <p>10 March 2021</p>
        </div>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores animi at ipsa laudantium, aliquam minus voluptates nemo reiciendis, dolor voluptatibus explicabo, praesentium quia magni? Ducimus voluptate suscipit consequatur nam magni mollitia sapiente. Ratione asperiores ipsam odit commodi mollitia quis sunt, nisi id autem repellendus. Velit cumque dolores reiciendis, quibusdam sint molestias neque molestiae, ipsum est blanditiis quisquam, temporibus nostrum tenetur.</p>
      </div>
  </div> -->
</section>
<!-- <section class="news-recent-posts">
      <div class="news-recent-posts-wrapper">
        <div class="news-recent-card">
          <img src="" alt="">
          <div class="news-recent-card-title">
            <a href="">
              <p></p>
            </a>
            <p></p>
          </div>
        </div>
      </div>
</section> -->

<?php  
  include_once "recent-posts.php";
  include_once "footer.php";
?>