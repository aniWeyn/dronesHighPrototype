

<?php
require('./header.php');
?>

 
    <div class="grid-container">
      <div class="grid-x grid-padding-x">
        <div class="large-24 cell">
          <div id="header-search" class="page_title_container">
             
          </div>
          <div class="selector">
            <button class="home selector all selected" data-target="all">All</button>
            <button class="home selector" data-target="article">Articles</button>
            <button class="home selector" data-target="tutorial">Tutorials</button>
            <button class="home selector" data-target="job_listing">Job Offers</button>
            <button class="home selector" data-target="users">Users</button>
          </div>
          <div class="large-20 large-offset-2 medium-24 cell"><h4 class="search_results_container">Results for <span class="search_results">""</span>:</h4>
            <div class="spacer"></div></div>
        </div>

        <div class="large-24 cell">

          <div class="grid-x grid-padding-x container article">

            <div class="large-20 large-offset-2 small-24 cell content">
               <h4 class="content tag">Article<span class="bookmark btn selector"><i class="fas fa-bookmark hidden targhet"></i> <i class="far fa-bookmark targhet"></i></span></h4>
            </div>

            <div class="large-6 large-offset-2 medium-8 small-24 cell">
              <div class="content image hor" style="background-image: url('img/stock/a.jpg');">
              </div>
            </div>
            <div class="large-14 medium-16 small-24 cell content">

                <h2 class="content title"><a href="./an_article.php">Drones predicted to give European economy a lift by 2019</a></h2>
                <p class="content info"> by <span class="content author"><a href="./a_user.php">Michele Piretti</a></span> | March 21, 2018 | 5 min read | 23 <span class="content like"> <i class="far fa-thumbs-up"></i></span> </p>
                <p class="content text">At a small size, quadcopters are cheaper and more durable than conventional helicopters due to their mechanical simplicity. Their smaller blades are also advantageous because they possess less kinetic energy, reducing their ability to cause damage. For small-scale quadcopters, this makes the vehicles safer for close interaction.</p>
            </div>
            <div class="large-20 large-offset-2 medium-24 cell spacer"><hr></div>
          </div>

          <div class="grid-x grid-padding-x container article no_img">

            <div class="large-20 large-offset-2 medium-24 small-24 cell content">
                <h4 class="content tag">Article <span class="bookmark btn selector"><i class="fas fa-bookmark hidden targhet"></i> <i class="far fa-bookmark targhet"></i></span></h4>
                <h2 class="content title"><a href="./an_article.php">The Guardian reported that major media outlets have started</a></h2>
                <p class="content info"> by <span class="content author"><a href="./a_user.php">George Hannigan</a></span> | March 21, 2018 | 5 min read | 23 <span class="content like"> <i class="far fa-thumbs-up"></i></span> </p>
                <p class="content text">The largest use of quadcopters in the USA has been in the field of aerial imagery. Quadcopter UAVs are suitable for this job because of their autonomous nature and huge cost savings. Drones have also been used for light-painting photography.</p>
    
            </div>
            <div class="large-20 large-offset-2 medium-24 cell spacer"><hr></div>
          </div>

          

          <div class="grid-x grid-padding-x container job_listing">
            
            <div class="large-20  large-offset-2 medium-24 small-24 cell content">
                <h4 class="content tag">Job Offers<span class="bookmark btn selector"><i class="fas fa-bookmark hidden targhet"></i> <i class="far fa-bookmark targhet"></i></span></h4>

                <div class="content image sqr" style="background-image: url('img/stock/ntnu.jpg');"></div>
                <h2 class="content title"><a href="a_job_list.php">Drone operator in the Baltic sea </a></h2>
                <p class="content info"> Application deadline: <span class="content deadline">March 21, 2018</span> | Fulltime | Oslo, Norway | <span class="content author"><a href="./a_user.php">NTNU</a></span> </p>
    
            </div>
            <div class="large-20 large-offset-2 medium-24 cell spacer"><hr></div>
          </div>


          <div class="grid-x grid-padding-x container tutorial">
              <div class="large-20 large-offset-2 small-24 cell content">
               <h4 class="content tag">Tutorial<span class="bookmark btn selector"><i class="fas fa-bookmark hidden targhet"></i> <i class="far fa-bookmark targhet"></i></span></h4>
            </div>
            <div class="large-6 large-offset-2 medium-8 small-24 cell">
              <div class="content image hor" style="background-image: url('img/stock/b.jpg');">
              </div>
            </div>
            <div class="large-14 medium-16 small-24 cell content">

                <h2 class="content title"><a href="./a_tutorial.php">Quadcopter unmanned aerial vehicles are used for surveillance</a></h2>
                <p class="content info"> by <span class="content author"><a href="./a_user.php">Mitchell Hannigan</a></span> | March 21, 2018 | Difficulty: <span class="content diff"> <i class="fas fa-wrench"></i><i class="fas fa-wrench"></i><i class="fas fa-wrench invert"></i></span> | 23 <span class="content like"> <i class="far fa-thumbs-up"></i></span> </p>
                <p class="content text">During the Battle of Mosul it was reported that commercially available quadcopters and drones were being used by Islamic State of Iraq and the Levant (ISIL) as surveillance and weapons delivery platforms using improvised cradles to drop grenades and other explosives.[49] The ISIL drone facility became a target of Royal Air Force strike aircraft.</p>
                
            </div>
            <div class="large-22 medium-24 cell spacer"><hr></div>
          </div>

          <div class="grid-x grid-padding-x container users">
            
            <div class="large-20  large-offset-2 medium-24 small-24 cell content">
                <h4 class="content tag">User</h4>

                <div class="content image sqr" style="background-image: url('img/stock/jone.jpg');"></div>
                <h2 class="content title"><a href="./an_article.php./a_user.php">Jone Summer</a></h2>
                <p class="content info"> Writings published: <span class="content deadline">12</span> | Drone Tecnitian | NTNU | Oslo, Norway</p>
    
            </div>
            <div class="large-20 large-offset-2 medium-24 cell spacer"><hr></div>
          </div>



        </div>
      </div>



    </div>



<?php
require('./footer.php');
?>

