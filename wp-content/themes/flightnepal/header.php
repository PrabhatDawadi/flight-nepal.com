<!DOCTYPE HTML>
<html>
	<head>
		<title><?php wp_title('|', true, 'right'); ?></title>
		<meta charset="utf-8">
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta name="copyright" content="" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0,user-scalable=0" />
		
		<?php $settings = parse_ini_file("settings.ini", TRUE); ?>
		<link rel='stylesheet' href='<?php bloginfo('template_directory'); ?>/css/style.css?ver=<?php echo $settings['design']['CSS_VERSION']; ?>' type='text/css' media='all'/>
		<link rel='stylesheet' href='<?php bloginfo('template_directory'); ?>/css/responsive.css?ver=<?php echo $settings['design']['CSS_VERSION']; ?>' type='text/css' media='all'/>
		<link rel='stylesheet' href='<?php bloginfo('template_directory'); ?>/css/fonts.css?ver=<?php echo $settings['design']['CSS_VERSION']; ?>' type='text/css' media='all'/>
		<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/jquery-3.2.1.min.js?ver=<?php echo $settings['design']['JS_VERSION']; ?>"></script>
		<link rel="icon" type="image/png" sizes="96x96" href="<?php bloginfo('template_directory'); ?>/images/favicons/favicon-96.png">
		<link rel="icon" type="image/png" sizes="32x32" href="<?php bloginfo('template_directory'); ?>/images/favicons/favicon-48.png">
		<link rel="icon" type="image/png" sizes="32x32" href="<?php bloginfo('template_directory'); ?>/images/favicons/favicon-32.png">        
        <link rel="icon" type="image/png" sizes="16x16" href="<?php bloginfo('template_directory'); ?>/images/favicons/favicon-16.png">
		<?php wp_head(); ?>	
	</head>
	<body>

		<?php include_once( ABSPATH . 'wp-admin/includes/plugin.php' ); ?>

		<header>
			<div class="upper">
				<ul class="social left">
					<li><a href="#"><img src="<?php bloginfo('template_directory'); ?>/images/header/facebook.svg" alt=""></a></li>
					<li><a href="#"><img src="<?php bloginfo('template_directory'); ?>/images/header/twitter.svg" alt=""></a></li>
					<li><a href="#"><img src="<?php bloginfo('template_directory'); ?>/images/header/instagram.svg" alt=""></a></li>
					<li><p><a class="transition" href="#">info@aeromounttravel.com</a></p></li>
					<li><p class="line"><a class="transition" href="#">booking@aeromounttravel.com</a></p></li>
				</ul>
				<ul class="social right">
					<li><p>USA : <a class="transition" href="#">212-918-1874</a> | <a class="transition" href="#">415-335-4266</a></p></li>
					<li class="fax"><p>Fax : <a class="transition" href="#">646-619-4542</a></p></li>
					<li><p class="line">NEPAL : <a class="transition" href="#">01-4423678</a> | <a class="transition" href="#">4423679</a></p></li>
					<li><p class="line">VIBER : <a class="transition" href="#">+977-9801024614</a></p></li>
				</ul>
			</div>
			<div class="transparentMenuActive"></div>
			<div class="lower">
				<img id="menuButton" src="<?php bloginfo('template_directory'); ?>/images/header/menu.svg"/>
				<div class="container">
					<div class="logo">
						<a href="<?php echo get_site_url(); ?>">
							<img alt="Flight Nepal Logo" src="<?php bloginfo('template_directory'); ?>/images/logo/flight-nepal.svg"> 
						</a>
					</div>
					<?php if ( has_nav_menu( 'primary' ) ) : ?>
						<nav aria-label="<?php esc_attr_e( 'Top Menu', 'twentynineteen' ); ?>">
							<?php
							wp_nav_menu(
								array(
									'theme_location' => 'primary',
									'menu_class'     => 'main-menu',
									'items_wrap'     => '<ul id="%1$s" class="%2$s">%3$s</ul>',
								)
							);
							?>
						</nav>
					<?php endif; ?>
				</div>
			</div>
		</header>

		<div id="notification">
			<div class="icon">
				<div class="img">
					<img alt="Flight Nepal Logo" src="<?php bloginfo('template_directory'); ?>/images/logo/flight-nepal.svg">
				</div>
			</div>
			<div class="desc">
				<h6 class="success">Oops!</h6>
				<div class="msg">
				</div>
			</div>
			<img class="close" src="<?php bloginfo('template_directory'); ?>/images/icons/close.svg" alt="">
		</div>

		





