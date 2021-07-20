<?php 
/*
Template Name: General Template

*/
?>

<?php get_header(); ?>

<img class="img-fluid" src="<?php header_image(); ?>" height="<?php echo get_custom_header()->height; ?>"
  width="<?php echo get_custom_header()->width; ?>" alt="" />

<div class="content-area">
  <main>


    <section class="middle-area">
      <div class="container">


        <!-- Loop start -->
        <div class="general-template">
          <?php 
            // If there are posts
            if (have_posts(  )):
              // While there are posts, show them to us
              while( have_posts(  ) ): the_post(  );
            ?>
          <!-- Posts will be displayed here -->
          <article>
            <h2><?php the_title(  ); ?></h2>

            <p><?php the_content(  ); ?></p>
          </article>
          <p>This template is the same on all pages. This is the general template.</p>
          <?php 
            endwhile;
            else:
            ?>
          <p>There is nothing yet to be displayed.</p>
          <?php endif; ?>
        </div>
        <!-- Loop end -->

      </div>
    </section>
</div>
</div>

</main>
</div>

<?php get_footer(); ?>