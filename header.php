<!doctype html>
<html lang="en">
  <head>
    <title>Authentication System</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
    <div class="text-center bg-primary" id="header">
        <h1><?php echo "Authentication"; ?></h1>
        <a class="text-white mr-2" href="login.php">Login</a>
        <a class="text-white" href="logout.php">Logout</a>

        <?php
        session_start();
        require('config.php');
        // if(isset($_SESSION["username"])){
        //     if("[<a href='login.php'>login</a>]"){
        //         echo "[<a href='logout.php'>logout</a>]";    
        //         echo "----";
        //         echo "[<a href='addentry.php'>add entry</a>]";
        //         echo "[<a href='addcat.php'>add category</a>]";
        //     }            
        // }
        // else{
        //     echo "[<a href='login.php'>login</a>]";
        // }
        ?>
    </div>
    <div id="main">
