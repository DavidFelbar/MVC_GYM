<?php
    
    include '../model/Register.php';
    include '../controller/RegisterController.php';
    include '../model/Clanovi.php';
   $reg=new Registracija();
   
    $reg->registrirajClana();
    
?>