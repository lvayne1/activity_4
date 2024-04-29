<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="indexx.css">
    <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
    <script src="script.js"></script>
</head>
<body>
    <div class="container">
    <form onsubmit="return createData(this);" method="post">
            <h2>Add New Song</h2>

            <label for="pNum">Player ID:</label><br>
            <input type="text" id="pNum" name="pNum" required autocomplete="off"><br>
            
            <label for="firstname">First Name:</label><br>
            <input type="text" id="firstname" name="firstname" required autocomplete="off"><br>

            <label for="lastname">Last Name:</label><br>
            <input type="text" id="lastname" name="lastname" required autocomplete="off"><br>

            <label for="age">Age:</label><br>
            <input type="text" id="age" name="age" required autocomplete="off"><br>

            <label for="username">Username:</label><br>
            <input type="text" id="username" name="username" required autocomplete="off"><br>

            <label for="password">Password:</label><br>
            <input type="text" id="password" name="password" required autocomplete="off"><br><br>

            <button type="submit" name="createAccount">Create Account</button>

            <a href="homepage.php"><button type="button">Back</button></a>
        </form>
    </div>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $xml = new DOMDocument();
        $xml->load("player.xml");

        // Get form data
        $pn = $_POST['pNum'];
        $fn = $_POST['firstname'];
        $ln = $_POST['lastname'];
        $ag = $_POST['age'];
        $un = $_POST['username'];
        $pw = $_POST['password'];

        
        $player = $xml->createElement("player");
        $firstname = $xml->createElement("firstname", $fn);
        $lastname = $xml->createElement("lastname", $ln);
        $age = $xml->createElement("age", $ag);
        $username = $xml->createElement("username", $un);
        $password = $xml->createElement("password", $pw);

       
        $player->appendChild($firstname);
        $player->appendChild($lastname);
        $player->appendChild($age);
        $player->appendChild($username);
        $player->appendChild($password);
        $player->setAttribute("pNum", $pn);

        
        $xml->getElementsByTagName("players")[0]->appendChild($player);
        $xml->save("player.xml");
    }
    ?>
</body>
</html>
