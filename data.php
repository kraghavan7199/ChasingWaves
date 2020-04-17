<html lang="en">
<head>
  <title>Welcome</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/d3/4.1.1/d3.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.min.js"></script>
</head>



<body>
  <?php
session_start();
echo '
<nav class="navbar navbar-expand-md bg-primary navbar-dark">
  <!-- Brand -->
  <a class="navbar-brand" href="index.php">Welcome</a>

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

<div class="card text-center">
  <h5 class="card-header text-center">High Rated Hotels</h5>
<canvas id="bar-chart" width="200" height="200"></canvas>
  <div class="card-body">
    <p id="high" class="card-text"></p>
  </div>
  
  <div id="lol" class="card-footer text-muted">
  
 </div>
  </div>
  <div class="card text-center">
    <h5 class="card-header text-center">Prices Of Hotels</h5>
  <canvas id="price-chart" width="200" height="200"></canvas>
    <div class="card-body">
      <p id="high" class="card-text"></p>
    </div>  
    <div id="lol2" class="card-footer text-muted">
    
   </div>
    </div>
    <div class="card">
      <h5 class="card-header text-center">Weather</h5>
    <canvas id="rain-chart" width="200" height="200"></canvas>
      <div class="card-body">
        <p id="high" class="card-text"></p>
      </div>  
      </div>

'
?>
<script src="eda.js"></script>
<script src="edarain.js"></script>
</body>
</html>