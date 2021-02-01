<?php
	require_once "connect.php";
	
	$editnipid = $_POST['editnipid'];
	
	// connection with database
	$connection = new mysqli($host, $db_user, $db_password, $db_name);
	
	if($connection->connect_errno!=0)
	{
		echo "Error: ".$connection->connect_errno."Description: ".$connection->connect_error;
	}
	
	// delete data from database
	if($connection->query("DELETE FROM kontrahenci WHERE NIP='$editnipid'"))
	{
		
	}
	else
	{
		throw new Exception($connection->error);
	}
		
    header('Location: ../contractors-data.php');
    $connection->close();
	
?>