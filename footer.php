<footer>
    <?php if ( is_active_sidebar( 'widget-footer' ) ): ?> 
	<section id="footer">
		<div class="container">
			<div class="row">
                <?php dynamic_sidebar( 'widget-footer' ); ?>
			</div>
		</div>		
	</section>
    <?php endif ?>
    <?php if ( is_active_sidebar( 'widget-copyright' ) ): ?> 
	<section id="copyright">
		<div class="container">
			<div class="row">
				<div class="col">
					<center>
						<?php dynamic_sidebar( 'widget-copyright' ); ?>
					</center>
				</div>
			</div>
		</div>
	</section>
    <?php endif ?>
</footer>

		<!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="<?php echo get_template_directory_uri(); ?>/vendor/jquery/dist/jquery.min.js"></script>
        <script src="<?php echo get_template_directory_uri(); ?>/vendor/popper.js/dist/umd/popper.min.js"></script>
        <script src="<?php echo get_template_directory_uri(); ?>/vendor/bootstrap/dist/js/bootstrap.min.js"></script>
		<!-- Owl Carousel -->
        <script src="<?php echo get_template_directory_uri(); ?>/vendor/owl.carousel/dist/owl.carousel.min.js"></script>
		<script type="text/javascript">
			$(document).ready(function(){
			  	$('.owl-carousel').owlCarousel();
			});
		</script>
		<?php wp_footer(); ?>
    </body>
</html>