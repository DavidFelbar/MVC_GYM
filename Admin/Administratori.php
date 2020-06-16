<?php

// OBAVEZNO ZA PRAĆENJE KORISNIKOVE SESIJE KROZ VIŠE ZAHTJEVA
session_start();

// UKLJUCI POTREBNE DATOTEKE
require_once('../klase/DB.php');
require_once('../klase/Pomocna.php');
require_once('../model/Zaposlenik.php');
require_once('../model/Clanovi.php');
require_once('../controller/ClanoviController.php');
require_once('../controller/ZaposlenikController.php');
require_once('../model/Clanarine.php');
require_once('../controller/ClanarineController.php');

// PROVJERI DA LI JE PRIJAVLJEN (LOGIRAN) I IMA LI ODGOVARAJUCU RAZINU PRIVILEGIJA
//Korisnik::logiran(3);
// PRIPREMI $a (TRAZENU AKCIJU), AKO JE NEMA POSTAVI NA '' (default u switch-u)
if (!isset($_GET['a'])) {
    $a = '';
} else {
    $a = $_GET['a'];
}

// ADMINISTRATOR RADI CRUD NAD KATEGOIJAMA - INSTANCIRAMO KATEGORIJE MANAGER
$cl = new Clanarine();
$cc = new Clanovi();
$zp = new Zaposlenici();

// GLAVNI SWITCH
switch ($a) {
    case 'createTrener': $zp->unosZaposlenika($_POST['usernameTrenera'],$_POST['passTrenera'],$_POST['imeTrenera'], $_POST['prezimeTrenera'],2);
         
         header('Location: Administratori.php');
        break;
    case 'deleteTrener': $zp->brisiZaposlenike($_GET['idZap']);
        header('Location: Administratori.php');
        break;
        
    case 'createClanarina': $cl->unosClanarine($_POST['naziv'], $_POST['cijena'], $_POST['maxdolasci']);
        header('Location: Administratori.php');
        break;



    case 'updateClanarina': if (!$_POST) {
            $uc = new Clanarina($_GET['idClanarine']);
            $template = 'ad_update';
        } else {
            $uc = new Clanarina();
            $uc->SetClanarId($_GET['id']);
            $uc->SetClanarNaziv($_POST['naziv']);
            $uc->SetClanarCijena($_POST['cijena']);
            $uc->SetDolasci($_POST['maxdolasci']);

            $cl->izmjeniClanarine($uc);
            header('Location: Administratori.php');
        }
        break;

    case 'deleteClanarina': $cl->brisiClanarine($_GET['idClanarine']);
        header('Location: Administratori.php');
        break;



    case 'createClan':
        $rez=explode(',',$_POST['clanarina']);
        $cc->unosClanova($_POST['usernameClana'], password_hash($_POST['passwordClana'],PASSWORD_DEFAULT), $_POST['imeClana'], $_POST['prezimeClana'], $rez[0], $rez[1]);
        header('Location: Administratori.php');
        break;



    case 'deleteClan': $cc->brisiClana($_GET['idClana']);
        header('Location: Administratori.php');
        break;
    
    case 'dolazakClan': $cc->dolazakClana($_GET['dolasci'],$_GET['idClana']);
        
        header('Location: Administratori.php');
        break;


    default : $clanarine = $cl->dohvatiClanarine();
        $clan = $cc->dohvatiClanove();
        $trener=$zp->dohvatiZaposlenike();


        $template = 'ad_view';
}

// UKLJUCI VIEW
include './indexAdmin.php';
?>
