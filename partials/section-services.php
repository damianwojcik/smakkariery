<section class="services">

	<div class="row-tight">

    <?php $child_pages = $wpdb->get_results("SELECT * FROM $wpdb->posts WHERE post_parent = ".$post->ID."
    AND post_type = 'page' ORDER BY menu_order", 'OBJECT'); ?>

	<?php if ( $child_pages ) { 
		$i = 1;
		$services_num = count($child_pages);
	?>

    	<?php foreach ( $child_pages as $pageChild ) : setup_postdata( $pageChild ); ?>


    		<?php
    			$icon = get_field('icon', $pageChild);
    			$color = get_field('color', $pageChild);
    			$content = $pageChild->post_content;
		        $trimmed_content = wp_trim_words( $content, 50 );
		        $thumbnail = wp_get_attachment_image_src( get_post_thumbnail_id($pageChild->ID), 'large' );
    		?>


    		<?php if( $i == 3 AND $services_num ==3){ ?>

    			<div class="span5">

    		<?php } else { ?>

				<div class="span2">

			<?php } ?>

				<?php if( $i % 2 ==0 ) { ?>

					<a class="caption-banner" href="<?php echo get_permalink($pageChild->ID); ?>" rel="bookmark" title="<?php echo $pageChild->post_title; ?>">

						<footer>

							<div class="text-wrap" style="background-image: url('<?php echo $thumbnail[0]; ?>">

								<div class="color-overlay">

									<h2><?php echo $pageChild->post_title; ?></h2>

									<p><?php echo $trimmed_content; ?></p>

								</div>

							</div>
							<!-- END text-wrap -->

						</footer>

						<header>

							<div class="wrap" style="background-color: <?php echo $color; ?>">

								<div class="triangle-top" style="border-bottom-color: <?php echo $color; ?>"></div>

								<div class="heading">

									<img src="<?php echo $icon['url']; ?>" alt="<?php echo $icon['alt']; ?>">

									<h2><?php echo $pageChild->post_title; ?></h2>

								</div>

							</div>
							<!-- ENR wrap -->

						</header>

					</a>
					<!-- END caption-banner -->

				<?php } else{ ?>

					<a class="caption-banner" href="<?php echo get_permalink($pageChild->ID); ?>" rel="bookmark" title="<?php echo $pageChild->post_title; ?>">

						<header>

							<div class="wrap" style="background-color: <?php echo $color; ?>">

								<div class="triangle-bottom" style="border-top-color: <?php echo $color; ?>"></div>

								<?php if( $i == 3 AND $services_num ==3){ ?>

									<div class="inner-wrap">

								<?php } ?>

								<div class="heading">

									<img src="<?php echo $icon['url']; ?>" alt="<?php echo $icon['alt']; ?>">

									<h2><?php echo $pageChild->post_title; ?></h2>

								</div>

								<?php if( $i == 3 AND $services_num ==3){ ?>

									</div>
									<!-- END inner-wrap -->
									
								<?php } ?>

							</div>
							<!-- ENR wrap -->

						</header>

						<footer>

							<div class="text-wrap" style="background-image: url('<?php echo $thumbnail[0]; ?>')">

								<div class="color-overlay">

									<?php if( $i == 3 AND $services_num ==3){ ?>

										<div class="inner-wrap">

									<?php } ?>

									<h2><?php echo $pageChild->post_title; ?></h2>

									<p><?php echo $trimmed_content; ?></p>

									<?php if( $i == 3 AND $services_num ==3){ ?>

										</div>
										<!-- END inner-wrap -->
										
									<?php } ?>

								</div>
								<!-- END color-overlay -->

							</div>
							<!-- END text-wrap -->

						</footer>

					</a>
					<!-- END caption-banner -->

				<?php } ?>

			</div>
			<!-- END span2 -->

			<?php $i = $i + 1; ?>

		<?php endforeach; ?>

	<?php }//end if ?>

	</div>

</section>
<!-- END section services -->
