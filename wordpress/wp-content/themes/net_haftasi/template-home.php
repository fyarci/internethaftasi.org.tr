<?php
/* Template Name: Home Page */
get_header();
?>
    <div class="home-cover " >
      <div class="col-md-12 ">
        <h1>#internethaftasi</h1>
        <h1>Nisan '16</h1>
        <span class="glyphicon glyphicon-menu-down" aria-hidden="true"></span>
      </div>
    </div>

<div class="container-fluid">
<div class="home-p1">
<div class="container">
  <div class="row">
    <div class="col-md-12">
      <div class="logo">
        <img src="<?php echo get_site_url(); ?>/wp-content/themes/net_haftasi/static/img/logo.png" alt="" />
       </div>
    </div>
  </div>

<div class="row">
  <div class="col-md-6">
    <h3>
    <span class="glyphicon glyphicon-globe" aria-hidden="true"></span> İnternet Yaşamdır
    </h3>
    <p>
            Bilişim STK Platformu intertin Türkiye'ye gelişinin 22. yıl dönümünde Türkiye internetini büyütmek, yeni projeler başlatmak, interneti geniş kitlelere tanıtmak, yaymak, toplumun gündemine interneti yerleştirmek, ve Türkiye internetine ivme verecek etkinliklerin yapilmasını amacıyla 6-19 Nisan'ı İnternet Haftası olarak ilan etmiştir.
    </br>
    </p>
    </br>
  </div>

  <div class="col-md-6">
    <h3>
    <span class="glyphicon glyphicon-question-sign" aria-hidden="true"></span>
            Ne Yapmalı?
    </h3>
    <p>
    <ul>
        <li>Okullar internete bağlanmalı</li>
        <li>Halk Kütüphaneleri internete bağlanmalı</li>
        <li>Belediyeler bünyesinde halka açık internet evleri açılmalı</li>
        <li>Organize sanayi bölgelerinde internet evi açılmalı</li>
        <li>Kültürel mirasımız internete taşınmalı</li>
        <li>E-Devlet hizmetleri başlatılmalı</li>
    </ul>
    </p>
  </div>
</div>

<div class="row">
    <div class="col-md-12">
        <div class="well welcome">
          <h3>
          <span class="glyphicon glyphicon-question-sign" aria-hidden="true"></span>
            Hoşgeldiniz
          </h3>

        <p>
            Türkiye İnterneti 12 nisanda 22. yılını doldurmuş olacak. Türkiye İnternet Kamuoyunu, 6-19 Nisan'da gerçekleşecek 18. İnternet Haftasını bir şenlik havasında tüm ülkede internetin 22 yaşını kutlamaya çağırıyoruz. Tüm kesimlerden; Üniversiteler, Ticaret ve Sanayi Odaları, Çiftçi Birlikleri, Ziraat Odaları, Mühendis Odaları, Barolar, Tabip Odaları, Bankalar Birliği, Noterler Birliği, Organize Sanayi Bölgeleri, Yerel Yönetimler, İnternet Cafeler, Okullar, Kaymakamlıklar, Valilikler, Bakanlıklar, tüm kamu yönetimi, özel sektör, internet şirketleri, Bilişim/Bilgi/İletişim STK'ları, Demokratik Kitle Örgütleri, Bilişim Klüpleri, Tüm Medya Kuruluşlarını, Bireyleri bu İnternet Haftasını tüm ülkeyi saran bir İnternet Şenliğine, Bilgi Toplumu, e-dönüşüm, e-türkiye ve e-devlet kavramlarının geniş kitlelerle tanıştırıldığı bir İnternet ve Bilişim Fırtınasına döndürmeye çağırıyoruz.
        </p>

        </div>
    </div>
</div>
</div>
</div>

<div class="home-p2">
    <div class="container">
    <div class="col-xs-12 sponsor">
    <h3><span class="glyphicon glyphicon-briefcase" aria-hidden="true"></span> Sponsorlar</h3>
           Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.

The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from "de Finibus Bonorum et Malorum" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.

        </div>
       <div class="col-xs-6 duyuru">
           <h3><span class="glyphicon glyphicon-bookmark" aria-hidden="true"></span>  Duyurular</h3>

<?php
  $args = array( 'posts_per_page' => 3);
  $lastposts = get_posts( $args );
  foreach ( $lastposts as $post ) :
  setup_postdata( $post );
?>

    <div class="media duyurular">
        <div class="media-left">
        <a href="#">
        <img class="media-object" src="..." alt="...">
        </a>
        </div>
    <div class="media-body">
    <h4 class="media-heading"><a href="<?php the_permalink(); ?>"><?php the_title(); ?><a/></h4>
     	<?php echo truncate($post->content;, 140); ?>
    </div>
</div>
<?php endforeach;
wp_reset_postdata(); ?>


       </div>
       <div class="col-xs-6 forum">
           <h3><span class="glyphicon glyphicon-info-sign" aria-hidden="true"></span> Forumlar</h3>
           Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.

   The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from "de Finibus Bonorum et Malorum" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.
       </div>

</div>
</div>

<div class="home-p3">

</div>
<?php
get_footer();
?>
