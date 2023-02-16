<div class="header-right">
	<?php get_template_part('template-parts/header','top'); ?>
	<div class="navigation">
		<div class="toggle">
			<a class="toggleMenu" href="#"><?php esc_html_e('Menu','garden-lite'); ?></a>
		</div><!-- toggle -->
		<nav id="main-navigation" class="site-navigation primary-navigation sitenav" role="navigation">
			<?php 
				wp_nav_menu( 
					array( 
						'theme_location' => 'primary'
					)
				);
			?>
		</nav>
	</div><!-- navigation -->
</div><!-- header right -->