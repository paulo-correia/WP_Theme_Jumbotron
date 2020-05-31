<!-- Header WP -->
<?php get_header(); ?>

<!-- Start Main Page -->
<main role="main">

  <!-- Main jumbotron for a primary marketing message or call to action -->
  <div class="jumbotron">
    <div class="container">
      <!-- WP Name -->
      <h1 class="display-3"><?php bloginfo( 'name' ); ?></h1>
      <p><?php bloginfo( 'description' ); ?></p>
       <!-- WP Home Url -->
      <p><a class="btn btn-primary btn-lg" href="<?php echo home_url('/'); ?>" role="button">Learn more &raquo;</a></p>
    </div>
  </div>

  <div class="container">
    <!-- Example row of columns -->
    <div class="row">

      <!-- WP Posts -->
      <?php if( have_posts() ) : while( have_posts() ) : the_post(); ?>

      <div class="col-md-4">
        <h2><a href="<?php the_permalink() ?>" ><?php the_title(); ?></a></h2>
        <?php the_content(); ?>
        <p><a class="btn btn-secondary" href="<?php the_permalink() ?>" role="button">View details &raquo;</a></p>
      </div>

      <?php endwhile; endif; ?>

    </div>

    <hr>

  </div>
  <!-- /container -->

</main>
<!-- End Main Page -->

<!-- Footer WP -->
<?php get_footer(); ?>
