<?php

if( $post->ID == 6 ){
	$taxonomy_id = 8;
} else {
	$taxonomy_id = 9;
}

$posts_array = get_random_employees_by_tax($taxonomy_id); 

if (!empty($posts_array)){

	$current_year = current_time('Y');

	//data about all workers
	foreach ($posts_array as $post) {
		$names[] = $post->post_title;
		$photos[] = get_field("photo");
		$roles[] = get_field("role");
		$descriptions[] = get_field("description");
		$exp_years = intval( $current_year ) - intval( get_field("experience") );
		$experiences[] = $exp_years;
		$suffixes[] = year_suffix($exp_years);
	}

?>

<section class="testimonials">

	<div class="container">

		<div class="row-tight">

			<div class="span8">

				<a href="#" class="caption-banner large">

			        <div class="span7">

                        <div class="text-wrap" style="background-image: url('<?php echo $photos[0]['url']; ?>')">

                            <div class="color-overlay">

                                <h4>
                                    <strong>
                                    	<?php echo $experiences[0]; ?>
                                    	<?php echo $suffixes[0]; ?>
                                    </strong>
                                    z nami
                                </h4>

                                <h3>
                                    <?php echo $roles[0]; ?>
                                </h3>

                            </div>

                        </div>
                        <!-- END text-wrap -->

			        </div>
                    <!-- END span7 -->

                    <div class="span3">

                        <div class="wrap" style="background-color: #e51b39">

                            <h3>
                                To jaki smak swojej kariery wybierzesz
                                <strong>
                                    Zależy tylko od Ciebie!
                                </strong>
                            </h3>

                        </div>
                        <!-- END wrap -->

                        <div class="wrap">

							<div class="triangle-left" style="border-right-color: #F8F8F8"></div>

							<div class="inner-wrap">

	    						<h3><?php echo $names[0]; ?></h3>

	    						<p><?php echo $descriptions[0]; ?></p>

							</div>
							<!-- END inner-wrap -->

    					</div>
    					<!-- ENR wrap -->

                    </div>
                    <!-- END span3 -->

				</a>

			</div>
			<!-- END span8 -->

			<div class="span2">

				<a href="#" class="caption-banner">

					<div class="wrap">

						<div class="triangle-bottom" style="border-top-color: #F8F8F8"></div>

						<div class="inner-wrap">

							<h3><?php echo $names[1]; ?></h3>

							<p><?php echo $descriptions[1]; ?></p>

						</div>
						<!-- END inner-wrap -->

					</div>
					<!-- ENR wrap -->

					<div class="text-wrap" style="background-image: url('<?php echo $photos[1]['url']; ?>')">

						<div class="color-overlay">

							<h4>
								<strong>
									<?php echo $experiences[1]; ?>
									<?php echo $suffixes[1]; ?>
								</strong>
								z nami
							</h4>

							<h3>
								<?php echo $roles[1]; ?>
							</h3>

						</div>

					</div>
					<!-- END text-wrap -->

				</a>
				<!-- END caption-banner -->

			</div>
			<!-- END span2 -->

		</div>

	</div>

</section>
<!-- END section testimonials -->

<section class="testimonials testimonials--second">

	<div class="container">

		<div class="row-tight">

			<div class="span2">

				<a href="#" class="caption-banner">

					<div class="wrap">

						<div class="triangle-bottom" style="border-top-color: #F8F8F8"></div>

						<div class="inner-wrap">

							<h3><?php echo $names[2]; ?></h3>

							<p><?php echo $descriptions[2]; ?></p>

						</div>
						<!-- END inner-wrap -->

					</div>
					<!-- ENR wrap -->

					<div class="text-wrap" style="background-image: url('<?php echo $photos[2]['url']; ?>')">

						<div class="color-overlay">

							<h4>
								<strong>
									<?php echo $experiences[2]; ?>
									<?php echo $suffixes[2]; ?>
								</strong>
								z nami
							</h4>

							<h3>
								<?php echo $roles[2]; ?>
							</h3>

						</div>

					</div>
					<!-- END text-wrap -->

				</a>
				<!-- END caption-banner -->

			</div>
			<!-- END span2 -->

			<div class="span8">

				<a href="#" class="caption-banner large">

			        <div class="span7">

                        <div class="text-wrap" style="background-image: url('<?php echo $photos[3]['url']; ?>">

                            <div class="color-overlay">

                                <h4>
                                    <strong>
	                                    <?php echo $experiences[3]; ?>
										<?php echo $suffixes[3]; ?>
                                    </strong>
                                    z nami
                                </h4>

                                <h3>
                                    <?php echo $roles[3]; ?>
                                </h3>

                            </div>

                        </div>
                        <!-- END text-wrap -->

			        </div>
                    <!-- END span7 -->

                    <div class="span3">

                        <div class="wrap" style="background-color: #e51b39">

                            <h3>
                                To jaki smak swojej kariery wybierzesz
                                <strong>
                                    Zależy tylko od Ciebie!
                                </strong>
                            </h3>

                        </div>
                        <!-- END wrap -->

                        <div class="wrap">

							<div class="triangle-left" style="border-right-color: #F8F8F8"></div>

							<div class="inner-wrap">

	    						<h3><?php echo $names[3]; ?></h3>

	    						<p><?php echo $descriptions[3]; ?></p>

							</div>
							<!-- END inner-wrap -->

    					</div>
    					<!-- ENR wrap -->

                    </div>
                    <!-- END span3 -->

				</a>

			</div>
			<!-- END span8 -->

		</div>

	</div>

</section>
<!-- END section testimonials -->

<?php } // END if !empty($posts_array) ?>

