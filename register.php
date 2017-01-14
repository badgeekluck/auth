<?php

require 'database.php';

$message = '';

if(!empty($_POST['email']) && !empty($_POST['pwd'])):

    //Enter the new user in the database
    $sql = "INSERT INTO user (email,pwd) VALUES (:email, :pwd)";
    $stmt = $conn->prepare($sql);

    $stmt->bindValue(':email', $_POST['email']);
    $stmt->bindValue(':pwd', password_hash($_POST['pwd'],PASSWORD_BCRYPT));  

    if( $stmt->execute() ):
        $message='Successfully created new user';
    else:
        $message='Sorry there must have been an issue creating new user';
    endif;


endif;

?>
<!DOCTYPE html>

<html>

<head>
    <title>Login Below</title>
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Comfortaa" rel="stylesheet">

</head>

<body>
    <div class="header">

        <a href="index.php">Your App Name</a>

    </div>

    <?php if(!empty($message)); ?>
        <p><?= $message ?></p>
    <? endif ?>

    <h1>Register</h1>

    <span>or <a href="login.php">login here</a></span>

    <form action="register.php" method="POST">

        <input type="text" placeholder="Enter Your Email" name="Email">

        <input type="password" placeholder="and password" name="pwd">

        <input type="password" placeholder="confirm password" name="confirm_password">

        <input type="submit">

    </form>
</body>
</html>
