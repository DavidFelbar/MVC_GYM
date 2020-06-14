<?php

session_start();

class Register {

    // private $idRegister;
    private $usernameRegister;
    private $passwordRegister;
    private $imeRegister;
    private $prezimeRegister;

    public function __construct($id = false) {
        if (isset($_POST['usernameRegister'])) {
             $db = DB::connect();
            // $session['idClana']=$_POST['registerId']; //ovo mozda nece trebat jer cemo autoincrement stavit na id
            $session['usernameRegister'] = $_POST['usernameRegister'];
            $session['passwordRegister'] = $_POST['passwordRegister'];
            $session['imeRegister'] = $_POST['imeRegister'];
            $session['prezimeRegister'] = $_POST['prezimeRegister'];

        }
    }

}
