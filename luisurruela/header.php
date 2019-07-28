<!DOCTYPE html>
<html <?php language_attributes() ?>>
<head>
	<!-- Required meta tags -->
	<meta charset="<?php bloginfo( 'charset' ) ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="profile" href="http://gmpg.org/xfn/11" />
   	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
	<!-- Bootstrap CSS -->
	<?php wp_head() ?>
</head>
<body <?php body_class() ?>>
	
		<header class="container-fluid pt-3">
			<nav id="section-nav" class="navbar navbar-expand-lg navbar-light">
				<a class="navbar-brand" href="#">
					<?php ( has_custom_logo() ? the_custom_logo() : bloginfo( 'name' ) ) ?>
				</a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
				
				<?php if ( has_nav_menu( 'primary' )) {
					wp_nav_menu( array(
						'theme_location'  => 'primary',
						'depth'	          => 2,
						'container'       => 'div',
						'container_class' => 'collapse navbar-collapse text-center text-md-left',
						'container_id'    => 'navbarNavDropdown',
						'menu_class'      => 'navbar-nav ml-auto',
						'fallback_cb'     => 'WP_Bootstrap_Navwalker::fallback',
						'walker'          => new WP_Bootstrap_Navwalker(),
					) );
				} ?>
				
			</nav>
		</header>	