<section class="banners">

    <div class="swiper-container">
        <div class="swiper-wrapper">

            <?php if( have_rows('banners_group', 'option') ): ?>

                <?php while ( have_rows('banners_group', 'option') ) : the_row(); ?>

                    <?php
                        $title = get_sub_field('title');
                        $gallery = get_sub_field('gallery');
                    ?>

                    <?php if( $title ){ ?>

                        <div class="swiper-slide"><span><?php echo $title; ?></div>
                    
                    <?php } ?>

                    <?php if( $gallery ){ ?>

                        <?php foreach ($gallery as $image) { ?>

                            <?php $link = get_field('link', $image['id']); ?>

                            <div class="swiper-slide">

                                <a href="
                                    <?php
                                        if($link){
                                            echo $link;
                                        }else {
                                            echo '#';
                                        }
                                    ?>
                                " target="_blank">

                                    <img src="<?php echo $image['sizes']['thumbnail']; ?>" alt="<?php echo $image['alt']; ?>" />

                                </a>

                            </div>

                            <?php }//end foreach ?>

                        <?php }//endif ?>

                <?php endwhile; ?>

            <?php endif; ?>

        </div>
    </div>

</section>
<!-- END section banners -->
