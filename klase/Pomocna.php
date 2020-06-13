<?php

class Pomocna {

    public static function GetProgrami() {
        global $db;
        $programi = array();
        $r = $db->query("SELECT * FROM programi");
        while ($row = $r->fetch_assoc()) {
            $p = new Program();
            $p->SetProgId($row['idProg']);
            $p->SetProgNaziv($row['nazivProg']);
            $p->SetProgOpis($row['opisProg']);
            $p->SetProgTip($row['tipProg']);
            $p->SetProgOcj($row['ocjena']);
            $programi[] = $p;
        }
        return $programi;
    }

    public static function GetClanarine() {
        global $db;
        $clanarine = array();
        $r = $db->query("SELECT * FROM clanarina");
        while ($row = $r->fetch_assoc()) {
            $c = new Clanarina();
            $c->SetClanarId($row['idClan']);
            $c->SetClanarNaziv($row['nazivClan']);
            $c->SetClanarCijena($row['cijena']);
            $c->SetClanarDolasci($row['maxDolasci']);
            
            $clanarine[] = $c;
        }
        return $clanarine;
    }

}
