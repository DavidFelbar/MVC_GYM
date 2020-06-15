
<!-- ADMINISTRATOR - PREGLED -->
﻿<!-- ISPIS SVIH KATEGORIJA U BAZI -->

<?php foreach ($program as $p) { ?>

    <table border="1"> 
       <h2> MOJ PROGRAM"<?php echo $p->GetProgNaziv();?>"</h2>
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
 
            <td> <a href="?a=ocjena&id=<?php echo $p->GetProgId(); ?>">OCIJENI</a> </td>

        </tr>
    </table>
    <h3>Opis programa: </h3>
    <?php
    echo $p->GetProgOpis();
    ?>

    <hr>
    <br/>
<?php } ?>
  <h2> ODABIR PROGRAMA</h2>
<?php foreach ($programi as $pr) { ?>
    
    <table border="1"> 
           
           <tr>
            <?php foreach ($zaposlenik as $zp) { 
                if($zp->GetZapId()==$pr->GetIdTren())
                {
                    echo '<th colspan="4">Trener:'. $zp->GetZapIme().'    '. $zp->GetZapPrezime().'</th>';
                    
                }
                             
                }
                
                ?>

        </tr>
       <tr>
            <th>NAZIV PROGRAMA</th>
            <th>TIP PROGRAMA</th>
            <th>OCJENA</th>
            <th>OCIJENI</th>

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
            
         <td> <a href="?a=update&id=<?php echo $pr->GetProgId(); ?>">ODABERI</a> </td>
        </tr>
   
    </table>
    <h3>Opis programa: </h3>
    <?php
    echo $pr->GetProgOpis();
    ?>

    <hr></br>
<?php } ?>




