<?php get_header(); ?>
    
      <img class="banner" src="<?=get_template_directory_uri()?>/assets/images/banner1.jpg" alt="Logo"> 
            <br>
      <div class="container">
           
      <?php 
        if(have_posts(  )):
          while ( have_posts(  ) ) : the_post(  ) ; ?>
            <?php the_content( ) ?>

        <?php endwhile;

        else :
            echo('no post');
        endif;
      ?>
      </div>  
<?php get_footer();?>
    