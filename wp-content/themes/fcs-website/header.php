<!DOCTYPE HTML>
<html>
<head>
	<meta charset="utf-8">
	<title><?php if(is_front_page()) { echo 'Факультет інформатики'; } else { wp_title( ' | Факультет інформатики', true, 'right' ); } ?></title>
	<?php wp_head(); ?>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" type="image/png" href="<?php bloginfo('template_url'); ?>/img/favicon.ico" />
	<link rel="apple-touch-icon-precomposed" href="<?php bloginfo('template_url'); ?>/img/linux-lcd-152-192886.png">
</head>

<body <?php body_class(); ?>>

	<?php echo do_shortcode( '[contact-form-7 id="821" title="Contact form"]' ); ?>

	<div class="send-output"></div>
	
	<header>

		<div class="menu-wrap">

			<div class="menu-wrap-2">
		
				<?php
		
					// $defaults = array(
					// 	'container' => false,
					// 	'theme_location' => 'header-top-menu',
					// 	'menu_class' => 'main-menu'
					// );
		
					// wp_nav_menu($defaults);

				?>

				<div class="social-wrap">
					<a class="flaticon-facebook-app-logo fi icon icon-fb" href="https://www.facebook.com/mohylanka/"></a>
					<a class="flaticon-twitter-logo fi icon icon-twitter" href="https://twitter.com"></a>
					<a class="flaticon-youtube-logotype fi icon icon-youtube" href="https://www.youtube.com/channel/UC3znl1NwCry9LxDf0z-DVKA"></a>
					<a class="flaticon-wikipedia-logo icon fi icon-wiki" href="https://uk.wikipedia.org/wiki/Національний_університет_«Києво-Могилянська_академія»"></a>
				</div>

				<?php echo get_search_form(); ?>

				<button id="contact-us-btn">Написати нам</button>

			</div>

			<div class="menu-wrap-2">

				<div class="logo-wraps">

					<a href="http://www.ukma.edu.ua/" class="logo naukma-logo"></a>

					<div class="divider"></div>

					<a href="<?php bloginfo('url'); ?>" class="logo fcs-logo"></a>

				</div>
		
				<?php
		
					$defaults = array(
						'container' => false,
						'theme_location' => 'primary-menu',
						'menu_class' => 'main-menu'
					);
		
					wp_nav_menu($defaults);
		
				?>

			</div>

		</div>

	</header>

	<div class="show-menu-wrap">

		<p>МЕНЮ</p>

		<div class="show-menu"></div>
	
	</div>

	<div class="header-menus-mob-wrap">

		<div class="mob-menu menu-1">
			
			<?php
	
				// $defaults = array(
				// 	'container' => false,
				// 	'theme_location' => 'header-top-menu',
				// 	'menu_class' => 'main-menu'
				// );
	
				// wp_nav_menu($defaults);

			?>

		</div>

		<div class="mob-menu menu-2">

			<?php
	
				$defaults = array(
					'container' => false,
					'theme_location' => 'primary-menu',
					'menu_class' => 'main-menu'
				);
	
				wp_nav_menu($defaults);
	
			?>
			
		</div>
		
	</div>

	<div class="up fi flaticon-up"></div>