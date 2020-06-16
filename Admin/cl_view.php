
<?php foreach ($program as $p) { ?>

    
    <div class='prvi'>
        <h2 class='naslov'> MOJ PROGRAM "<?php echo $p->GetProgNaziv(); ?>"<div class='logout' ><?php echo '<b>' . "Korisnik: " . $_SESSION['login'] . " - " . "Status: " . strtoupper($_COOKIE['Status']) . '<b>' . "\t"; ?><a href="../model/logout.php">ODJAVA</a></div></h2></h2>

<table border="1"> <tr>
                <?php foreach ($zaposlenik as $zp) { 
                if($zp->GetZapId()==$p->GetIdTren())
                {
                    echo '<th colspan="3">Trener:'. $zp->GetZapIme().'    '. $zp->GetZapPrezime().'</th>';
                    
                }
                             
                }
                
                ?></tr>
        <tr>
            <th>NAZIV PROGRAMA</th>

            <th>TIP PROGRAMA</th>
            <th>OCJENA</th>

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
     </tr>
    </table>
<p><a href="?a=ocjena&id=<?php echo $p->GetProgId(); ?>">OCIJENI</a> </p>
    
    <h2>Opis programa: </h2>
    <?php
    echo '<p>'.$p->GetProgOpis();'</p>'
    ?>

    <hr> 
    </div>
        <?php } ?>

<h2 class='naslov'> ODABIR PROGRAMA</h2>
<?php foreach ($programi as $pr) { ?>
     <div class='drugi'>
         <div class='odabir'>
    <table class='table' border="1"> 
           
           <tr>
            <?php foreach ($zaposlenik as $zp) { 
                if($zp->GetZapId()==$pr->GetIdTren())
                {
                    echo '<th colspan="3">Trener:'. $zp->GetZapIme().'    '. $zp->GetZapPrezime().'</th>';
                    
                }
                             
                }
                
                ?>

        </tr>
       <tr>
            <th>NAZIV PROGRAMA</th>
            <th>TIP PROGRAMA</th>
            <th>OCJENA</th>
         

        </tr>
        <tr>
            <?php
            echo '<td>' . $pr->GetProgNaziv();
            echo '</td>';
            echo '<td>' . $pr->GetProgTip();
            echo '</td>';
            echo '<td>' . $pr->GetProgOcj();
            echo '</td>';
            ?>
           </tr>  
    </table>
           <p><a href="?a=update&id=<?php echo $pr->GetProgId(); ?>">ODABERI</a> </p>
       
   
    
    <h2>Opis programa: </h2>
    <?php
    echo '<p>'.$pr->GetProgOpis();'</p>'
    ?>
         </div>
  </div>
    <hr></br>
<?php } ?>




