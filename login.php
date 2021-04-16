<?php
  require('header.php');
  require('config.php');
?>
<div class="container w-25">
    <form class="form-signin" action='<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>' method="post">
      <h2 class="form-signin-heading">User Login</h2><br/>
      <input type="text" class="form-control" name="username" placeholder="Username" required="" autofocus="" /><br/>
      <input type="password" class="form-control" name="password" placeholder="Password" required=""/><br/>
      <button class="btn btn-small btn-primary btn-block" type="submit">Login</button>  
      <div class="d-flex justify-content-between">
      <small>Not Registered? Register <a href="register.php">here</a></small>
      <small><a href="passwordreset.php">Forgot password</a></small>
      </div>
      
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
          $password = trim($_POST["password"]);
        }
        
        if(empty($username_err) && empty($password_err)){        
          $handle = fopen($file, 'r');
          if(!$handle){
            die("<p>Could not open password file");
          }
          
          while(! feof($handle)) {
            $line = fgets($handle, 1024);
            $user_pass = explode("|", $line);
            var_dump($user_pass);
            if($user_pass[0] == $username) {
              if(rtrim($user_pass[1]) == $password) {
                $match = 1;
                break;
              }
            }
            $match = 2; 
          }
          if($match == '1') {
            echo "<b>Login Success!</b>";
          } 
          if($match == '2') {
            echo "<b>Login Failed!</b>";
          } 
          fclose($handle);
        }
      // if(isset($_POST['username'])) {
      //     check_password($_POST['username'], $_POST['password']);
      // }
    } 
    ?>
</div>   