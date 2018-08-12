<footer>
    <section id="footer">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="box">
                        <h3>
                            Últimos one to one
                        </h3>
                        <div class="content">
                            <?php 
                                $args = 
                                    array(
                                        'post_type' => 'post', 
                                        'numberposts' => 1, 
                                        'orderby' => 'date', 
                                        'order' => 'DESC',
                                        'post_status' => 'publish',
                                        'category' => '23',
                                    );
                                $posts = get_posts( $args );
                                foreach ($posts as $post):
                                    the_excerpt($post->ID);
                            ?>
                                
                            <?php if (has_post_thumbnail($post->ID)): ?>
                                <img src="<?php the_post_thumbnail_url( $post->ID, 'large' ); ?>" class="img-fluid" alt="<?php echo get_the_title($post->ID); ?>">
                            <?php endif ?>

                            <?php 
                                endforeach;
                            ?>
                        </div>
                    </div>
                </div>
                <?php if ( is_active_sidebar( 'widget-footer-twitter' ) ): ?>
                <div class="col">
                    <div class="box">
                        <?php dynamic_sidebar( 'widget-footer-twitter' ); ?>
                    </div>
                </div>
                <?php endif; ?>
                <?php if ( is_active_sidebar( 'widget-footer-instagram' ) ): ?>  
                <div class="col">
                    <div class="box">
                        <?php dynamic_sidebar( 'widget-footer-instagram' ); ?>
                    </div>
                </div>
                <?php endif; ?>
                <?php if ( is_active_sidebar( 'widget-footer-facebook' ) ): ?>  
                <div class="col">
                    <div class="box">
                        <?php dynamic_sidebar( 'widget-footer-facebook' ); ?>
                    </div>
                </div>
                <?php endif; ?>
            </div>
        </div>
    </section>
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
