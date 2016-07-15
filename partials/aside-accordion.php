<?php $child_pages = $wpdb->get_results("SELECT * FROM $wpdb->posts WHERE post_parent = ".$post->post_parent."
AND post_type = 'page' ORDER BY menu_order", 'OBJECT'); ?>

<?php if ( $child_pages ) { ?>

    <ul class="accordion">

    <?php foreach ( $child_pages as $pageChild ) : setup_postdata( $pageChild ); ?>

        <?php
            $icon = get_field('icon', $pageChild);
            $color = get_field('color', $pageChild);
            $content = $pageChild->post_content;
            $trimmed_content = wp_trim_words( $content, 50, '... <span style="font-weight: bold;">Czytaj więcej</span>' );
            $thumbnail = wp_get_attachment_image_src( get_post_thumbnail_id($pageChild->ID), 'large' );

            if( $post->ID != $pageChild->ID){
        ?>

            <li>

                <div class="accordion-heading" style="background-color: <?php echo $color; ?>">
                    <span class="accordion-icon">
                        <img src="<?php echo $icon['url']; ?>" alt="<?php echo $icon['alt']; ?>">
                    </span>
                    <span class="accordion-title"><?php echo $pageChild->post_title; ?></span>
                </div>

                <div class="accordion-wrap" style="background-image: url('<?php echo $thumbnail[0]; ?>')">

                    <div class="triangle-bottom" style="border-top-color: <?php echo $color; ?>"></div>

                    <a href="<?php echo get_permalink($pageChild->ID); ?>" rel="bookmark" title="<?php echo $pageChild->post_title; ?>" >

                        <div class="wrap">

                            <p>
                                <?php echo $trimmed_content; ?>
                            </p>

                        </div>

                    </a>

                </div>

            </li>

        <?php  }//endif ?>

    <?php endforeach; ?>


    </ul>

<?php }//end if ?>
