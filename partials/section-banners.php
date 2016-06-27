<section class="banners">

    <div class="swiper-container">
        <div class="swiper-wrapper">

            <?php

            $field_key_sponsors = "field_5770f8ab53756";
            $field_key_media_sponsors = "field_5770f92653758";
            $field_sponsors = get_field_object($field_key_sponsors);
            $field_media_sponsors = get_field_object($field_key_media_sponsors);

            $gallery_partners = get_field('banners_partners', 'option');
            $gallery_media_partners = get_field('banners_media_partners', 'option');

            ?>

            <div class="swiper-slide"><span><?php echo $field_sponsors['label']; ?></span></div>

             <?php foreach( $gallery_partners as $image ): ?>

                <div class="swiper-slide">

                    <a href="<?php echo $banner_url; ?>" target="_blank">

                        <img src="<?php echo $image['sizes']['thumbnail']; ?>" alt="<?php echo $image['alt']; ?>" />

                    </a>

                </div>

            <?php endforeach; ?>


            <div class="swiper-slide"><span><?php echo $field_media_sponsors['label']; ?></span></div>

            <?php foreach( $gallery_media_partners as $image ): ?>

                <div class="swiper-slide">

                    <a href="<?php echo $banner_url; ?>" target="_blank">

                        <img src="<?php echo $image['sizes']['thumbnail']; ?>" alt="<?php echo $image['alt']; ?>" />

                    </a>

                </div>

            <?php endforeach; ?>

        </div>
    </div>

</section>
<!-- END section banners -->
