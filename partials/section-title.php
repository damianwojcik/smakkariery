<?php

$title = get_field('title');
$description = get_field('description');
$title_bgcolor = get_field('title_bgcolor');

?>

<section class="title">

    <div class="row-tight">

        <div class="span7 span-left">

            <div class="img-wrap" style="background-image: url('<?= THEME_URL; ?>/assets/img/przepisnamistrza/header-bg.jpg')">

                <div class="wrap">

                <?php if ( ! is_page_template( 'templates/page-contact.php' ) ) { ?>
					<h1>
						<img src="<?= THEME_URL; ?>/assets/img/przepisnamistrza/logo.png" alt="Title img">
						<span class="sr-only">Przepis na mistrza</span>
					</h1>
                <?php } ?>

				</div>

            </div>
            <!-- END img-wrap -->

        </div>
        <!-- END span7 -->

        <div class="span3 span-right">

            <div class="wrap" style="background-color: <?php echo $title_bgcolor?>">

				<div class="triangle-left" style="border-right-color: <?php echo $title_bgcolor?>"></div>

                <h3><?php echo $title; ?></h3>

                <p>
                    <?php echo $description; ?>
                </p>

            </div>
            <!-- END wrap -->

        </div>
        <!-- END span3 -->

    </div>

</section>
<!-- END section title -->