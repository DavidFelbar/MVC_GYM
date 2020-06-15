<?php
session_start();
require_once('../klase/DB.php');
require_once('../klase/Pomocna.php');
require_once('../model/Clanovi.php');
require_once('../model/Program.php');
require_once('../controller/ProgramiController.php');
require_once('../controller/ClanoviController.php');

if(!isset($_GET['a'])) { $a = ''; } else { $a = $_GET['a']; }

$pr = new Programi();


switch($a) 
{
    
				   
    default : 	   
                    $program = $pr->dohvatiProgram($_SESSION['idClana']);
                    $template = 'cl_view'; 	  
}
include './indexClanovi.php';
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

