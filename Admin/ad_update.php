<!-- ADMINISTRATOR - UPDATE -->
<!-- OBRAZAC ZA IZMJENU NAZIVA KATEGORIJE -->
<h2> Izmjena članarine: </h2>
﻿<form method="post" action="?a=update&id=<?php echo $uc->GetClanarId();?>">
    
    <p>Naziv članarine: <input type="text" name="naziv" value="<?php echo $uc->GetClanarNaziv();?>"> </p>
         
    <p> Cijena članarine <input type="text" name="cijena"> </p>
        <p>Broj dolazaka:</p>
        <input type="radio" name="maxdolasci" id="dva" value="9"  >
        <label for="dva">9 dolazaka - Dva puta tjedno</label><br>
        <input type="radio" name="maxdolasci" id="tri"  value="13" >
        <label for="tri">13 dolazaka - Tri puta tjedno</label><br>
        <input type="radio" name="maxdolasci"  value="99" id="nolimit" >
        <label for="nolimit">Neograničeno dolazaka - No limit</label><br>
        <input type="submit" name="submit" value="Spremi">
</form>