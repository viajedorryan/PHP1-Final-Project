<?php
	$id = htmlentities($_REQUEST['id']);
	require_once('database.php');
	$db = new Database();
	$db->connect();
	$db->set_query("UPDATE borrower SET active='not' WHERE borrowerId='$id'");
	if($db->exec_query()){
		header("Location:todo-view.php");
	}

	$db->closeConnection();
?>