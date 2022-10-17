<!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<link rel="preconnect" href="https://fonts.googleapis.com">
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
		<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500&display=swap" rel="stylesheet">	
		<script type="text/javascript">
			var pathInfo = {
				base: '<?php echo get_template_directory_uri(); ?>/',
				css: 'css/',
				js: 'js/',
				swf: 'swf/',
			}
		</script>
		<?php wp_head(); ?>
	</head>
	<body <?php body_class(); ?>>
		<a class="accessibility" href="#main">Skip to Content</a>
		<noscript><div>Javascript must be enabled for the correct page display</div></noscript>
		<div class="wrapper">
			<header class="header">
        		<div class="container">
					<strong class="logo">
						<a href="<?php echo home_url(); ?>">
							<?php if($logo = get_field('logo', 'options')):
								echo '<img src="' . $logo . '">';
							else:
								echo bloginfo('name');
							endif; ?>
						</a>
					</strong>
					<div class="nav-holder">
						<nav>
							<?php if(has_nav_menu('header_menu'))
								wp_nav_menu( array(
									'container' => false,
									'theme_location' => 'header_menu',
									'menu_id'        => '',
									'menu_class'     => 'nav',
									'items_wrap'     => '<ul id="%1$s" class="%2$s">%3$s</ul>',
									'walker'         => new Custom_Walker_Nav_Menu
									)
								); ?>
						</nav>
						<?php if($buttons = get_field('buttons', 'options')): ?>
							<div class="buttons-holder">
								<?php foreach($buttons as $button):
								
									$link_data = $button['button_link'];
									$classes = '';

									switch ($button['button_style']) {
										case 'Transparent':
											$classes = 'btn btn-link';
											break;
										case 'Primary':
											$classes = 'btn btn-primary';
											break;
									}

									echo create_link($link_data, $classes);
								endforeach; ?>
							</div>
						<?php endif; ?>
					</div>
					<a href="#" class="nav-opener"><span></span></a>
				</div>
			</header>
			<main>