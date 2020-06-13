<?php
include('./klase/DB.php');
include('./klase/Pomocna.php');
include ('./model/Program.php');
include('./controller/ProgramiController.php');
include ('./model/Clanarine.php');
include('./controller/ClanarineController.php');

 $db=DB::connect();

 $programi=Pomocna::GetProgrami();
 $clanarine=Pomocna::GetClanarine();
 var_dump($programi,$clanarine);
?>