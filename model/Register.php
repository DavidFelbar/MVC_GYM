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
            $_SESSION['usernameRegister'] = $this->usernameRegister;
            $_SESSION['passwordRegister'] = $this->passwordRegister;
            $_SESSION['imeRegister'] = $this->imeRegister;
            $_SESSION['prezimeRegister'] = $this->prezimeRegister;
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
