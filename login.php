<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="logins.css">
    <script src="login.js"></script>
</head>
<body>
    <div class="container">
    
        <form method="post">
        <h2>Login</h2>
            <label for="username">Username:</label><br>
            <input type="text" id="username" name="username" required autocomplete="off"><br>

            <label for="password">Password:</label><br>
            <input type="password" id="password" name="password" required autocomplete="off"><br><br>

            <button type="submit" name="login">Login</button>
            <a href="register.php"><button type="button">Register</button></a>
        </form>
        </div>
    <?php
    $xml = new DOMDocument();
    $xml->load("player.xml");
    
    
// Check if form is submitted
if(isset($_POST['login'])) {
    // Load XML file
    // Get username and password from form
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Get player elements
    $players = $xml->getElementsByTagName("player");

    // Loop through XML data to find matching username and password
    $authenticated = false;
    foreach($players as $player) {
        $playerUsername = $player->getElementsByTagName("username")->item(0)->nodeValue;
        $playerPassword = $player->getElementsByTagName("password")->item(0)->nodeValue;
        if($playerUsername == $username && $playerPassword == $password) {
            // User authenticated
            $authenticated = true;
            break; // Stop further processing
        }
    }

    if($authenticated) {
        // Redirect to success page or perform other actions
        echo "<script>window.location.href = 'homepage.php';</script>";
            exit(); // Ensure script termination after redirection
        
    } else {
        // If no matching username and password found
        echo "<p>Invalid username or password!</p>";
    }
}
?>

</body>
</html>
