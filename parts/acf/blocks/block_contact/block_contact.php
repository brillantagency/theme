<?php
    $filename = pathinfo($file, PATHINFO_FILENAME);
    enqueue_block_assets($filename);

    $contact_form              = get_sub_field('contact_form');
    $contact_title             = get_sub_field('contact_title');
    $contact_subtitle          = get_sub_field('contact_subtitle');
    $contact_text              = get_sub_field('contact_text');
    $contact_image             = get_sub_field('contact_image');


    // Styles
    $contact_padding           = get_sub_field('contact_padding');
    $contact_actif             = get_sub_field('contact_actif');

    if($contact_actif) :
?>

<section class="block_contact p-<?php echo $contact_padding; ?>">
        <div class="container">
            <?php if(!empty($contact_subtitle)) : ?>
            <p class="subtitle"><?php echo $contact_subtitle; ?></p>
            <?php endif; ?>

            <?php if(!empty($contact_title)) : ?>
            <div>           
                <?php echo $contact_title; ?>
            </div>
            <?php endif; ?>

            <?php if(!empty($contact_text)) : ?>
            <div><?php echo $contact_text; ?></div>
            <?php endif; ?>

            <?php if(!empty($contact_form)) : ?>
                <div class="contact_form_wrapper">
                    <?php echo do_shortcode($contact_form); ?>

                    <?php if(!empty($contact_image)) : ?>
                        <img loading="lazy" class="contact_img" src="<?php echo $contact_image['url']; ?>" alt="<?php echo $contact_image ['alt']; ?>" >
                    <?php endif; ?>
                </div>
            <?php endif; ?>
        </div>
</section>
<?php endif; ?>