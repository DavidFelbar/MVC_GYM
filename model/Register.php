<?php

include '../klase/DB.php';
class Register {

    private $usernameRegister;
    private $passwordRegister;
    private $imeRegister;
    private $prezimeRegister;

    public function __construct() {
        if (isset($_POST['usernameRegister'])) {
            $this->usernameRegister = $_POST['usernameRegister'];
            $this->passwordRegister = $_POST['passwordRegister'];
            $this->imeRegister = $_POST['imeRegister'];
            $this->prezimeRegister = $_POST['prezimeRegister'];
        }
    }

    public static function postavi() {

        $db = DB::connect();
// $session['idClana']=$_POST['registerId']; //ovo mozda nece trebat jer cemo autoincrement stavit na id
        $SESSION['usernameRegister']=$usernameRegister;
        $SESSION['passwordRegister']= $passwordRegister;
        $SESSION['imeRegister']= $imeRegister;
        $SESSION['prezimeRegister']= $prezimeRegister;
    }

}
