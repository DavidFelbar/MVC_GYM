<html>
<head>
<title>Untitled Document</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<style type="text/css">
                select{
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
                 font-size: 13px;
            }
            input[type=radio]{
                
               margin-left:30px;
            }
            input[type=submit]:hover{
                
                background-color: #009cad;
            }
            input[type=password]:focus{
                background-color:  #bee6eb;
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

            .naslov{
                font-size: 30px;
                color: white;
                border-bottom: 3px solid #006e7a;
                position: sticky;
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
<p class='naslov'>LOGIN ZA ČLANOVE</p>
<form name="form1" method="post" action ="../model/Login.php">
    <p>Username: 
    <input name="username" type="text" id="username">
  </p >
  <p>Password: 
    <input name="pass" type="password" id="pass"><button type="submit">POTVRDI</button>
  </p>
  
      
 
</form>
</body>
</html>
