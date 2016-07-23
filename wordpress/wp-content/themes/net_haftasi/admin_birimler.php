<?php
include 'admin_header.php';
 ?>
 <table class="table table-striped">
   <tr>
     <th> #</th>
     <th> Birim</th>
     <td> E-Posta</td>
     <td> Adres</td>
     <td> Telefon</td>
     <td> Hakkında</td>
   </tr>

<?php
$birimler = getBirimler();

    foreach ($birimler as $birim) {
        $sira = $birim->ID;
        $isim = $birim->ISIM;
        $eposta = $birim->EPOSTA;
        $adres = $birim->ADRES;
        $tel = $birim->TELEFON;
        $hakkinda = $birim->HAKKINDA;
        echo "
        <tr>
            <td>{$sira}</td>
            <td>{$isim}</td>
            <td>{$eposta}</td>
            <td>{$adres}</td>
            <td>{$tel}</td>
            <td>{$hakkinda}</td>
        </tr>
        ";
    }

?>
 </table
