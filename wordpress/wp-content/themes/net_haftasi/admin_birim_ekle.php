<?php
include 'admin_header.php';

?>


<div class="container">
<h3>Birim Ekle</h3>

    <form action="<?php echo esc_url( admin_url('admin-post.php') ); ?>" method="post">

      <div class="form-group">
        <label for="ad">Birim Adı</label>
        <input type="text" class="form-control" name="birim" id="birim" placeholder="Birim Adı">
    </div>

      <div class="form-group">
        <label for="eposta">E-Posta</label>
        <input type="email" class="form-control" name="eposta" id="eposta" placeholder="E-Posta">
      </div>

      <div class="form-group">
        <label for="adres">Adres</label>
        <textarea class="form-control" id="adres" name="adres" placeholder="Adres">
        </textarea>
      </div>

      <div class="form-group">
        <label for="telefon">Telefon</label>
        <input type="tel" class="form-control" id="telefon" name="telefon" placeholder="Telefon">
      </div>

      <div class="form-group">
        <label for="hakkinda">Hakkında</label>
        <textarea  class="form-control" name="hakkinda" id="hakkinda" placeholder="Hakkında">
        </textarea>
      </div>
      <input type="hidden" name="action" value="birim_ekle_form">
      <button type="submit" class="btn btn-default">Kaydet</button>
    </form>

</div>
