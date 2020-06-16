
<html>
    <!-- PRIKAZ POCETNE STRANICE -->
    <head>
        <title>Untitled Document</title>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <!-- CSS - UREDENJE TIJELA I DODATNIH INFORMACIJA O CLANKU -->
        <style type="text/css">
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
        </style>
    </head>

    <body >

        <ul ><li class='naziv'>MVC GYM </li><li><a class='zaposlenici' href='./view/loginZaposlenici.php' >LOGIN ZAPOSLENICI</a></li><li> <a class='clanovi' href='./view/loginClanovi.php'>LOGIN CLANOVI</a></li></ul>
        <br>
        <h2 class='popis'>POPIS PROGRAMA</h2>


    </table>
</body>
</html>
