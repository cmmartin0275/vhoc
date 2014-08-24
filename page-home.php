<?php
/**
 * @package WordPress
 * @subpackage Basic Starter
 *Template Name: Home Page
 */

get_header(); ?>

	<div id="home_banner" class="cycle-slideshow" 
    data-cycle-fx="scrollHorz"
    data-cycle-speed="1000"
    data-cycle-slides="> div"
    data-cycle-pager=".banner-pager"
    data-cycle-timeout="5000"

> 
        <?php
            $args = array( 
                'post_type' => 'home-banner', 
                'posts_per_page' => -1, 
                'order' => 'ASC', 
                'orderby' => 'menu_order' 
                ); 
            query_posts($args);
            if (have_posts()) : while (have_posts()) : the_post();
            $src = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'banner', false, '' );
            ?> 
            <div class="banner" style="background-image: url(<?php echo $src[0]; ?>);">
                <div class="banner-info">
                    <?php the_content(); ?>
                </div>
            </div> 
            <?php endwhile; endif; wp_reset_query();?>  
        </div> 
         <div class="banner-pager"></div>
<div id="shell">
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
	<div class="post" id="post-<?php the_ID(); ?>">
		
		<?php the_content(); ?>
	
	</div>
	<?php endwhile; endif; ?>   
</div> <!-- end shell -->
<?php get_footer(); ?>
