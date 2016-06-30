<?php

$args = array( 'numberposts' => '6', 'category' => '4' );
$recent_posts = wp_get_recent_posts( $args );

?>

<?php get_header(); ?>

<section class="news">

	<div class="row-tight">

		<div class="span7">

			<ul>

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

		<!-- END span3 -->

	</div>

</section>
<!-- END section news -->



<?php get_footer(); ?>