<?php 
/**
 * The template for displaying search results pages
 *
 * For more info: https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 */
 	
get_header(); ?>
			
	<div class="content">

		<div class="inner-content grid-x grid-margin-x grid-padding-x">
	
			<main class="main small-12 medium-12 large-12 cell" role="main">
				<header>
					<h4 class="archive-title"><?php _e( 'Product Search results for ->', 'jointswp' ); ?> <?php echo esc_attr(get_search_query()); ?></h4>
				</header>

				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			 
					<!-- To see additional archive styles, visit the /parts directory -->
					<?php get_template_part( 'parts/loop', 'archive' ); ?>
				    
				<?php endwhile; ?>	

					<?php joints_page_navi(); ?>
					
				<?php else : ?>
				
					<?php get_template_part( 'parts/content', 'missing' ); ?>
						
			    <?php endif; ?>
	
		    </main> <!-- end #main -->
		
		    
		
		</div> <!-- end #inner-content -->

	</div> <!-- end #content -->

<?php get_footer(); ?>
