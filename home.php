<html lang="en">
<head>
<title>Chasing Waves</title>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<link href="home.css" rel="stylesheet" type="text/css">
<script src="home.js"></script>
</head>
<body>
  		<div class="container">
  	
    <div class="jumbotron text-center">
  		<h1>ChasingWaves</h1>
  		<p>When you think of beaches,parties and amazing sea food, you think of Goa.<br>Experince Goa like never before.</p>
  	</div>
    	<div class="row">
			<div class="col-md-6 col-md-offset-3">
				<div class="panel panel-login">
					<div class="panel-heading">
						<div class="row">
							<div class="col-xs-6">
								<a href="#" class="active" id="login-form-link">Login</a>
							</div>
							<div class="col-xs-6">
								<a href="#" id="register-form-link">Register</a>
							</div>
						</div>
						<hr>
					</div>
					<div class="panel-body">
						<div class="row">
							<div class="col-lg-12">
								<form id ="login-form" name="login_form" action="login.php" method="post" onsubmit="return validate()" style="display: block;">
									<div class="form-group">
										<input type="text" id="username" name="name" tabindex="1" class="form-control" placeholder="Username" value="">
									</div>
									<div class="form-group">
										<input type="password" id="pass" name="pass" tabindex="2" class="form-control" placeholder="Password">
									</div>
									<div class="form-group">
										<div class="row">
											<div class="col-sm-6 col-sm-offset-3">
												<input type="submit" id="btn" value="Login" tabindex="4" class="form-control btn btn-login" value="Log In">
											</div>
										</div>
									</div>
								</form>
								<form id="register-form" action="newuser.php" name="signup_form" method="POST"style="display: none;">
									<div class="form-group">
										<input type="text" placeholder="Name" id="names" name="name" tabindex="1" class="form-control" >
									</div>
                  <div class="form-group">
                    <input type="text" placeholder="Username" id="username" name="uname" tabindex="1" class="form-control" >
                  </div>
									<div class="form-group">
										<input input type="email" placeholder="Email" id="usn" name="usn" tabindex="1" class="form-control">
									</div>
									<div class="form-group">
										<input type="password" placeholder="Max 30 Characters" maxlength="30" id="pass" name="pass" tabindex="2" class="form-control" placeholder="Password">
									</div>
									<div class="form-group">
										<input type="password" placeholder="Confirm Password Max 30 Characters"
            					maxlength="30" onblur="validate_pass()" id="confirm_pass" name="cpass" tabindex="2" class="form-control">
									</div>
									<div class="form-group">
										<div class="row">
											<div class="col-sm-6 col-sm-offset-3">
												<input type="submit" name="register-submit" id="register-submit" tabindex="4" class="form-control btn btn-register" value="Register Now">
											</div>
										</div>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>