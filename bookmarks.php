

<?php
require('./header.php');

?>

 
    <div class="grid-container">
      <div class="grid-x grid-padding-x">
        <div class="large-24 cell">
          <div class="selector">
            <button class="home selector all selected" data-target="all">All bookmarks</button>
            <button class="home selector" data-target="article">Articles</button>
            <button class="home selector" data-target="tutorial">Tutorials</button>
            <button class="home selector" data-target="job_listing">Job Offers</button>
          </div>
        </div>

        <div class="large-24 cell">
    
          <div class="grid-x grid-padding-x container tutorial">


            <div class="large-20 large-offset-2 small-24 cell content">
               <h4 class="content tag">Tutorial<button class="book right"><i class="fas fa-times"></i></button> </h4>
            </div>
            <div class="large-6 large-offset-2 medium-8 small-24 cell">
              <div class="content image hor" style="background-image: url('img/stock/a.jpg');">
              </div>
            </div>
            <div class="large-14 medium-16 small-24 cell content">

                <h2 class="content title"><a href="./a_tutorial.php">How to add camera to your drone</a></h2>
                <p class="content info"> by <span class="content author"><a href="./a_user.php">Marta Reinold</a></span> | March 21, 2018 | Difficulty: <i class="fas fa-wrench" ></i> <i class="fas fa-wrench" ></i> <i class="fas fa-wrench invert" ></i> | 23 <span class="content like"> <i class="far fa-thumbs-up"></i></span> </p>
                <p class="content text">The term drone, more widely used by the public, was coined in reference to the early remotely-flown target aircraft used for practice firing of a battleship's guns, and the term was first used with the 1920s Fairey Queen and 1930's de Havilland Queen Bee target aircraft. These two were followed in service by the similarly-named Airspeed Queen Wasp and Miles Queen Martinet, before ultimate replacement by the GAF Jindivik.</p>
                
            </div>
            <div class="large-22 medium-24 cell spacer"><hr></div>
          </div>


          <div class="grid-x grid-padding-x container article">
            <div class="large-20 large-offset-2 small-24 cell content">
               <h4 class="content tag">Tutorial<button class="book right"><i class="fas fa-times"></i></button> </h4>
            </div>
            <div class="large-6 large-offset-2 medium-8 small-24 cell">
              <div class="content image hor" style="background-image: url('img/stock/c.jpg');">
              </div>
            </div>
            <div class="large-14 medium-16 small-24 cell content">
                
                <h2 class="content title"><a href="./an_article.php">Unmanned aerial vehicle lifting up economy</a></h2>
                <p class="content info"> by <span class="content author"><a href="./a_user.php">Marta Reinold</a></span> | March 21, 2018 | 5 min read | 23 <span class="content like"> <i class="far fa-thumbs-up"></i></span> </p>
                <p class="content text">The term drone, more widely used by the public, was coined in reference to the early remotely-flown target aircraft used for practice firing of a battleship's guns, and the term was first used with the 1920s Fairey Queen and 1930's de Havilland Queen Bee target aircraft. These two were followed in service by the similarly-named Airspeed Queen Wasp and Miles Queen Martinet, before ultimate replacement by the GAF Jindivik.  </p>
            </div>
            <div class="large-20 large-offset-2 medium-24 cell spacer"><hr></div>
          </div>

          <div class="grid-x grid-padding-x container job_listing">          
            <div class="large-20  large-offset-2 medium-24 small-24 cell content">
                <h4 class="content tag">Job Offers <button class="book right"><i class="fas fa-times"></i></button></h4>

                <div class="content image sqr" style="background-image: url('img/stock/ntnu.jpg');"></div>
                <h2 class="content title"><a href="./a_job_list.php">Drone operator in the Baltic sea </a></h2>
                <p class="content info"> Application deadline: <span class="content deadline">March 21, 2018</span> | Fulltime | Oslo, Norway | <span class="content author"><a href="./a_user.php">NTNU</a></span> </p>
    
            </div>
            <div class="large-20 large-offset-2 medium-24 cell spacer"><hr></div>
          </div>

          <div class="grid-x grid-padding-x container article no_img">

            <div class="large-20 large-offset-2 medium-24 small-24 cell content">
                <h4 class="content tag">Article <button class="book right"><i class="fas fa-times"></i></button></h4>
                <h2 class="content title"><a href="./an_article.php">Unmanned aerial vehicle lifting up economy</a></h2>
                <p class="content info"> by <span class="content author"><a href="./a_user.php">Marta Reinold</a></span> | March 21, 2018 | 5 min read | 23 <span class="content like"> <i class="far fa-thumbs-up"></i></span> </p>
                <p class="content text">The term drone, more widely used by the public, was coined in reference to the early remotely-flown target aircraft used for practice firing of a battleship's guns, and the term was first used with the 1920s Fairey Queen and 1930's de Havilland Queen Bee target aircraft. These two were followed in service by the similarly-named Airspeed Queen Wasp and Miles Queen Martinet, before ultimate replacement by the GAF Jindivik. </p>
    
            </div>
            <div class="large-20 large-offset-2 medium-24 cell spacer"><hr></div>
          </div>





        </div>
      </div>



    </div>



<?php
require('./footer.php');
?>

