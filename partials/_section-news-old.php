<?php

$args = array( 'numberposts' => '6', 'category' => '4' );
$recent_posts = wp_get_recent_posts( $args );

?>


<section class="news">

	<div class="row-tight">

		<div class="span7">

			<ul class="news-list-old">

				<?php

				foreach( $recent_posts as $recent ){

					$content = $recent['post_content'];
			        $trimmed_content = wp_trim_words( $content, 25 );
			        $date = date('n M, Y', strtotime($recent['post_date']));

				?>

				<li>
					<a class="article" href="<?php echo get_permalink($recent["ID"]); ?>">

						<h2><?php echo $recent["post_title"]; ?></h2>

						<time><?php echo $date; ?></time>

						<p><?php echo $trimmed_content; ?></p>

						<div class="btn">Więcej <i class="fa fa-chevron-right" aria-hidden="true"></i></div>

					</a>
				</li>

				<?php } ?>
				
			</ul>

		</div>
		<!-- END span7 -->

		<div class="span3">

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

	</div>

</section>
<!-- END section news -->
