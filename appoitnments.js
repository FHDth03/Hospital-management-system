document.addEventListener('DOMContentLoaded', function() {
    function appointmentForm() {
        var patientid = document.getElementById("patientid").value;
        var doctor = document.getElementById("doctor").value;
        var date = document.getElementById("date").value;
        var time = document.getElementById("time").value;
        var status = document.getElementById("status").value;

        if (patientid == "" || doctor == "-Select-" || date == "" || time == "" || status == "-Select-") {
            alert("Please fill in all fields before submitting.");
            return false;
        }
        return true;
    }

    function populateForm(appointmentid, patientid, doctor, date, time, status) {
        document.getElementById('formTitle').innerText = "Update Appointment";
        document.getElementById('appointmentid').value = appointmentid;
        document.getElementById('patientid').value = patientid;
        document.getElementById('doctor').value = doctor;
        document.getElementById('date').value = date;
        document.getElementById('time').value = time;
        document.getElementById('status').value = status;
    }

    // Parse URL parameters to populate form if editing
    const urlParams = new URLSearchParams(window.location.search);
    if (urlParams.has('appointmentid')) {
        const appointmentid = urlParams.get('appointmentid');
        const patientid = urlParams.get('patientid');
        const doctor = urlParams.get('doctor');
        const date = urlParams.get('date');
        const time = urlParams.get('time');
        const status = urlParams.get('status');
        populateForm(appointmentid, patientid, doctor, date, time, status);
    }

    // Assign the form submission handler
    document.querySelector('form').onsubmit = appointmentForm;
});