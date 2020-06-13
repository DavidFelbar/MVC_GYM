<?php

require_once ('./model/Clanarine.php');

class Clanarine {

    private $db;
    private $clanarina = array();

    public function __construct() {
        $this->db = DB::connect();
    }

    public function dohvatiPrograme() {
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

    public function brisi($id) {
        $sql = "DELETE FROM clanarina WHERE id=$id LIMIT 1";
        $this->db->query($sql);
    }

    public function unos($naziv,$opisProg,$tipProg,$ocjena) {
        $sql = "INSERT INTO programi(nazivProg,opisProg,tipProg,ocjena) VALUES ('$naziv,$opisProg,$tipProg,$ocjena')";
        $this->db->query($sql);
    }

}