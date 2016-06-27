<?php get_header(); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

	<article class="simple-article">

		<a href="<?= get_permalink(); ?>">

			<h1 class="article-title"><?php the_title(); ?></h1>

			<p><?= wp_trim_words($post->post_content, 50); ?></p>
            
		</a>

	</article>

<?php endwhile; endif; ?>

<?php get_footer(); ?>
