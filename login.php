<html>

<head>
</head>

<body>
  <?php
  session_start();
  $username = $_POST['name'];
  $password = md5($_POST['pass']);
  $con=mysqli_connect("localhost","root","","chasing");
  if (mysqli_connect_errno($con))
{
	echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
$username = strtolower($username);
$result = mysqli_query($con,"SELECT * FROM users WHERE username='$username' AND passwd='$password'");
if (mysqli_error($con))
{
   die(mysqli_error($con));
}
if(mysqli_num_rows($result) == 1)
{
  
	$_SESSION['is_logged_in'] = 1;
	$_SESSION['name']=$username;
  $row = mysqli_fetch_array($result);
  header("location:index.php");
}
else{
header("location:error.php");
}
mysqli_close($con);
?>
</body>
</html>