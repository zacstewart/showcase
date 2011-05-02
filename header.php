<!DOCTYPE HTML>
<html <?php language_attributes(); ?>>
	<head>
		<title><?php bloginfo('name'); ?></title>
    <meta charset="utf-8">
		<?php global $is_IE; ?>
    <?php if($is_IE): ?>
  		<script>
  			DD_belatedPNG.fix('.png, #mantle-dots li');
  		</script>
	  <?php endif; ?>
	  <?php if ( is_singular() ) wp_enqueue_script( 'comment-reply' ); ?><!-- comment-reply -->
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