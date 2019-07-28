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
	<div id="wrap">
		<header class="container-fluid pt-0 pt-md-4">
			<nav class="navbar navbar-expand-lg navbar-light">
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

		<div id="home" class="container-fluid text-center text-md-left pl-lg-5 pr-lg-5">
			
			<div class="row mt-xl-5">
				<div class="col-lg-6 pr-0 mt-4 mt-lg-5 d-block d-lg-none pt-0 pl-5 pr-5 pb-0">
					<img src="https://luisurruela.com/wp-content/uploads/2019/07/web-developer-freelance-01.svg" class="img-fluid pl-lg-5 pr-lg-5">
				</div>
				<div class="col-lg-6 mt-lg-5 pt-lg-0 mt-xl-4 pt-xl-5">
					<div class="mt-lg-5 pt-5 pt-lg-3 pt-lg-0 text-center text-lg-left">
						<span>Hola! <strong>Soy Luis Urruela</strong></span>
						<div id="title">
							<h1>Web Developer &<br>UI/UX Designer</h1>	
						</div>
						<div id="subtitle" class="pr-lg-5 text-center text-lg-left">
							<h2>Diseñemos el sitio y la estratégia digital que impacte a todos.</h2>
						</div>

						<div class="d-none d-lg-block mb-5">
							<a class="btn btn-outline-primary mt-4 pl-4 pr-4 pt-lg-2 pb-lg-2 pl-lg-5 pr-lg-5 rounded-0" href="https://wa.me/529932090424" target="_blank" role="button">Mis servicios</a>
						</div>
						<div class="d-block d-lg-none">
							<a class="btn btn-outline-primary mt-3 pt-2 pl-5 pr-5 pb-2" href="https://wa.me/529932090424" target="_blank" role="button">Mis servicios</a>
						</div>
					</div>
				</div>
				<div class="col-lg-6 pr-0 mt-5 d-none d-lg-block">
					<img src="https://luisurruela.com/wp-content/uploads/2019/07/web-developer-freelance-01.svg" class="img-fluid">
				</div>
			</div>
			
		</div>
	</div>

	<section id="services">
		<div class="container-fluid pt-3 pb-3 pt-md-3 pb-md-3 pt-md-2 pb-md-2">
			<div id="title">
				<h3 class="pt-5 mb-0 text-center">Mis Servicios</h3>
				<div class="subtitle">
					<h5 class="text-center mt-3 mb-5 pl-md-5 pr-md-5 pl-3 pr-3">Tengo más de 20 años trabajando en proyectos digitales con clientes de diferentes giros. Me encantaría ser parte de tu éxito.</h5>
				</div>
			</div>
			
			<div class="row pt-1 pt-sm-4 pt-md-5 pb-md-5">

				<?php 	
					$args = array(
						'post_type'   		=> 'services'
					);
				
					$query = new WP_Query( $args );

					if ( $query->have_posts() ) : 
						while ( $query->have_posts() ) : 
							$query->the_post() ?>

							<div class="col-sm-4 text-center mb-5">
								<div class="services-img mb-4">
									<?php if ( has_post_thumbnail() ) : ?>
									    <?php the_post_thumbnail( 'thumbnail' ); ?>
									<?php endif; ?>
								</div>
								<h2 class="text-center mb-3"><?php echo the_title() ?></h2>
								<div class="text-white text-center pl-sm-4 pr-sm-4 pl-3 pr-3 pl-xl-1 pr-xl-1"><?php the_content() ?></div>
							</div>
						
					<?php endwhile;
					endif 
				?>
				
			</div>
		</div>
	</section>

<?php get_footer() ?>