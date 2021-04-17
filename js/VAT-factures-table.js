function changeColor() {
    let cells = document.getElementsByClassName("net");
    let rows = document.getElementsByTagName("tr");
    
    for (let i = 0; i < cells.length; i++) {
        let converted = parseInt(cells[i].textContent);
        
        if(converted > 1000)	// numeration from 0
            rows[i + 1].style.backgroundColor = "#4CAF50";
    }
}

function changeNetValue(val) {
    let netAmount = parseFloat(document.getElementById('net' + val).textContent);
    let amount = document.getElementById('amount' + val).value;
    let vat = parseFloat(document.getElementById('vat' + val).value) / 100;
    let grossAmount = Math.round(netAmount * (vat + 1) * 100) / 100;
    
    let netValue = amount * netAmount;
    let grossValue = Math.round(grossAmount * amount * 100) / 100;
    
    document.getElementById("netValue" + val).innerHTML = netValue.toFixed(2);
    document.getElementById("grossValue" + val).innerHTML = grossValue.toFixed(2);
}

function changeGrossValue(val) {
    let netAmount = parseFloat(document.getElementById('net' + val).textContent);
    let vat = parseFloat(document.getElementById('vat' + val).value) / 100;
    let amount = document.getElementById('amount' + val).value;
    
    let grossAmount = Math.round(netAmount * (vat + 1) * 100) / 100;
    let grossValue = Math.round(grossAmount * amount * 100) / 100;
    
    document.getElementById("grossAmount" + val).innerHTML = grossAmount.toFixed(2);
    document.getElementById("grossValue" + val).innerHTML = grossValue.toFixed(2);
}
