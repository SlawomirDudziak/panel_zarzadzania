<?php require_once "partials/header.php" ?>

	<div id="right">
		<table width="800" id="employees">
		<tr>
			<th>Lp.</th>
			<th>Imię</th>
			<th>Nazwisko</th>
			<th>Stanowisko</th>
			<th>Data zatrudnienia</th>
			<th>Ilość dni urlopowych</th>
		</tr>
		<tr class="tr">
			<td>1.</td>
			<td>Jan</td>
			<td>Kowalski</td>
			<td>Senior C# developer</td>
			<td>25.06.2015</td>
			<td>25</td>
		</tr>
		<tr class="tr"> 
			<td>2.</td>
			<td>Anna</td>
			<td>Nowak</td>
			<td>Specjalista ds. HR</td>
			<td>11.01.2018</td>
			<td>23</td>
		</tr>
		<tr class="tr">
			<td>3.</td>
			<td>Mariusz</td>
			<td>Kowalski</td>
			<td>Front-end developer</td>
			<td>29.10.2020</td>
			<td>22</td>
		</tr>
		<tr class="tr">
			<td>4.</td>
			<td>Marcin</td>
			<td>Nejman</td>
			<td>Tester</td>
			<td>21.07.2012</td>
			<td>15</td>
		</tr>
		<tr class="tr">
			<td>5.</td>
			<td>Janusz</td>
			<td>Wiśniewski </td>
			<td>PHP developer</td>
			<td>12.09.2019</td>
			<td>5</td>
		</tr>
		<br/><br/>
		
		<label for="colorpicker1">Wybierz kolor 1: </label>
		<input type="color" id="colorpicker1" value="#ffffff" onchange="changeColor()">
		
		<label for="colorpicker2">Wybierz kolor 2: </label>
		<input type="color" id="colorpicker2" value="#4CAF50" onchange="changeColor()"> 

		<label for="colorpicker2">Wybierz kolor 3: </label>
		<input type="color" id="colorpicker3" value="#000000" onchange="changeColor()">
	</div>
	
</div>

	<script src="js/employees-table.js"></script>
</body>
</html>