
<html>
    <!-- PRIKAZ POCETNE STRANICE -->
    <head>
        <title>Untitled Document</title>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <!-- CSS - UREDENJE TIJELA I DODATNIH INFORMACIJA O CLANKU -->
        <style type="text/css">
            .div
            {
                float: right;
                width:50%;
            }

            body {
                margin:0;
               
                font-family: Arial;
                font-size: 12px;
                background: #dedede;
            }
            .clanovi{
                padding-left: 10px;
            }
            p.info {
                background-color:#ccc;
                font-size: 10px;
                padding: 10px;
            }

            ul {
                
                border-bottom: 3px solid #006e7a;
                position: sticky;
                top:0;
                width:100%;
                list-style-type: none;
                margin: 0;
                padding: 0;
                overflow: hidden;
                background-color: #333;
            }

            .naziv{
                font-size: 25px;
                display: block;
                color: white;
                text-align: center;
                float: left;
                padding: 14px 16px;
            }

            li a {
                float:right;
                display: block;
                color: white;
                text-align: center;
                padding: 22px 16px;
                text-decoration: none;
            }


            li a:hover {
                background-color: #009cad;
            }
            .popis{
                margin-top: 30px;
            }
            table,.popis{
                
                margin-left: 30px;
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
            table{
                font-size: 15px;
                border-width: 2px;
                border-collapse: collapse;
                margin-left: 30px;
            }
            td{
                
                padding-top: 7px;
                padding-bottom: 5px;
                padding-left: 5px;
                padding-right: 5px;
            }
        </style>
    </head>

    <body >

        <ul ><li class='naziv'>MVC GYM </li><li><a class='zaposlenici' href='./view/loginZaposlenici.php' >LOGIN ZAPOSLENICI</a></li><li> <a class='clanovi' href='./view/loginClanovi.php'>LOGIN CLANOVI</a></li></ul>
        <br>
        <h2 class='popis'>POPIS DOSTUPNIH PROGRAMA</h2>
        <div class='div'>
            <p>MVC Gym aplikacija</p>
            <p>CLANOVI: mogu birati program za sebe te ga ocijeniti</p>
            <p>ZAPOSLENICI: TRENERI: mogu upisivati nove programe i uređivati postojeće ako su autor </p>
            <p>ZAPOSLENICI: ADMINI: mogu upisivati i brisati trenere i članove, uređivati članarine i pratiti dolaske članova</p>
        </div>

   
</body>

</html>
