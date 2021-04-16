<?php
  require('header.php');
  require('config.php');
?>
<div class="container w-25">
    <form class="form-signin" action='<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>' method="post">
      <h2 class="form-signin-heading">Password Reset</h2><br/>
      <input type="text" class="form-control" name="username" placeholder="Username" required="" autofocus="" /><br/>
      <input type="text" class="form-control" name="password" placeholder="Password" required=""/><br/>
      <input type="text" class="form-control" name="passwordconfirm" placeholder="Confirm password" required=""/><br/>
      <button class="btn btn-small btn-primary btn-block" type="submit">Reset</button>  
    </form>
    
    <?php
      $username = $password = $password_confirm = "";
      $username_err = $password_err = $password_confirm_err = $write_err = "";
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
        if(empty(trim($_POST["passwordconfirm"]))){
          $password_confirm_err = "Please enter your password.";
          //var_dump($password_err);
        }else{
          $password_confirm = trim($_POST["passwordconfirm"]);
        }
        
        // var_dump($username);
        // var_dump($password);

        if(empty($username_err)){
          // $url = "auth.txt";
          // $string = file_get_contents($url);

          // $oldMessage = ex;
          // $deletedFormat = '';

          // $str=str_replace($oldMessage, $deletedFormat,$str);
          // $strreplace = str_replace;
          $handle = fopen($file, 'a+');
          $replaced = false;
          $match = 0;
          $delete = '';

          while (!feof($handle)) {
            $line = fgets($handle, 1024);
            
            $user_pass = explode("|", $line);

            if($user_pass[0] == $username) {
              // if(rtrim($user_pass[1]) == $password) {
                $match = 1;
                break;
              }
            }

          
          if($match == '1') {
            // $content = file_get_contents('auth.txt');
            
            // var_dump($content);
            // var_dump($user_pass);
            // var_dump(gettype($user_pass));
            $old_user = $user_pass[0];
            $old_password = trim($user_pass[1]);
            // var_dump($old_user);
            // var_dump($old_password);
            // $newString = json_encode($user_pass);
            // var_dump($newString);
            $old_password = $new_password = $delete;
            $content = str_replace($old_password, '', $file);
            var_dump(file_put_contents('auth.txt', $content));
            // var_dump($content);
            
            // var_dump($username);
            // var_dump($password);
            // var_dump(gettype($user_pass));
            // var_dump(gettype($new_user));
            // var_dump($user_pass);
            // $content = str_replace($password, '', $content);
            // var_dump(file_put_contents('auth.txt', $content));
            // $new_user = $username;
            // $new_password = $password;
            // if(fwrite($handle, $new_user)){
              // $demarcate = "|";
              // fwrite($handle, $demarcate);
              // fwrite($handle, $new_password);
              
              // echo "<b>Reset Successful !!!</b>";
            // }else{
              // $write_err = "Something went wrong. Try again";
            // }
            // var_dump(rtrim($user_pass));
            // echo "<b>Login Success!</b>";
          } 

          //   $line = fgets($handle);
          //   $textfile[] = explode("|", $line);
          //   $olddata = json_encode($textfile);
          //   if (stristr($line, $olddata)) {
          //     $line = "replacement line!\n";
          //     $replaced = true;
          //   }
          //   fputs($handle, $line);
          // }
          // if(!$handle){
            // die("<p>Could not open file");
          // }
          // var_dump($handle);
          
          // while(! feof($handle)) {


            
            // $line = fgets($handle, 1024);
            // $textfile = explode("|", $line);
            // var_dump($textfile);
            // var_dump($textfile[0]);
            // if($textfile[0] == $username) {  
                // $match = 1;
                // $str = str_replace($password, $textfile[1],$handle);
                // var_dump($textfile[0]);
                
                // $oldPassword = trim($textfile[1]);
                // var_dump($oldPassword);
                // var_dump($password);
                // $str = str_replace($oldPassword, $password,$textfile);
                // var_dump($str);
                // break;
            }
          }
            // if(! $textfile[0] == $username){
              // $match = 2;
              // break;
            // }
            
            // $match = 2;
          // }
          // if($match == '1') {
            // $retrieved = implode("|", $textfile);
            // var_dump($retrieved);
            // $str = str_replace($password, $textfile[1],$retrieved);
            // file_put_contents('auth.txt', $str);
            
            // $new_password = $retrieved[1];
            // $new_password = $password;
            
            
            // fwrite($handle, $new_password);
            // file_put_contents('auth.txt', $new_password);
            // echo "<b>Your password has been reset successfully!</b>";
          // } 
          // if($match == '2') {
          //   echo "<b>This record does not exist!</b>";
          // } 
          // fclose($handle);
        // }
      // }
        // $msgid = $_GET['msgid'];

        // $oldPassword = '';
        
        // $deletedFormat = '';
        
        //read the entire string
        // $str = file_get_contents('auth.txt');
        
        //replace something in the file string - this is a VERY simple example
        // $retrievedstring = str_replace($oldMessage, $deletedFormat,$str);
        
        //write the entire string
        // file_put_contents('msghistory.txt', $str);
        
    ?>