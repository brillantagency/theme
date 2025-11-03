<?php
    $company_phone              = get_field('company_phone', 'option');
    $company_mail               = get_field('company_mail', 'option');
    $company_address            = get_field('company_address', 'option');
    $company_address_link       = get_field('company_address_link', 'option');
    $company_logo_footer        = get_field('company_logo_footer', 'option');
    $company_phone_clean        = clean_phone_number($company_phone);
?>

<footer class="footer">
    <div class="container">
        <div class="footer_top">
            <div class="footer_top_left">
                <?php if(!empty($company_logo_footer['url'])) : ?>
                <a class="footer_top_left_logo_link" title="<?php echo __('Logo Coach2','brillant'); ?>" href="<?php echo home_url(); ?>">
                    <img src="<?php echo $company_logo_footer['url']; ?>" width="20" height="126" alt="<?php echo $company_logo_footer['alt']; ?>" />
                </a>
                <?php endif; ?>

                <?php if(!empty($company_phone) or !empty($company_mail) or !empty($company_address)) : ?>
                <ul>
                    <?php if(!empty($company_address)) : ?>
                    <li>
                        <?php if(!empty($company_address_link)) : ?>
                            <a href="<?php echo $company_address_link; ?>" target="_blank" rel="noopener noreferrer">
                                <?php echo $company_address; ?>
                            </a>
                        <?php else : ?>
                            <p><?php echo $company_address; ?></p>
                        <?php endif; ?>
                    </li>
                    <?php endif; ?>

                    <?php if(!empty($company_phone)) : ?>
                    <li><a href="tel:<?php echo $company_phone_clean; ?>"><?php echo $company_phone; ?></a></li>
                    <?php endif; ?>

                    <?php if(!empty($company_mail)) : ?>
                    <li><a href="mailto:<?php echo $company_mail?>"><?php echo $company_mail ?></a></li>
                    <?php endif; ?>
                </ul>
                <?php endif; ?>
            </div>

            <div class="footer_top_right">
                <?php $theme_location = 'menu_primary'; include(locate_template('parts/components/menu.php')); ?>
                <?php include(locate_template('parts/components/social.php')); ?>
            </div>
        </div>

        <div class="footer_bottom">
            <div class="footer_bottom_left">
                <p><?php echo __('© All rights reserved.', 'brillant'); ?></p>
            </div>
            <div class="footer_bottom_right">
                <?php $theme_location = 'copyright'; include(locate_template('parts/components/menu.php')); ?>
                <button class="cky-banner-element"><?php echo __('Cookie', 'brillant'); ?></button>
                <?php include_once(locate_template('parts/components/designby.php')); ?>
            </div>
        </div>
    </div>
</footer>