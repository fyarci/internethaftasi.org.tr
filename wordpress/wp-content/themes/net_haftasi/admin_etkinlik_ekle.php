<?php
include 'admin_header.php';

?>


<div class="container">
<h3>Etinlik Ekle</h3>

    <form action="<?php echo esc_url( admin_url('admin-post.php') ); ?>" method="post">

      <div class="form-group">
        <label for="birim">Birim</label>
        <select class="form-control" name="birim" id="birim" >
            <?php
            $birimler = getBirimler();
            foreach ($birimler as $birim) {
                $id = $birim->ID;
                $name = $birim->ISIM;

            echo "<option value='{$id}'>{$name}</option>";
            }
            ?>
        </select>
    </div>


      <div class="form-group">
        <label for="il">İl</label>
        <select class="form-control" name="il" id="il" >
            <?php
            $iller = getIller();
            foreach ($iller as $il) {
                $id = $il->ID;
                $name = $il->ISIM;

            echo "<option value='{$id}'>{$name}</option>";
            }
            ?>
        </select>
      </div>
<?php

    $iller = getIller();
    echo "<datalist id='iller'>";
    foreach ($iller as $il) {
        $isim = $il->ISIM;
        echo "
            <option value='{$isim}'>
        ";
}
        echo "</datalist>";

?>

      <div class="form-group">
        <label for="ad">Etkinlik Adı</label>
        <input type="text" class="form-control" id="ad" name="ad" placeholder="Etkinlik Adı">
    </div>

      <div class="form-group">
        <label for="adres">Etkinlik Adresi</label>
        <textarea type="text" class="form-control" id="adres" name="adres" placeholder="Etkinlik Adresi"></textarea>
      </div>

      <div class="form-group">
        <label for="tarih">Etkinlik Tarihi</label>
        <input type="date" class="form-control" id="tarih" name="tarih" placeholder="Etkinlik Tarihi">
      </div>

      <div class="form-group">
        <label for="baslangic">Başlangıç Saati</label>
        <input type="text" class="form-control" id="baslangic" name="baslangic" placeholder="Başlangıç Saati">
      </div>

      <div class="form-group">
        <label for="bitis">Bitiş Saati</label>
        <input type="text" class="form-control" id="bitis" name="bitis" placeholder="Bitiş Saati">
      </div>

      <div class="form-group">
        <label for="aciklama">Açıklama Metni</label>
        <textarea  class="form-control" id="aciklama" name="aciklama" placeholder="Açiklama Metni"></textarea>
      </div>

      <input type="hidden" name="action" value="etkinlik_ekle_form">
      <button type="submit" class="btn btn-default">Kaydet</button>
    </form>

</div>
