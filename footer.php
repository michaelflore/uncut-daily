			<footer>
				<nav role="navigation">
					<?php wp_nav_menu(array(
    				'container' => 'div',                           // enter '' to remove nav container (just make sure .footer-links in _base.scss isn't wrapping)
    				'container_class' => 'footer-links cf',         // class of container (should you choose to use it)
    				'menu' => __( 'Footer Links', 'bonestheme' ),   // nav name
    				'menu_class' => 'nav footer-nav cf',            // adding custom nav class
    				'theme_location' => 'footer-links',             // where it's located in the theme
    				'before' => '',                                 // before the menu
   					'after' => '',                                  // after the menu
    				'link_before' => '',                            // before each link
    				'link_after' => '',                             // after each link
    				'depth' => 0,                                   // limit the depth of the nav
    				'fallback_cb' => 'bones_footer_links_fallback'  // fallback function
					)); ?>
				</nav>

				<br>
                <center>
                   	<a href="https://www.youtube.com/" class="fa fa-youtube" title="YouTube"></a>
                   	<a href="https://vimeo.com/" class="fa fa-vimeo" title="Vimeo"></a>
               	</center>
                	
				<center>
					<div class = "footerbox">
						Information:<br>
						<a style="color: white;" href="http://uncutdaily.com/about/">About Us</a><br>
						Location - United States
					</div>

					<div class = "footerbox">
						Resources:<br>
						<a style="color: white;" href="http://uncutdaily.com/contact/">Contact Us</a><br>
						<a style="color: white;" href="http://uncutdaily.com/privacy-policy/">Privacy Policy</a>
					</div>
				</center>

				<center>
					<div class="made">Made with &#10084;</div>
					<p style = "color:white; font-family: 'Roboto', sans-serif; background-color: green; padding: 20px; margin-bottom: 0px;">&copy
					2019 - 2020 Uncut Daily. All Rights Reserved.
					</p>
				</center>
							
			</footer>

		</div>

		<?php // all js scripts are loaded in library/bones.php ?>
		<?php wp_footer(); ?>
	
	</body>

</html> <!-- end of site. what a ride! -->
