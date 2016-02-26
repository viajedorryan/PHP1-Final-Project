<?php session_start(); ?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html lang="en">
<head>
	<title>CREDITINFO</title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

<link rel="stylesheet" href="bootstrap-3.3.2-dist/css/bootstrap.min.css">
<script src="jquery-1.11.2.js"></script>
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
		<div class="container" id="container">
			<center>

				<table class="table table-bordered">
					<thead>
							<th>BORROWER ID</th>
							<th>BORROWER NAME</th>
							<th>AMOUNT LOAN</th>
							<th>DATE ADDED</th>
							<th>STATUS</th>
							<th></th>
					</thead>
					<tbody>
						<?php
							require_once('database.php');
							$db = new Database();
							$db->connect();
							$db->set_query("SELECT * FROM borrower WHERE active='active'");
							$db->exec_query();
							if($db->getNumRows() >0){
								while($row=$db->getResult()){
						?>		
								<tr>
									<td><?php echo $row['borrowerId'];?></td>
									<td><?php echo $row['borrowerFname']." ".$row['borrowerLname'];?></td>
									<td><?php echo $row['loan'];?></td>
									<td><?php echo $row['date_added'];?></td>
									<td><?php echo $row['status'];?></td>
									<td>
										<a href="remove.php?id=<?php echo $row['borrowerId'];?>">RemoveAccnt</a>
										|
										<a href="todo-updateAccnt.php?id=<?php echo $row['borrowerId'];?>">UpdateAccnt</a>
										|
										<a href="todo-new.php?id=<?php echo $row['borrowerId'];?>">AddBorrower</a>
										|
										<a href="todo-viewBorrower.php?id=<?php echo $row['borrowerId'];?>">ViewInfo</a>
								</tr>
						<?php
								}
							}
							$db->closeConnection();
						?>
					</tbody>
				</table>
			</center>

		</div>
		<!--<div id="footer">
			<div id="footerUl">
				<ul id="footerAlpha">
					<li><a href="about.html">Movie us</a></li>
					<li><a href="places.html">Places</a></li>
					<li><a href="contact.html">Contact us</a></li>
					<li><a href="news.php">News</a></li>
					<li><a href="http//:www.facebook.com">Facebook</a></li>
					<li><a href="twitter.com">Twitter</a></li>
				</ul>
			</div>
			<div class="footerName">
				<h2></h2>
			</div>
		</div>-->
		
		<script type="text/javascript">
			function blur() {
				var obj = document.getElementByTagName('li')
				obj.style.backgroundcolor="#D0D0D0";
			}
			function visible () {
				document.getElementById('gridImage').style.visibility="hidden";
			}


		</script>
	</body>
</html>