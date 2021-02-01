<?php require_once "partials/header.php" ?>

	<div id="right">
		<table width="800" id="factures">
		<tr>
			<th>Lp.</th>
			<th>Opis</th>
			<th>Kwota Netto</th>
			<th>Ilość</th>
			<th>VAT</th>
			<th>Kwota Brutto</th>
			<th>Wartość Netto</th>
			<th>Wartość Brutto</th>
		</tr>
		<tr class="tr">
			<td>1.</td>
			<td>Konsultacje</td>
			<td class="net" id="net1">120.50</td>
			<td>
			<input type="number" value="1" onchange="changeNetValue(1)" classs="amount" id="amount1"/></td>
			<td>
				<select id="vat1" onchange="changeGrossValue(1)">
				  <option value="0%">0%</option>
				  <option value="3%">3%</option>
				  <option value="8%">8%</option>
				  <option selected value="23%">23%</option>
				</select>
			</td>
			<td id="grossAmount1">148.22</td>
			<td class="netValue" id="netValue1">120.50</td>
			<td id="grossValue1">148.22</td>
		</tr>

		<tr class="tr"> 
			<td>2.</td>
			<td>Utworzenie kopii zapasowej</td>
			<td class="net" id="net4">200.00</td>
			<td>
			<input type="number" value="1" onchange="changeNetValue(4)" classs="amount" id="amount4"/>
			</td>
			<td>
				<select id="vat4" onchange="changeGrossValue(4)">
				  <option value="0%">0%</option>
				  <option value="3%">3%</option>
				  <option value="8%">8%</option>
				  <option selected value="23%">23%</option>
				</select>
			</td>
			<td id="grossAmount4">246.00</td>
			<td class="netValue" id="netValue4">200.00</td>
			<td id="grossValue4">246.00</td>
		</tr>

		<tr class="tr"> 
			<td>3.</td>
			<td>Implementacja strony internetowej</td>
			<td class="net" id="net2">1200.00</td>
			<td>
			<input type="number" value="1" onchange="changeNetValue(2)" classs="amount" id="amount2"/>
			</td>
			<td>
				<select id="vat2" onchange="changeGrossValue(2)">
				  <option value="0%">0%</option>
				  <option value="3%">3%</option>
				  <option value="8%">8%</option>
				  <option selected value="23%">23%</option>
				</select>
			</td>
			<td id="grossAmount2">1476.00</td>
			<td class="netValue" id="netValue2">1200.00</td>
			<td id="grossValue2">1476.00</td>
		</tr>

		<tr class="tr"> 
			<td>4.</td>
			<td>Wdrożenie sklepu internetowego</td>
			<td class="net" id="net5">1600.00</td>
			<td>
			<input type="number" value="1" onchange="changeNetValue(5)" classs="amount" id="amount5"/>
			</td>
			<td>
				<select id="vat5" onchange="changeGrossValue(5)">
				  <option value="0%">0%</option>
				  <option value="3%">3%</option>
				  <option value="8%">8%</option>
				  <option selected value="23%">23%</option>
				</select>
			</td>
			<td id="grossAmount5">1968.00</td>
			<td class="netValue" id="netValue5">1600.00</td>
			<td id="grossValue5">1968.00</td>
		</tr>

		<tr class="tr"> 
			<td>5.</td>
			<td>Wdrożenie systemu</td>
			<td class="net" id="net3">4200.00</td>
			<td>
			<input type="number" value="1" onchange="changeNetValue(3)" classs="amount" id="amount3"/>
			</td>
			<td>
				<select id="vat3" onchange="changeGrossValue(3)">
				  <option value="0%">0%</option>
				  <option value="3%">3%</option>
				  <option value="8%">8%</option>
				  <option selected value="23%">23%</option>
				</select>
			</td>
			<td id="grossAmount3">5166.00</td>
			<td class="netValue" id="netValue3">4200.00</td>
			<td id="grossValue3">5166.00</td>
		</tr>
		
		<br/><br/> 
		<button type="button" id="changeColorBtn" onclick="changeColor()">Powyżej 1000,00zł Netto</button><br/><br/>
	</div>

</div>
	<script src="js/VAT-factures-table.js"></script>
</body>
</html>