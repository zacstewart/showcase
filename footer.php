	<footer>
		<div id="footer-wrap">
			<div id="footer" class="row">
			<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('footer') ) : ?>
				<div class="widget column grid_4">
					<div class="inner">
						<h2>This Footer is Widgetized</h2>
						<p>
							Add some widgets to get started.
						</p>
 					</div>
				</div>
			<?php endif; ?>
			</div>
		</div>
		<div id="credit-wrap">
		  <div id="credit" class="row">
			  <div class="column grid_6">
			    <?php echo ((get_option( 'sc_footer_text' )) ? get_option( 'sc_footer_text' ) : "&nbsp;") ?>
			  </div>
				<div class="column grid_6 aright">
					<p>Showcase Theme by <a href="http://www.midphase.com/projects/themes/">MidPhase</a>.</p>
				</div>
			</div>
	  </div>
	</footer>
	<script src="http://cdn.jquerytools.org/1.2.5/full/jquery.tools.min.js"></script>
	<script>
	$(function() {
		screens = $("#computer .screen");
		$(screens[0]).fadeIn();
		function flipScreen(index) {
			$(screens).fadeOut()
			$(screens[index]).fadeIn();
		}

		// initialize scrollable
		api = $(".scrollable").scrollable({
			circular: true,
			onSeek: function(event, index) {
				flipScreen(index);
			}
		}).navigator({
			navi: '#mantle-dots',
			naviItem: 'li'
		});

	});
	</script>

	<?php wp_footer(); ?>
</body>
</html>
