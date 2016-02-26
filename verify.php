<?php require_once('database.php'); ?>
<?php
	session_start();
?>
<?php
if(isset($_GET['username']) && isset($_GET['password'])) {
	$username = stripslashes($_GET['username']);
	$password = stripslashes($_GET['password']);
	$database = new Database();
	$database->connect();

		if($database->checkConnection()) {
			$database->set_query("SELECT * FROM user WHERE username='$username' AND password='$password'");
			$database->exec_query();
			if($database->getNumRows() > 0) {
				while($row = $database->getResult()){
					$_SESSION['LOGIN_USER']= $row['username'];
					
					$role = $row['role'];
				}
				$database->closeConnection();
				($role=="admin")?header("Location:index.php"):header("Location:index.php");
				
				exit();
			} else {
$error = <<< HERE
<h1 style="color:#BC1616;">Invalid username and password.</h1>
<p><a href="login.php">Go back</a></p>
HERE;
				 echo $error;
			}
		} 
}
?>
