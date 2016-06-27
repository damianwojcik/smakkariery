<?php

$args = array( 'numberposts' => '7', 'category' => '4' );
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

					var_dump($recent);

					echo '<li>';
					echo '<a class="article" href="' . get_permalink($recent["ID"]) . '">';

					echo '<h2>' . $recent["post_title"] . '</h2>';

					echo '<time>' . '20-06-2016' . '</time>';

					echo '<p>' . $trimmed_content . '</p>';

					echo '<div class="btn">Więcej <i class="fa fa-chevron-right" aria-hidden="true"></i></div>';

					echo '</a></li>';

				}

			?>


			</ul>

		<!-- END span3 -->

	</div>

</section>
<!-- END section news -->



<?php get_footer(); ?>