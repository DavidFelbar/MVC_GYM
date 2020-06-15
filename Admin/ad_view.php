<!-- ADMINISTRATOR - PREGLED -->
﻿<!-- ISPIS SVIH KATEGORIJA U BAZI -->
 <table border="1"> 
     <tr>
         <th>NAZIV CLANARINE</th>
         <th>CIJENA CLANARINE</th>
         <th>MAKSIMALAN BROJ DOLAZAKA</th>
          <th>IZMJENI</th>
          <th>IZBRISI</th>
     </tr>
<?php foreach ($clanarine as $c) { ?>


    <tr>
    <?php echo '<td>'.$c->GetClanarNaziv();
                    echo '</td>';
          echo '<td>'.$c->GetClanarCijena();
          echo '</td>';
          echo '<td>'.$c->GetDolasci();
          echo '</td>';
    ?>
        <td> <a href="?a=update&id=<?php echo $c->GetClanarId(); ?>">IZMJENI</a> </td>
        <td> <a href="?a=delete&id=<?php echo $c->GetClanarId(); ?>">IZBRISI</a> </td>
 </tr>

<?php } ?>
 </table>
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