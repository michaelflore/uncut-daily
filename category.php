<?php /* Template Name: Category */ ?>

<?php get_header(); ?>
	<div id="content">
		<div id="inner-content">
			<div class="container-fluid">
                <div class="row">
                   	<div class="col-md-9">
                    	<h2 class="heading"><i class="fas fa-grip-lines"></i> <?php single_cat_title(); ?> <i class="fas fa-grip-lines"></i></h2>
                        <div class="container">
	                        <div class="row">
								<?php
									//the_archive_description( '<div class="taxonomy-description">', '</div>' );
								?>
										
								<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

								<div class="col-md-4">
									<main id="main">
										<div class="container">
											<div class="card">
											  <a href="<?php the_permalink(); ?>">
											    <?php the_post_thumbnail('full'); ?> 
												<div class="card-body">
												    <h3><?php the_title(); ?></h3>
												    <span><?php the_date(); ?></span>
												</div>
											  </a>
											</div><br>
										</div>
									</main>
								</div>

								<?php endwhile; ?>
									<?php bones_page_navi(); ?>
								<?php else : ?>
									<article id="post-not-found" class="hentry cf">
										<header class="article-header">
											<h1><?php _e( 'Oops, Post Not Found!', 'bonestheme' ); ?></h1>
										</header>
										<section class="entry-content">
											<p>
												<?php _e( 'Uh Oh. Something is missing. Try double checking things.', 'bonestheme' ); ?>											
											</p>
										</section>
										<footer class="article-footer">
											<p><?php _e( 'This is the error message in the archive.php template.', 'bonestheme' ); ?></p>
										</footer>
									</article>
								<?php endif; ?>		
							</div>
						</div>
					</div>
                    <div class="col-md-3">
						<?php get_sidebar('sidebar1'); ?>
			    	</div>
				</div>
			</div>
		</div>
	</div>
<?php get_footer(); ?>