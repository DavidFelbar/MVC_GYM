<?php

class Clanarina {

    private $idClan;
    private $nazivClan;
    private $cijena;
    private $maxDolasci;


    public function __construct($idClan = false) {
        if ($idClan) {
            $db = DB::connect();
            $sql = "SELECT * FROM clanarina WHERE id = $id LIMIT 1";
            $r = $db->query($sql);
            $row = $r->fetch_assoc();
            // POSTAVI VRIJEDNOSTI ATRIBUTA
            $this->idClan = $row['idClan'];
            $this->nazivClan = $row['nazivClan'];
            $this->cijena=$row['cijena'];
            $this->maxDolasci=$row['maxDolasci'];
          
        }
    }

    public function GetClanarId() {
        return $this->idClan;
    }

    public function  GetClanarNaziv() {
        return $this->nazivClan;
    }

    public function  GetClanarCijena() {
        return $this->cijena;
    }
    public function  GetClanarDolasci() {
        return $this->maxDolasci;
    }
   
    public function SetClanarId($idClan) {
         $this->idClan=$idClan;
    }

    public function  SetClanarNaziv($nazivClan) {
         $this->nazivClan=$nazivClan;
    }

    public function  SetClanarCijena($cijena) {
         $this->cijena=$cijena;
    }
    public function  SetClanarDolasci($maxDolasci) {
         $this->maxDolasci=$maxDolasci;
    }
   
}
