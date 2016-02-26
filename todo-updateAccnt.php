<?php session_start(); ?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html lang="en">
<head>
	<title>CREDITINFO</title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

<link rel="stylesheet" href="bootstrap-3.3.2-dist/css/bootstrap.min.css">
<script src="jquery-1.11.2.min.js"></script>
<script src="bootstrap-3.3.2-dist/js/bootstrap.min.js"></script>
<link rel="stylesheet" type="text/css" href="css/admin_style.css">
</head>
	<body>
		<div id="pageheader"> 
			<div id="name">
				<span><a href="index.php"><img src="images/logo.png" class="filmlogo"></a></span>
			</div>
			<div id="accountDiv">
				<div id="login">
					<span style="color:#fff;">
						Your are login as (
						<?php 
							if(isset($_SESSION['LOGIN_USER'])){
								echo $_SESSION['LOGIN_USER'];
							}
						?>
						)
					</span>
					<a role="button" class="btn btn-info" style="color:#fff;" href="logout.php">Logout</a>
				</div>
			</div>
		</div>
		<br>
		<br>
		<div class="container-fluid" id="container">
			<center>
				<?php 
					$id = htmlentities($_REQUEST['id']);
					
					require_once('database.php');
					$db = new Database();
					$db->connect();
					$db->set_query("SELECT * FROM borrower WHERE borrowerId='$id'");
					$db->exec_query();
					$row = $db->getResult();
				?>
    				<form class="form-horizontal" role="form" action="update.php" method="post">
    					<div class="form-group" form-group-sm>
							<label for="borrowerid" class="col-sm-5 control-label">Borrower Id</label>
							<div class="col-sm-6">
								<input type="text" class="form-control" id="id" name="id" value="<?php echo $row['borrowerId'];?>" disabled>
							</div>
						</div>
						<input type="hidden" name="id" value="<?php echo $row['borrowerId'];?>">
						<div class="form-group" form-group-sm>
							<label for="borrowername" class="col-sm-5 control-label">Borrower Name</label>
							<div class="col-sm-6">
								<input type="text" class="form-control" id="borrowername" value="<?php echo $row['borrowerFname']." ".$row['borrowerLname'];?>" disabled>
							</div>
						</div>
						<div class="form-group" form-group-sm>
							<label for="loan" class="col-sm-5 control-label">Amount Loan</label>
							<div class="col-sm-6">
								<input type="text" class="form-control" name="loan" value="<?php printf('%.2f',$row['loan']);?>">
							</div>
						</div>
						<div class="form-group" form-group-sm>
							<label for="status" class="col-sm-5 control-label">Status</label>
							<div class="col-sm-6">
								<input type="text" class="form-control" name="status" value="<?php echo $row['status'];?>">
							</div>
						</div>
							
						<div class="form-group" form-group-sm>
							<div class="col-sm-offset-5 col-sm-6">
								<input type="submit" class="btn btn-primary" value="Submit">

								<input type="button" class="btn btn-primary" onclick="go()" value="Cancel">
							</div>
						</div>
					</form>
			</center>

		</div>
		
		
		<script type="text/javascript">
			function blur() {
				var obj = document.getElementByTagName('li')
				obj.style.backgroundcolor="#D0D0D0";
			}
			function visible () {
				document.getElementById('gridImage').style.visibility="hidden";
			}
			function go(){
				window.location="todo-view.php";
			}
		</script>
	</body>
</html>