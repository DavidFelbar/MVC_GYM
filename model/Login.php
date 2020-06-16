<?php
require_once('../klase/DB.php');
$db = DB::connect();
session_start();

$username = $_POST['username'];
$pass = ($_POST['pass']);


$upit = "SELECT * FROM clanovi WHERE usernameClana = '$username' AND 
		 passwordClana = '$pass' LIMIT 1";
$r = $db->query($upit);


if ($r && $r->num_rows == 1) {
    
    $row = $r->fetch_assoc();
    $_SESSION['login'] = $username;
    $_SESSION['idProg'] = $row['idProg'];
    $_SESSION['idClana'] = $row['idClana'];
    $idK=$row['idKor'];
    $upit2="SELECT * from tip_korisnika where idKor=$idK";
    $i=$db->query($upit2);
    $red=$i->fetch_assoc();
    $cookieName="Status";
    setcookie($cookieName, $red['tipKor'],time() + (86400 * 30),'/');
    
    header("Location: ../Admin/Clanovi.php");
} else {
    header("Location: ../index.php");
}
?>
