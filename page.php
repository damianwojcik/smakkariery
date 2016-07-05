<?php get_header(); ?>


	<!-- template for child pages -->
	<?php if( $post->post_parent !== 0 ) { ?>

		<!-- =================================================
			section title
		================================================== -->
		<?php get_template_part("partials/section", "title"); ?>

		<!-- =================================================
			section content
		================================================== -->
		<?php get_template_part("partials/section", "content"); ?>

	<?php } else { ?>

		<!-- =================================================
			section title
		================================================== -->
		<?php get_template_part("partials/section", "title"); ?>


		<!-- =================================================
			section services
		================================================== -->
		<?php get_template_part("partials/section", "services"); ?>


		<!-- =================================================
			section services
		================================================== -->
		<?php get_template_part("partials/section", "gallerypanel"); ?>


		<!-- =================================================
			section news
		================================================== -->
		<?php get_template_part("partials/section", "news"); ?>


		<!-- =================================================
			section testimonials
		================================================== -->
		<?php get_template_part("partials/section", "testimonials"); ?>

	<?php } ?>


<?php get_footer(); ?>
