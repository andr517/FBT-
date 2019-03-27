<?php
if (have_rows('index_content')):

    while (have_rows('index_content')):the_row();

        if (get_row_layout() == 'hero-with-bg-button'):

          $topboximage = get_sub_field('background'); ?>

          <section class="hero is-fullheight-with-navbar" style="background-image: url('<?php echo $topboximage ?>');">
            <div>
              <div class="container has-text-centered">
                <?php $box1image = get_sub_field('logo'); ?>
                <img class="ep-logo" src="<?php echo $box1image ?>" />
              </div>
              <div class="container has-text-centered">
                <a href="<?php the_sub_field('button-link'); ?>" class="button btn"><?php the_sub_field('button'); ?></a>
              </div>

              <div class="container has-text-centered">
                <div class="column">
                  <?php if(is_active_sidebar('index-media-icons')){
                        dynamic_sidebar('index-media-icons');
                      } ?>
                </div>
              </div>


           </div>
         </section>

    <?php  elseif (get_row_layout() == ''): ?>

        <?php
                endif;
            endwhile;
        endif;
        ?>
