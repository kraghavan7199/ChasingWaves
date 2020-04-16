<html lang="en">
<head>
  <title>Welcome</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
</head>
<body>
  <?php
session_start();
$n = $_SESSION['name'];
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
</nav>';
$con=mysqli_connect("localhost","root","","chasing");
if (mysqli_connect_errno($con))
{
echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
$result = mysqli_query($con,"SELECT * FROM res WHERE name='$n'");
if (mysqli_error($con))
{
   die(mysqli_error($con));
}
if(mysqli_num_rows($result) == 1)
{
$row = mysqli_fetch_array($result);  

echo '<div class="card">
  <h5 class="card-header text-center">Your Reservation</h5>
  <div class="card-body">
    <table class="table table-bordered" cellspacing="0">
    <tr>
        <td><b><i>Hotel</b></i></td>
        <td>'.$row["hotelname"].'</td>
    </tr>
    <tr>
        <td><b><i>CheckIn</b></i></td>
        <td>'.$row["checkin"].'</td>
    </tr>
    <tr>
        <td><b><i>CheckOut</b></i></td>
        <td>'.$row["checkout"].'</td>
    </tr>
    <tr>
        <td><b><i>Rooms</b></i></td>
        <td>'.$row["rooms"].'</td>
    </tr>
    <tr>
        <td><b><i>Price</b></i></td>
        <td>'.$row["price"].'</td>
    </tr>
    </table>
  </div>
</div>';

}
else{
echo '<h1>You have no reservations yet</h1>';

}
mysqli_close($con);
?>
</body>
</html>