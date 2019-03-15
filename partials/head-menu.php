<div class="columns has-text-centered is-gapless" id="topheadcol">
  <div class="column">
    <?php wp_nav_menu( array( 'theme_location' => 'header-menu1' ) ); ?>
  </div>

  <div class="column is-2">
    <a href="<?php echo home_url(); ?>">
    <?php if(is_active_sidebar('header-logo')){
      dynamic_sidebar('header-logo');
    } ?>
    </a>
  </div>

  <div class="column">
    <?php wp_nav_menu( array( 'theme_location' => 'header-menu2' ) ); ?>
  </div>
</div>
