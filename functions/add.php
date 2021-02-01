<?php
	require_once "connect.php";
	// getting data from form
	$NIP = $_POST['NIP'];
	$REGON = $_POST['REGON'];
	$NAME = $_POST['NAME'];
	
	$STREET = $_POST['STREET'];
	$HOUSENUMBER = $_POST['HOUSENUMBER'];
	$FLATNUMBER = $_POST['FLATNUMBER'];
	
	if($NIP and $REGON and $NAME and $HOUSENUMBER) {

	// connection with database
	$connection = new mysqli($host, $db_user, $db_password, $db_name);
	
	if($connection->connect_errno!=0)
	{
		echo "Error: ".$connection->connect_errno."Description: ".$connection->connect_error;
	}
	
	
	// checkbox is selected
	if (isset($_POST['Platnik'])) 
	{
		// adding data to database
		if($connection->query("INSERT INTO kontrahenci VALUES('$NIP','$REGON', '$NAME', 'TAK', '$STREET', '$HOUSENUMBER', '$FLATNUMBER')"))
		{
			
		}
		else
		{
			throw new Exception($connection->error);
		}
	
	} else 
	{
		// checkbox not selected
		if($connection->query("INSERT INTO kontrahenci VALUES('$NIP','$REGON', '$NAME', 'NIE', '$STREET', '$HOUSENUMBER', '$FLATNUMBER')"))
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