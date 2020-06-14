<?php
    session_start();
    include '../model/Register.php';
    include '../controller/RegisterController.php';
    if(isset($_POST['usernameRegister']))
    {
        $SESSION['usernameRegister']=$_POST['usernameRegister'];
        $SESSION['passwordRegister']=$_POST['passwordRegister'];
        $SESSION['imeRegister']=$_POST['imeRegister'];
        $SESSION['prezimeRegister']=$_POST['prezimeRegister'];
        
    }
?>