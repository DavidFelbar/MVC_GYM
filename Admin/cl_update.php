<h2> Ocjena programa </h2>
﻿<form method="post" action="?a=ocjena&id=<?php echo $pg->GetProgId();?>">
    
        <p>Ocjena:</p>
        <input type="radio" name="ocjena" id="1" value="1"  >
        <label for="1">1</label><br>
        <input type="radio" name="ocjena" id="2"  value="2" >
        <label for="2">2</label><br>
        <input type="radio" name="ocjena"  value="3" id="3" >
        <label for="3">3</label><br>
        <input type="radio" name="ocjena" id="4" value="4"  >
        <label for="4">4</label><br>
        <input type="radio" name="ocjena" id="5"  value="5" >
        <label for="5">5</label><br>
        <br>
        <input type="submit" name="submit" value="Spremi">
</form>