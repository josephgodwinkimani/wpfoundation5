<?php
/**
 * The template for displaying the footer. 
 *
 * Comtains closing divs for header.php.
 *
 * For more info: https://developer.wordpress.org/themes/basics/template-files/#template-partials
 */			
 ?>
					
				<footer class="footer" role="contentinfo">
					
					<div class="inner-footer grid-x grid-margin-x grid-padding-x">
						
						<div class="small-12 medium-12 large-12 cell">
							<nav role="navigation">
	    						<?php joints_footer_links(); ?>
	    					</nav>
	    				</div>
						
						<div class="small-12 medium-12 large-12 cell copyright">
								<a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php
									/* translators: %s: CMS name, i.e. WordPress. */
									printf( esc_html__( '&#169;&nbsp;Divine %s', 'wpsunderscores' ), 'Assinter' );
								?></a>.
								<?php
									/* translators: 1: Theme name, 2: Theme author. */
									printf( esc_html__( 'Website by %s', 'wpsunderscores' ), '<a href="https://josephgodwinkimani.github.io">Joseph Godwin Kimani</a>' );
								?>
						</div>
					
					</div> <!-- end #inner-footer -->
				
				</footer> <!-- end .footer -->
			
			</div>  <!-- end .off-canvas-content -->
					
		</div> <!-- end .off-canvas-wrapper -->
		
		<?php wp_footer(); ?>
		
	</body>
	
</html> <!-- end page -->