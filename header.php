<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="format-detection" content="telephone=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>
    <header class="header js-header">
        <div class="header__inner">
            <h1 class="header__name">
                <a href="<?php echo home_url(); ?>" class="header__logo-wrap">
                    <img class="header__logo" src="<?php echo esc_url(get_theme_file_uri("/images/logo.svg")); ?>" alt="ヘッダーロゴ">
                    <p class="header__logo-name">atooshi</p>
                </a>
            </h1>
            <nav class="header__nav md-none">
                <ul class="header__items">
                    <li class="header__item">
                        <a href="#about" class="header__link">
                            <p class="header__link-ja">私について</p>
                            <p class="header__link-en">ABOUT</p>
                        </a>
                    </li>
                    <li class="header__item">
                        <a href="#service" class="header__link">
                            <p class="header__link-ja">サービス</p>
                            <p class="header__link-en">SERVICE</p>
                        </a>
                    </li>
                    <li class="header__item">
                        <a href="<?php echo home_url('/works'); ?>" class="header__link">
                            <p class="header__link-ja">制作実績</p>
                            <p class="header__link-en">WORKS</p>
                        </a>
                    </li>
                    <li class="header__item">
                        <a href="<?php echo home_url('/customer'); ?>" class="header__link">
                            <p class="header__link-ja">お客様の声</p>
                            <p class="header__link-en">CUSTOMER</p>
                        </a>
                    </li>
                    <li class="header__item">
                        <a href="#contact" class="header__link">
                            <p class="header__link-ja">お問い合わせ</p>
                            <p class="header__link-en">CONTACT</p>
                        </a>
                    </li>
                </ul>
            </nav>
        </div>

        <!-- SP -->
        <div class="hamburger js-hamburger md-show">
            <span></span>
            <span></span>
            <span></span>
        </div>

        <div class="drawer-menu js-drawer">
            <div class="drawer-menu__inner">
                <ul class="drawer-menu__items">
                    <li class="drawer-menu__item">
                        <a href="<?php echo home_url(); ?>#about" class="drawer-menu__link">
                            <p class="drawer-menu__link-ja">私について</p>
                            <p class="drawer-menu__link-en">ABOUT</p>
                        </a>
                    </li>
                    <li class="drawer-menu__item">
                        <a href="<?php echo home_url(); ?>#service" class="drawer-menu__link">
                            <p class="drawer-menu__link-ja">サービス</p>
                            <p class="drawer-menu__link-en">SERVICE</p>
                        </a>
                    </li>
                    <li class="drawer-menu__item">
                        <a href="<?php echo home_url('/works'); ?>" class="drawer-menu__link">
                            <p class="drawer-menu__link-ja">制作実績</p>
                            <p class="drawer-menu__link-en">WORKS</p>
                        </a>
                    </li>
                    <li class="drawer-menu__item">
                        <a href="<?php echo home_url('/customer'); ?>" class="drawer-menu__link">
                            <p class="drawer-menu__link-ja">お客様の声</p>
                            <p class="drawer-menu__link-en">CUSTOMER</p>
                        </a>
                    </li>
                    <li class="drawer-menu__item">
                        <a href="<?php echo home_url(); ?>#contact" class="drawer-menu__link">
                            <p class="drawer-menu__link-ja">お問い合わせ</p>
                            <p class="drawer-menu__link-en">CONTACT</p>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </header>