<?php

class Admin {

    private $idAdmin;
    private $imeAdmin;
    private $prezimeAdmin;
    private $idKor;
    private $idProg;

    public function __construct($idAdmin = false) {
        if ($idAdmin) {
            $db = DB::connect();
            $sql = "SELECT * FROM zaposlenici WHERE id = $idAdmin LIMIT 1";
            $r = $db->query($sql);
            $row = $r->fetch_assoc();
            // POSTAVI VRIJEDNOSTI ATRIBUTA
            $this->idAdmin = $row['idZap'];
            $this->imeAdmin = $row['imeZap'];
            $this->prezimeAdmin = $row['prezimeZap'];
            $this->idKor = $row['idKor'];
            $this->idProg = $row['idProg'];
        }
    }

    public function GetAdminnId() {
        return $this->idAdmin;
    }

    public function GetAdminIme() {
        return $this->imeAdmin;
    }

    public function GetAdminPrezime() {
        return $this->prezimeAdmin;
    }

    public function GetIdKor() {
        return $this->idKor;
    }

    public function GetIdProg() {
        return $this->idProg;
    }

    public function SetTrenId($idAdmin) {
        $this->idAdmin = $idAdmin;
    }

    public function SetTrenIme($imeAdmin) {
        $this->imeAdmin = $imeAdmin;
    }

    public function SetTrenPrezime($prezimeAdmin) {
        $this->prezimeAdmin = $prezimeAdmin;
    }

    public function SetIdKor($idKor) {
        $this->idKor = $idKor;
    }

    public function SetIdProg($idProg) {
        $this->idProg = $idProg;
    }

}