<?php
   get_header();

   $post_id = get_the_ID();
   $post =  get_post($post_id);

?>

<!-- add author info-->
<div class="container page-wrapper">
     <h1> <?php echo $post->post_title; ?></h1>
     <small> <?php get_the_author();?></small>
     <small><time><?php echo $post->post_modified; ?></time></small>


     <p class="post-content"> <?php echo $post->post_content; ?> </p>

</div>

<?php
get_footer();
?>
