<html>
<head>
<title>Untitled Document</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<style type="text/css">

        .prvi{
                background-color: #cccccc;
                
                padding-bottom: 200px;
            }
    logout{
        padding-top: 30px;
    }
    a{
      font: bold 11px Arial;
  text-decoration: none;
                color: white;
                background-color: #333;
  padding: 2px 6px 2px 6px;
  border-top: 1px solid #CCCCCC;
  border-right: 1px solid #333333;
  border-bottom: 1px solid #333333;
  border-left: 1px solid #CCCCCC;        
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
                margin-bottom: 100px;
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
            p{
                
                margin-left: 20px;
                padding-bottom: 20px;
                font-size: 20;
            }
            table{
                margin-left: 30px;
            }
        </style>

    <!-- ADMINISTRATOR - INDEX -->
    <title>ADMINISTRATOR</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    </head>

    <body>
       </h2><p class="logout" align="right"><?php echo '<b>'. "Korisnik: ".$_SESSION['userClan']." - ". "Status: ".strtoupper($_COOKIE['Status']).'<b>';?><br/><a href="../model/logout.php">ODJAVA</a></p>
    <?php include("$template.php"); ?>
    </body>
</html>
