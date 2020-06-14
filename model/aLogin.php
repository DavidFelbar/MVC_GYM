<?php

require_once('../klase/DB.php');
$db = Db::connect();

$username = $_POST['username'];
$pass = ($_POST['pass']);
echo $username;
$upit = "SELECT * FROM clanovi WHERE usernameClana='$username' AND 
		 passwordClana = '$pass' LIMIT 1";
$r = $db->query($upit);

// JE LI PRONAĐEN?
if ($r && $r->num_rows == 1) {
    session_start();
    $row = $r->fetch_assoc();
    $_SESSION['login'] = $username;
    $_SESSION['tip'] = $row['idKor'];

    switch ($row['idKor']) {
        case 1: header("Location: ../view/indexAdmin.php");
            break;
        case 2: header("Location: ../view/indexZaposlenici.php");
            break;
        default: header("Location: ../view/index.php");
    }
}
    else  {
    header("Location: index.php");
}
?>


