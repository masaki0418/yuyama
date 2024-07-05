<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>

		<link href="//www.google-analytics.com" rel="dns-prefetch">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/favicon.ico" rel="shortcut icon">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/touch.png" rel="apple-touch-icon-precomposed">

		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="<?php bloginfo('description'); ?>">

		<?php wp_head(); ?>
		<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/style.css">
		<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/lightbox.css">
		<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/slick.css">
		<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/slick-theme.css">
		<link href="<?php echo get_template_directory_uri(); ?>/css/modal-video.min.css" rel="stylesheet">
		<!-- endbuild -->
		<link rel="preconnect" href="https://fonts.googleapis.com">
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
		<link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@100..900&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">

	</head>
		<header class="commonHeader">
			<div class="commonHeader__inner">
				<h1 class="header-ttl"><a href="/"><img src="<?php echo get_template_directory_uri(); ?>/img/logo.svg" width="150" height="40" alt="Your Partner in Medication yuyama"></a></h1>
				<nav class="global">
					<div class="globalNav">
						<ul class="nav-content">
							<li><a href="#">企業情報</a></li>
							<li><a href="#">製品情報</a></li>
							<li><a href="#">サポート</a></li>
							<li><a href="#">サステナビリティ</a></li>
						</ul>
						<ul class="nav-content is-doctor">
							<li><a href="#">医師の⽅へ</a></li>
							<li><a href="#">採⽤情報</a></li>
						</ul>
					</div>
					<ul class="nav-btn">
						<li><a href="#">マスター配信</a></li>
						<li><a href="#">お問い合わせ</a></li>
					</ul>
					<ul class="nav-sub">
						<li><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/img/icon-search.svg" width="20" height="20" alt=""></a></li>
						<li><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/img/icon-global.svg" width="20" height="20" alt=""></a></li>
					</ul>
					<button class="navToggle" aria-label="MENU" type="button" aria-controls="global" aria-expanded="false">
						<span></span><span></span><span></span>
					</button>
				</nav>
			</div>
		</header>
