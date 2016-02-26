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
    				<form class="form-horizontal" role="form" method="post">
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
								<input type="text" class="form-control" id="borrowername" value="<?php echo $row['borrowerFname']." ".$row['borrowerMname']." ".$row['borrowerLname'];?>" disabled>
							</div>
						</div>
						<div class="form-group" form-group-sm>
							<label for="gender" class="col-sm-5 control-label">Gender</label>
							<div class="col-sm-6">
								<input type="text" class="form-control" name="gender" value="<?php echo $row['gender'];?>" disabled>
							</div>
						</div>
						<div class="form-group" form-group-sm>
							<label for="'b_date" class="col-sm-5 control-label">Birthday</label>
							<div class="col-sm-6">
								<input type="text" class="form-control" name="'b_date" value="<?php echo $row['b_date'];?>" disabled>
							</div>
						</div>
						<div class="form-group" form-group-sm>
							<label for="borrowerContactNo" class="col-sm-5 control-label">Contact Information</label>
							<div class="col-sm-6">
								<input type="text" class="form-control" name="borrowerContactNo" value="<?php echo $row['borrowerContactNo'];?>" disabled>
							</div>
						</div>
						<div class="form-group" form-group-sm>
							<label for="borrowerAddress" class="col-sm-5 control-label">Address</label>
							<div class="col-sm-6">
								<input type="text" class="form-control" name="borrowerAddress" value="<?php echo $row['borrowerAddress'];?>" disabled>
							</div>
						</div>
						<div class="form-group" form-group-sm>
							<label for="loan" class="col-sm-5 control-label">Credit Amount</label>
							<div class="col-sm-6">
								<input type="text" class="form-control" name="loan" value="<?php printf('%.2f',$row['loan']);?>" disabled>
							</div>
						</div>
						<div class="form-group" form-group-sm>
							<label for="date_added" class="col-sm-5 control-label">Date Added</label>
							<div class="col-sm-6">
								<input type="text" class="form-control" name="date_added" value="<?php echo $row['date_added'];?>" disabled>
							</div>
						</div>
							
						<div class="form-group" form-group-sm>
							<div class="col-sm-offset-5 col-sm-6">
								<input type="button" class="btn btn-primary" onclick="go()" value="Back">
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