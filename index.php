<?php
include('./klase/DB.php');
include('./klase/Pomocna.php');
include ('./model/Program.php');
include('./controller/ProgramiController.php');
include ('./model/Clanarine.php');
include('./controller/ClanarineController.php');

include './model/Clanovi.php';
include './controller/ClanoviController.php';
 $db=DB::connect();
 
 $programi=Pomocna::GetProgrami();
 $clanarine=Pomocna::GetClanarine();
 
 include './view/index.php';
?>