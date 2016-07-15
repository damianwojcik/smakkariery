<?php get_header(); ?>

<?php $children = get_children(array('post_parent' => $post->ID)); ?>

	<!-- template for child pages -->
	<?php if( is_page() && $post->post_parent > 0 ) { ?>

		<!-- =================================================
			section title
		================================================== -->
		<?php get_template_part("partials/section", "title"); ?>

		<!-- =================================================
			section content
		================================================== -->
		<?php get_template_part("partials/section", "content"); ?>


	<!-- universal page template -->
	<?php } elseif( empty($children)) { ?>

		<!-- =================================================
			section content
		================================================== -->
		<?php get_template_part("partials/section", "content"); ?>


	<!-- template for parent pages -->
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
