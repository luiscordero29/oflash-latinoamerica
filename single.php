<?php get_header(); ?>
    <div id="layout" class="container">
    	<div class="row">
    		<div class="col">
    			<section id="single">
	    			<?php if ( have_posts() ): ?>
						<?php while ( have_posts() ) : the_post(); ?>
							<article>
								<div class="thumbnail">
									<?php if (has_post_thumbnail()): ?>
										<img src="<?php the_post_thumbnail_url( 'full' ); ?>" class="img-fluid" alt="<?php echo get_the_title(); ?>">
							     	<?php else: ?>
										<img src="<?php echo get_template_directory_uri(); ?>/assets/images/thumbnail-blog-post.png" class="img-fluid" alt="<?php echo get_the_title(); ?>">
							     	<?php endif ?>
							     	<center>
							     		<i class="far fa-image fa-1x"></i>
							     	</center>
								</div>
								<header>
									<div class="category">
										<?php the_category( ' ' ); ?>
									</div>
									<h1 class="title">
										<?php the_title(); ?>
									</h1>
									<div class="meta">
										<i class="fa fa-calendar"></i> <?php the_date(); ?>
										<i class="fa fa-user"></i> <?php the_author(); ?>
									</div>
								</header>
								<div class="cotent">
									<?php the_content(); ?>
								</div>
								<footer>
									<div class="row">
										<div class="col">
											<div class="text-left">
												<div class="btn-group btn-group-sm" role="group" aria-label="Shared">
												  	<a class="btn btn-default"><i class="fa fa-comments"></i> <?php comments_number( 'Sin comentarios', 'Un comentario', '% comentarios' ); ?>.</a>
												  	<a class="btn btn-default"><i class="fa fa-heart"></i> Me gustas</a>
												</div>
											</div>
										</div>
										<div class="col">
											<div class="text-right">
												<div class="btn-group btn-group-sm" role="group" aria-label="Shared">
												  	<a class="btn btn-default" target="_blank" data-href="<?php echo get_permalink(); ?>" href="https://www.facebook.com/sharer/sharer.php?u=<?php echo get_permalink(); ?>"><i class="fab fa-facebook-f"></i></a>
												  	<a class="btn btn-default" target="_blank" href="https://twitter.com/intent/tweet?text=<?php echo get_the_title(); ?>&url=<?php echo get_permalink(); ?>"><i class="fab fa-twitter"></i></a>
												  	<a class="btn btn-default" target="_blank" href="https://plus.google.com/share?url=<?php echo get_permalink(); ?>"><i class="fab fa-google-plus-g"></i></a>
												</div>
											</div>
										</div>
									</div>
								</footer>
							</article>
						<?php endwhile; ?>
	    			<?php endif; ?>
    			</section>
    			<section id="single-nav">
					<?php echo isset( $WPPostNavigation ) ? $WPPostNavigation->WP_Custom_Post_Navigation():''; ?>
    			</section>
    		</div>
    		<div id="sidebar" class="col-3">
    			<div class="sidebar">
    				<?php get_sidebar(); ?>
    			</div>
    		</div>
    		<div class="col-9">    						
    			<section id="recomended-posts">
    				<div class="row">
    					<div class="col">
    						<h3>Articulos Recomendados</h3>
    					</div>
    					<div class="col">
    						<div class="ali"></div>
    					</div>
    				</div>
		    		<div class="owl-carousel">
						<div> Your Content </div>
						<div> Your Content </div>
						<div> Your Content </div>
						<div> Your Content </div>
						<div> Your Content </div>
						<div> Your Content </div>
						<div> Your Content </div>
					</div>
    			</section>
    		</div>
    	</div>
    </div>
<?php get_footer(); ?>
