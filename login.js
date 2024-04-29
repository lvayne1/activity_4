$(document).ready(function() {
    $("#loginForm").submit(function(event) {
        $.ajax({
            type: "POST",
            url: "login.php",
            data: {
                username: $(event.username).val(),
                password: $(event.password).val()
           },
            success: function(response) {
                if (response.success) {
                    // Redirect to homepage if login successful
                    window.location.href = "homepage.php";
                } else {
                    // Display error message if login failed
                    $("#errorMessage").text("Invalid username or password!");
                }
            },
        });
    });
});
