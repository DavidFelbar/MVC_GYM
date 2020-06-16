<html>
<head>
<title>Untitled Document</title>
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

            .naslov{
                position: sticky;
                font-size: 30px;
                color: white;
                border-bottom: 3px solid #006e7a;
                
                top:0;
                width:100%;
                list-style-type: none;
                margin: 0;
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
            
        </style>
</head>
<body>
    <p class='naslov'>LOGIN ZA ZAPOSLENIKE</p>
    <form name="form2" method="post" action="../model/aLogin.php">
  <p>Username: 
    <input name="username" type="text" id="username">
  </p>
  <p>Password: 
    <input name="pass" type="password" id="pass"><button type="submit">POTVRDI</button>
  </p>
</form>
</body>
</html>
