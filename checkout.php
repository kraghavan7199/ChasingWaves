<html lang="en">
<head>
  <title>Checkout</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
</head>
<body>
  <?php
session_start();
$checkin = $_SESSION["checkin"];
$checkout=$_SESSION["checkout"];
$rooms=intval($_SESSION["rooms"]);
$date1 = date_create($checkin);
$date2 = date_create($checkout);
$diff = date_diff($date1,$date2);
$noofdays = $diff->format("%a");
$id = intval($_GET["id"]);
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
';
$hotelcontent=file_get_contents("goa.json");
$h = json_decode($hotelcontent, true);
$hotelname = $h[$id]["property_name"];
$totalcost = intval($h[$id]["prices"])*$rooms*$noofdays;
$n = $_SESSION['name'];
echo '
<table class="table table-bordered" cellspacing="0">
  <tr>
    <td>Hotel</td>

<td>    <div class="form-group">
  <p>'.$h[$id]["property_name"].'</p>
  </div></td>
</tr>
<tr>
  <td>No Of Days</td>
  <td><div class="form-group">
    <p>'.$noofdays.'</p>
  </div></td>
</tr>
<tr>
  <td>No Of Rooms</td>
  <td><div class="form-group">
    <p>'.$rooms.'</p>
  </div></td>
</tr>
<tr>
  <td>Price (per Night)</td>
  <td><div class="form-group">
    <p>'.$h[$id]["prices"].'</p>
  </div></td>
</tr>
<tr>
  <td>Total Cost</td>
  <td><div class="form-group">
    <p>Rs '.$totalcost.'</p>
  </div></td>
</tr>
<tr>
  <td>Payment</td>
  <td><div class="form-group">
    <p>Payment will be done on arrival at the hotel.</p>
  </div></td>
</tr>
<tr>
  <td><a href="index.php" class="btn btn-primary">Back to Home</a></td>
</tr>

</table>';
$con=mysqli_connect("localhost","root","","chasing");
if (mysqli_connect_errno($con))
{
echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
$sql="INSERT INTO res (hotelname, checkin, checkout, rooms, price,name) VALUES
	('$hotelname','$checkin','$checkout', '$rooms', '$totalcost','$n')";
  if (!mysqli_query($con,$sql))
	{
	  die('Error: ' . mysqli_error($con));
	}
  mysqli_close($con);
?>
</body>
</html>