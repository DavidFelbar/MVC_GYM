<?php
require_once('../klase/DB.php');
$db = DB::connect();


$username = $_POST['username'];
$pass = ($_POST['pass']);


$upit = "SELECT * FROM clanovi WHERE username = '$username' AND 
		 password = '$pass' LIMIT 1";
$r = $db->query($upit);


if ($r && $r->num_rows == 1) {
    session_start();
    $row = $r->fetch_assoc();
    $_SESSION['login'] = $username;
    header("Location: ../view/indexClanovi.php");
} else {
    //header("Location: ../index.php");
}
?>
