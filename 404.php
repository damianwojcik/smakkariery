<?php get_header(); ?>


	<?php $actual_link = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]"; ?>


<section class="content">

	<div class="row-tight">

		<div class="span7">

			<header class="content-title" style="background-image: url('<?= THEME_URL; ?>/assets/img/contact-bg.jpg')">

				<div class="wrap">

					<h1>Strony nie znaleziono</h1>
					
				</div>
				<!-- END wrap -->

			</header>
			<!-- END content-title -->

			<article class="wrap-article">

				<h3>Strony nie znaleziono</h3>

				<p>

					Przepraszamy ale strona, której szukasz (<span style="opacity:0.7;"><?= $actual_link; ?></span>) nie została odnaleziona. Sprawdź adres URL czy nie zawiera błędów lub wróć na <a href="<?= SITE_URL; ?>" style="color: #3A5FB4; text-decoration: underline;">strone główną</a>.

				</p>


			</article>

		</div>
		<!-- END span7 -->

		<div class="span3">

			<aside>

				<div class="row">

				 <?php if ( is_page_template( 'templates/page-contact.php' ) ) { ?>

				 	<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2442.359084503419!2d21.03537731579761!3d52.255024079764844!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x471ecc38a712cfb1%3A0x3e6bf5ee9bffa339!2sTargowa+72%2C+03-734+Warszawa!5e0!3m2!1spl!2spl!4v1467289927460" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>

				 <?php } else { ?>

				 	<?php if( is_page() && !empty($children) ) { ?> 

						<!-- =================================================
							aside accordion
						================================================== -->
						<?php get_template_part("partials/aside", "accordion"); ?>

					<?php } ?>

				<?php } ?>

				</div>
				<!-- END row -->

				<div class="row">

					<!-- =================================================
						aside testimonials
					================================================== -->
					<?php //get_template_part("partials/aside", "testimonials"); ?>

					<!-- =================================================
						aside news
					================================================== -->
					<?php get_template_part("partials/aside", "news"); ?>

				</div>
				<!-- END row -->

			</aside>

		</div>
		<!-- END span3 -->


	</div>

</section>
<!-- END section content -->


<?php get_footer(); ?>
