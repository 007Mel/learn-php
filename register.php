<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Register</title>
</head>
<body>
    <?php 
        require_once __DIR__ . '/utils.php';

        if(isset($_POST["sign"])) {
            $username = $_POST["username"];
            $email = $_POST["email"];
            $password = $_POST["password"];
            $confirmPassword = $_POST["confirm_password"];
            
        }
    ?>
    <div class="registration-box box">
        <h1 class="title">Registration</h1>
        <form action="register.php" method="post">
            <label>Username</label> <br>
            <input type="text" name="username"> <br>
            <label>Email</label> <br>
            <input type="text" name="username"> <br>
            <label>Password</label> <br>
            <input type="password" name="password"> <br>
            <label>Confirm Password</label> <br>
            <input type="password" name="confirm_password"> <br>
            <input type="submit" value="Sign Up" name="sign" class="sub-btn">
        </form>
        <p>Already have an account? <a href="index.php">Login</a> </p>
    </div>
</body>
</html>