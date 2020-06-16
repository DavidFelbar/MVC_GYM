<html>
<head>
    <!-- ADMINISTRATOR - INDEX -->
    <title>ADMINISTRATOR</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    </head>

    <body>
        <ul ><li class='naziv'><?php echo "Korisnik: ". $_SESSION['login']. " - ". "Status: ".strtoupper($_COOKIE['Status']);?></li><li> <a class='clanovi' href='../model/logout.php'>ODJAVA</a></li></ul>
    <?php include("$template.php"); ?>
    </body>
</html>
