<h2> Izmjena programa: </h2>
﻿<form method="post" action="?a=update&id=<?php echo $pg->GetProgId();?>">
    
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