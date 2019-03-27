<?php wp_footer(); ?>

<footer class="footer-fbt footer">
    <div class="columns">

  			<div class="footer-left column">

            <?php if(is_active_sidebar('footer-1')){
                  dynamic_sidebar('footer-1');
                } ?>

  			</div>

  			<div class="footer-center column">

          <?php if(is_active_sidebar('footer-2')){
      dynamic_sidebar('footer-2');
    } ?>

  			</div>

  			<div class="footer-right column">

          <?php if(is_active_sidebar('footer-3')){
            dynamic_sidebar('footer-3');
          } ?>

  			</div>

  		</div>
</footer>

</body>
</html>
