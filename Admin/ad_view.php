
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
            <td> <a href="?a=update&id=<?php echo $c->GetClanarId(); ?>">IZMJENI</a> </td>
            <td> <a href="?a=delete&id=<?php echo $c->GetClanarId(); ?>">IZBRISI</a> </td>
        </tr>

<?php } ?>
</table>
<hr>

<h2> Unos nove članarine:</h2>
<form  method="post" action="?a=create">


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

<table border="1"> 
    <h2> ČLANOVI: </h2>
    <tr>
        <th>IME</th>
        <th>PREZIME</th>
        <th>ČLANARINA</th>
        <th>IZBRISI</th>
    </tr>
<?php foreach ($clan as $b) { ?>


        <tr>
            <?php
            echo '<td>' . $b->GetClanIme();
            echo '</td>';
            echo '<td>' . $b->GetClanPrezime();
            echo '</td>';
            $id = $b->GetIdClanarine();


            echo '<td>';
            echo '</td>';
            ?>
            <td> <a href="?a=delete&id=<?php echo $b->GetIdClana(); ?>">IZBRISI</a> </td>
        </tr>

<?php } ?>
</table>


<h2> Unos novog člana:</h2>
<form  method="post" action="?a=create">

    <p>  Ime <input type="text" name="ime" >  </p>
    <p>  Prezime <input type="text" name="prezime"> </p>
    <p>  Username <input type="text" name="prezime"> </p>
    <p>  Password<input type="text" name="prezime"> </p>
    <p> ID Programa <input type="text" name="prezime"> </p>
    <p> Dolasci <input type="text" name="prezime"> </p>
   
        <label for="clanarina">Tip članarine:</label>
        <select name="clanarina" id="clanarina">

        </select> 
        <br>

        <input type="submit" name="submit" value="Spremi">
</form>