<?php


class Clanarine {

    private $db;
    private $clanarine = array();
    private $clanarina;
    public function __construct() {
        $this->db = DB::connect();
    }

    public function dohvatiClanarine() {
        $sql = "SELECT idClan,nazivClan,cijena,maxDolasci FROM clanarina";
        $r = $this->db->query($sql);
        while ($row = $r->fetch_assoc()) {
            $c = new Clanarina();
            $c->SetClanarId($row['idClan']);
            $c->SetClanarNaziv($row['nazivClan']);
            $c->SetClanarCijena($row['cijena']);
            $c->SetDolasci($row['maxDolasci']);
            
            $this->clanarine[] = $c;
        }

        return $this->clanarine;
    }

    public function izmjeniClanarine($clanarina){
		$id = $clanarina->GetClanarId();
		$naziv = $clanarina->GetClanarNaziv();
                $cijena=$clanarina->GetClanarCijena();
                $dolasci=$clanarina->GetDolasci();
		$sql = "UPDATE clanarina SET nazivClan='$naziv', cijena=$cijena, maxDolasci=$dolasci WHERE idClan=$id";
		$this->db->query($sql);
	}
    public function brisiClanarine($idClan) {
        $sql = "DELETE FROM clanarina WHERE idClan=$idClan LIMIT 1";
        $this->db->query($sql);
    }

    public function unosClanarine($nazivClan,$cijena,$maxDolasci) {
        
        $sql = "INSERT INTO clanarina(nazivClan,cijena,maxDolasci) VALUES ('$nazivClan',$cijena,$maxDolasci)";
        $this->db->query($sql);
        
    }

}
