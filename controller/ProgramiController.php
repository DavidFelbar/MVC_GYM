<?php

require_once ('./model/Program.php');

class Programi {

    private $db;
    private $programi = array();

    public function __construct() {
        $this->db = DB::connect();
    }

    public function dohvatiPrograme() {
        $sql = "SELECT idProg, nazivProg,opisProg,tipProg,ocjena FROM programi";
        $r = $this->db->query($sql);
        while ($row = $r->fetch_assoc()) {
            $p = new Program();
            $p->GetProgId($row['idProg']);
            $p->GetProgNaziv($row['nazivProg']);
            $p->GetProgOpis($row['opisProg']);
            $p->GetProgTip($row['tipProg']);
            $p->GetProgOcj($row['ocjena']);
            $this->programi[] = $p;
        }

        return $this->programi;
    }

    public function brisi($id) {
        $sql = "DELETE FROM programi WHERE id=$id LIMIT 1";
        $this->db->query($sql);
    }

    public function unos($naziv,$opisProg,$tipProg,$ocjena) {
        $sql = "INSERT INTO programi(nazivProg,opisProg,tipProg,ocjena) VALUES ('$naziv,$opisProg,$tipProg,$ocjena')";
        $this->db->query($sql);
    }

}

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
