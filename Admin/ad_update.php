<!-- ADMINISTRATOR - UPDATE -->
<!-- OBRAZAC ZA IZMJENU NAZIVA KATEGORIJE -->
﻿<form method="post" action="?a=update&id=<?php echo $uc->GetClanarId();?>">
    <input type="text" name="naziv" value="<?php echo $uc->GetClanarNaziv();?>">
         
            <input type="text" name="cijena">
     
       
        <p>Broj dolazaka:</p>
        <input type="radio" id="dva" value="9" name="maxdolasci" >
        <label for="dva">9 dolazaka - Dva puta tjedno</label><br>
        <input type="radio" id="tri"  value="13" name="maxdolasci">
        <label for="tri">13 dolazaka - Tri puta tjedno</label><br>
        <input type="radio"  value="99" id="nolimit" name="maxdolasci">
        <label for="nolimit">Neograničeno dolazaka - No limit</label><br>

        
        <input type="submit" name="submit" value="Spremi">
</form>