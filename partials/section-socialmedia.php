<section class="social-media">

	<div class="swiper-container">

			<div class="swiper-wrapper">

				<?php if( have_rows('social_box', 'option') ): ?>

					<?php while ( have_rows('social_box', 'option') ) : the_row(); ?>

						<?php
							$logo = get_sub_field('logo');
							$box_bgcolor = get_sub_field('box_bgcolor');
							$details = get_sub_field('details');
							$button_color = get_sub_field('button_color');
							$button_txt = get_sub_field('button_txt');
							$link = get_sub_field('link');
						?>

						<!-- BEGIN SLIDE -->
						<div class="swiper-slide">

							<div class="slide-wrap" style="background-color: <?php echo $box_bgcolor; ?>">

								<img class="b-lazy" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="<?php echo $logo['url']; ?>" alt="<?php echo $logo['alt']; ?>">

								<div class="inner-wrap">

									<p><?php echo $details; ?></p>

								</div>
								<!-- END inner-wrap -->

								<a href="
								<?php
                                    if($link){
	                                    echo $link;
	                                }else {
	                                    echo '#';
	                                }
                                ?>
                                " target="_blank" class="btn <?php if($button_color == 'czerwony'){ echo "btn-red"; } ?>"><?php echo $button_txt; ?><i class="fa fa-chevron-right" aria-hidden="true"></i></a>

							</div>

						</div>
						<!-- END SLIDE -->

					<?php endwhile; ?>

				<?php endif; ?>

			</div>
			<!-- END swiper-wrapper -->

			<!-- Add Arrows -->
			<div class="swiper-button-next swiper-button-white"></div>
			<div class="swiper-button-prev swiper-button-white"></div>

	</div>
	<!-- END slider-container -->

</section>
<!-- END section social-media -->
