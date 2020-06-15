<?php


class Programi {

    private $db;
    private $programi = array();
    private $program;
    public function __construct() {
        $this->db = DB::connect();
    }
    public function dohvatiSvePrograme() {
        $sql = "SELECT idProg, nazivProg,opisProg,tipProg,ocjena,idTren FROM programi ORDER BY idTren";
        $r = $this->db->query($sql);
        while ($row = $r->fetch_assoc()) {
            $p = new Program();
            $p->SetProgId($row['idProg']);
            $p->SetProgNaziv($row['nazivProg']);
            $p->SetProgOpis($row['opisProg']);
            $p->SetProgTip($row['tipProg']);
            $p->SetProgOcj($row['ocjena']);
            $p->SetIdTren($row['idTren']);
            $this->programi[] = $p;
        }

        return $this->programi;
    }

    public function dohvatiPrograme($idTren) {
        $sql = "SELECT idProg, nazivProg,opisProg,tipProg,ocjena,idTren FROM programi where idTren=$idTren";
        $r = $this->db->query($sql);
        while ($row = $r->fetch_assoc()) {
            $p = new Program();
            $p->SetProgId($row['idProg']);
            $p->SetProgNaziv($row['nazivProg']);
            $p->SetProgOpis($row['opisProg']);
            $p->SetProgTip($row['tipProg']);
            $p->SetProgOcj($row['ocjena']);
            $p->SetIdTren($row['idTren']);
            $this->programi[] = $p;
        }

        return $this->programi;
    }
      public function dohvatiProgram($idProg) {
        $sql = "SELECT idProg, idTren,nazivProg,opisProg,tipProg,ocjena FROM programi where idProg=$idProg";
        $r = $this->db->query($sql);
        while ($row = $r->fetch_assoc()) {
            $p = new Program();
            $p->SetProgId($row['idProg']);
            $p->SetProgNaziv($row['nazivProg']);
            $p->SetProgOpis($row['opisProg']);
            $p->SetProgTip($row['tipProg']);
            $p->SetProgOcj($row['ocjena']);
            $p->SetIdTren($row['idTren']);
            $this->programi[] = $p;
        }

        return $this->programi;
    }
    public function izmjeniPrograme($program){
		$id = $program->GetProgID();
		$naziv = $program->GetProgNaziv();
                $opis=$program->GetProgOpis();
                $tip=$program->GetProgTip();
                $ocj=$program->GetProgOcj();
                $idTren=$program->GetIdTren();
		$sql = "UPDATE programi SET nazivProg='$naziv', opisProg='$opis', tipProg='$tip', idTren=$idTren,ocjena=$ocj WHERE idProg=$id";
		$this->db->query($sql);
	}
    public function brisiProgram($id) {
        $sql = "DELETE FROM programi WHERE idProg=$id LIMIT 1";
        $this->db->query($sql);
    }

    public function unosPrograma($naziv,$opisProg,$tipProg,$idTren) {
        $sql = "INSERT INTO programi(nazivProg,opisProg,tipProg,idTren) VALUES ('$naziv','$opisProg','$tipProg',$idTren)";
        $this->db->query($sql);
    }

}

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

