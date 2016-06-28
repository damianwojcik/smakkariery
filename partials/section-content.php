<section class="content">

	<div class="row-tight">

		<div class="span7">

			<article class="wrap-article">

				<?php if(!is_page_template()){ ?>

				<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

					<?php the_date('d F Y', '<time>', '</time>'); ?>

					<h1 class="article-heading"><?php the_title(); ?></h1>

					<img class="facebook-like" src="<?= THEME_URL; ?>/assets/img/like.jpg" alt="Like">

					<?php the_content(); ?>

				<?php endwhile; endif; ?>

				<?php } else{
					if( function_exists( 'ninja_forms_display_form' ) ){ ninja_forms_display_form( 5 ); }
					}
				?>

			</article>

		</div>
		<!-- END span7 -->

		<div class="span3">

			<aside>

				<div class="row">

					<!-- =================================================
						aside accordion
					================================================== -->
					<?php get_template_part("partials/aside", "accordion"); ?>

				</div>
				<!-- END row -->

				<div class="row">

					<!-- =================================================
						aside testimonials
					================================================== -->
					<?php //get_template_part("partials/aside", "testimonials"); ?>

				</div>
				<!-- END row -->

			</aside>

		</div>
		<!-- END span3 -->


	</div>

</section>
<!-- END section content -->
