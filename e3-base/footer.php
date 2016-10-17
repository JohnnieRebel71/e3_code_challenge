			</article>
		</div>
	</section>
	<footer class="full left">
		<div class="container">
			<div class="col-xs-44 col-xs-offset-2">
				<p>&copy; <?php $current_year=date("o"); if ($current_year=="2014") echo "2014"; else echo "$current_year"; ?></p>
			</div>
		</div>
	</footer>

	<?php wp_footer(); ?>

	<script type="text/javascript" src="<?php echo get_stylesheet_directory_uri();?>/js/jquery.equalheightcolumns.js"></script>
	<script type="text/javascript" src="<?php echo get_stylesheet_directory_uri();?>/js/jquery.bxslider.min.js"></script>
	<script type="text/javascript" src="<?php echo get_stylesheet_directory_uri();?>/js/jquery.magnific-popup.min.js"></script>
	<script type="text/javascript" src="<?php echo get_stylesheet_directory_uri();?>/js/jquery.uniform.min.js"></script>
	<script type="text/javascript" src="<?php echo get_stylesheet_directory_uri();?>/js/respond.min.js"></script>
	<script type="text/javascript">
			(function($) {

				$('.open-inline').magnificPopup({ /* POPUP FOR INLINE CONTENT */
					type:'inline',
					removalDelay: 500, //delay removal by X to allow out-animation
					callbacks: {
						beforeOpen: function() {
							this.st.mainClass = this.st.el.attr('data-effect');
						}
					},
					midClick: true
				});

				$(function() { /* ON DOCUMENT LOAD */

					$('.slider').bxSlider({ /* SLIDER */
						controls: false,
						mode: 'fade',
						auto: true,
						pause: 7500
					});

					$('select').uniform(); /* MAKE SELECT BOXES STYLIZED */

				});

				var jRes = jRespond([ /* BECAUSE RESPONSIVE NEEDS LOVE */
					{
						label: 'handheld',
						enter: 0,
						exit: 767
					},{
						label: 'tablet',
						enter: 768,
						exit: 992
					},{
						label: 'laptop',
						enter: 993,
						exit: 1199
					},{
						label: 'desktop',
						enter: 1200,
						exit: 10000
					}
				]);

				jRes.addFunc([
					{
						breakpoint: ['desktop','laptop','tablet'],
						enter: function() {},
						exit: function() {}
					},{
						breakpoint: ['handheld'],
						enter: function() {},
						exit: function() {}
					}
				]);

			})(jQuery);
	</script>

</body>
</html>
