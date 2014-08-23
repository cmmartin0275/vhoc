<?php
/**
 * @package WordPress
 * @subpackage Basic Starter
 */
?>
	</div> <!-- /content -->
</div> <!-- /container -->
<div id="footer">
	<?php wp_nav_menu( array( 'theme_location' => 'footer' ) ); ?>           
    <p>Copyright &copy; <?php echo date('Y') ?></p>         
</div> <!-- /footer -->

</div> <!-- /page -->

<?php wp_footer(); ?>
</body>
</html>