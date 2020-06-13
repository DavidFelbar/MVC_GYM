<?php

class Program {

    private $id;
    private $naziv;
    private $opis;
    private $tip;
    private $ocj;

    public function __construct($id = false) {
        if ($id) {
            $c = DB::connect();
            $sql = "SELECT * FROM programi WHERE id = $id LIMIT 1";
            $r = $c->query($sql);
            $row = $r->fetch_assoc();
            // POSTAVI VRIJEDNOSTI ATRIBUTA
            $this->id = $row['idProg'];
            $this->naziv = $row['nazivProg'];
            $this->opis=$row['opisProg'];
            $this->tip=$row['tipProg'];
            $this->ocjena=$row['tipProg'];
        }
    }

    public function GetProgID() {
        return $this->id;
    }

    public function GetProgNaziv() {
        return $this->naziv;
    }

    public function GetProgOpis() {
        return $this->opis;
    }
    public function GetProgTip() {
        return $this->tip;
    }
    public function GetProgOcj() {
        return $this->ocjena;
    }

    public function SetProgID() {
         $this->id=$id;
    }

    public function SetProgNaziv() {
         $this->naziv=$naziv;
    }

    public function SetProgOpis() {
         $this->opis=$opis;
    }
    public function SetProgTip() {
         $this->tip=$tip;
    }
    public function SetProgOcj() {
         $this->ocjena=$ocjena;
    }
}
