<?php
include('./klase/DB.php');
include('./klase/Pomocna.php');

include('./controller/ProgramiController.php');

 $db=Db::connect();
 $programi=Program::dohvatiPrograme();
?>