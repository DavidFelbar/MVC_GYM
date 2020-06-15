<?php
session_start();
/*



require_once ('./model/Admin.php');

require_once ('./model/Clanovi.php');
require_once ('./model/Login.php');
require_once ('./model/Program.php');
require_once ('./model/Trener.php');
require_once ('./model/aLogin.php');
*/
require_once ('./model/Clanarine.php');
require_once ('./model/Program.php');
require_once('./klase/Pomocna.php');
require_once('./klase/DB.php');
 $db=DB::connect();
 
 $programi=Pomocna::GetProgrami($_SESSION['idTren']);
 $clanarine=Pomocna::GetClanarine();
 
 include 'view/index.php';
?>