<?php
/**
 * @package WordPress
 * @subpackage Basic Starter
 */

get_header(); ?>
<div id="shell"> 


	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
	<div class="post" id="post-<?php the_ID(); ?>">
		<h1><?php the_title(); ?></h1>
		<?php the_content(); ?>
		
		<?php edit_post_link('Edit this entry.', '<p>', '</p>'); ?>
	</div>
	<?php endwhile; endif; ?>   
</div> <!-- end shell -->
<?php get_footer(); ?>
