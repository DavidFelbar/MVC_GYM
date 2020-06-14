<?php
session_start();
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
            $SESSION['usernameRegister'] = $this->usernameRegister;
            $SESSION['passwordRegister'] = $this->passwordRegister;
            $SESSION['imeRegister'] = $this->imeRegister;
            $SESSION['prezimeRegister'] = $this->prezimeRegister;
        }
    }



    public function GetUsernameReg() {
        return $this->usernameRegister;
    }

    public function GetPasswordReg() {
        return $this->passwordRegister;
    }

    public function GetImeReg() {
        return $this->imeRegister;
    }

    public function GetPrezimeReg() {
        return $this->prezimeRegister;
    }

}
