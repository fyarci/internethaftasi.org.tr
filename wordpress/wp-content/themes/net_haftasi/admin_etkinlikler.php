<?php
include 'admin_header.php';


$a = getObject('wp_etkinlikler', 'ID' , 0);



 ?>
 <table class="table table-striped">
   <tr>
     <th> #</th>
     <th> Birim</th>
     <th> İl</th>
     <th> Etkinlik</th>
     <th> Adres</th>
     <th> Tarih</th>
     <th> Baslangıç</th>
     <th> Bitiş</th>
     <th> Acıklama</th>
   </tr>

<?php
$etkinlikler = getEtkinlikler();

    foreach ($etkinlikler as $etkinlik) {
        $sira = $etkinlik->ID;
        $birim = getObject('wp_birimler', 'ID', $etkinlik->BIRIM)->ISIM;
        $il = getObject('wp_iller', 'ID', $etkinlik->IL)->ISIM;
        $ad = $etkinlik->AD;
        $adres = $etkinlik->ADRES;
        $tarih = $etkinlik->TARIH;
        $baslangic = $etkinlik->BASLANGIC;
        $bitis = $etkinlik->BITIS;
        $aciklama = $etkinlik->ACIKLAMA;

        echo "
        <tr>
            <td>{$sira}</td>
            <td>{$birim}</td>
            <td>{$il}</td>
            <td>{$ad}</td>
            <td>{$adres}</td>
            <td>{$tarih}</td>
            <td>{$baslangic}</td>
            <td>{$bitis}</td>
            <td>{$aciklama}</td>
        </tr>
        ";
    }

?>
 </table
