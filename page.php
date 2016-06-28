<?php get_header(); ?>


<!-- =================================================
	section title
================================================== -->
<?php get_template_part("partials/section", "title"); ?>


<!-- =================================================
	section services
================================================== -->
<!-- displayed only on "Parent" pages -->
<?php if( sk_is_parent() ) { ?>
	<?php get_template_part("partials/section", "services"); ?>
<?php } ?>


<!-- =================================================
	section news
================================================== -->
<?php get_template_part("partials/section", "news"); ?>


<!-- =================================================
	section testimonials
================================================== -->
<?php get_template_part("partials/section", "testimonials"); ?>


<?php get_footer(); ?>
