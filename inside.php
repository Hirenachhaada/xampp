<?php 
    session_start();
    
    include("connection.php");
    include("function.php");
    $user_data = check_login($con);
    
    ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post">
    <h1> hello </h1>
    <a href="login_form.php"><p>Logout</p></a>
</form>
</body>
</html>