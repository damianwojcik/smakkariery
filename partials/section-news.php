<?php

	include 'quotes.php';
	$args = array( 'numberposts' => '3', 'category' => '4' );
	$recent_posts = wp_get_recent_posts( $args );
	$random_quote = array_rand($quotes);

?>

<section class="news">

	<div class="row-tight">

		<div class="span3 span-right">

			<?php if ( is_page() ){ ?>

				<a href="http://www.pracuj.pl/poznaj-pracodawce/carrefour-polska-sp-z-o.o.,88/praca" class="module-offers-cta">

					<header>

						<div class="triangle-bottom" style="border-top-color: #FFF"></div>

						<div class="wrap">

							<h1>Dołącz do nas!</h1>

							<h2>Tu znajdziesz aktualne oferty pracy</h2>

							<div class="btn">Zobacz więcej <i class="fa fa-chevron-right" aria-hidden="true"></i></div>

						</div>
						<!-- END wrap -->

					</header>

					<div class="img-wrap"></div>
					<!-- END img-wrap -->
				
				</a>
				<!-- END module-offers-cta -->


			<?php } else { ?>

				<div class="quote-wrap" style="background-image: url('<?= THEME_URL; ?>/assets/img/quotes/<?php echo rand(1, 7); ?>.jpg')">

					<a href="#">

						<div class="color-overlay">

							<div class="wrap">

								<blockquote>

									<h2>Czy wiesz, że...</h2>

									<?php echo $quotes[$random_quote]; ?>

								</blockquote>

							</div>
							<!-- END wrap -->

						</div>
						<!-- END color-overlay -->

					</a>

				</div>
				<!-- END quote-wrap -->

			<?php } //end ifelse ?>

		</div>
		<!-- END span3 -->

		<div class="span7 span-left">

			<?php if( $recent_posts ) { ?>

				<ul class="article-list-large">

				<?php

				foreach( $recent_posts as $recent ){

					$post_id = $recent["ID"];
					$thumbnail = wp_get_attachment_image_src( get_post_thumbnail_id($post_id), 'large' );
					$content = $recent['post_content'];
					$trimmed_content = wp_trim_words ( $content, 80 );
			        $date = date('n M, Y', strtotime($recent['post_date']));

				?>

					<li>

						<article class="news-entry">

							<a href="<?php echo get_permalink($recent["ID"]); ?>">

								<time><?php echo $date; ?></time>

								<h2><?php echo $recent["post_title"]; ?></h2>

								<?php if( !empty($thumbnail) ){ ?>

								<img src="<?php echo $thumbnail[0]; ?>" alt="<?php echo $title; ?>">

								<?php } else { ?>

									<div class="image-placeholder">
							            <i class="fa fa-picture-o" aria-hidden="true"></i>
							        </div>

								<?php } //end if?>

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