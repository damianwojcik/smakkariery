<section class="services">

	<div class="row-tight">

    <?php $child_pages = $wpdb->get_results("SELECT * FROM $wpdb->posts WHERE post_parent = ".$post->ID."
    AND post_type = 'page' ORDER BY menu_order", 'OBJECT'); ?>

	<?php if ( $child_pages ) { ?>

    	<?php foreach ( $child_pages as $pageChild ) : setup_postdata( $pageChild ); ?>

    		<?php
    			$icon = get_field('icon', $pageChild);
    			$color = get_field('color', $pageChild);
    			$content = $pageChild->post_content;
		        $trimmed_content = wp_trim_words( $content, 50 );
    		?>

			<div class="span2">

				<a class="caption-banner" href="<?php echo get_permalink($pageChild->ID); ?>" rel="bookmark" title="<?php echo $pageChild->post_title; ?>" >

					<header>

						<div class="wrap" style="background-color: <?php echo $color; ?>">

							<div class="triangle-bottom" style="border-top-color: <?php echo $color; ?>"></div>

							<div class="heading">

								<img src="<?php echo $icon['url']; ?>" alt="<?php echo $icon['alt']; ?>">

								<h2><?php echo $pageChild->post_title; ?></h2>

							</div>

						</div>
						<!-- ENR wrap -->

					</header>

					<footer>

						<div class="text-wrap" style="background-image: url('<?= THEME_URL; ?>/assets/img/przepisnamistrza/service-1.jpg')">

							<div class="color-overlay">

								<h2><?php echo $pageChild->post_title; ?></h2>

								<p><?php echo $trimmed_content; ?></p>

							</div>

						</div>
						<!-- END text-wrap -->

					</footer>

				</a>
				<!-- END caption-banner -->

			</div>
			<!-- END span2 -->

		<?php endforeach; ?>

	<?php }//end if ?>

	</div>

</section>
<!-- END section services -->
