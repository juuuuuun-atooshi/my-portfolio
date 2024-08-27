<?php get_header(); ?>
<main>
    <div class="mv">
        <div class="mv__inner">
            <div class="mv__slider swiper">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <picture>
                            <source srcset="<?php echo esc_url(get_theme_file_uri("/images/fv-1.jpg")); ?>" media="(min-width: 769px)">
                            <img src="<?php echo esc_url(get_theme_file_uri("/images/fv-1-sp.jpg")); ?>" alt="プログラミングしている様子">
                        </picture>
                    </div>
                    <div class="swiper-slide">
                        <picture>
                            <source srcset="<?php echo esc_url(get_theme_file_uri("/images/fv-2.jpg")); ?>" media="(min-width: 769px)">
                            <img src="<?php echo esc_url(get_theme_file_uri("/images/fv-2-sp.jpg")); ?>" alt="ビデオスイッチャーを操作している男性">
                        </picture>
                    </div>
                    <div class="swiper-slide">
                        <picture>
                            <source srcset="<?php echo esc_url(get_theme_file_uri("/images/fv-3.jpg")); ?>" media="(min-width: 769px)">
                            <img src="<?php echo esc_url(get_theme_file_uri("/images/fv-3-sp.jpg")); ?>" alt="机にパソコンとカメラが置いてある様子">
                        </picture>
                    </div>
                </div>
                <div class="mv__title-wrap">
                    <p class="mv__title scroll_up">
                        <span class="mv__title--background">「執事」のように</span><br /><span class="mv__title--background">あなたの事業を “atooshi” します</span>
                    </p>
                </div>
            </div>
        </div>
    </div>

    <section id="about" class="about">
        <div class="about__inner inner">
            <div class="about__wrap scroll_right">
                <div class="about__image">
                    <img src="<?php echo esc_url(get_theme_file_uri("/images/about.jpg")); ?>" alt="atooshi代表の伊藤淳" class="about__img md-none" />
                </div>
                <div class="about__content">
                    <h2 class="about__title heading heading--white-color">About</h2>
                    <p class="about__sub-title heading-sub heading--white-color">
                        私について
                    </p>
                    <img src="<?php echo esc_url(get_theme_file_uri("/images/about.jpg")); ?>" alt="atooshi代表の伊藤淳" class="about__img md-show" />
                    <div class="about__prof">
                        <p class="about__representative">
                            伊藤&emsp;淳&emsp;Ito&nbsp;Jun
                        </p>
                        <p class="about__text">
                            atooshiは埼玉県さいたま市を中心に活動している、フリーランス事務所です。<br />
                            Web制作・動画制作・ライブ配信を用いて、お客様が目指すビジョンの実現のために活動を後押しします。
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="service" class="service">
        <div class="service__inner">
            <div class="service__title-wrap scroll_up">
                <h2 class="service__title heading">Service</h2>
                <p class="service__sub-title heading-sub heading-sub--center">
                    サービス
                </p>
            </div>
            <div class="service__contents">
                <div class="service__content-body scroll_up">
                    <img src="<?php echo esc_url(get_theme_file_uri("/images/service-1.jpg")); ?>" alt="プログラミングしている様子" class="service__img md-none" />
                    <div class="service__content content--left">
                        <p class="service__content-title section-title">Web制作</p>
                        <img src="<?php echo esc_url(get_theme_file_uri("/images/service-1.jpg")); ?>" alt="プログラミングしている様子" class="service__img md-show" />

                        <p class="service__content-text section-text">
                            WordPressによるサイト構築やShopifyを用いたECサイト制作を承っております。<br />
                            お客様のニーズに沿ったプロダクトを提供いたします。
                        </p>
                    </div>
                </div>

                <div class="service__content-body service__content-body--reverse scroll_up">
                    <img src="<?php echo esc_url(get_theme_file_uri("/images/service-2.jpg")); ?>" alt="動画編集ソフトの画面" class="service__img md-none" />
                    <div class="service__content content--right">
                        <p class="service__content-title section-title">動画制作</p>
                        <img src="<?php echo esc_url(get_theme_file_uri("/images/service-2.jpg")); ?>" alt="動画編集ソフトの画面" class="service__img md-show" />
                        <p class="service__content-text section-text">
                            撮影・収録をしていただいたデータを基に、動画コンテンツの制作を行います。撮影からの対応も可能ですので、お気軽にご相談ください。
                        </p>
                    </div>
                </div>

                <div class="service__content-body scroll_up">
                    <img src="<?php echo esc_url(get_theme_file_uri("/images/service-3.jpg")); ?>" alt="ライブ配信を撮影している様子" class="service__img md-none" />
                    <div class="service__content content--left">
                        <p class="service__content-title section-title">
                            ライブ配信支援<br class="md-none" />サービス
                        </p>
                        <img src="<?php echo esc_url(get_theme_file_uri("/images/service-3.jpg")); ?>" alt="ライブ配信を撮影している様子" class="service__img md-show" />
                        <p class="service__content-text section-text">
                            セミナーや社内研修、音楽ライブなど様々なコンテンツのライブ配信支援を承っております。
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="works" class="works">
        <div class="works__inner">
            <div class="works__title-wrap scroll_left">
                <h2 class="works__title heading heading--white-color">Works</h2>
                <p class="works__sub-title heading-sub heading-sub--left heading-sub--sm heading--white-color">
                    制作実績
                </p>
                <div class="works__remarks">
                    <p class="wroks__remarks-description">※ 架空サイトには<br class="sm-show">BASIC認証(ID/PASS)が設定されています。</p>
                    <p class="wroks__remarks-description--sub">ID/PASS： dem0-user / dem0-user</p>
                </div>
            </div>
            <div class="works__contents scroll_up">
                <div class="works__swiper swiper">
                    <div class="swiper-wrapper works__swiper--wrapper">
                        <?php
                        $args = array(
                            "post_type" => "works",
                            "order" => 'asc',
                            "posts_per_page" => 6
                        );
                        $the_query = new WP_Query($args);
                        ?>
                        <?php if ($the_query->have_posts()) : ?>
                            <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
                                <?php
                                // 1.フィールド名「custom-img」のデータを取得
                                $image = get_field("custom-img");

                                if ($image) {
                                    // 2.$imageのデータから画像のURLを変数化
                                    $url = $image["url"];

                                    // 3.$imageのデータから画像のalt属性を変数化
                                    $alt = $image["alt"];
                                }
                                ?>

                                <div class="work__slide-item work__slide-link swiper-slide work__slide">
                                    <div class="card__icatch" ontouchstart="">
                                        <?php if ($image) : ?>
                                            <img src="<?php echo $url; ?>" alt="<?php echo $alt; ?>" class="work__slide-img zoom">
                                        <?php else : ?>
                                            <img class="work__slide-img zoom" src="<?php echo esc_url(get_theme_file_uri("/images/no-image.png")); ?>)" alt="NoImage画像" />
                                        <?php endif; ?>

                                        <a href="<?php the_permalink(); ?>" class="card__detail">詳細を見る</a>
                                        <?php if (get_field("custom-url")) { ?>
                                            <a href="<?php echo esc_url(get_field("custom-url")); ?>" class="card__link">サイトを見る</a>
                                        <?php } else { ?>
                                            <p class="card__link">サイト非公開</p>
                                        <?php } ?>
                                    </div>
                                    <div class="card__body">
                                        <p class="work__slide-title"><?php the_field("custom-text"); ?></p>
                                    </div>
                                </div>

                            <?php endwhile; ?>
                            <?php wp_reset_postdata(); ?>

                        <?php endif; ?>
                    </div>
                    <div class="swiper-pagination"></div>
                </div>
            </div>
        </div>
    </section>

    <section id="contact" class="contact">
        <div class="contact__inner">
            <div class="contact__title-wrap scroll_up">
                <h2 class="contact__title heading">Contact</h2>
                <p class="contact__sub-title heading-sub heading-sub--center">
                    お問い合わせ
                </p>
            </div>

            <?php echo do_shortcode('[contact-form-7 id="31084ad" title="問い合わせフォーム"]'); ?>
        </div>
    </section>
</main>
<?php get_footer(); ?>