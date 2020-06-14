<?php
session_start();
class Register {

        if(isset($_POST['registerUsername']))
        {
           // $session['idClana']=$_POST['registerId']; //ovo mozda nece trebat jer cemo autoincrement stavit na id
            $session['idClana']=$_POST['registerId']; 
        }
        }
            
    private $id;
    private $naziv;
    private $opis;
    private $tip;
    private $ocj;

    public function __construct($id = false) {
        if ($id) {
            $db = DB::connect();
            $sql = "SELECT * FROM programi WHERE id = $id LIMIT 1";
            $r = $db->query($sql);
            $row = $r->fetch_assoc();
            
            // POSTAVI VRIJEDNOSTI ATRIBUTA
            $this->id = $row['idProg'];
            $this->naziv = $row['nazivProg'];
            $this->opis=$row['opisProg'];
            $this->tip=$row['tipProg'];
            $this->ocj=$row['ocjena'];
        }
    }
