<?php
session_start();
require_once('../klase/DB.php');
require_once('../klase/Pomocna.php');
require_once('../model/Clanovi.php');
require_once('../model/Program.php');
require_once('../model/Zaposlenik.php');
require_once('../controller/ProgramiController.php');
require_once('../controller/ClanoviController.php');
require_once('../controller/ZaposlenikController.php');


if(!isset($_GET['a'])) { $a = ''; } else { $a = $_GET['a']; }

$pr = new Programi();
$pp = new Programi();
$cl = new Clanovi();
$zp = new Zaposlenici();



switch($a) 

{
    case 'ocjena':if (!$_POST) {
            $pg = new Program($_GET['id']);
            $template = 'cl_update';
        } else {
            $pg = new Program($_GET['id']);
            $pg->SetProgOcj($_POST['ocjena']);

            $pr->izmjeniPrograme($pg);
            header('Location: Clanovi.php');
        }
        break;

    case 'update': $cll = new Clan($_SESSION['idClana']);
        $cll->SetIdProg($_GET['id']);
        $cl->izmjeniClanove($cll);
        $_SESSION['idProg'] = $_GET['id'];
        header('Location: Clanovi.php');
        break;


    default :
        
       $program = $pp->dohvatiProgram($_SESSION['idProg']);
        $programi = $pr->dohvatiSvePrograme();
       $zaposlenik = $zp->dohvatiZaposlenike();
       
        $template = 'cl_view';
}
include './indexClanovi.php';
