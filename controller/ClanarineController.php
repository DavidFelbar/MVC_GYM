<?php


class Clanarine {

    private $db;
    private $clanarine = array();
    private $Clanarina;
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

    public function izmjeniClanarine($Clanarina){
		$id = $Clanarina->GetClanarId();
		$naziv = $Clanarina->GetClanarNaziv();
                $cijena=$Clanarina->GetClanarCijena();
                $dolasci=$Clanarina->GetDolasci();
		$sql = "UPDATE clanarina SET nazivClan='$naziv',cijena='$cijena',maxDolasci='$dolasci' WHERE id='$id';";
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