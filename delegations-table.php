<?php require_once "partials/header.php" ?>
	<div id="right">
	
		<table width="800" id="delegations">
		<tr>
			<th>Lp.</th>
			<th>Imię i Nazwisko</th>
			<th>Data od:</th>
			<th>Data do:</th>
			<th>Miejsce wyjazdu</th>
			<th>Miejsce przyjazdu</th>
		</tr>
		<?php
		require_once "functions/connect.php";
		$connection = new mysqli($host, $db_user, $db_password, $db_name);
		
		if($connection->connect_errno!=0) {
			echo "Error: ".$connection->connect_errno."Opis: ".$connection->connect_error;
		}
		$query = mysqli_query($connection,"SELECT * FROM delegacje");

		while($row = mysqli_fetch_array($query)) {
			echo '<tr class="tr">';
			echo "<td>".$row['Lp.']. "</td><td>". $row['imie i nazwisko']. "</td><td>". $row['data od:']. "</td><td>".$row['data do:']."</td><td>".$row['miejsce wyjazdu']."</td><td>".$row['miejsce przyjazdu']."</td>"; 
			echo "</tr>"; 
		}

		$connection->close();
		
		?>
		<br/><br/>
	</div>	
</div>
</body>
</html>

