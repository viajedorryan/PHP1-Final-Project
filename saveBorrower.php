<?php 
	session_start();
?>

<?php

	if(isset($_POST['submit'])) {
		$lname		= $_POST['lname'];
		$fname		= $_POST['fname'];
		$mname		= $_POST['mi'];
		$year		= $_POST['year'];
		$day		= $_POST['day'];
		$celno 		= $_POST['celno'];
		$month		= $_POST['month'];
		$gen 		= $_POST['gender'];
		$address	= $_POST['address'];
		$loan	= $_POST['loan'];
		
		

		//echo $lname.$fname.$mname.$year.$day.$celno.$month.$gen.$address.$username.$pass2;

		$ok = (	!empty($fname) 
				&& !empty($lname) 
				&& !empty($mname) 
				&& !empty($year) 
				&& !empty($day)	 
				&& !empty($month)	
				&& !empty($address)  
				&& !empty($gen)
				&& !empty($celno) 
				&& !empty($loan)
				);
			
			   ///CHECK ALL VARIABLE'S VALUE IF NULL RETURN FALSE OTHERWISE TRUE

		if($ok) {
			require_once('database.php');//controller
			$database = new Database();
			$database->connect();	//connecting to database
			$bdate = $year."-".$day."-".$month;
			$date = new DateTime();
			$now = $date->format("Y-m-d");
				if($database->checkConnection()) {
					$cmd ="INSERT INTO borrower(borrowerId,borrowerFname,borrowerLname,borrowerMname,gender,borrowerAddress,borrowerContactNo,b_date,date_added,active,loan)
							VALUES ('','$fname','$lname','$mname','$gen','$address','$celno','$bdate','$now','active','$loan')";

				$database->set_query($cmd);
				$succes = $database->insert();
				
						header('Location:todo-view.php');
			}//checkConnections
			$database->closeConnection();
		}else {echo "Not ok";}//if ok
	}//if isset post['borrower]
?>