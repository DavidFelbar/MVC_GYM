<!-- ADMINISTRATOR - PREGLED -->
﻿<!-- ISPIS SVIH KATEGORIJA U BAZI -->
<?php foreach ($clanarine as $c) { ?>
    <p><?php echo $c->GetClanarNaziv(); ?>
        - <a href="?a=update&id=<?php echo $c->GetClanarId(); ?>">IZMJENI</a>
        - <a href="?a=delete&id=<?php echo $c->GetClanarId(); ?>">IZBRISI</a>
    </p>
<?php } ?>
    <html>
    
    <form  method="post" action="?a=create">
       
        
        <input type="text" name="naziv" >
    

      
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
</html>