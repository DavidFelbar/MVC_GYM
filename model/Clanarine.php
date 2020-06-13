<?php

class Clanarina {

    private $idClan;
    private $nazivClan;
    private $cijena;
    private $maxDolasci;


    public function __construct($id = false) {
        if ($id) {
            $c = DB::connect();
            $sql = "SELECT * FROM clanarina WHERE id = $id LIMIT 1";
            $r = $c->query($sql);
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
   
    public function SetClanarId() {
         $this->idClan=$idClan;
    }

    public function  SetClanarNaziv() {
         $this->nazivClan=$nazivClan;
    }

    public function  SetClanarCijena() {
         $this->cijena=$cijena;
    }
    public function  SetClanarDolasci() {
         $this->maxDolasci=$maxDolasci;
    }
   
}
