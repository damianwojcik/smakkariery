<?php

	$args = array( 'numberposts' => '3', 'category' => '4' );
	$recent_posts = wp_get_recent_posts( $args );

?>


<section class="news">

	<div class="row-tight">

		<div class="span3 span-right">

			<div class="quote-wrap" style="background-image: url('<?= THEME_URL; ?>/assets/img/quotes-bg.jpg')">

				<a href="#">

					<div class="color-overlay">

						<div class="wrap">

							<blockquote>

								<h2>Czy wiesz, że...</h2>

								Jedzenie dużego śniadania sprzyja gubieniu kilogramów

							</blockquote>

						</div>
						<!-- END wrap -->

					</div>
					<!-- END color-overlay -->

				</a>

			</div>
			<!-- END img-wrap -->

		</div>
		<!-- END span3 -->

		<div class="span7 span-left">

			<?php if( $recent_posts ) { ?>

				<ul class="article-list-large">

				<?php

				foreach( $recent_posts as $recent ){

					$thumbnail = wp_get_attachment_image_src( get_post_thumbnail_id(), 'large' );
					$content = $recent['post_content'];
					$trimmed_content = wp_trim_words ( $content, 80 );
			        $date = date('n M, Y', strtotime($recent['post_date']));

				?>

					<li>

						<article>

							<a href="<?php echo get_permalink($recent["ID"]); ?>">

								<time><?php echo $date; ?></time>

								<h2><?php echo $recent["post_title"]; ?></h2>

								<?php if( !empty($thumbnail) ){ ?>

								<img src="<?php echo $thumbnail[0]; ?>" alt="<?php echo $title; ?>">

								<?php } //end if ?>

								<p><?php echo $trimmed_content; ?></p>

								<div class="read-more">Czytaj więcej <i class="fa fa-chevron-right" aria-hidden="true"></i></div>

							</a>

						</article>

					</li>

				<?php } //end foreach ?>

				</ul>

			<?php } //end if ?>

		</div>
		<!-- END span7 -->

	</div>

</section>
<!-- END section news -->
