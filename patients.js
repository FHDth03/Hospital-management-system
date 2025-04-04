function validatePatientForm() {
    var name = document.getElementById("name").value;
    var age = document.getElementById("age").value;
    var phone_number = document.getElementById("phone_number").value;
    var gender = document.getElementById("gender").value;

    if (name == null || name == "") {
        alert("Please enter patient's name.");
        return false;
    }
    if (age === undefined || age === null || age <= 0) {
        alert("Please enter a valid age.");
        return false;
    }
    if (phone_number === undefined || phone_number === null || phone_number <= 0) {
        alert("Please enter a phone mumber.");
        return false;
    }
    if (gender === "Select") {
        alert("Please select gender.");
        return false;
    }
    return true;
}

function updatePatient(tid, tname, tage,tphone_number, tindex) {
    document.getElementById("patientid").value = tid;
    document.getElementById("name").value = tname;
    document.getElementById("age").value = tage;
    document.getElementById("phone_number").value = tphone_number;
    document.getElementById("gender").selectedIndex = tindex;
}