<?php
require_once('../klase/DB.php');
$db = DB::connect();


$username = $_POST['username'];
$pass = ($_POST['pass']);


$upit = "SELECT * FROM clanovi WHERE usernameClana = '$username' AND 
		 passwordClana = '$pass' LIMIT 1";
$r = $db->query($upit);


if ($r && $r->num_rows == 1) {
    session_start();
    $row = $r->fetch_assoc();
    $_SESSION['login'] = $username;
    $_SESSION['idProg'] = $row['idProg'];
    $_SESSION['idClana'] = $row['idClana'];
    
    
    header("Location: ../Admin/Clanovi.php");
} else {
    header("Location: ../index.php");
}
?>
