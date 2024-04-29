document.getElementById("loginBtn").onclick = function() {
    // Handle login button click
    // You can redirect to login page or perform any other action here
    console.log("Login button clicked");
};

document.getElementById("signupBtn").onclick = function() {
    // Handle signup button click
    // You can redirect to signup page or perform any other action here
    window.location.href = "register.php";
};

document.getElementById("logoutBtn").onclick = function() {
    var confirmLogout = confirm('Are you sure you want to log out?');
    if (!confirmLogout) {
        event.preventDefault(); // Prevent default action (redirecting to login.php)
    }
};

