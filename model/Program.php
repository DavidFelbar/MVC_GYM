<?php

class Program {

    private $id;
    private $naziv;
    private $opis;
    private $tip;
    private $ocj;
    private $idTren;

    public function __construct($id = false) {
        if ($id) {
            $db = DB::connect();
            $sql = "SELECT * FROM programi WHERE idProg = $id LIMIT 1";
            $r = $db->query($sql);
            $row = $r->fetch_assoc();

            // POSTAVI VRIJEDNOSTI ATRIBUTA
            $this->id = $row['idProg'];
            $this->naziv = $row['nazivProg'];
            $this->opis = $row['opisProg'];
            $this->tip = $row['tipProg'];
            $this->idTren = $row['idTren'];
            $this->ocj = $row['ocjena'];
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
        return $this->ocj;
    }

    public function GetIdTren() {
        return $this->idTren;
    }

    public function SetProgID($id) {
        $this->id = $id;
    }

    public function SetProgNaziv($naziv) {
        $this->naziv = $naziv;
    }

    public function SetProgOpis($opis) {
        $this->opis = $opis;
    }

    public function SetProgTip($tip) {
        $this->tip = $tip;
    }

    public function SetProgOcj($ocjena) {
        $this->ocj = $ocjena;
    }
    public function SetIdTren($idTren) {
        $this->idTren = $idTren;
    }

}
