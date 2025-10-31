<?php
$banner_suptitle = get_field('banner_suptitle');
$banner_title    = get_field('banner_title');
$banner_content  = get_field('banner_content');
$banner_padding  = get_field('banner_padding');
$cta             = get_field('banner_button');
$cta_color       = get_field('banner_button_color');
?>

<section class="banner p-<?php echo $banner_padding; ?>">
    <div class="container">
        <?php if(!empty($banner_suptitle)) : ?>
        <span class="banner_suptitle subtitle"><?php echo $banner_suptitle; ?></span>
        <?php endif; ?>

        <h1 class="banner_title">
            <?php echo $banner_title; ?>
        </h1>

        <?php if(!empty($banner_content)) : ?>
        <div><?php echo $banner_content; ?></div>
        <?php endif; ?>

        <?php include(locate_template('parts/components/cta.php')); ?>
    </div>
</section>