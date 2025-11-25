$(document).ready(function() {
    $("#regForm").on("submit", function(e) {
        let name = $("#full_name").val().trim();
        let phone = $("#phone").val().trim();
        let email = $("#email").val().trim();

        if (name === "" || phone === "" || email === "") {
            alert("Please fill all required fields.");
            e.preventDefault();
            return;
        }

        if (!/^[0-9]{10}$/.test(phone)) {
            alert("Please enter a valid 10-digit phone number.");
            e.preventDefault();
            return;
        }
    });
});
