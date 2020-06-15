<?php

// OBAVEZNO ZA PRAĆENJE KORISNIKOVE SESIJE KROZ VIŠE ZAHTJEVA
session_start();

// UKLJUCI POTREBNE DATOTEKE
require_once('../klase/DB.php');
require_once('../klase/Pomocna.php');
require_once('../model/Zaposlenik.php');
require_once('../model/Clanarine.php');
require_once('../controller/ClanarineController.php');

// PROVJERI DA LI JE PRIJAVLJEN (LOGIRAN) I IMA LI ODGOVARAJUCU RAZINU PRIVILEGIJA
//Korisnik::logiran(3);

// PRIPREMI $a (TRAZENU AKCIJU), AKO JE NEMA POSTAVI NA '' (default u switch-u)
if(!isset($_GET['a'])) { $a = ''; } else { $a = $_GET['a']; }

// ADMINISTRATOR RADI CRUD NAD KATEGOIJAMA - INSTANCIRAMO KATEGORIJE MANAGER
$cl = new Clanarine();

// GLAVNI SWITCH
switch($a) 
{
    case 'create': $cl->unosClanarine($_POST['naziv'],$_POST['cijena'],$_POST['maxdolasci']); 
		   header('Location: Administratori.php');
		   break;
                    
                    
				   
    case 'update': if(!$_POST){
			$uc = new Clanarina($_GET['id']);
			$template = 'ad_update';
                   }
                   else{
                       $uc = new Clanarina();
                       $uc->SetClanarId($_GET['id']);
                       $uc->SetClanarNaziv($_POST['naziv']);
                       $uc->SetClanarCijena($_POST['cijena']);
                       $uc->SetDolasci($_POST['maxdolasci']);
                       
                       $cl->izmjeniClanarine($uc);
                       header('Location: Administratori.php'); 
                   }		
                   break;
	
    case 'delete': $cl->brisiClanarine($_GET['id']);
        	   header('Location: Administratori.php'); 
		   break;
				   
    default : 	   
                   $clanarine = $cl->dohvatiClanarine();
		   $template = 'ad_view'; 	  
}

// UKLJUCI VIEW
include './indexAdmin.php';
?>
