function changeColor() {
	let rows = document.getElementsByTagName("tr") ;
	let color1 = document.getElementById("colorpicker1").value;
	let color2 = document.getElementById("colorpicker2").value;
	let color3 = document.getElementById("colorpicker3").value;
	let employees = document.getElementById("employees");
	for (let i = 0; i < rows.length; i++) {
		if(i % 2 == 0)	// numeration from 0 
			rows[i].style.backgroundColor = color2;
		else
			rows[i].style.backgroundColor = color1;
	}
	employees.style.color = color3;
}
		