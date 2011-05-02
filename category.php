<?php get_header(); ?>
<?php
	$post_custom = get_post_custom($post->ID, 'post_mantle', true);
	$post_mantle = $post_custom['post_mantle'][0];
	if(empty($post_mantle)) {
		$post_mantle = get_option('sc_uni_mantle');
	}
	if (!empty($post_mantle)) {
		if(strlen($post_mantle) > 130) {
			$post_mantle = rtrim(substr($post_mantle, 0, 130)) . "...";
		}
?>
<section>
	<div id="mantle-wrap">
		<div class="clear"></div>
		<div id="mantle" class="row">
			<p><?php echo $post_mantle ?></p>
		</div>
	</div>
</section>
<?php
	}
?>
	<section>
		<div class="content-wrap">
			<div class="clear"></div>
			<div id="content" class="row">
				<div class="column grid_8">
					<section>
						<div class="blog">
							<h2><?php single_cat_title(); ?></h2>
							<?php $query = new WP_Query( array( 'post_per_page' => 5 ) ); ?>
							<?php if ( $query->have_posts() ) : ?>
							<?php while ( $query->have_posts() ) : $query->the_post(); ?>
							<article>
								<div class="post">
									<div class="row meta">
										<date datetime="<?php the_time('c'); ?>" title="<?php the_time("F jS, o"); ?>">
											<div class="date column grid_1">
												<div class="inner">
													<div class="m"><?php the_time('M'); ?></div>
													<div class="d"><?php the_time('d'); ?></div>
												</div>
											</div>
										</date>
										<div class="column grid_7">
											<div class="title"><h3 class="title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3></div>
											<div class="author">Posted by <?php the_author(); ?> at <?php the_time('g:i a') ?></div>
											<div class="tags">
												<?php the_tags("<ul>\n<li>", "</li>\n<li>", "</li>\n</ul>"); ?>	
												<div class="clear"></div>
											</div>
										</div>
									</div>
									<div class="row body">
										<div class="column grid_8">
											<?php the_content(); ?>
										</div>
									</div>
									<div class="row footer">
										<div class="column grid_8">
											<?php comments_popup_link('No Comments', '1 Comment', '% Comments'); ?> |
											<a href="<?php the_permalink(); ?>">Read more</a>
										</div>
									</div>
								</div>
							</article>
							<?php endwhile; else: ?>
							<article>
								<div class="post last">
									<div class="row meta">
										<div class="column grid_8">
											<div class="title"><h3 class="title">Not Found</div>
										</div>
									</div>
									<div class="row body">
										<div class="column grid_8">
											There are no posts in that criteria. Please try the navigation.
										</div>
									</div>
									<div class="row footer">
										<div class="column grid_8">
											<?php comments_popup_link('No Comments &raquo;', '1 Comment &raquo;', '% Comments &raquo;'); ?> |
											<a href="#">Read more</a>
										</div>
									</div>
								</div>
							</article>
							<?php endif; ?>
						</div>
					</section>
				</div>
				<?php get_sidebar(); ?>
			</div>
		</div>
	</section>
<?php get_footer(); ?>