<!-- ADMINISTRATOR - PREGLED -->
﻿<!-- ISPIS SVIH KATEGORIJA U BAZI -->
<div class="prvi">
 <h2 class='naslov'>IZMJENA PROGRAMA: <div class='logout' ><?php echo '<b>' . "Korisnik: " . $_SESSION['userClan'] . " - " . "Status: " . strtoupper($_COOKIE['Status']) . '<b>'."\t"; ?><a href="../model/logout.php">ODJAVA</a></div></h2>
<?php foreach ($program as $p) { ?>
    
    <table border="1"> 
        <h2 class='naslov2'> Izmjena "<?php echo $p->GetProgNaziv();?>" programa: </h2>
        <tr>
            <th>NAZIV PROGRAMA</th>
            <th>TIP PROGRAMA</th>
            <th>OCJENA</th>
            <th>OPIS PROGRAMA</th>
            <th>IZMJENI</th>
            <th>IZBRIŠI</th>
        </tr>
        <tr>
            <?php
           
            echo '<td>' . $p->GetProgNaziv();
            echo '</td>';
            echo '<td>' . $p->GetProgTip();
            echo '</td>';
            echo '<td>' . $p->GetProgOcj();
            echo '</td>';
            echo '<td>' .  $p->GetProgOpis();;
            echo '</td>';
            ?>
                        <td> <a href="?a=update&id=<?php echo $p->GetProgId(); ?>">IZMJENI</a> </td>
            <td> <a href="?a=delete&id=<?php echo $p->GetProgId(); ?>">IZBRISI</a> </td>

        </tr>
    </table>
    
    <?php
    
    ?>

</div>
<?php } ?>




    <h2 class="naslov"> Unos novog programa:</h2>
    <form  method="post" action="?a=create&idZap=<?php echo $_SESSION['idZap']?>">
        <p>  Naziv programa <input type="text" name="nazivProg" >  </p>
        <p><label for="opisProg">  Opis programa: </label> </p>
        <textarea id="opisProg" name="opisProg" rows="10" cols="70"> </textarea>
        <p>Tip programa:</p>
        <select name="tipProg">
            <option value="individualni">Individualni</option>
            <option value="grupni">Grupni</option>
        </select>
        
        <input type="submit" name="submit" value="Spremi">
    </form>
