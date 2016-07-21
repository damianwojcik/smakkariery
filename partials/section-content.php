<?php
	$categories = get_the_category();
	if ($categories){ $category_name = str_replace('"', "", $categories[0]->name); }
	$children = get_children(array('post_parent' => $post->ID));
?>

<section class="content">

	<div class="row-tight">

		<div class="span7">

			<?php if( ( is_page() ) && !( $post->post_parent > 0 ) && (!is_page_template()) OR is_single() ) { ?>

				<header class="content-title b-lazy" data-src="<?= THEME_URL; ?>/assets/img/contact-bg.jpg">

					<div class="wrap">

						<h1>

							<?php
								if( is_single() ){

									if( get_post_type() == 'gallery' ){
										the_title();
									} else {
										echo $category_name;
									}

								} else{
									the_title();
								}
							?>

						</h1>
						
					</div>
					<!-- END wrap -->

				</header>
				<!-- END content-title -->

			<?php } ?>

			<article class="wrap-article">

				<?php if(!is_page_template()){ ?>

				<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

					<!-- single -->
					<?php if( is_single() ){ ?>

						<!-- single gallery -->
						<?php if( get_post_type() == 'gallery' ){
								
								$images = get_field('gallery'); 

								if( !empty($images) ) { ?>

									<ul class="gallery-wrap">

										<?php foreach( $images as $image ): ?>

											<li>

												<a rel="lightbox" href="<?php echo $image['url']; ?>">

													<div class="gallery-item b-lazy" data-src="<?php echo $image['url']; ?>"></div>

												</a>

						               		</li>

										<?php endforeach; ?>

									</ul>

								<?php } //end if ?>

						<!-- single post -->
						<?php } else { ?>

							<?php the_date('d F Y', '<time>', '</time>'); ?>

							<h1 class="article-heading"><?php the_title(); ?></h1>

							<ul class="social-sharing">

								<li>
									<a href="https://www.facebook.com/sharer.php?u=<?= SITE_URL; ?>" target="_blank">
										<img src="<?= THEME_URL; ?>/assets/img/icons/share-facebook.png" alt="Udostępnij na Facebooku" >
									</a>
								</li>

								<li>
									<a href="https://plus.google.com/share?url=<?= SITE_URL; ?>" target="_blank">
										<img src="<?= THEME_URL; ?>/assets/img/icons/share-gplus.png" alt="Udostępnij na Google+" >
									</a>
								</li>

								<li>
									<a href="https://twitter.com/intent/tweet?url=<?= SITE_URL; ?>" target="_blank">
										<img src="<?= THEME_URL; ?>/assets/img/icons/share-twitter.png" alt="Udostępnij na Twitterze" >
									</a>
								</li>

							</ul>

						<?php } ?>

					<?php } ?>

					<!-- child page -->
					<?php if ( is_page() && ( $post->post_parent > 0 ) ) { ?>

						<h1><?php the_title(); ?></h1>

					<?php } ?>

					<?php the_content(); ?>

				<?php endwhile; endif; ?>

				<!-- contact page -->
				<?php } else{

						if( function_exists( 'ninja_forms_display_form' ) ){

							ninja_forms_display_form( 5 );

						}

					}
				?>

				<!-- employee page -->
				<?php if ( get_post_type() == 'pracownicy' ){

					$description = get_field("description");

					echo "<p>".$description."</p>";
				
				}?>


				<!-- gallery post -->



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
