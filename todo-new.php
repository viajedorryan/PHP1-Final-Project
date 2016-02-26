
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html lang="en">
<head>
	<title>CREDITINFO</title>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width", initial-scale="1">
	<link rel="stylesheet" href="bootstrap-3.3.2-dist/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/register-style.css" media="screen">
	
	
<style>
	div.divBody{
		width:100%;
		height: auto;
		margin: 0px auto;
		background-color:#F6F6F1;
		margin-top: 30px;
	}
	div.header {
		width: 100%;
		height: 60px;
		margin: 0px auto;
		background-color:#434335;
		color: #fff;
		padding: 15px;
	}
	</style>
<script src="js/ajax.js"></script>
<script src="js/form-validate.js"></script>
<script>
	function ask() {
		if(confirm("Your leaving the registration page.")==true) {
			window.location="index.php";
		}
	}
	function match(str){
		var x = document.forms["myForm"]["pass1"].value;
		if(str.length != 0) {
			if(str != x)
				document.getElementById("pass2").innerHTML="Password do not match";
			else
				document.getElementById("pass2").innerHTML='<img src="images/1423730261_tick_64.png" width="25px" height="25px">';
		} else {
			document.getElementById("pass2").innerHTML="";
		}
	}
</script>
</head>
<body>
	<div id="pageheader"> 
		<div id="name">
			<span><a href="index.php"><img src="images/logo.png" class="filmlogo"></a></span>
		</div>

	</div>
		<div class="divBody">
			<div class="container-fluid">
				<h2>BORROWER'S NEW ACCOUNT</h2>
				<div class="header">
					<h4>Please fill up all the required field(*)</h4>
				</div>
						
					<form action="saveBorrower.php" method="post" name="myForm" id="save">
						<div class="form-group">
							<label for="lname">Last name</label><br />
							<input type="text" name="lname" id="lname" class="formview" width="50" required >
						</div>
						<div class="form-group">
							<label for="fname">First name</label><br />
							<input type="text" name="fname"  id="fname" class="formview" required >
						</div>
						<div class="form-group">
							<label for="mi">Middle initial</label><br />
							<input type="text" name="mi" id="mi" class="formview" required >
						</div>
						<div class="form-group">
							<label for="gender">Gender</label>
							<input type="radio" id="M" class="gender" name="gender" value="M" >
								Male
								<input type="radio" name="gender" class="gender"value ="F" >
								Female
						</div>
						<div class="form-group">
							<label for="course">Birthday</label><br />
								<select name="month" class="course">
									<script type="text/javascript">
											var i;
											var months = ["Month","January","February","March","April","May","June","July","Augus","September","October","November","December"];
											for(i=0;i<13;i++){
												document.write("<option"+" "+"value"+"="+months[i]+">"+months[i]+"</option>");
											}
									</script>
								</select>
								<select name="day">
									<option value="">Days</option>
									<script type="text/javascript">
										var i;
										for(i=1;i<=31;i++){
											document.write("<option"+" "+"value"+"="+i+">"+i+"</option>");
										}
									</script>
								</select> 
								<select name="year" id="year" onchange="checkIfMinor()">
									<option value="">Year</option>
									<script type="text/javascript">
										var i;
										for(i=1997;i>=1920;i--){
											document.write("<option"+" "+"value"+"="+i+">"+i+"</option>");
										}
									</script>
								</select> <br />
						</div>
						<div class="form-group">
							<label for="">Contact information</label><br />
								<input type="text" name="celno" placeholder="Cellphone number" value="" class="formview" required ><br /><br />
						</div>
						<div class="form-group">
									<label class="address">Address</label><br />
									<input type="text" name="address" id="address" placeholder="Street,Town,City" value="" class="formview" required >
						</div>
						<div class="form-group">
							<label for="loan">Credit Amount</label><br />
							<input type="text" name="loan" id="loan" placeholder="Amount"class="formview" required >
						</div>
						<input type="submit" name="submit" class="btn btn-primary" value="Register" > 
						<input type="button" class="btn btn-primary" name="cancelS" value="Cancel" onclick="ask()" ><br /><br />
					</form>
			</div>
		</div>
		<script src="js/jQuery/jquery.js"></script>
		<script src="bootstrap-3.3.2-dist/js/bootstrap.min.js"></script>
</body>
</html>