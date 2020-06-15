<!--IZMJENA I UNOS CLANOVA-->

<table border="1"> 
    <h2> ČLANOVI: </h2>
    <tr>
        <th>IME ČLANA</th>
        <th>PREZIME ČLANA</th>
        <th>KORISNIČKO IME ČLANA</th>
        <th>LOZINKA ČLANA</th>
        <th>BROJ DOLAZAKA</th>
        <th>DOLAZAK</th>
        <th>IZBRISI</th>
    </tr>
    <?php foreach ($clan as $cln) { ?>


        <tr>
            <?php
            echo '<td>' . $cln->GetClanIme();
            echo '</td>';
            echo '<td>' . $cln->GetClanPrezime();
            echo '</td>';
            echo '<td>' . $cln->GetUsernameClana();
            echo '</td>';
            echo '<td>' . $cln->GetPasswordClana();
            echo '</td>';
            echo '<td>' . $cln->GetClanDolasci();
            echo '</td>';

            ?>
            <td> <a href="?a=dolazakClan&id=<?php echo $cln->GetIdClana(); ?>">DOLAZAK</a> </td>
            <td> <a href="?a=deleteClan&id=<?php echo $cln->GetIdClana(); ?>">IZBRISI</a> </td>
        </tr>

<?php } ?>
</table>
<hr>
<html>
    <h2> Unos novog člana:</h2>
    <form  method="post" action="?a=createClan ">


        <p>  Ime člana <input type="text" name="imeClana" >  </p>
        <p>  Prezime člana <input type="text" name="prezimeClana"> </p>
        <p>  Korisničko člana <input type="text" name="usernameClana" >  </p>
        <p>  Lozinka člana <input type="text" name="passwordClana"> </p>
        <p> Odabir članarine za novog člana </p>
        <select name="clanarina">
         <?php
         foreach ($clanarine as $c) {
            echo '<option value="'.$c->GetClanarNaziv().'">'.$c->GetClanarNaziv();
         
            $_SESSION['idClanarine']=$c->GetClanarId();
            $_SESSION['dolasci']=$c->GetDolasci();
        
            
         }
            ?>
        </select>
        <input type="submit" name="submit" value="Spremi">
    </form>
</html>

<!--IZMJENA I UNOS CLANARINA-->
<table border="1"> 
    <h2> Izmjena članarina: </h2>
    <tr>
        <th>NAZIV CLANARINE</th>
        <th>CIJENA CLANARINE</th>
        <th>MAKSIMALAN BROJ DOLAZAKA</th>
        <th>IZMJENI</th>
        <th>IZBRISI</th>
    </tr>
<?php foreach ($clanarine as $c) { ?>


        <tr>
            <?php
            echo '<td>' . $c->GetClanarNaziv();
            echo '</td>';
            echo '<td>' . $c->GetClanarCijena();
            echo '</td>';
            echo '<td>' . $c->GetDolasci();
            echo '</td>';
            ?>
            <td> <a href="?a=updateClanarina&id=<?php echo $c->GetClanarId(); ?>">IZMJENI</a> </td>
            <td> <a href="?a=deleteClanarina&id=<?php echo $c->GetClanarId(); ?>">IZBRISI</a> </td>
        </tr>

<?php } ?>
</table>
<hr>
<html>
    <h2> Unos nove članarine:</h2>
    <form  method="post" action="?a=createClanarina ">


        <p>  Naziv članarine <input type="text" name="naziv" >  </p>



        <p>  Cijena članarine <input type="text" name="cijena">


        <p>Broj dolazaka:</p>
        <input type="radio" id="dva" value="9" name="maxdolasci" >
        <label for="dva">9 dolazaka - Dva puta tjedno</label><br>
        <input type="radio" id="tri"  value="13" name="maxdolasci">
        <label for="tri">13 dolazaka - Tri puta tjedno</label><br>
        <input type="radio"  value="99" id="nolimit" name="maxdolasci">
        <label for="nolimit">Neograničeno dolazaka - No limit</label><br>
        <br>

        <input type="submit" name="submit" value="Spremi">
    </form>
</html>

