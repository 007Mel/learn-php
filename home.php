<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Homepage</title>
</head>
<body>
    <?php
        session_start();
    ?>
    <div class="home-box box">
        <?php echo "Welcome <span>{$_SESSION["name"]}</span>"; ?>
    </div>
</body>
</html>

