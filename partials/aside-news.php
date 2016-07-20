<?php

	$args = array( 'numberposts' => '3', 'category' => '4' );
	$recent_posts = wp_get_recent_posts( $args );

?>

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

						<img class="b-lazy" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="<?php echo $thumbnail[0]; ?>" alt="<?php echo $title; ?>">

					<?php } else { ?>

						<div class="image-placeholder"><i class="fa fa-picture-o" aria-hidden="true"></i></div>

					<?php } //end if ?>

					<p><?php echo $trimmed_content; ?></p>

					<div class="read-more">Czytaj więcej <i class="fa fa-chevron-right" aria-hidden="true"></i></div>

				</a>

			</article>

		</li>


	<?php } //end foreach ?>

	</ul>

<?php } //end if ?>