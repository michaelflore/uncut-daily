<?php
/*
 Template Name: Home 
 *
 * This is your custom page template. You can create as many of these as you need.
 * Simply name is "page-whatever.php" and in add the "Template Name" title at the
 * top, the same way it is here.
 *
 * When you create your page, you can just select the template and viola, you have
 * a custom page template to call your very own. Your mother would be so proud.
 *
 * For more info: http://codex.wordpress.org/Page_Templates
*/
?>

<?php get_header(); ?>
        <h2 class ="heading"><i class="fas fa-grip-lines"></i> Trending <i class="fas fa-grip-lines"></i></h2>
			<?php echo do_shortcode('[smartslider3 slider=1]'); ?>
			<br>

		<h2 class = "heading"><i class="fas fa-grip-lines"></i> Latest Stories <i class="fas fa-grip-lines"></i></h2>
			<div class="row">
				<?php
	              $args = array(
	              'post_type' => 'post',
	              'post_status' => 'publish',
	              'posts_per_page' => '8',
	              'order' => 'DESC',
	              'paged' => get_query_var('page')
	            );

	            $loop = new WP_Query( $args );

	            if ( $loop->have_posts() ) : while ( $loop->have_posts() ) : $loop->the_post(); echo $title;

	            //if( $loop->current_post != 0 && !is_paged() ) :

	          	?>

	          	<div class="col-xl-3">
	               <div class="container">
					  <div class="card">
					  	<a href="<?php the_permalink(); ?>">
					    	<?php the_post_thumbnail('full'); ?> 
					    <div class="card-body">
					      <h3><?php the_title(); ?></h3>
					      <span><?php the_date(); ?></span>
					    </div>
					    </a>
					  </div>
					</div>
					<br>
				</div>
		          <?php
		            //endif;
		            endwhile;
		            endif;
		          ?>
      		</div>
      		<br>
			<h2 class = "heading"><i class="fas fa-grip-lines"></i> Watch <i class="fas fa-grip-lines"></i></h2>
				<?php echo do_shortcode('[aiovg_videos]'); ?>
          
<?php get_footer(); ?>