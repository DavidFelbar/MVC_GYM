<!-- ADMINISTRATOR - PREGLED -->
﻿<!-- ISPIS SVIH KATEGORIJA U BAZI -->

<?php foreach ($program as $p) { ?>

    <table border="1"> 

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
           

        </tr>
    </table>
    <h3>Opis programa: </h3>
    <?php
    echo $p->GetProgOpis();
    ?>

    <hr>
<?php } ?>
