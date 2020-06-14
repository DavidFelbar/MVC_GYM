<?php

include('./klase/DB.php');
include('./klase/Pomocna.php');
include ('./model/Program.php');
include('./controller/ProgramiController.php');
include ('./model/Clanarine.php');
include('./controller/ClanarineController.php');
include './model/Clanovi.php';
include './controlelr/ClanoviController.php';
include './model/Zaposlenik.php';
include './controller/ZaposlenikController.php';

if(isset($_COOKIE['username']))