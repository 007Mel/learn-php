<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Login</title>
</head>
<body>
    <?php
        session_start();

        require_once __DIR__ . '/utils.php';

        if(isset($_POST["submit"])) {
            $email = $_POST["email"];
            $password = $_POST["password"];
            $is_authenticated = false;
            $users = require 'database.php';

            if($email && $password) {
                foreach($users as $user) {
                    if($email == $user["email"] && $password == $user["password"]) {
                        $is_authenticated = true;
                        $username = $user["username"];
                    }
                }
                if($is_authenticated) {
                    $_SESSION["name"] = $username;
                    header("Location: home.php");
                } else {
                    showMessage("Email or password invalid!", "danger");
                }
            } else {
                showMessage("All fields are required!", "danger");
            }
        }
    ?>
    
    <div class="login-box box">
        <h1 class="title">Login</h1>
        <form action="index.php" method="post">
            <label>Email</label> <br>
            <input type="text" name="email"> <br>
            <label>Password</label> <br>
            <input type="password" name="password"> <br>
            <input type="submit" value="Log In" name="submit" class="sub-btn">
        </form>
        <p>Don't have an account? <a href="register.php">Register</a> </p>
    </div>
</body>
</html>


