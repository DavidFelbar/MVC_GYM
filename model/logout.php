<?php
session_start();
unset($_SESSION['login']);
unset($_SESSION['tip']);
session_destroy();
setcookie("Status",null,time()-1,'/');
header("Location: ../index.php");
?>

