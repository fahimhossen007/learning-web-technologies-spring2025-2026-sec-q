function validateForm() {
    let name = document.forms["empForm"]["name"].value;
    let contact = document.forms["empForm"]["contact_no"].value;
    let user = document.forms["empForm"]["username"].value;
    let pass = document.forms["empForm"]["password"].value;

    if (name.trim() == "" || contact.trim() == "" || user.trim() == "" || pass.trim() == "") {
        alert("Error: All fields must be filled out!");
        return false;
    }
    return true;
}

function searchEmployee() {
    let input = document.getElementById("searchBox").value;
    let tableBody = document.getElementById("tableBody");

    let xhr = new XMLHttpRequest();
    xhr.open("GET", "search.php?query=" + input, true);
    
    xhr.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            tableBody.innerHTML = this.responseText;
        }
    };
    xhr.send();
}