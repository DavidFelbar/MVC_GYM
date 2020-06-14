<?php

// OBAVEZNO ZA PRAĆENJE KORISNIKOVE SESIJE KROZ VIŠE ZAHTJEVA
session_start();

// UKLJUCI POTREBNE DATOTEKE
require_once('../pomocne/Db.php');
require_once('../klase/Pomocne.php');
require_once('../models/Zaposlenik.php');
require_once('../models/Clanarine.php');
require_once('../controllers/ClanarineController.php');

// PROVJERI DA LI JE PRIJAVLJEN (LOGIRAN) I IMA LI ODGOVARAJUCU RAZINU PRIVILEGIJA
//Korisnik::logiran(3);

// PRIPREMI $a (TRAZENU AKCIJU), AKO JE NEMA POSTAVI NA '' (default u switch-u)
if(!isset($_GET['a'])) { $a = ''; } else { $a = $_GET['a']; }

// ADMINISTRATOR RADI CRUD NAD KATEGOIJAMA - INSTANCIRAMO KATEGORIJE MANAGER
$cl = new Clanarine();

// GLAVNI SWITCH
switch($a) 
{
    case 'create': $cl->unosClanarine($_POST['naziv']); 
		   header('Location: administratori.php');
		   break;
				   
    case 'update': if(!$_POST){
			$k = new Kategorija($_GET['id']);
			$template = 'ad_update';
                   }
                   else{
                       $k = new Kategorija();
                       $k->setId($_GET['id']);
                       $k->setNaziv($_POST['naziv']);
                       $km->izmjeni($k);
                       header('Location: administratori.php'); 
                   }		
                   break;
	
    case 'delete': $km->brisi($_GET['id']);
        	   header('Location: administratori.php'); 
		   break;
				   
    default : 	   $kategorije = $km->dohvatiKategorije();
		   $template = 'ad_pregled'; 	  
}

// UKLJUCI VIEW
include '../view/indexAdmin.php';
?>
