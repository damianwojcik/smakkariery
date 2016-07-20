<section class="footer-bottom">

	<h1 class="offscreen">Stopka strony</h1>

	<div class="container">

		<div class="row-tight">

			<div class="span4">

				<div class="wrap">

					<?php dynamic_sidebar('footer_left'); ?>

				</div>
				<!-- END wrap -->

			</div>
			<!-- END span4 -->

			<div class="span4">

				<div class="wrap">

					<?php dynamic_sidebar('footer_middle'); ?>

				</div>
				<!-- END wrap -->

			</div>
			<!-- END span4 -->

			<div class="span4">

				<div class="wrap">

					<?php dynamic_sidebar('footer_right'); ?>

				</div>
				<!-- END wrap -->

			</div>
			<!-- END span4 -->

			<div class="span4">

				<div class="wrap">

					<h2 class="offscreen">Prawa autorskie</h2>

					<a href="<?= SITE_URL; ?>" class="footer-logo">
						<img class="b-lazy" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="<?= THEME_URL; ?>/assets/img/logo-footer.jpg" alt="Carrefour Logo">
				    </a>

				    <p class="copy">
				        Made with passion by <a href="http://time4.pl/" target="_blank" title="Time4 Custom Publishing">Time4.pl</a> &copy; <?= current_time('Y'); ?>
				    </p>

			    </div>
				<!-- END wrap -->

			</div>
			<!-- END span4 -->

		</div>

	</div>

</section>
<!-- END section footer-bottom -->
