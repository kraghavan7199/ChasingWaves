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
?>
<div class="card">
  <h5 class="card-header text-center">Feedback</h5>
  <div class="card-body">
<form action="addr.php" id="upform" method="post" enctype="multipart/form-data">
	 
	 <div class="form-group">
		 <div style="text-align:center">
		 <input type="submit" value="Submit" style="font-size:1em; width: 50%;" id="upload_button"/>
		 </div>
		 </div>
		   <table class="table table-bordered" cellspacing="0">
         <tr>
   <td> Rating</td>

   <td><div class="form-group">
   <input type="text" id="project_title" name="rating" placeholder="Rating(Between 0-5)">
 </div></td>
</tr>
       </table>
     </form>
     <div style="text-align:center">
<textarea id="desc" name="description" form="upform">Description</textarea></div>
</div>
</div>
</div>
</body>
</html>