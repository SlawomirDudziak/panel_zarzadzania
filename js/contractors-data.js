function addContractor() {
    document.getElementById("form1").submit();
}
function editContractor() {
    document.getElementById("form1").action="functions/update.php";
    document.getElementById("form1").submit();
    // console.log(document.getElementById("editnipid").value);
}
function deleteContractor(){
    document.getElementById("form1").action="functions/delete.php";
    document.getElementById("form1").submit();
}
function getId(id){
    // get data from table
    let rows = document.getElementsByTagName("tr");
    let nips = document.getElementsByClassName("nip");
    let chosenOnes = document.getElementsByName("chosen");
    let regons = document.getElementsByClassName("regon");
    let names = document.getElementsByClassName("name");
    let streets = document.getElementsByClassName("street");
    let houseNumbers = document.getElementsByClassName("houseNumber");
    let flatNumbers = document.getElementsByClassName("flatNumber");
    
    if(chosenOnes[id].checked){
        // assign a variable to chosen row from table
        let chosen = nips[id].textContent;
        let regon = regons[id].textContent;
        let name = names[id].textContent;
        let street = streets[id].textContent;
        let houseNumber = houseNumbers[id].textContent;
        let flatNumber = flatNumbers[id].textContent;

        // assign data to edition in form
        document.getElementById("editnipid").value = chosen;
        document.getElementById("NIP").value = chosen;
        document.getElementById("REGON").value = regon;
        document.getElementById("NAME").value = name;
        document.getElementById("STREET").value = street;
        document.getElementById("HOUSENUMBER").value = houseNumber;
        document.getElementById("FLATNUMBER").value = flatNumber;
        console.log(id, chosen);
    }
    else{
        document.getElementById("editnipid").value = 0;
    }
}