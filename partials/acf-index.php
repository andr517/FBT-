<?php
if (have_rows('index_content')):

    while (have_rows('index_content')):the_row();

        if (get_row_layout() == 'background-img'):

          $topboximage = get_sub_field('image'); ?>

        <section class="hero is-large" style="background-position: center; background-repeat: no-repeat; background-size: cover; background-image: url('<?php echo $topboximage ?>');">
          <div class="hero-body">
            <div class="container has-text-centered">
              <h1 class="title has-text-white" style="font-family: Montserrat,sans-serif;">
                The official Five bridges tall website
              </h1>
              <h2 class="subtitle has-text-white" style="font-family: Montserrat,sans-serif;">
                Large subtitle
              </h2>
                <a class="button is-inverted is-outlined">Invert Outlined</a>
            </div>
          </div>
        </section>

    <?php  elseif (get_row_layout() == ''): ?>

        <?php
                endif;
            endwhile;
        endif;
        ?>
