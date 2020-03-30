<?php
/*
 Template Name: Entertainment
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

<h2 class = "heading"><i class="fas fa-grip-lines"></i> Entertainment <i class="fas fa-grip-lines"></i></h2>


			<div id="content">
				<div id="inner-content">
					<div class="container-fluid">
                    <div class="row">
                    	<div class="col-sm-12">
						<main id="main">
							<?php echo do_shortcode('[aiovg_videos]'); ?>
						</main>
					    </div>
					</div>
				</div>
				</div>
			</div>

<?php get_footer(); ?>