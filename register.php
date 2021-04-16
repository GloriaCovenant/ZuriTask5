<?php
  require('header.php');
  require('config.php');
?>
<div class="container w-25">
    <form class="form-signin" action='<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>' method="post">
      <h2 class="form-signin-heading">User Registration</h2><br/>
      <input type="text" class="form-control" name="username" placeholder="Username" required="" autofocus="" /><br/>
      <input type="password" class="form-control" name="password" placeholder="Password" required=""/><br/>
      <button class="btn btn-small btn-primary btn-block" type="submit">Register</button>  
    </form>
    
    <?php 
    
      $username = $password = "";
      $username_err = $password_err = $write_err = "";
      if($_SERVER["REQUEST_METHOD"] == "POST"){
        if(empty(trim($_POST["username"]))){
            $username_err = "Please enter your Username";
        }else{
          $username = trim($_POST["username"]);
        }
        if(empty(trim($_POST["password"]))){
          $password_err = "Please enter your password.";
          //var_dump($password_err);
        }else{
          $password = trim($_POST["password"]).PHP_EOL;
        //   $password = md5($pwd);
        }
        if(empty($username_err) && empty($password_err)){        
          $handle = fopen($file, 'a+');
          if(fwrite($handle, $username)){
            $demarcate = "|";
            fwrite($handle, $demarcate);
            fwrite($handle, $password);
            
            echo "<b>Registration Successful !!!</b>";
          }else{
            $write_err = "Something went wrong. Try again";
          }
        }
      }
    ?>
</div>   