<?php 
session_start();
$feedback = $_POST["description"];
$rating  = $_POST["rating"];
$name = $_SESSION["hotel"];
$con=mysqli_connect("localhost","root","","chasing");
if (mysqli_connect_errno($con))
{
echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
$sql="UPDATE res SET rating='$rating', feedback='$feedback' WHERE hotelname='$name'";
if (!mysqli_query($con,$sql))
{
  die('Error: ' . mysqli_error($con));
}
mysqli_close($con);
$l = file_get_contents("goa.json");
$h = json_decode($l, true);
$i =0;
$f = 0;
for($i=0;$i<sizeof($h);$i++)
{
 if($name == $h[$i]["property_name"])
 {
    $f = floatval($h[$i]["site_review_rating"]);
    $rating  = floatval($rating);
    $rating  = ($rating + $f)/2;
    $h[$i]["site_review_rating"] = $rating;
 }
}
header("location:res.php");


?>