<?php $children = get_children(array('post_parent' => $post->ID)); ?>

<section class="content">

	<div class="row-tight">

		<div class="span7">

			<article class="wrap-article">

				<?php if(!is_page_template()){ ?>

				<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

					<?php if( is_single() ){ ?>

						<?php the_date('d F Y', '<time>', '</time>'); ?>

						<h1 class="article-heading"><?php the_title(); ?></h1>

						<img class="facebook-like" src="<?= THEME_URL; ?>/assets/img/like.jpg" alt="Like">

					<?php } else { ?>

						<h1 class="article-heading"><?php the_title(); ?></h1>

					<?php } ?>

					<?php the_content(); ?>

				<?php endwhile; endif; ?>

				<?php } else{
					if( function_exists( 'ninja_forms_display_form' ) ){ ninja_forms_display_form( 5 ); }
					}
				?>

				<?php if (get_post_type() == 'pracownicy'){

					$description = get_field("description");

					echo "<p>".$description."</p>";
				
				}?>


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
