<div>
    <nav class="navbar container" role="navigation" aria-label="main navigation">
        <div class="navbar-brand">
          <a href="<?php echo home_url(); ?>">
            <?php if(is_active_sidebar('header-logo')){
              dynamic_sidebar('header-logo');
            } ?>
          </a>

            <button class="button navbar-burger" data-target="primary-menu">
                <span></span>
                <span></span>
                <span></span>
            </button>
        </div>
        <div class="navbar-end">
        <?php
      wp_nav_menu( array(
          'theme_location'    => 'header-menu1',
          'depth'             => 2,
          'container'         => false,
          //'items_wrap'        => "<div>",
          'menu_class'        => 'navbar-menu',
          'menu_id'           => 'primary-menu',
          //'after'             => "</div>",
          'walker'            => new Navwalker())
      );
      ?>
    </div>
    </nav>
</div>
