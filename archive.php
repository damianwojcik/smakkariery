<?php get_header(); ?>


<!-- =================================================
	section archive
================================================== -->
<section class="archive">

	<div class="container">

		<header>

			<h1>
				Archiwum newsów
			</h1>

			<nav class="years-pagination">
				<ul>
					<li class="active"><a href="?archive_year=2016">2016</a></li>
					<li><a href="?archive_year=2015">2015</a></li>
					<li><a href="?archive_year=2014">2014</a></li>
				</ul>
			</nav>
			<!-- END years-pagination -->

		</header>

		<?php if ( have_posts() ) : ?>

			<ul class="articles-list">

				<?php while( have_posts() ) : the_post(); ?>

				<?php

					$thumbnail = wp_get_attachment_image_src ( get_post_thumbnail_id(), 'large');
					$date = get_the_date();
					$title = get_the_title();
					$content = get_the_content();
					$trimmed_content = wp_trim_words ( $content, 50 );

				?>

				<li>

					<article class="news-entry">

						<a href="<?php the_permalink(); ?>">

							<div class="wrap" 
								<?php if( !empty($thumbnail) ){ ?>
									style="background-image: url('<?php echo $thumbnail[0]; ?>')"
								<?php } ?>
							>
									<?php if( empty($thumbnail) ){ ?>
										<div class="image-placeholder">
							            	<i class="fa fa-picture-o" aria-hidden="true"></i>
							            </div>
									<?php } else { ?>
										<div class="color-overlay"></div>
									<?php } ?>
								</div>
							<!-- END wrap -->

							<div class="text-wrap">

								<div class="triangle-top" style="border-bottom-color: #E8E8E8"></div>
								
								<time><?php echo $date; ?></time>

								<h2><?php echo $title; ?></h2>

								<p>
									<?php echo $trimmed_content; ?>
								</p>

								<div class="read-more">Czytaj więcej <i class="fa fa-chevron-right" aria-hidden="true"></i></div>

							</div>
							<!-- END text-wrap -->

						</a>

					</article>

				</li>

			<?php endwhile; ?>

			</ul>

			<div class="pagination">
				<div class="nav-previous"><?php next_posts_link( 'Poprzednie' ); ?></div>
				<div class="nav-next"><?php previous_posts_link( 'Następne' ); ?></div>
			</div>
			<!-- END pagination -->

		<?php else : ?>

			<p><?php _e('Przepraszamy, niestety nie znaleziono żadnych wpisów spełniających Twoje kryteria.'); ?></p>

		<?php endif; ?>

	</div>

</section>
<!-- END section archive -->


<?php get_footer(); ?>