<?php

$sehir =  $_GET['sehir'];
define( 'BLOCK_LOAD', true );
require_once( $_SERVER['DOCUMENT_ROOT'] . '/wp-config.php' );
require_once( $_SERVER['DOCUMENT_ROOT'] . '/wp-includes/wp-db.php' );
$wpdb = new wpdb( DB_USER, DB_PASSWORD, DB_NAME, DB_HOST);


$city = $wpdb->get_row( "SELECT ID FROM wp_iller WHERE ISIM = '{$sehir}'")->ID;

$etkinlikler = $wpdb->get_results("
        SELECT *
        FROM wp_etkinlikler
        WHERE IL = '{$city}'
    ");



?>
<table class="table table-striped">
  <tr>
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
