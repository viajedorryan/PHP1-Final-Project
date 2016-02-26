<?php
	$id = $_POST['id'];
	$loan = htmlentities($_POST['loan']);
	$status	= htmlentities($_POST['status']);

	require_once('database.php');
	$db = new Database();
	$db->connect();
	$db->set_query("UPDATE borrower SET status='$status',loan='$loan' WHERE borrowerId='$id'");
	if($db->exec_query()){
		header("Location:todo-view.php");
	}else {
		header("Location:todo-update.php");
	}
	$db->closeConnection();
?>