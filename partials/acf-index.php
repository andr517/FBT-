<?php
if (have_rows('index_content')):

    while (have_rows('index_content')):the_row();

        if (get_row_layout() == 'tiles'): ?>

        <div class="container" id="tileindex">

        <div class="tile is-ancestor">

          <div class="tile is-vertical is-parent">
            <div class="tile is-child box">
              <?php the_sub_field('top_field_editor'); ?>
            </div>

            <div class="tile is-child box">
              <?php if(is_active_sidebar('recent-posts')){
                dynamic_sidebar('recent-posts');
              } ?>
            </div>

          </div>
          <div class="tile is-parent is-4 has-text-centered">
            <div class="tile is-child box">
                <h2 class="title"><?php the_sub_field('side_field_title'); ?></h2>
              <?php the_sub_field('side_field'); ?>
            </div>
          </div>

        </div>

        </div>

    <?php  elseif (get_row_layout() == ''): ?>

        <?php
                endif;
            endwhile;
        endif;
        ?>
