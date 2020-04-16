<html lang="en">
<head>
  <title>Book Rooms</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script>
var areas = ['Calangute Area', 'Baga Area', 'Candolim Area', 'Anjuna Area',
       'Vagator Area', 'Betim', 'Panjim Area', 'Salcette, Goa',
       'Mobor Beach Area', 'Palolem Beach Area',
       'Other North Goa Beaches', 'Others', 'Colva Area',
       'Bogmalo Beach Area', 'Varca Area', 'Margao', 'Betalbatim',
       'Salcette', 'Alto De Porvorim', 'Mapusa', 'Ponda', 'Vasco da Gama'];
       $( "#area" ).autocomplete({  
    source: areas
 });  
});  
</script>
<link href="a.css" rel="stylesheet" type="text/css">
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
'
?>
<br>
<br>
<div class="card card-outline-secondary">
                
                       <div class="card-body">
                           <form class="form" action="search.php" role="form" autocomplete="off" id="searchForm" method="POST">
                               <div class="form-group">
                                   <label for="uname1">Area</label>
                                   <input type="text" class="form-control" name="area" id="area" required="" required>
                                   <div id="suggesstion-box"></div>
                               </div>
                               <div class="form-group">
                                   <label>Check In Date</label>
                                   <input type="date" name="checkin" class="form-control" id="checkin" required>
                               </div>
                               <div class="form-group">
                                   <label>Check Out Date</label>
                                   <input type="date" name="checkout" class="form-control" id="checkout" required>
                               </div>
                               <div class="form-group">
                                   <label>No Of Rooms</label>
                                   <input type="text" name="rooms" class="form-control" id="rooms" required>
                               </div>
                               
                               <button type="submit" class="btn btn-success btn-lg float-right" id="search">Search</button>
                           </form>
                       </div>
          
                   </div>
</body>
</html>