<?php 
    $featured_pages_ids = array(8, 6);
?>

<section class="intro">

	<div class="row-tight">

		<div class="span5 span-left" style="background-image: url('<?= THEME_URL; ?>/assets/img/intro-bg-2.jpg')">

            <div class="wrap">

                <div class="inner-wrap">

                    <h1>
                        <img src="<?= THEME_URL; ?>/assets/img/smakkariery.png" alt="Smak Kariery"> Program Edukacyjny
                    </h1>

                    <span>
                        Smak to kwestia gustu. Każdy powinien robić to,<br>
                        co lubi, a <strong>sukces osiągniesz poprzez właściwe <br>
                        dobranie składników</strong>. My dajemy Ci pewność<br>
                        najlepszego połączenia pracy i pasji. Biorąc udział<br>
                        w naszym Programie Edukacyjnym znajdziesz<br>
                        przepis na doskonałą karierę!
                    </span>

                </div>
                <!-- END inner-wrap -->

            </div>

		</div>
		<!-- END span6 -->

		<div class="span5 span-right">

            <?php

                $i = 0;

                foreach ($featured_pages_ids as $featured_page) {
                    $logo = get_field('logo', $featured_page);
                    $title_bg = get_field('title_bg', $featured_page);
                    $title = get_field('title', $featured_page);
                    $description = get_field('description', $featured_page);
                    $title_bgcolor = get_field('title_bgcolor', $featured_page);
                    $i = $i + 1;
            ?>

    			<div class="row-tight">

                    <a href="<?php echo get_permalink($featured_page); ?>" class="caption-banner">

                        <?php if ( $i == 2 ){ ?>

                            <div class="wrap">

                                <div class="triangle-right" style="border-left-color: #FFF"></div>

                                <img src="<?php echo $logo['url']; ?>" alt="<?php echo $logo['alt']; ?>">

                            </div>
                            <!-- ENR wrap -->

                        <?php } ?>
 
                        <div class="text-wrap" style="background-image: url('<?php echo $title_bg['url']; ?>')">

                            <div class="color-overlay">

                                <h2><?php echo $title; ?></h2>

                                <p>
                                    <?php echo $description; ?>
                                </p>

                            </div>

                        </div>
                        <!-- END text-wrap -->


                        <?php if ( $i == 1 ){ ?>

                            <div class="wrap">

        						<div class="triangle-left" style="border-right-color: #FFF"></div>

        						<img src="<?php echo $logo['url']; ?>" alt="<?php echo $logo['alt']; ?>">

                            </div>
                            <!-- ENR wrap -->

                        <?php } ?>

                    </a>
                    <!-- END caption-banner -->

    			</div>
    			<!-- END row-tight -->

            <?php } //end foreach ?>

		</div>
		<!-- END span4 -->

	</div>
	<!-- END row-right -->

</section>
<!-- END section intro -->
