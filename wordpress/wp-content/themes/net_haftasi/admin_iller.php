<?php
include 'admin_header.php';
 ?>
 <table class="table table-striped">
   <tr>
     <th> Plaka</th>
     <td> İl</td>
     <td> E-Posta</td>
     <td> Telefon</td>
   </tr>

<?php
$iller = getIller();

    foreach ($iller as $il) {
        $plaka = $il->ID;
        $isim = $il->ISIM;
        $eposta = $il->EPOSTA;
        $tel = $il->TELEFON;
        echo "
        <tr>
            <td>{$plaka}</td>
            <td>{$isim}</td>
            <td>{$eposta}</td>
            <td>{$tel}</td>
        </tr>
        ";
    }

?>
 </table>
