<!DOCTYPE HTML>
<html <?php language_attributes(); ?>>
	<head>
		<title><?php bloginfo('name'); ?></title>
    <meta charset="utf-8">
    <?php wp_enqueue_style( 'showcase', get_bloginfo( 'stylesheet_url' ) ) ?>
    <?php wp_enqueue_style( 'font-titillium', get_template_directory_uri() . '/fonts/titillium/stylesheet.css' ) ?>
    <?php wp_enqueue_style( 'font-leaguegothic', get_template_directory_uri() . '/fonts/leaguegothic/stylesheet.css' ) ?>
    <?php sc_enqueue_style( 'ie6', get_template_directory_uri() . '/ie6.css', 'IE 6' ) ?>
    <?php sc_enqueue_style( 'ie7', get_template_directory_uri() . '/ie7.css', 'lt IE 8' ) ?>
		<?php if ( is_singular() ) wp_enqueue_script( 'comment-reply' ); ?><!-- comment-reply -->
		<?php wp_enqueue_script( 'jquery', get_template_directory_uri() . "/js/jquery-1.4.4.min.js", null, '1.4.4', false ); ?>
		<?php wp_enqueue_script( 'md5', get_template_directory_uri() . "/js/md5.js", null, null, false ); ?>
		<?php wp_enqueue_script( 'prettyjs', get_template_directory_uri() . "/js/pretty.js", null, null, false ); ?>
		<?php global $is_IE; ?>
    <?php if($is_IE): ?>
		  <?php wp_enqueue_script( 'DD_belatedPNG', get_template_directory_uri() . "/js/DD_belatedPNG.js", null, null, false ); ?>
  		<script>
  			DD_belatedPNG.fix('.png, #mantle-dots li');
  		</script>
	  <?php endif; ?>
		<?php wp_head(); ?>
	</head>
<body <?php body_class(); ?>>
	<header>
		<div id="header-wrap">
			<div id="header" class="row">
				<div id="title" class="grid_4 column">
					<h1 class="title"><a href="<?php echo home_url(); ?>" title="<?php bloginfo('name'); ?>"><?php bloginfo('name'); ?></a></h1>
				</div>
				<nav>
					<div id="nav" class="grid_8 column">
						<?php wp_nav_menu(array(
							'menu' => 'top-menu',
							'container' => 'ul',
							'before' => '<li>',
							'after' => ''
						)); ?>
					</div>
				</nav>
			</div>
		</div>
	</header>