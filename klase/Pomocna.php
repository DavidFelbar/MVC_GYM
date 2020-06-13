<?php

class Pomocna {

    public static function GetProgrami() {
        global $db;
        $programi = array();
        $r = $db->query("SELECT * FROM programi");
        while ($row = $r->fetch_assoc()) {
            $p = new Program();
            $p->GetId($row['idProg']);
            $p->GetNaziv($row['nazivProg']);
            $p->GetProgOpis($row['opisProg']);
            $p->GetProgTip($row['tipProg']);
            $p->GetProgOcj($row['ocjena']);
            $programi[] = $p;
        }
        return $programi;
    }

    public static function GetClanarine() {
        global $db;
        $clanarine = array();
        $r = $db->query("SELECT * FROM clanarine");
        while ($row = $r->fetch_assoc()) {
            $c = new Program();
            $c->GetClanarId($row['idClan']);
            $c->GetClanarNaziv($row['nazivClan']);
            $c-GetClanarCijena($row['cijena']);
            $c->GetClanarDolasci($row['maxDolasci']);
            
            $clanarine[] = $c;
        }
        return $clanarine;
    }

}
