<?php
session_start();
require_once('../klase/DB.php');
require_once('../klase/Pomocna.php');
require_once('../model/Zaposlenik.php');
require_once('../model/Program.php');
require_once('../controller/ProgramiController.php');

if(!isset($_GET['a'])) { $a = ''; } else { $a = $_GET['a']; }

$pr = new Programi();


switch($a) 
{
    case 'create': $pr->unosPrograma($_POST['nazivProg'],$_POST['opisProg'],$_POST['tipProg'],$_GET['idZap']); 
		   header('Location: Treneri.php');
		   break;
                    
                    
				   
    case 'update': if(!$_POST){
			$pg = new Program($_GET['id']);
			$template = 'tr_update';
                   }
                   else{
                       $pg = new Program($_GET['id']);
                       $pg->SetProgID($_GET['id']);
                       $pg->SetProgNaziv($_POST['nazivProg']);
                       $pg->SetProgOpis($_POST['opisProg']);
                       $pg->SetProgTip($_POST['tipProg']);
                       
                       $pr->izmjeniPrograme($pg);
                       header('Location: Treneri.php'); 
                   }		
                   break;
	
    case 'delete': $pr->brisiProgram($_GET['id']);
        	   header('Location: Treneri.php'); 
		   break;
				   
    default : 	   
                    $program = $pr->dohvatiPrograme($_SESSION['idZap']);
                    $template = 'tr_view'; 	  
}

include './indexTrener.php';

