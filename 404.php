<?php get_header(); ?>

	<?php $actual_link = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]"; ?>

	<article class="page-section section-article">

		<?php get_template_part("parts/section", "article-header"); ?>

		<div class="page-section article-content">

			<div class="container">

				<div class="section-block">

					<div class="wrap">

						<h3>Strony nie znaleziono</h3>

						<p>

							Przepraszamy ale strona, której szukasz (<span style="opacity:0.7;"><?= $actual_link; ?></span>) nie została odnaleziona. Sprawdź adres URL czy nie zawiera błędów lub wróć na <a href="<?= SITE_URL; ?>" style="color: #3A5FB4; text-decoration: underline;">strone główną</a>.

						</p>

					</div>

				</div>

			</div>

		</div>

	</article>

<?php get_footer(); ?>
