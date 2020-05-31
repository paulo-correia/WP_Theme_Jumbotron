<!doctype html>
<!-- Start Header -->
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap core CSS -->

    <!-- Style WP -->
    <?php wp_head(); ?>

  </head>

  <body>
    <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">

      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <?php if ( has_nav_menu( 'primary' ) ) : ?>
      <?php
            $menuLocations = get_nav_menu_locations();
            $menuID = $menuLocations['primary'];
            $primaryNav = wp_get_nav_menu_items($menuID);
      ?>
        <ul class="navbar-nav mr-auto">
      <?php
            foreach ( $primaryNav as $navItem ) {
              echo '<li class="nav-item active">';
              echo '<a class="nav-link" href="'.$navItem->url.'" title="'.$navItem->title.'">'.$navItem->title.'</a>';
              echo '</li>';
            }

      ?>
        </ul>

  <?php endif; ?>
    <form class="form-inline my-2 my-lg-0" action="<?php echo home_url('/'); ?>" method="get">
      <input class="form-control mr-sm-2" type="text" name="s" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>
<!-- End Header -->
