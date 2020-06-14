<?php

require_once ('./model/Clanarine.php');

class Clanarine {

    private $db;
    private $clanarina = array();

    public function __construct() {
        $this->db = DB::connect();
    }

    public function dohvatiClanarine() {
        $sql = "SELECT idClan,nazivClan,cijena,maxDolasci FROM clanarina";
        $r = $this->db->query($sql);
        while ($row = $r->fetch_assoc()) {
            $c = new Clanarina();
            $c->GetClanarId($row['idClan']);
            $c->GetClanarNaziv($row['nazivClan']);
            $c->GetClanarCijena($row['cijena']);
            $c->GetDolasci($row['maxDolasci']);
            
            $this->clanarina[] = $c;
        }

        return $this->clanarina;
    }

    public function brisiClanarine($idClan) {
        $sql = "DELETE FROM clanarina WHERE id=$idClan LIMIT 1";
        $this->db->query($sql);
    }

    public function unosClanarine($idClan,$nazivClan,$cijena,$maxDolasci) {
        $sql = "INSERT INTO clanarina(idClan,nazivClan,cijena,maxDolasci) VALUES ('$idClan,$nazivClan,$cijena,$maxDolasci')";
        $this->db->query($sql);
    }

}