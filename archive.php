<?php get_header(); ?>


<!-- =================================================
	section archive
================================================== -->
<section class="archive">

	<div class="container">

		<header>

			<h1>
				Archiwum newsów
			</h1>

			<nav class="years-pagination">
				<ul>
					<li class="active"><a href="#">2016</a></li>
					<li><a href="#">2015</a></li>
					<li><a href="#">2014</a></li>
					<li><a href="#">2013</a></li>
				</ul>
			</nav>
			<!-- END years-pagination -->

		</header>

		<ul class="articles-list">

			<li>

				<a class="caption-banner" href="<?php echo get_permalink($pageChild->ID); ?>" rel="bookmark" title="<?php echo $pageChild->post_title; ?>">

					<footer>

						<div class="text-wrap" style="background-image: url('<?= THEME_URL; ?>/assets/img/przepisnamistrza/service-1.jpg')">

							<div class="color-overlay">

								<h2><?php echo $pageChild->post_title; ?></h2>

								<p><?php echo $trimmed_content; ?></p>

							</div>

						</div>
						<!-- END text-wrap -->

					</footer>

					<header>

						<div class="wrap" style="background-color: lime">

							<div class="triangle-top" style="border-bottom-color: lime"></div>

							<div class="heading">

								<img src="<?php echo $icon['url']; ?>" alt="<?php echo $icon['alt']; ?>">

								<h2><?php echo $pageChild->post_title; ?></h2>

							</div>

						</div>
						<!-- ENR wrap -->

					</header>

				</a>
				<!-- END caption-banner -->

			</li>

			<li>
				<a href="#">2</a>
			</li>

			<li>
				<a href="#">3</a>
			</li>

			<li>
				<a href="#">4</a>
			</li>

			<li>
				<a href="#">5</a>
			</li>

			<li>
				<a href="#">1</a>
			</li>

		</ul>

	</div>

</section>
<!-- END section archive -->


<?php get_footer(); ?>