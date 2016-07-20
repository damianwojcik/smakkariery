<?php
	$taxonomy_id = get_field('gallery_link');
	$taxonomy_link = get_term_link($taxonomy_id);
?>

<section class="gallerypanel b-lazy" data-src="<?= THEME_URL; ?>/assets/img/section-gallery.jpg">

	<h1 class="offscreen">Galerie wydarzeń</h1>

	<a href="<?php echo $taxonomy_link; ?>" class="wrap">

		<div class="inner-wrap">

			<img class="b-lazy" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="<?= THEME_URL; ?>/assets/img/icons/gallery.png" alt="Gallery Icon">

			<span>Zobacz nasze galerie wydarzeń <i class="fa fa-chevron-right" aria-hidden="true"></i></span>

		</div>
		<!-- END inner-wrap -->

	</a>
	<!-- END wrap -->

</section>
