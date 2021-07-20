<?php get_header(); ?>

<img class="img-fluid" src="<?php header_image(); ?>" height="<?php echo get_custom_header()->height; ?>"
  width="<?php echo get_custom_header()->width; ?>" alt="" />

<div class="content-area">
  <main>


    <!-- middle area -->
    <section class="middle-area">
      <div class="container">
        <div class="row">

          <div class="category col-md-9">
            <?php

            the_archive_title( '<h1 class="archive-title">', '</h1>' );
            the_archive_description(  );

            // If there are any posts
            if (have_posts()) :
              // While have posts, show them to us
              while (have_posts()) : the_post();

                // Require the file which is at template-parts/content.php
                // The second argument dynamically gets the format and if the post now has a format that specific format will be displayed
                // If not, then the post will be displayed in the standard format
                get_template_part( 'template-parts/content', 'category' );
              endwhile;
              // This is after the loop when the posts have been displayed
              ?>
            <div class="row">
              <div class="pages col-6 text-left">
                <?php previous_posts_link( "<< Newer posts" ); ?>
              </div>
              <div class="pages col-6 text-right">
                <?php next_posts_link( "Older posts >>" ); ?>
              </div>
            </div>
            <?php
            else :
            ?>

            <p>There's nothing yet to be displayed!</p>

            <?php endif; ?>
          </div>

          <!-- This is the sidebar -->
          <aside class="sidebar col-md-3 h-100">

            <?php get_sidebar( 'blog' );?>
          </aside>
        </div>
      </div>
    </section>
    <!-- map -->
    <section class="map">
      <div class="container">
        <div class="row">
          Map
    </section>
</div>
</div>

</main>
</div>

<?php get_footer(); ?>