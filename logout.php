<?php

session_start();
session_destroy();

echo "Logout successful";

// header("Location: http://www.example.com/another-page.php");
header("Location: http://localhost/PHPCodes/ZuriTask5/login.php");

exit();

?>