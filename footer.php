<?php
/**
 * @package WordPress
 * @subpackage WP-Skeleton
 */
?>
  <div class="clear"></div>
    <div class="footer">
       <hr />
        <div class="sixteen columns">
            <?php if ( is_active_sidebar( 'footer-sidebar' ) ) : ?> <?php dynamic_sidebar( 'footer-sidebar' ); ?>
            <?php else : ?><p></p>
	        <?php endif; ?> 
        </div>
    </div>
            
</div>                                            
<?php wp_footer(); ?>
   
</body>
</html>