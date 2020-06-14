<?php


class Register {

    // private $idRegister;
    private $usernameRegister=$_POST['usernameRegister'];
    private $passwordRegister=$_POST['passwordRegister'];
    private $imeRegister=$_POST['imeRegister'];
    private $prezimeRegister= $_POST['prezimeRegister'];

    public function __construct($id = false) {
        if (isset($_POST['usernameRegister'])) {
             $db = DB::connect();
            // $session['idClana']=$_POST['registerId']; //ovo mozda nece trebat jer cemo autoincrement stavit na id
            $this->usernameRegister=$session['usernameRegister'] ;
            $session['passwordRegister'] ;
            $session['imeRegister'] ;
            $session['prezimeRegister'] ;

        }
    }

}
