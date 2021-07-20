<?php get_header();  ?>
<!-- search.php is a template to display the results -->
<div id="primary">
  <div id="main">
    <div class="container">
      <h2>Search results for: <?php echo get_search_query(  ); ?></h2>
      <?php 

			while( have_posts() ):
				the_post();
				get_template_part( 'template-parts/content', 'search' );

        if(comments_open(  ) || get_comments_number(  )):
          comments_template( '/new_comments.php' );
        endif;
        
			endwhile;

      the_posts_pagination( array(
        'prev_text' => 'Previous',
        'next_text' => 'Next',
        'screen_reader_text' => 'Navigate Posts'
      ) );

			?>

    </div>
  </div>
</div>

<?php get_footer(); ?>