
<html>
<head>
    <!-- ADMINISTRATOR - INDEX -->
    <title>ČLAN</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    </head>

    <body>
        <p align="right"><?php echo '<b>'."Korisnik: ". $_SESSION['login']. " - ". "Status: ".strtoupper($_COOKIE['Status']).'<b>';?><br/><a href="../model/logout.php">ODJAVA</a></p>
    <?php include("$template.php"); ?>
    </body>
</html>