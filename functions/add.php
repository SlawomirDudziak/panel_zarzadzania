<?php
	require_once "connect.php";
	// getting data from form
	$NIP = $_POST['NIP'];
	$REGON = $_POST['REGON'];
	$NAME = $_POST['NAME'];
	$STREET = $_POST['STREET'];
	$HOUSENUMBER = $_POST['HOUSENUMBER'];
	$FLATNUMBER = $_POST['FLATNUMBER'];

	// htmlentities
	$NIP = htmlentities($NIP, ENT_QUOTES, "UTF-8");
	$REGON = htmlentities($REGON, ENT_QUOTES, "UTF-8");
	$NAME = htmlentities($NAME, ENT_QUOTES, "UTF-8");
	$STREET = htmlentities($STREET, ENT_QUOTES, "UTF-8");
	$HOUSENUMBER = htmlentities($HOUSENUMBER, ENT_QUOTES, "UTF-8");
	$FLATNUMBER = htmlentities($FLATNUMBER, ENT_QUOTES, "UTF-8");
	
	if ($NIP and $REGON and $NAME and $HOUSENUMBER) {

	// connection with database
	$connection = new mysqli($host, $db_user, $db_password, $db_name);
	
	if ($connection->connect_errno!=0) {
		echo "Error: ".$connection->connect_errno."Description: ".$connection->connect_error;
	}
	
	// checkbox is selected
	if (isset($_POST['Platnik'])) {
		// adding data to database
		if ($connection->query(sprintf("INSERT INTO kontrahenci VALUES('%s','%s', '%s', 'TAK', '%s', '%s', '%s')",
		mysqli_real_escape_string($connection, $NIP),
		mysqli_real_escape_string($connection, $REGON),
		mysqli_real_escape_string($connection, $NAME),
		mysqli_real_escape_string($connection, $STREET),
		mysqli_real_escape_string($connection, $HOUSENUMBER),
		mysqli_real_escape_string($connection, $FLATNUMBER)))) {

		} else {
			throw new Exception($connection->error);
		}
	} else {
		// checkbox not selected
		if ($connection->query(sprintf("INSERT INTO kontrahenci VALUES('%s','%s', '%s', 'NIE', '%s', '%s', '%s')",
		mysqli_real_escape_string($connection, $NIP),
		mysqli_real_escape_string($connection, $REGON),
		mysqli_real_escape_string($connection, $NAME),
		mysqli_real_escape_string($connection, $STREET),
		mysqli_real_escape_string($connection, $HOUSENUMBER),
		mysqli_real_escape_string($connection, $FLATNUMBER)))) {
			
		} else {
			throw new Exception($connection->error);
		}
	}
    header('Location: ../contractors-data.php');
    $connection->close();
} 
?>
