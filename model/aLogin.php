<?php

require_once('../klase/DB.php');
$db = Db::connect();

$username = $_POST['username'];
$pass = ($_POST['pass']);

$upit = "SELECT * FROM korisnici WHERE username='$username' AND 
		 password = '$pass' LIMIT 1";
$r = $db->query($upit);

// JE LI PRONAĐEN?
if ($r && $r->num_rows == 1) {
    session_start();
    $row = $r->fetch_assoc();
    $_SESSION['login'] = $username;
    $_SESSION['tip'] = $row['idKor'];

    switch ($row['vk_tip']) {
        case 1: header("Location: indexAdmin.php");
            break;
        case 2: header("Location: indexZaposlenici.php");
            break;
        default: header("Location: index.php");
    }
}
    else  {
    header("Location: index.php");
}
?>


