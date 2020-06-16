<?php

session_start();





require_once ('./model/Clanarine.php');
require_once ('./model/Program.php');
require_once('./klase/Pomocna.php');
require_once('./klase/DB.php');
require_once ('./controller/ProgramiController.php');
$db = DB::connect();
$pr = new Programi();
$program = $pr->dohvatiSvePrograme();
//var_dump($p);
//$programi=Pomocna::GetProgrami($_SESSION['idTren']);
//$clanarine=Pomocna::GetClanarine();

include 'view/index.php';
echo'<table border="2" cellpadding = "5" cellspacing = "5" width=30%>';
echo '<tr>'.'<th>'. 'Naziv'.'</th>'.'<th>'  . 'Opis' . '</th>'. '<th>'. 'Tip programa' .'</th>'.'<th>'.'Ocjena' .'</th>'. '</tr>';
foreach ($program as $p) {

    echo '<tr>' . '<td>' . $p->GetProgNaziv() . '</td>';

    echo '<td>' . $p->GetProgOpis() . '</td>';
    echo '<td>' . $p->GetProgTip() . '</td>';
    echo '<td>' . $p->GetProgOcj() . '</td>' . '</tr>';
}
    echo '</table>';
    echo '<br>';
    


?>
