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
        function showMessage(string $message, string $category) {
            echo "<div class='{$category}'>{$message}</div>";
        }

        if(isset($_POST["submit"])) {
            $username = $_POST["username"];
            $password = $_POST["password"];
            $is_authenticated = false;
            $users = require 'database.php';

            if($username && $password) {
                foreach($users as $user) {
                    if($username == $user["username"] && $password == $user["password"]) {
                        $is_authenticated = true;
                    }
                }
                if($is_authenticated) {
                    showMessage("You have been logged, {$username}!", "success");
                } else {
                    showMessage("Username or password invalid!", "danger");
                }
            } else {
                showMessage("All fields are required!", "danger");
            }
        }
    ?>
    
    <div class="login-box box">
        <h1 class="title">Login</h1>
        <form action="index.php" method="post">
            <label>Username</label> <br>
            <input type="text" name="username"> <br>
            <label>Password</label> <br>
            <input type="password" name="password"> <br>
            <input type="submit" value="Log In" name="submit" class="sub-btn">
        </form>
        <p>Don't have an account? <a href="register.php">Register</a> </p>
    </div>
</body>
</html>


