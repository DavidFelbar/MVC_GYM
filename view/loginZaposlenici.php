<?php
// OVDJE TREBA FORMA ZA LOGIN ZAPOSLENIKA PA CEMO DODAT COOKIES

session_start();
?>
<<html>
<head>
<title>Untitled Document</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
</head>

<body>

<form name="form2" method="post" action="LoginAdmin.php">
  <p>Username: 
    <input name="username" type="text" id="username">
  </p>
  <p>Pass: 
    <input name="pass" type="password" id="pass">
  </p>
  <p>
    <input type="submit" name="Submit" value="Submit">
  </p>
</form>
</body>
</html>
