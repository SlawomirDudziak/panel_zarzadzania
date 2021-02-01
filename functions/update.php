<?php
	require_once "connect.php";
	// getting data from form
	$editnipid = $_POST['editnipid'];
	
	$NIP = $_POST['NIP'];
	$REGON = $_POST['REGON'];
	$NAME = $_POST['NAME'];
	$STREET = $_POST['STREET'];
	$HOUSENUMBER = $_POST['HOUSENUMBER'];
	$FLATNUMBER = $_POST['FLATNUMBER'];
	
	if($NIP and $REGON and $NAME and $HOUSENUMBER) {

	// connecting with database
	$connection = new mysqli($host, $db_user, $db_password, $db_name);
	
	if($connection->connect_errno!=0)
	{
		echo "Error: ".$connection->connect_errno."Opis: ".$connection->connect_error;
	}
	
	// checkbox is selected
	if (isset($_POST['Platnik'])) 
	{
		// update database
		if($connection->query("UPDATE kontrahenci SET NIP='$NIP',REGON='$REGON', nazwa='$NAME', czyplatnikvat='TAK', STREET='$STREET', numerdomu='$HOUSENUMBER', numermieszkania='$FLATNUMBER' WHERE NIP='$editnipid'"))
		{
			
		}
		else
		{
			throw new Exception($connection->error);
		}
	
	} else 
	{
		// checkbox not selected
		if($connection->query("UPDATE kontrahenci SET NIP='$NIP',REGON='$REGON', nazwa='$NAME', czyplatnikvat='NIE', ulica='$STREET', numerdomu='$HOUSENUMBER', numermieszkania='$FLATNUMBER' WHERE NIP='$editnipid'"))
		{
			
		}
		else
		{
			throw new Exception($connection->error);
		}
	}
    header('Location: ../contractors-data.php');
    $connection->close();
	} 
 
?>