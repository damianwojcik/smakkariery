<?php

    $page_children= get_pages("child_of=".$post->ID."&sort_column=menu_order");
    $first_children_permalink = get_permalink($page_children[0]->ID);

    $logo = get_field('logo', $post->post_parent);
    $title = get_field('title', $post->post_parent);
    $title_bg = get_field('title_bg', $post->post_parent);
    $description_full = get_field('description_full', $post->post_parent);
    $description_full_trimmed = wp_trim_words( $description_full, 45 );
    $title_bgcolor = get_field('title_bgcolor', $post->post_parent);
    $header_bg = get_field('header_bg', $post->post_parent);


?>

<section class="title">

    <div class="row-tight">

        <div class="span7 span-left">

            <div class="img-wrap b-lazy" data-src="<?php if ( is_page_template( 'templates/page-contact.php' ) ) { echo $title_bg['url']; } else { echo $header_bg['url']; } ?>">

                <div class="wrap">

                <?php if ( is_page_template( 'templates/page-contact.php' ) ) { ?>

                    <h1>Skontaktuj się z nami</h1>

                <?php } else { ?>

                    <h1>
                        <img class="b-lazy" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="<?php echo $logo['url']; ?>" alt="<?php echo $logo['alt']; ?>">
                        <span class="sr-only"><?php the_title(); ?></span>
                    </h1>
                    
                <?php } ?>

				</div>

            </div>
            <!-- END img-wrap -->

        </div>
        <!-- END span7 -->

        <div class="span3 span-right">

            <div class="wrap" style="background-color: <?php echo $title_bgcolor; ?>">

				<div class="triangle-left" style="border-right-color: <?php echo $title_bgcolor; ?>"></div>

                <h3>
                    <?php if ( is_page_template( 'templates/page-contact.php' ) ) { ?>

                        Carrefour Polska Sp. z.o.o.

                    <?php } else { ?>

                        <?php echo $title; ?>

                    <?php } ?>

                </h3>

                <?php if ( is_page_template( 'templates/page-contact.php' ) ) { ?>

                    <ul class="contact-details">
                        <li><i class="fa fa-map-marker" aria-hidden="true"></i><span>ul. Targowa 72, 03-734 Warszawa</span></li>
                        <li><i class="fa fa-phone" aria-hidden="true"></i><span><a href="callto: 22 5​17 2116">22 5​17 2116</a></span></li>
                        <li><i class="fa fa-envelope" aria-hidden="true"></i><span><a href="mailto: kontakt@carrefour.pl">kontakt@carrefour.pl</a></span></li>
                    </ul>

                <?php } else { ?>

                    <p>
                        <?php echo $description_full_trimmed; ?>
                        <a href="<?php echo $first_children_permalink; ?>">Czytaj więcej</a>
                    </p>

                <?php } ?>

                

            </div>
            <!-- END wrap -->

        </div>
        <!-- END span3 -->

    </div>

</section>
<!-- END section title -->