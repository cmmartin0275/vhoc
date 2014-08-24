<?php
/**
 * @package WordPress
 * @subpackage Basic Starter
 */
?>
	</div> <!-- /content -->
</div> <!-- /container -->
<div id="footer">
	<div id="shell">  
		
		<p class="address">
			<?php echo get_post_meta(2,'Address',true); ?>
		</p>
		<p class="hours">
			<?php echo get_post_meta(2,'Hours Tagline',true); ?>
		</p>
		<p class="phone">
			<?php echo get_post_meta(2,'Phone Number',true); ?>
		</p>
    	<p class="copyright">Copyright&copy; <?php echo date('Y') ?> Victor Hugos Restaurant Group LLC</p>     
    </div>    
</div> <!-- /footer -->

</div> <!-- /page -->

<?php wp_footer(); ?>
</body>
</html>