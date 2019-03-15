<?php wp_footer(); ?>

<footer class="footer">
  <div class="content has-text-centered">
    <div class="columns">
      <div class="column">
        <?php if(is_active_sidebar('footer-1')){
              dynamic_sidebar('footer-1');
            } ?>
      </div>
      <div class="column">
        <?php if(is_active_sidebar('footer-2')){
              dynamic_sidebar('footer-2');
            } ?>
      </div>
      <div class="column">
        <?php if(is_active_sidebar('footer-3')){
              dynamic_sidebar('footer-3');
            } ?>
      </div>
    </div>
  </div>
</footer>

</body>
</html>
