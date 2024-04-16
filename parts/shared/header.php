<nav class="navbar navbar-expand-lg ">
	<div class="container navbar-light bg-light float-header">
		<button class="navbar-toggler" 	
				type="button" data-bs-toggle="offcanvas" 
				data-bs-target="#primaryNav" 
				aria-controls="primaryNav" 
				aria-expanded="false" 
				aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>

		<div class="offcanvas offcanvas-start" tabindex="-1" id="primaryNav">
			<div class="offcanvas-header">
				<h5 class="offcanvas-title" id="offcanvasNavbarLabel">

					<?php
						// $BsWp = new BsWp;
						// $BsWp->get_template_parts(['parts/shared/logo']);
					?>

				</h5>
				<button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
			</div>
			<div class="offcanvas-body">
					<?php
						$BsWp = new BsWp;
						$BsWp->get_template_parts(['parts/shared/logo']);
					?>
				</a>
				<?php
				wp_nav_menu( [
					'menu'          	=> 'primary',
					'theme_location'	=> 'primary',
					'depth'         	=> 2,
					'container'			=> false,
					'menu_class'    	=> 'navbar-nav justify-content-start flex-grow-1 pe-3',
					'fallback_cb'   	=> '__return_false',
					'walker'         	=> new bootstrap_5_wp_nav_menu_walker()
				] );
				?>
				<?php get_search_form(); ?>
			</div>
		</div>
	</div>
</nav>

<header>
	<div class="container">
		
	</div>
</header>