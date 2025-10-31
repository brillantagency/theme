<?php
    $company_phone              = get_field('company_phone', 'option');
    $company_mail               = get_field('company_mail', 'option');
    $company_address            = get_field('company_address', 'option');
    $company_address_link       = get_field('company_address_link', 'option');
    $company_logo_1              = get_field('company_logo_1', 'option');
    $company_phone_clean        = clean_phone_number($company_phone);
?>

<footer class="footer">
    <div class="container">
        <div class="footer_top">
            <div class="footer_top_left">
                <?php if(!empty($company_logo_1['url'])) : ?>
                <a class="footer_top_left_logo_link" title="<?php echo __('Logo Coach2','brillant'); ?>" href="<?php echo home_url(); ?>">
                    <img src="<?php echo $company_logo_1['url']; ?>" width="20" height="126" alt="<?php echo $company_logo_1['alt']; ?>" />
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

        <div class="footer_brand_wrapper">
            <svg class="footer_brand footer_brand_belgium" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1287 185" fill="none">
                <path d="M1083.69 388.5V370.125C1083.69 351.021 1086.6 333.885 1092.44 318.719C1098.42 303.406 1106.07 289.26 1115.41 276.281C1124.74 263.156 1134.58 250.323 1144.94 237.781C1155 225.531 1164.55 212.99 1173.59 200.156C1182.78 187.177 1190.22 173.177 1195.91 158.156C1201.74 142.99 1204.66 126 1204.66 107.188C1204.66 98.1458 1203.27 90.4167 1200.5 84C1197.88 77.4375 1192.33 74.1562 1183.88 74.1562C1171.04 74.1562 1164.62 85.6042 1164.62 108.5V155.531H1083.69C1083.54 152.177 1083.32 148.385 1083.03 144.156C1082.89 139.927 1082.81 135.844 1082.81 131.906C1082.81 104.198 1085.73 80.7188 1091.56 61.4688C1097.4 42.0729 1107.68 27.3438 1122.41 17.2812C1137.28 7.07292 1158.14 1.96875 1184.97 1.96875C1216.91 1.96875 1241.7 10.9375 1259.34 28.875C1277.14 46.8125 1286.03 72.4062 1286.03 105.656C1286.03 128.26 1283.11 148.094 1277.28 165.156C1271.45 182.073 1263.72 197.531 1254.09 211.531C1244.47 225.385 1233.9 239.24 1222.38 253.094C1214.21 262.865 1206.26 272.854 1198.53 283.062C1190.95 293.271 1184.24 304.208 1178.41 315.875H1283.41V388.5H1083.69Z"/>
                <path d="M863.625 388.5V3.5H940.188V141.094H976.5V3.5H1053.06V388.5H976.5V213.938H940.188V388.5H863.625Z"/>
                <path d="M740.688 392C712.833 392 690.375 383.323 673.312 365.969C656.396 348.615 647.938 324.333 647.938 293.125V115.5C647.938 78.1667 655.302 49.5833 670.031 29.75C684.906 9.91667 709.042 0 742.438 0C760.667 0 776.854 3.35417 791 10.0625C805.292 16.7708 816.521 26.8333 824.688 40.25C832.854 53.5208 836.938 70.2917 836.938 90.5625V157.062H760.375V100.188C760.375 88.6667 758.917 80.9375 756 77C753.083 72.9167 748.562 70.875 742.438 70.875C735.292 70.875 730.479 73.5 728 78.75C725.521 83.8542 724.281 90.7083 724.281 99.3125V292.031C724.281 302.677 725.812 310.188 728.875 314.562C732.083 318.938 736.604 321.125 742.438 321.125C749 321.125 753.594 318.427 756.219 313.031C758.99 307.635 760.375 300.635 760.375 292.031V222.688H837.812V295.531C837.812 329.365 829.281 353.938 812.219 369.25C795.156 384.417 771.312 392 740.688 392Z"/>
                <path d="M423.062 388.5L460.25 3.5H590.844L627.375 388.5H554.531L549.062 326.375H502.688L497.875 388.5H423.062ZM508.156 264.906H543.156L526.312 69.125H522.812L508.156 264.906Z"/>
                <path d="M307.562 392C276.792 392 253.24 382.74 236.906 364.219C220.719 345.552 212.625 318.646 212.625 283.5V100.625C212.625 67.6667 220.646 42.6562 236.688 25.5938C252.875 8.53125 276.5 0 307.562 0C338.625 0 362.177 8.53125 378.219 25.5938C394.406 42.6562 402.5 67.6667 402.5 100.625V283.5C402.5 318.646 394.333 345.552 378 364.219C361.812 382.74 338.333 392 307.562 392ZM308.219 321.125C319.885 321.125 325.719 309.823 325.719 287.219V99.3125C325.719 80.3542 320.031 70.875 308.656 70.875C295.823 70.875 289.406 80.5729 289.406 99.9688V287.656C289.406 299.615 290.865 308.219 293.781 313.469C296.698 318.573 301.51 321.125 308.219 321.125Z"/>
                <path d="M92.75 392C64.8958 392 42.4375 383.323 25.375 365.969C8.45833 348.615 0 324.333 0 293.125V115.5C0 78.1667 7.36458 49.5833 22.0938 29.75C36.9688 9.91667 61.1042 0 94.5 0C112.729 0 128.917 3.35417 143.062 10.0625C157.354 16.7708 168.583 26.8333 176.75 40.25C184.917 53.5208 189 70.2917 189 90.5625V157.062H112.438V100.188C112.438 88.6667 110.979 80.9375 108.062 77C105.146 72.9167 100.625 70.875 94.5 70.875C87.3542 70.875 82.5417 73.5 80.0625 78.75C77.5833 83.8542 76.3438 90.7083 76.3438 99.3125V292.031C76.3438 302.677 77.875 310.188 80.9375 314.562C84.1458 318.938 88.6667 321.125 94.5 321.125C101.062 321.125 105.656 318.427 108.281 313.031C111.052 307.635 112.438 300.635 112.438 292.031V222.688H189.875V295.531C189.875 329.365 181.344 353.938 164.281 369.25C147.219 384.417 123.375 392 92.75 392Z"/>
            </svg>
        </div>
    </div>
</footer>