<!-- ADMINISTRATOR - PREGLED -->
﻿<!-- ISPIS SVIH KATEGORIJA U BAZI -->
<?php foreach ($clanarine as $c) { ?>
    <p><?php echo $c->GetClanarNaziv(); ?>
        - <a href="?a=update&id=<?php echo $c->GetClanarId(); ?>">IZMJENI</a>
        - <a href="?a=delete&id=<?php echo $c->GetClanarId(); ?>">IZBRISI</a>
    </p>
<?php } ?>
<html
    <!-- OBRAZAC ZA STVARANJE NOVE KATEGORIJE - POTREBAN SAMO NAZIV -->
    <form method="post" action="?a=create">
       
        
        <input type="text" name="naziv" placeholder="Naziv članarine">
            
        
        <br>

       <p>
            <input type="text" name="cijena" placeholder="cijena članarine">
        </p>
       
        <p>Broj dolazaka:</p>
        <input type="radio" id="dva" name="maxdolasci" value="9">
        <label for="dva">9 dolazaka - Dva puta tjedno</label><br>
        <input type="radio" id="tri"name="maxdolasci" value="13">
        <label for="tri">13 dolazaka - Tri puta tjedno</label><br>
        <input type="radio" id="nolimit" name="maxdolasci" value="99">
        <label for="nolimit">Neograničeno dolazaka - No limit</label><br>

        </p>
        <input type="submit" name="submit" value="Spremi">
    </form>
</html>