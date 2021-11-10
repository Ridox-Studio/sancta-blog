<?php
  include_once "header.php";  
?>
    <section class="hero-section swiper-container">
      <!-- <div class="swiper-wrapper"> -->
        <div class="topic-header">
          <p>headlines</p>
        </div>
        <div class="hot-topic article-topic swiper-slide">
        
          <?php 
             $topNews = getLatestNews($conn);

             $urlName;
            $urlbreak = explode(' ', $topNews['Title']);
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

             if ($topNews !== null) {
              $urlName = reg_change($urlName, '"' ,"'" );
              
               $date = date("d F Y", strtotime($topNews['dateup']));
               # code...
               echo '<article class="hot-article">
               <div class="img-wrapper">
               <div class="overlay-image-1"></div>
              <img src="uploads/image/'.$topNews['Img1'].'" alt="'.$topNews['Title'].'" srcset="">
              <div class="article">
              <a href="news/00'.$topNews['NewsNo'].'/'.$urlName.'">'.$topNews['Title'].'</a>
              <p href="news/'.$urlName.'/'.$topNews['NewsId'].'">'.$date.'</p>
              </div>
            </article>';
             }
             else {
               echo '<article class="hot-article">
               <div class="img-wrapper" >
               <div class="overlay-image-1"></div>
               <img src="img/3.png" alt="SANCTA`s BLOG" srcset="">
              <div class="article">
              <a href="">WELCOME TO SANCTA BLOG</a>
              <p href="">...
              </p>
              </div>
            </article>';
             }

             
            ?>




        <!-- <article class="hot-article">
              <img src="" alt="" srcset="">
              <div class="article">
                2win Describe how he began
              </div>
            </article> -->
        </div>
      <!-- </div> -->
    </section>

    <section class="categories-section" style="position: relative;">
      <div class="topic-header">
        <!-- <p>categories</p> -->
      </div>
      <div class="categories">
        <div class="categories-items-wrapper">
          <a href="">
            <div class="categories-item">
              <p>admission <br> news</p>
            </div>
          </a>
          <a href="">
            <div class="categories-item">
              <p>courses/ <br> departments</p>
            </div>
          </a>
          <a href="">
            <div class="categories-item">
              <p>past <br> questions</p>
            </div>
          </a>
        </div>
      </div>
    </section>
    <section class="news-section">
    <div class="topic-header">
        <p>recent posts</p>
      </div>
      <div class="section-title">
      </div>
      <?php
        include_once "recent-posts.php";  
        include_once "footer.php";  
      ?>
  </main>
    <!-- <script>
      var ctx = document.getElementById('myChart').getContext('2d');
      var myChart = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: ['Red', 'Blue', 'Yellow', 'Green', 'Purple', 'Orange'],
            datasets: [{
                label: '# of Votes',
                data: [12, 19, 3, 5, 2, 3],
                backgroundColor: [
                    'rgba(255, 99, 132, 0.2)',
                    'rgba(54, 162, 235, 0.2)',
                    'rgba(255, 206, 86, 0.2)',
                    'rgba(75, 192, 192, 0.2)',
                    'rgba(153, 102, 255, 0.2)',
                    'rgba(255, 159, 64, 0.2)'
                ],
                borderColor: [
                    'rgba(255, 99, 132, 1)',
                    'rgba(54, 162, 235, 1)',
                    'rgba(255, 206, 86, 1)',
                    'rgba(75, 192, 192, 1)',
                    'rgba(153, 102, 255, 1)',
                    'rgba(255, 159, 64, 1)'
                ],
                borderWidth: 1
            }]
        },
        options: {
            scales: {
                y: {
                    beginAtZero: true
                }
            }
        }
      });
      </script> -->
      
</body>
<!-- <script>
  var newsboards = document.querySelectorAll('.news-boards');
  let lftbtn = document.querySelector('.leftbtn-news');
  let rthbtn = document.querySelector('.rightbtn-news');
  var position = 0;
  
  var noof = newsboards.length * 350;
  lftbtn.addEventListener('click', function () {
    moveTiles("left");
  });
  rthbtn.addEventListener('click', function () {
    moveTiles("right");
  });


  function moveTiles(direction) {
    let styles = "";
    switch (direction) {
      case "left":
        position -= 350;
        styles = `right:${position}px;`;

        break;
      case "right":
        position += 350;
        styles = `right:${position}px;`;

        break;
      default:
        console.log("Invalid direction");
        break;

    }



    if (position < noof + 350 && position >=  -350) {
      if (position < noof) {
          newsboards.forEach(element => {
          element.style = styles;
        });
        
      }
      

    }


  }
</script>
<script>
    
    var position = 0;
window.addEventListener("scroll", function(){
//     let trigger = document.querySelector(".top-five-homes");
  let classs = document.querySelectorAll("div");
    let header = document.querySelector(".header");
classs.forEach(element => {
    let boxtop = element.getBoundingClientRect().top - 200;
    let boxbtm = element.getBoundingClientRect().bottom - 200;
    if (boxtop <= window.scrollY) {
      element.classList.add('animate__animated', "animate__fadeIn");
       
       
    }
    
    else if (boxtop > window.scrollY) {
      element.classList.remove('animate__animated', "animate__fadeIn");
       
       
    }
});
    

    

    

   
});
  </script> -->
<script src="scripts/main.js"></script>
<script src="js/swiper-bundle.min.js"></script>
</html>