<?php

session_start();

require 'database.php';

if (isset($_SESSION['user_id'])) 
{
    $records = $conn->prepare('SELECT id,email,pwd FROM user WHERE id=:id');
    $records->bindValue(':id',$_SESSION['user_id']);
    $records->execute();
    $results = $records->fetch(PDO::FETCH_ASSOC);

    $user = NULL;

    if(count($results)> 0)
    {
        $user = $results;
    }
}

?>

<!DOCTYPE html>
<html>
    
    <head>
        
        <title>My First App</title>
        
        <link rel="stylesheet" type="text/css" href="assets/css/style.css">
        
        <link href="https://fonts.googleapis.com/css?family=Comfortaa" rel="stylesheet">
    
    </head>
    
    <body>
        <div class="header">
            <a href="index.php">Your App Name</a>
        </div>

        <?php if( !empty($user) ): ?>
            <br />Welcome <?= $user['email']; ?>
            <br /><br />You are successfully logged in.
            <br /><br />
            <a href="logout.php">Logout?</a>
        <?php else: ?>

        <?php endif ?>

    <h1>Login or Register</h1>
    
    <a href="login.php">Login</a> or
    
    <a href="register.php">Register</a>
   
   </body>
</html>