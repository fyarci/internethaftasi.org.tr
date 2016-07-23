<?php

  get_header();
   
   $cat_id = get_cat_id( single_cat_title("",false) );

   $args = array(
	      'posts_per_page'   => 20,
        'offset'           => 0,
        'category'         => $cat_id,
        'orderby'          => 'date',
        'order'            => 'DESC',
        'post_type'        => 'post',
        'post_status'      => 'publish',
        );

    $posts_array = get_posts( $args ); 
  
?>

<div class="container post-wrapper">

  <?php
     foreach ( $posts_array as $post):
     setup_postdata( $post );

     echo $post->post_title;
     endforeach; wp_reset_postdata();
     ?>
  </div>


<?php
   get_footer();
   ?>
