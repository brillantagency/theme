<?php
    $filename = pathinfo($file, PATHINFO_FILENAME);
    enqueue_block_assets($filename);

    $text_media_subtitle       = get_sub_field('block_text_media_text_media_subtitle');
    $text_media_title          = get_sub_field('block_text_media_text_media_title');
    $text_media_content        = get_sub_field('block_text_media_text_media_content');
    $text_media_link           = get_sub_field('block_text_media_text_media_link');

    //Styles
    $text_media_link_color        = get_sub_field('block_text_media_text_media_link_color');
    $text_media_position          = get_sub_field('block_text_media_text_media_position'); 
    $text_media_padding           = get_sub_field('block_text_media_text_media_padding'); 
    $text_media_text_align        = get_sub_field('block_text_media_text_media_text_align'); 
    $text_media_actif             = get_sub_field('block_text_media_text_media_actif');
    $text_media_img_full          = get_sub_field('block_text_media_text_media_img_fullwidth');
    $text_media_content_width     = get_sub_field('block_text_media_text_media_content_width');
    $text_media_img_rotate        = get_sub_field('block_text_media_text_media_img_rotate');
    $text_media_animation_content = get_sub_field('block_text_media_text_media_animation_content');
    $text_media_animation_media   = get_sub_field('block_text_media_text_media_animation_media');

    // video
    $media                  = get_sub_field('block_text_media_media_video_bool');
    $video_embed            = get_sub_field('block_text_media_media_video_embed');
    $video_upload           = get_sub_field('block_text_media_media_video_upload');
    $video_autoplay         = get_sub_field('block_text_media_media_video_autoplay');
    $video_loop             = get_sub_field('block_text_media_media_video_loop');
    $video_control          = get_sub_field('block_text_media_media_video_control');
    $text_media_image       = get_sub_field('block_text_media_media_image');
    $text_media_image_small = get_sub_field('block_text_media_media_image_small');

    $video_cover    = $text_media_image;

    if(!empty($text_media_title) || !empty($text_media_content)) {
        $tag = 'section';
    } else {
        $tag = 'div';
    }

    if($text_media_actif) :
?>

<<?php echo $tag; ?> class="text_media_section p-<?php echo $text_media_padding; ?> text_media_section_<?php echo $text_media_position; ?>">
    <div class="<?php echo $text_media_img_full ? '' : 'container'; ?> text_media_position text_media_position_<?php echo $text_media_position; ?> text_media_text_width_<?php echo $text_media_content_width; ?>">
        <?php if(!empty($video_embed) or !empty($video_upload) or !empty($text_media_image['url'])) : ?>
        <div class="text_media_wrapper text_media_media_wrapper <?php echo !empty($text_media_animation_content)? 'animatable-js animatable-' . $text_media_animation_content : '' ?> <?php echo $text_media_img_rotate? 'text_media_wrapper_rotate' : '' ; ?>">
            <?php if(!$media) : ?>
                <?php if(!empty($text_media_image)) : ?>
                    <div class="img_wrapper_crop_form">
                        <img loading="lazy" class="text_media_img" src="<?php echo $text_media_image['url']; ?>" alt="<?php echo $text_media_image ['alt']; ?>" >
                    </div>

                    <?php if(!empty($text_media_image_small)) : ?>
                    <div class="img_wrapper_crop_form <?php echo $text_media_image_small? 'img_wrapper_crop_form_border' : ''; ?>">
                        <img loading="lazy" class="text_media_img text_media_img_small" src="<?php echo $text_media_image_small['url']; ?>" alt="<?php echo $text_media_image_small ['alt']; ?>" >
                    </div>
                    <?php endif; ?>

                <?php endif; ?>
            <?php else :
                include get_template_directory() . '/parts/components/video.php';
            endif; ?>
        </div>
        <?php endif ?>

        <?php if(!empty($text_media_title) || !empty($text_media_content)): ?>
        <div class="text_media_wrapper <?php echo !empty($text_media_animation_media)? 'animatable-js animatable-' . $text_media_animation_media : '' ?> text_media_text_wrapper text_media_text_wrapper_align_<?php echo $text_media_text_align; ?>">
            <?php if(!empty($text_media_subtitle)): ?>
            <p class="text_media_subtitle subtitle"><?php echo $text_media_subtitle; ?></p>
            <?php endif; ?>

            <?php if(!empty($text_media_title)): ?>
            <h2 class="text_media_title title"><?php echo $text_media_title; ?></h2>
            <?php endif; ?>

            <?php if(!empty($text_media_content)): ?>
            <div class="text_media_text"><?php echo $text_media_content; ?></div>
            <?php endif; ?>

            <?php if(!empty($text_media_link)):
                $cta = $text_media_link;
                $cta_color = $text_media_link_color;
                include get_template_directory() . '/parts/components/cta.php';
            endif; ?>
        </div>
        <?php endif; ?>
    </div>
</<?php echo $tag; ?>>
<?php endif; ?>