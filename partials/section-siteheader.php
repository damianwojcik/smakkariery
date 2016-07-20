<?php

	$logo = get_field('logo', 'option');
	$logo_brand = get_field('logo_brand', 'option');

?>

<header class="site-header">

	<a href="<?= SITE_URL; ?>" class="logo b-lazy" data-src="<?php echo $logo['url']?>"></a>

	<nav>

        <?php dynamic_sidebar('main_menu'); ?>

		<div class="nav-toggle">
			<a class="toggle-btn" href="#">
				<span id="hamburger">☰</span>
				<span id="close-menu">✕</span>
				Menu
			</a>
		</div>

	</nav>

	<a href="#" class="search-toggle"><i class="fa fa-search" aria-hidden="true"></i></a>

    <a href="http://www.carrefour.pl/" class="logo-brand b-lazy" data-src="<?php echo $logo_brand['url']?>"></a>

</header>
<!-- END header -->
