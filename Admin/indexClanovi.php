<html>
<head>
    <!-- ADMINISTRATOR - INDEX -->
    <title>ČLAN</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
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
            .naslovi
            {
                
                margin-left: 30px;
                
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

    <body>
        <ul ><li class='naziv'><?php echo "Korisnik: ". $_SESSION['login']. " - ". "Status: ".strtoupper($_COOKIE['Status']);?></li><li> <a class='clanovi' href='../model/logout.php'>ODJAVA</a></li></ul>
    <?php include("$template.php"); ?>
    </body>
</html>