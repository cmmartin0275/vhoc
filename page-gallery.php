<?php
/**
 * @package WordPress
 * @subpackage Basic Starter
 * Template Name: Gallery Page
 */

get_header(); ?>
<div id="shell"> 


	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
	<div class="post" id="post-<?php the_ID(); ?>">
		<h1><?php the_title(); ?></h1>
		<?php the_content(); ?>
		<div class="gallery">
        
		<?php
            $args = array( 
                'post_type' => 'gallery', 
                'posts_per_page' => -1, 
                'order' => 'ASC', 
                'orderby' => 'menu_order' 
                ); 
            query_posts($args);
            if (have_posts()) : while (have_posts()) : the_post();?> 
             <div class="item"><?php echo get_the_post_thumbnail($post->ID, 'gallery', true);?></div>
  			<?php endwhile; endif; wp_reset_query(); ?>
 		</div>
	</div>
	<?php endwhile; endif; ?>   
</div> <!-- end shell -->
<?php get_footer(); ?>
