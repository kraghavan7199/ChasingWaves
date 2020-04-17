<html>

<head>	
	<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
	<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
	<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
</head>
<body>
  <?php
  $name = $_POST['name'];
  $email = $_POST['usn'];
  $passwd = md5($_POST['pass']);
  $username = $_POST['uname'];
  $con=mysqli_connect("localhost","root","","chasing");
  if (mysqli_connect_errno($con))
{
	echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

$result = mysqli_query($con,"SELECT * FROM users WHERE username='$username'");

if (mysqli_error($con))
{
   die(mysqli_error($con));
}
if(mysqli_num_rows($result) == 1)
{
  	echo 	"<div class=\"jumbotron text-center\">";
  	echo "<h1>User ".$usn." already exists</h1>";
  	echo "<p><a href=\"home.php\" id=\"back\">Go back</a><p>";
    echo "</div>";
}
else
{

	$sql="INSERT INTO users (name, passwd, email, username) VALUES
	('$name', '$passwd', '$email', '$username')";

	if (!mysqli_query($con,$sql))
	{
	  die('Error: ' . mysqli_error($con));
	}

  echo 	"<div class=\"jumbotron text-center\">";
	echo "<h1>Your account has been created<br>Username : ".$username."</h1><br>";
	echo "<p><a href=\"home.php\" id=\"login_link\">Login here</a></p>";
  echo "</div>";
}
mysqli_close($con);
  ?>