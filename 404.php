<?php get_header(); ?>

<img class="img-fluid" src="<?php header_image(); ?>" height="<?php echo get_custom_header()->height; ?>"
  width="<?php echo get_custom_header()->width; ?>" alt="" />

<div class="content-area">
  <main>


    <!-- middle area -->
    <section class="middle-area">
      <div class="container">
        <div class="row">

          <div class="error-404">
            <header>
              <h1>Page not found</h1>
              <p>Could not find what you're looking for. Try searching below.</p>
            </header>
          </div>
        </div>

        <div class="error">
          <?php get_search_form(  ); ?>
          <?php the_widget( 'WP_Widget_Recent_Posts', array(
            'title' => 'Latest posts',
            'number' => 3
          ) ); ?>
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