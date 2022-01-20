function addContractor() {
    document.getElementById("form1").submit();
}
function editContractor() {
    document.getElementById("form1").action="functions/update.php";
    document.getElementById("form1").submit();
}
function deleteContractor(){
    document.getElementById("form1").action="functions/delete.php";
    document.getElementById("form1").submit();
}
function getId(id) {
    // get data from table
    let checkboxes = document.getElementsByName("chosen");

    checkboxes.forEach(e => {
        if (e.value == id) {
            // var chosen = e.parentElement.parentElement.children[0];
            var nip = e.parentElement.parentElement.children[2].textContent;
            var regon = e.parentElement.parentElement.children[3].textContent;
            var name = e.parentElement.parentElement.children[4].textContent;
            var vatPayer = e.parentElement.parentElement.children[5].textContent;
            var street = e.parentElement.parentElement.children[6].textContent;
            var houseNumber = e.parentElement.parentElement.children[7].textContent;
            var flatNumber = e.parentElement.parentElement.children[8].textContent;

            // assign data to edition in form if checkbox is checked
            if (e.checked) {
                document.getElementById("NIP").value = nip;
                document.getElementById("REGON").value = regon;
                document.getElementById("NAME").value = name;
                if (vatPayer === 'TAK') document.getElementById('PLATNIK').checked = true;
                else document.getElementById('PLATNIK').checked = false;
                document.getElementById("STREET").value = street;
                document.getElementById("HOUSENUMBER").value = houseNumber;
                document.getElementById("FLATNUMBER").value = flatNumber;
                document.getElementById("editnipid").value = id;
            }
        }
    });
}
