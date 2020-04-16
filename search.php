<html lang="en">
<head>
  <title>Search Results</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
</head>
<body>
  <?php
$area = $_POST["area"];
$checkin = $_POST["checkin"];
$checkout = $_POST["checkout"];
$rooms = $_POST["rooms"];
session_start();
$_SESSION["checkin"] = $checkin;
$_SESSION["checkout"] =$checkout;
$_SESSION["rooms"]=$rooms;

echo '
<nav class="navbar navbar-expand-md bg-primary navbar-dark">
  <a class="navbar-brand" href="index.php">Welcome</a>
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
';
$hotelcontent=file_get_contents("goa.json");
$h = json_decode($hotelcontent, true);
$flag=0;
$i =0;
for($i=0;$i<sizeof($h);$i++)
{
    if($area == $h[$i]["area"])
    {
      echo ("<div class=\"card\">");
      echo ("<h5 class=\"card-header\">".$h[$i]["property_name"]."</h5>");
      echo ("<div class=\"card-body\">");
       echo ("<p class=\"card-text\">".$h[$i]["area"]."</p>");
       echo ("<p class=\"card-text\">Price(per Night):".$h[$i]["prices"]."</p>");
      echo ("<a href=\"view.php?id=".$i."\" class=\"btn btn-primary\">See More</a>");
      echo ("</div>");
      echo ("</div>");
    }
$flag=1;
}
if(!$flag)
{
echo "<h1>Sorry No Hotels in this area. Please <a href=\"book.php\">try</a> another location</h1>";
}

?>
</body>
</html>