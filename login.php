<?php
if(!empty($_POST['mail']) && !empty($_POST['password'])):

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
    <h1>Login</h1>
    <span>or <a href="register.php">register here</a></span>
    <form action="login.php" method="POST">
        <input type="text" placeholder="Enter Your Email" name="Email">
        <input type="password" placeholder="and password" name="password">
        <input type="submit">
    </form>
</body>
</html>