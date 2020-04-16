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
</nav>
  <table class="table table-bordered" cellspacing="0">
';
$file = fopen("chat.txt","r");

while(!feof($file))
{
  echo "<div id=\"card\">";
echo "<tr>";
echo "<td>";
echo "<div id=\"card-body\">";
  echo fgets($file);
    echo "</div>";
  echo "</td>";
  echo "</tr>";
    echo "</div>";
}
echo "</table>";
echo'
<form action="add.php" method="POST">
  <table class="table table-bordered" cellspacing="0">
    <tr>
      <td>
      <div style="text-align:center">
      <textarea name="content">
      </textarea>
      </div>
      <td>
    </tr>
    <tr>
      <td>
      <div style="text-align:center">
      <input type="submit" name="submit" value="Submit"></div>
    </td>
    
    </tr>
    <input type="hidden" name="pls" value='.$n.'>
  </table>
</form>';
?>

</body>
</html>