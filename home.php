<?php get_header(); ?>

<?php if ( have_posts() ) : ?>
	<?php while ( have_posts() ) : the_post(); ?>

  <section class="section">
    <div class="container">
      <h1 class="title"></h1>
      <div class="tile is-ancestor">
        <div class="tile is-vertical is-parent">
          <div class="tile is-child box">
        <?php the_content(); ?>
      </div>
      </div>
      </div>
    </div>
  </section>



	<?php endwhile; ?>
<?php endif; ?>

<?php get_footer(); ?>
