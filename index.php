<html lang="en">
<head>
  <title>Welcome</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
</head>
<body>
  <?php
session_start();
echo '
<nav class="navbar navbar-expand-md bg-primary navbar-dark">
  <!-- Brand -->
  <a class="navbar-brand" href="#">Welcome</a>

  <!-- Toggler/collapsibe Button -->
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>

  <!-- Navbar links -->
  <div class="collapse navbar-collapse" id="collapsibleNavbar">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="book.php">Book Hotel</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="data.php">About Goa</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="rss.php">Latest From Goa</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="res.php">Your Reservations</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="forum.php">Forum</a>
      </li>
    </ul>
    <ul class="navbar-nav ml-auto">
    <li class="nav-item">
      <a class="nav-link" href="index.php">'.$_SESSION['name'].'</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="signout.php">SignOut</a>
    </li>
  </ul>
  </div>
</nav>
<br>
<div class="card">
  <h5 class="card-header text-center">Book A Hotel Room</h5>
  <div class="card-body">
    <p class="card-text">Choose from our huge catalog of hotels to have a wonderful experience in Goa.</p>
    <a href="#" class="btn btn-primary">Book</a>
  </div>
</div>

<div class="card">
  <h5 class="card-header text-center">Learn About Goa</h5>
  <div class="card-body">
    <p class="card-text">Learn More about Goa to properly plan your stay.</p>
    <a href="#" class="btn btn-primary">Learn More</a>
  </div>
</div>
<div class="card">
  <h5 class="card-header text-center">Latest From Goa</h5>
  <div class="card-body">
    <p class="card-text">Get the latest news from Goa.</p>
    <a href="rss.php" class="btn btn-primary">News</a>
  </div>
</div>
<div class="card">
  <h5 class="card-header text-center">Your Reservations</h5>
  <div class="card-body">
    <p class="card-text">Check Out All your Reservations</p>
    <a href="res.php" class="btn btn-primary">Reservations</a>
  </div>
</div>
<div class="card">
  <h5 class="card-header text-center">Forum</h5>
  <div class="card-body">
    <p class="card-text">Chat with community</p>
    <a href="forum.php" class="btn btn-primary">Forum</a>
  </div>
</div>
'
?>
</body>
</html>