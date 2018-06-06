<!doctype html>
<html class="no-js" lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Drone Hub</title>
    <link href="https://fonts.googleapis.com/css?family=PT+Sans:400,400i,700,700i|PT+Serif:400,400i,700,700i" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
    <link rel="stylesheet" href="css/foundation.css">
    <link rel="stylesheet" href="css/app.css">
  </head>
  <body>



<header>
  <div class="nav-left">
    <a href="./"><img src="img/stock/logo.png" height="30" width="130"></a>
  </div>

  <div class="nav-center">
    <form class="nav-search" action="./search.php" >
      <input name="s" type="text" placeholder="Search">
    </form>
  </div>
    

  <div class="nav-right">
    <div class="logged">
      <button > <i class="fas fa-bell"></i></button>
      <button  onclick="window.location.href='./bookmarks.php'" > <i class="fas fa-bookmark"></i></button>
      <button id="dropdwnToggle"> <i class="fas fa-user"></i></button>
     
    </div>

    <div class="not logged">
      <button>Sign Up</button><span> | </span>
      <button class="logInner">Log In</button>
    </div>
  </div>

</header>

 <ul class="user dropdwn closed">
        <li><a href="./account.php?Account">Account</a></li>
        <li><a href="./account.php?Writings">Writings</a></li>
        <li><a href="./account.php?Settings">Settings</a></li>
        <li><a href="#" class="red outLogger">Log Out</a></li>
      </ul>

 <div class="grid-container">
      <div class="grid-x grid-padding-x">
        <div class="large-24 cell">

          <div class="nav-lower">
            <button class="" ><a href="./about.php">About</a></button>
            <button class="" ><a href="./rules.php">Community rules</a></button>
            <button class="" ><a href="./faq.php">FAQ</a></button>
          </div>

        </div>
      </div>
  </div>

