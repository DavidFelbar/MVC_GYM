<html>
    <head>
          <!-- ADMINISTRATOR - INDEX -->
        <title>IZMJENA PROGRAMA</title>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <style type="text/css">
            
            select{
                font-size: 16px;
                padding-right: 10px;
                margin-left: 20px;
            }
            input[type=submit]{
                margin-left: 20px;
                width: 140px;
                height: 30px;
                color:white;
                background-color: #333;
            }
            input[type=text]:focus{
               background-color:  #bee6eb;
            }
            label{
                 font-size: 15px;
            }
            input[type=radio]{
                
               margin-left:30px;
            }
            input[type=submit]:hover{
                
                background-color: #009cad;
            }
            th{
                
                padding-bottom: 2px;
                border-bottom-color: #009cad;
                border-bottom-width: 1px;
                font-size: 15px;
                font-weight: lighter;
                background-color: #333;
                color:white;
            }
            td{
                
                padding-top: 7px;
                padding-bottom: 5px;
                padding-left: 5px;
                padding-right: 5px;
            }
            .prvi{
                background-color: #cccccc;

                padding-bottom: 200px;
            }
            .logout{
                z-index: 9;
                letter-spacing: 2px;
                position: top;
                font-size: 12px;
                padding: 0;
                margin-top:10px;
                float: right;
                padding-top: 0px;
            }
            .logout b  {
                height: 10px;
                position: top;
                font-size: 11px;
                padding-left: 20px;
            }
            .logout b a{
                position: top;
                letter-spacing: 1px;
                text-align: center;
                padding-left:20px;
                padding-right:20px;
                padding-top:25px;
                padding-bottom:22px;
                
            }
            a{
                
                font-size: 12px;
                text-decoration: none;
                color: white;
                background-color: #333;
                padding: 5px 12px 5px 12px;
                margin: 4px 4px 4px 4px;
                  
            }
            a:hover{
                background-color: #009cad;
            }
            body {
                margin:0;

                font-family: Arial;
                font-size: 12px;
                background: #f0f0f0;
            }
            .clanovi{
                padding-left: 10px;
            }

            .naslov{
                margin-bottom: 30px;
                margin-top:0px;
                font-size: 30px;
                color: white;
                border-bottom: 3px solid #006e7a;
                position: sticky;
                top:0;
                width:100%;
                list-style-type: none;

                line-height: 1;
                padding-bottom: 15px;
                padding-top: 15px;
                overflow: hidden;
                background-color: #333;
            }
            button{
                margin-left: 100px;
                font-size: 15px;
                color: white;
                background-color: #333;
            }
            button:hover{
                background-color: #009cad;
            }
            .pselect{
                padding-bottom: 5px;
                margin-bottom: 5px;
            }
            p{

                margin-left: 20px;
                padding-bottom: 20px;
                font-size: 20;
            }
            table{

                font-size: 15px;
                border-width: 2px;
                border-collapse: collapse;
                margin-left: 30px;
            }
            
        </style>

      
        
    </head>

<h2 class="naslov"> IZMJENA PROGRAMA: </h2>
﻿<form method="post" action="?a=update&id=<?php echo $pg->GetProgId();?>">
    
        <p>  Naziv programa <input type="text" name="nazivProg" >  </p>
        <p><label  for="opisProg">  Opis programa: </label> </p>
        <textarea id="opisProg" name="opisProg" rows="10" cols="70"> </textarea>
        <p>Tip programa:
        <select name="tipProg">
            <option value="individualni">Individualni</option>
            <option value="grupni">Grupni</option>
        </select>
       
        <input type="submit" name="submit" value="Spremi"></p>
</form>