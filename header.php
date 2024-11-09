<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?=wp_get_document_title(); ?></title>
    <link rel="Shortcut Icon" type="image/x-icon" href="<?php echo get_template_directory_uri(); ?>/build/img/general/logo.ico" />
   
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

    <?php wp_body_open(); ?>
    <header class="header autoHide">
        <div class="container container-header">
            <div class="header__burger">
                <span></span>
                <span class="header__burger-center"></span>
                <span></span>
            </div>

            <a href="/" class="header__logo"><img src="<?php echo get_template_directory_uri(); ?>/build/img/icons/LOGO.svg"
                    alt="logo" /></a>
                    
            <div class="header__menu">
            <?php wp_nav_menu(array(
					'theme_location' => 'header_menu',
					'menu' => 'header_menu',
					'container' => 'ul',
					'container_class' => '',
					'container_id' => '',
					'menu_class' => 'header__menu-list',
					'menu_id' => 'header__menu-list',
					'echo' => true,
					'fallback_cb' => 'wp_page_menu',
					'before' => '',
					'after' => '',
					'link_before' => '',
					'link_after' => '',
					'depth' => 0,
					'walker' => '',
				));?>
                
            </div>
            <a href="tel:+38 050 123 45 67" class="header__phone">
                <div class="header__phone-s">
                    <img src="<?php echo get_template_directory_uri(); ?>/build/img/icons/icon-phone.svg" alt="logo" />
                </div>
                <div class="header__phone-m">
                    <img src="<?php echo get_template_directory_uri(); ?>/build/img/icons/icon-phone-white.svg" alt="logo" />+38 050 123
                    45 67
                </div>
            </a>
        </div>
    </header>