
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html lang="en">
<head>
	<title>CREDITINFO</title>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width", initial-scale="1">
	<link rel="stylesheet" href="bootstrap-3.3.2-dist/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/login-style.css" media="screen">

</head>
<body>

	<!--the main heading-->
	<div id="mainHeader">
	</div>
	<br><br>
	<div id="loginbody">
	<div class="container">
		<div class="well">
	    <div class="row">
	        <div class="col-lg-12" align="center">
	        <div class="col-md-12">
	            </div>  
	            
					<div class="col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
						<div class="panel panel-default">
							<div class="panel-body">
								<h2 class="thin text-center">LOGIN</h2>
								<hr>
								
								<form action="verify.php" name="myForm" method="GET" role="form">
									<div class="top-margin">
										<label for="uname">Username</label>
										<input onclick="ask()" type="text" class="form-control" placeholder="Username" name="username" id="uname" required>
									</div>
									<div class="top-margin">
										<label for="pass">Password</label>
										<input type="password" class="form-control" placeholder="Password" name="password" id="pass" required>
									</div>
	                                <hr>
								    	<button type="submit" class="btn btn-lg btn-primary">Login</button>
										<p><a href="index.php">Go back</a></p>
								</form>
							</div>
						</div>
					</div>
				
			</div>
		</div>
		</div>
	</div>
	</div>
		<script src="js/jQuery/jquery.js"></script>
		<script src="bootstrap-3.3.2-dist/js/bootstrap.min.js"></script>
</body>
</html>