<?php

class Trener {

    private $idTren;
    private $imeTren;
    private $prezimeTren;
    private $idKor;
    private $idProg;

    public function __construct($idAdmin = false) {
        if ($idTren) {
            $db = DB::connect();
            $sql = "SELECT * FROM zaposlenici WHERE id = $idTren LIMIT 1";
            $r = $db->query($sql);
            $row = $r->fetch_assoc();
            // POSTAVI VRIJEDNOSTI ATRIBUTA
            $this->idTren = $row['idZap'];
            $this->imeTren = $row['imeZap'];
            $this->prezimeTren = $row['prezimeZap'];
            $this->idKor = $row['idKor'];
            $this->idProg = $row['idProg'];
        }
    }

    public function GetTrenId() {
        return $this->idTren;
    }

    public function GetTrenIme() {
        return $this->imeTren;
    }

    public function GetTrenPrezime() {
        return $this->prezimeTren;
    }

    public function GetIdKor() {
        return $this->idKor;
    }

    public function GetIdProg() {
        return $this->idProg;
    }

    public function SetTrenId($idTren) {
        $this->idTren = $idTren;
    }

    public function SetTrenIme($imeTren) {
        $this->imeTren = $imeTren;
    }

    public function SetTrenPrezime($prezimeTren) {
        $this->prezimeTren = $prezimeTren;
    }

    public function SetIdKor($idKor) {
        $this->idKor = $idKor;
    }

    public function SetIdProg($idProg) {
        $this->idProg = $idProg;
    }

}
include '../view/indexTrener.php';
