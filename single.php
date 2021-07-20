<?php get_header();  ?>

<div id="primary">
  <div id="main">
    <div class="container">

      <?php 

			while( have_posts() ):
				the_post();
				get_template_part( 'template-parts/content', 'single' );

        ?>
      <div class="row">
        <div class="pages col-6 text-left">
          <?php next_post_link( '&laquo; %link' ); ?>
        </div>
        <div class="pages col-6 text-left">
          <?php previous_post_link( '%link &raquo;' ); ?>
        </div>
      </div>
      <?php

        if(comments_open(  ) || get_comments_number(  )):
          comments_template( '/new_comments.php' );
        endif;  
			endwhile;

			?>

    </div>
  </div>
</div>

<?php get_footer(); ?>