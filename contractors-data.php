<?php require_once "partials/header.php" ?>

	<div id="right">
		<table width="800" id="contractors">
		<tr>
			<th>Wybierz</th>
			<th>ID</th>
			<th>NIP</th>
			<th>REGON</th>
			<th>NAZWA</th>
			<th>CZY PŁATNIK VAT?</th>
			<th>ULICA</th>
			<th>NUMER DOMU</th>
			<th>NUMER MIESZKANIA</th>
		</tr>
		<tr class="tr">
			<form method="post" id="form1" action="functions/add.php">
				<td></td>
				<td></td>
				<td><input type="text" id="NIP" value="4567891023" name="NIP" minlength="10" maxlength="10"/></td>
				<td><input type="text" id="REGON" value="456789123" name="REGON" minlength="9" maxlength="9"/></td>
				<td><input type="text" id="NAME" value="Kontrahent nr 3" name="NAME"/></td>
				<td><input type="checkbox" id="PLATNIK" name="Platnik"></td>
				<td><input type="text" id="STREET" value="Klonowa" name="STREET"/></td>
				<td><input type="text" id="HOUSENUMBER" value="12" name="HOUSENUMBER"/></td>
				<td><input type="text" id="FLATNUMBER" value="" name="FLATNUMBER"/></td>
				<input type="hidden" name="editnipid" id="editnipid" value="0">
			</form>
		</tr>
		<?php
		require_once "functions/connect.php";
		$connection = new mysqli($host, $db_user, $db_password, $db_name);
		
		if($connection->connect_errno!=0) {
			echo "Error: ".$connection->connect_errno."Description: ".$connection->connect_error;
		}
		$wynik = mysqli_query($connection,"SELECT * FROM kontrahenci");
		$i=0;
		while($row = mysqli_fetch_array($wynik)) {
			echo '<tr class="tr">';
			echo "<td><input type='checkbox' value='$row[id]' name='chosen' onclick='getId($row[id])'></td><td>"
			.$row['id']."</td><td class='nip'>"
			.$row['NIP']."</td><td class='regon'>"
			.$row['REGON']."</td><td class='name'>"
			.$row['nazwa']. "</td><td>"
			.$row['czyplatnikvat']."</td><td class='street'>"
			.$row['ulica']."</td><td class='houseNumber'>"
			.$row['numerdomu']."</td><td class='flatNumber'>"
			.$row['numermieszkania'];
			echo "</tr>"; 
			$i = $i + 1;
		}
		
		$connection->close();
		?>
		<br/><br/> 
		
		<button type="submit" id="add" onclick="addContractor()">Dodaj kontrahenta</button>
		<button type="submit" id="edit" onclick="editContractor()">Edytuj kontrahenta</button>
		<button type="submit" id="delete" onclick="deleteContractor()">Usuń kontrahenta</button><br/><br/> 
	</div>
</div>

	<script src="js/contractors-data.js"></script>
</body>
</html>