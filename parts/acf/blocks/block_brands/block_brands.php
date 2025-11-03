<?php
    $filename = pathinfo($file, PATHINFO_FILENAME);
    enqueue_block_assets($filename);
    
    $brands_subtitle = get_sub_field('brands_subtitle');
    $brands_title    = get_sub_field('brands_title');
    $brands_text     = get_sub_field('brands_text');
    $brands_repeater = get_sub_field('brands_repeater');

    // Styles
    $brands_actif    = get_sub_field('brands_actif');
    $brands_padding  = get_sub_field('brands_padding');

    if(empty($brands_repeater) or $brands_repeater == NULL) {
        $brands_repeater = get_field('brands_repeater', 'option');
    }

    if(!empty($brands_title)) {
        $tag = 'section';
    } else {
        $tag = 'div';
    }

    if($brands_actif) :
?>
<<?php echo $tag; ?> class="block_brands p-<?php echo $brands_padding; ?>">
    <?php if (!empty($brands_subtitle) or !empty($brands_title)) : ?>
    <div class="container">
        <?php if (!empty($brands_subtitle)) : ?>
            <p class="brands_subtitle subtitle"><?php echo $brands_subtitle; ?></p>
        <?php endif; ?>

        <?php if (!empty($brands_title)) : ?>
            <h2 class="brands_title title"><?php echo $brands_title; ?></h2>
        <?php endif; ?>
    </div>
    <?php endif; ?>
    
    <div class="brands_slider swiper brands_swiper-js">
        <div class="brands_list swiper-wrapper">
            <?php foreach($brands_repeater as $brand) :
                $img  = $brand['image'];
                $link = $brand['link'];
            ?>  
                <?php if (!empty($img)) : ?>
                    <?php if(!empty($link)) : ?>
                        <a href="<?php echo $link['url']; ?>" title="<?php echo __('Lien vers la marque', 'brillant'); ?>" class="brands_wrapper_img swiper-slide" target="_blank" rel="noopener noreferrer">
                    <?php else: ?>
                        <div class="brands_wrapper_img swiper-slide">
                    <?php endif; ?>

                        <img loading="lazy" class="brands_img" width="172" height="172" src="<?php echo $img['url']; ?>" alt="<?php echo $img['alt']; ?>" >

                    <?php if(!empty($link)) : ?>
                        </a>
                    <?php else: ?>
                        </div>
                    <?php endif; ?>
                <?php endif; ?>
            <?php endforeach; wp_reset_postdata(); ?>
            
        </div>

        <div class="swiper-pagination swiper-pagination-js"></div>
        <div class="swiper-button-next swiper-button-next-js"></div>
        <div class="swiper-button-prev swiper-button-prev-js"></div>

    </div>
</<?php echo $tag; ?>>
<?php endif; ?>