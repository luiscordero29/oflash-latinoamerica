<?php get_header(); ?>
	<section id="header">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="header">
                        <div class="row">
                            <div class="col-12">
                                <?php if ( is_active_sidebar( 'widget-top-banner' ) ): ?> 
                                    <div class="widget-top-banner">
                                        <?php dynamic_sidebar( 'widget-top-banner' ); ?>
                                    </div>
                               	<?php endif ?>
                            </div>
                            <div class="col-12">
                                <div class="subscribe">                                        
                                    <form>
                                        <div class="form-row">
                                            <div class="col-2">
                                                <input type="text" readonly class="form-control-plaintext" value="OFLASH NOTICIAS">
                                            </div>
                                            <div class="col">
                                                <input type="text" class="form-control" id="email" placeholder="CORREO ELECTRONICO">
                                            </div>
                                            <div class="col-2">
                                                <button type="submit" class="btn-suscribe btn btn-primary btn-block">SUSCRIBETE</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div id="layout" class="container">
    	<div class="row">
    		<div class="col">
    			<section id="blog">
	    			<?php if ( have_posts() ): ?>
						<?php while ( have_posts() ) : the_post(); ?>
							<article>
								<div class="thumbnail">
									<a href="<?php echo get_permalink(); ?>">
										<?php if (has_post_thumbnail()): ?>
											<img src="<?php the_post_thumbnail_url( 'full' ); ?>" class="img-fluid" alt="<?php echo get_the_title(); ?>">
							     		<?php else: ?>
											<img src="<?php echo get_template_directory_uri(); ?>/assets/images/thumbnail-blog-post.png" class="img-fluid" alt="<?php echo get_the_title(); ?>">
							     		<?php endif ?>
							     		<center>
							     			<i class="far fa-image fa-1x"></i>
							     		</center>
									</a>
								</div>
								<header>
									<div class="category">
										<?php the_category( ' ' ); ?>
									</div>
									<h1 class="title">
										<a href="<?php echo get_permalink(); ?>">
											<?php the_title(); ?>
										</a>
									</h1>
									<div class="meta">
										<i class="fa fa-calendar"></i> <?php the_date(); ?>
										<i class="fa fa-user"></i> <?php the_author(); ?>
									</div>
								</header>
								<div class="cotent">
									<?php the_excerpt(); ?>
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
    			<section id="posts-nav">
					<?php posts_nav_link('','',''); ?>
    			</section>
    		</div>
    		<div id="sidebar" class="col-3">
    			<div class="sidebar">
    				<?php get_sidebar(); ?>
    			</div>
    		</div>
    	</div>
    </div>
<?php get_footer(); ?>
