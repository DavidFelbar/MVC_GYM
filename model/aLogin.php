<?php

require_once('../klase/DB.php');
$db = Db::connect();

$username = $_POST['username'];
$pass = ($_POST['pass']);
echo $username;
$upit = "SELECT * FROM zaposlenici WHERE usernameZap='$username' AND 
		 passwordZap = '$pass' LIMIT 1";
$r = $db->query($upit);

// JE LI PRONAĐEN?
if ($r && $r->num_rows == 1) {
    session_start();
    $row = $r->fetch_assoc();
    $_SESSION['userClan'] = $username;
    $_SESSION['idKor'] = $row['idKor'];
    $_SESSION['idZap']=$row['idZap'];
    switch ($row['idKor']) {
        case 3: header("Location: ../Admin/Administratori.php");
            break;
        case 2: 
            
            header("Location: ../Admin/Treneri.php");
            break;
        default: header("Location: ../index.php");
    }
}
    else  {
    header("Location: ../index.php");
}
?>


