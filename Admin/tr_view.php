<!-- ADMINISTRATOR - PREGLED -->
﻿<!-- ISPIS SVIH KATEGORIJA U BAZI -->

<?php foreach ($program as $p) { ?>
    
    <table border="1"> 
        <h2> Izmjena "<?php echo $p->GetProgNaziv();?>" programa: </h2>
        <tr>
            <th>NAZIV PROGRAMA</th>
            <th>TIP PROGRAMA</th>
            <th>OCJENA</th>
            <th>IZMJENI</th>
            <th>IZBRISI</th>
        </tr>
        <tr>
            <?php
           
            echo '<td>' . $p->GetProgNaziv();
            echo '</td>';
            echo '<td>' . $p->GetProgTip();
            echo '</td>';
            echo '<td>' . $p->GetProgOcj();
            echo '</td>';
            ?>
                        <td> <a href="?a=update&id=<?php echo $p->GetProgId(); ?>">IZMJENI</a> </td>
            <td> <a href="?a=delete&id=<?php echo $p->GetProgId(); ?>">IZBRISI</a> </td>

        </tr>
    </table>
    <h3>Opis programa: </h3>
    <?php
    echo $p->GetProgOpis();
    ?>

    <hr>
<?php } ?>



<html>
    <h2> Unos novog programa:</h2>
    <form  method="post" action="?a=create&idZap=<?php echo $_SESSION['idZap']?>">
        <p>  Naziv programa <input type="text" name="nazivProg" >  </p>
        <p><label for="opisProg">  Opis programa: </label> </p>
        <textarea id="opisProg" name="opisProg" rows="10" cols="70"> </textarea>
        <p>Tip programa:</p>
        <select name="tipProg">
            <option value="individualni">Individualni</option>
            <option value="grupni">Grupni</option>
        </select>
        <br>
        <input type="submit" name="submit" value="Spremi">
    </form>
</html>
