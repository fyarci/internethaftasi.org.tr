<?php
/* Template Name: Home Page */
get_header();
?>

<div class="container-fluid wrapper ">
  <div class="col-md-12">
    <div class="logo">
      <img src="<?php echo get_site_url(); ?>/wp-content/themes/net_haftasi/static/img/logo.png" alt="" />
     </div>
   </div>
  
  <div class="col-md-6">
      <h3>
         <span class="glyphicon glyphicon-globe" aria-hidden="true"></span> İnternet Yaşamdır
      </h3>
      <p>
            Bilişim STK Platformu intertin Türkiye'ye gelişinin 22. yıl dönümünde Türkiye internetini büyütmek, yeni projeler başlatmak, interneti geniş kitlelere tanıtmak, yaymak, toplumun gündemine interneti yerleştirmek, ve Türkiye internetine ivme verecek etkinliklerin yapilmasını amacıyla 6-19 Nisan'ı İnternet Haftası olarak ilan etmiştir.
      </p>
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
    <div class="col-md-12">
      <h3>
          <span class="glyphicon glyphicon-question-sign" aria-hidden="true"></span>
            Hoşgeldiniz
       </h3>

        <p>
            Türkiye İnterneti 12 nisanda 22. yılını doldurmuş olacak. Türkiye İnternet Kamuoyunu, 6-19 Nisan'da gerçekleşecek 18. İnternet Haftasını bir şenlik havasında tüm ülkede internetin 22 yaşını kutlamaya çağırıyoruz. Tüm kesimlerden; Üniversiteler, Ticaret ve Sanayi Odaları, Çiftçi Birlikleri, Ziraat Odaları, Mühendis Odaları, Barolar, Tabip Odaları, Bankalar Birliği, Noterler Birliği, Organize Sanayi Bölgeleri, Yerel Yönetimler, İnternet Cafeler, Okullar, Kaymakamlıklar, Valilikler, Bakanlıklar, tüm kamu yönetimi, özel sektör, internet şirketleri, Bilişim/Bilgi/İletişim STK'ları, Demokratik Kitle Örgütleri, Bilişim Klüpleri, Tüm Medya Kuruluşlarını, Bireyleri bu İnternet Haftasını tüm ülkeyi saran bir İnternet Şenliğine, Bilgi Toplumu, e-dönüşüm, e-türkiye ve e-devlet kavramlarının geniş kitlelerle tanıştırıldığı bir İnternet ve Bilişim Fırtınasına döndürmeye çağırıyoruz.
        </p>
        </div>
       <div class="col-md-6">
         <h3>
           <span class="glyphicon glyphicon-bookmark" aria-hidden="true"></span>
           Duyurular
         </h3>


         
              <!-- set all values to a variable  -->
         <?php
            $args = array( 'posts_per_page' => 3, 'category_name' => 'duyurular');
            $lastposts = get_posts( $args );
            foreach ( $lastposts as $post ) :
            setup_postdata( $post );
            $thumb_id = get_post_thumbnail_id();
            $thumb_url_array = wp_get_attachment_image_src($thumb_id, 'thumbnail-size', true);
            $thumb_url = $thumb_url_array[0];
         ?>
        <div class="media">
          <div class="media-left">
           
          </div>
          <div class="media-body">
            <!--
 <a href="#">
            <img class="media-object post-thumb" src="<?php  //echo $thumb_url; ?>" alt="...">
            </a> -->
            
           <a href="<?php the_permalink(); ?>"> <h4 class="media-heading"><?php the_title(); ?></h4></a>
            <?php echo substr($post->post_content, 0 ,100); ?>
            <br/>
            <small><time><?php echo $post->post_date ?></time></small>
          </div>
        </div>
        <?php endforeach; wp_reset_postdata(); ?>
       </div>

        <div class="col-md-6">
         <h3>
           <span class="glyphicon glyphicon-bookmark" aria-hidden="true"></span>
           Forumlar
         </h3>

         <?php
            $args = array( 'posts_per_page' => 3, 'category_name' => 'forumlar');
            $lastposts = get_posts( $args );
            foreach ( $lastposts as $post ) :
            setup_postdata( $post );
         ?>
        <div class="media">
          <div class="media-left">
            <a href="#">
              <img class="media-object" src="..." alt="...">
            </a>
          </div>
          <div class="media-body">
           <a href="<?php the_permalink(); ?>"> <h4 class="media-heading"><?php the_title(); ?></h4></a>
            <?php echo substr($post->post_content, 0 ,100); ?>
            <small><time><?php echo $post->post_date ?></time></small>
          </div>
        </div>
        <?php endforeach; wp_reset_postdata(); ?>
       </div>      

        <div class="col-md-12">
          <h3>
            Etkinlik Haritası
            </h3>
          </div>
 
        <div class="col-md-12">
          <h3>
            Sponsorlar
            </h3>
          </div>
       
</div>

<?php get_footer(); ?>
