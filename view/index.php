
<html>
    <!-- PRIKAZ POCETNE STRANICE -->
    <head>
    <title>Untitled Document</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <!-- CSS - UREDENJE TIJELA I DODATNIH INFORMACIJA O CLANKU -->
    <style type="text/css">
        body {
            font-family: Arial;
            font-size: 12px;
        }
        p.info {
            background-color:#ccc;
            font-size: 10px;
            padding: 10px;
        }
        .uzglavlje{
            
            
            
        }
        .login {
           
            
        }
    </style>
    </head>

    <body>
        <?php
        $cl=new Clanarine();
            $cl->dohvatiClanarine();
            var_dump($cl);
        ?>
        <h1 class='uzglavlje'>MVC GYM  </h1> 
        <h2 class='loginZaposlenici'><a href='loginZaposlenici.php'>Login zaposlenici</a></h2> 
        <h2 class='loginClanovi'><a href='loginClanovi.php'>Login clanovi</a></h2>
        <h2 class="registerClanovi"> <a href="registerClanovi.php">Registracija članova</a></h2>
    </table>
    </body>
</html>
