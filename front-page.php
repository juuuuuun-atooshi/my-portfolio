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
                    <p class="mv__title">
                        「執事」のように<br />あなたの事業を “atooshi” します
                    </p>
                </div>
            </div>
        </div>
    </div>

    <section id="about" class="about">
        <div class="about__inner inner">
            <div class="about__wrap">
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
            <div class="service__title-wrap">
                <h2 class="service__title heading">Service</h2>
                <p class="service__sub-title heading-sub heading-sub--center">
                    サービス
                </p>
            </div>
            <div class="service__contents">
                <div class="service__content-body">
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

                <div class="service__content-body service__content-body--reverse">
                    <img src="<?php echo esc_url(get_theme_file_uri("/images/service-2.jpg")); ?>" alt="動画編集ソフトの画面" class="service__img md-none" />
                    <div class="service__content content--right">
                        <p class="service__content-title section-title">動画制作</p>
                        <img src="<?php echo esc_url(get_theme_file_uri("/images/service-2.jpg")); ?>" alt="動画編集ソフトの画面" class="service__img md-show" />
                        <p class="service__content-text section-text">
                            撮影・収録をしていただいたデータを基に、動画コンテンツの制作を行います。撮影からの対応も可能ですので、お気軽にご相談ください。
                        </p>
                    </div>
                </div>

                <div class="service__content-body">
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
            <div class="works__title-wrap">
                <h2 class="works__title heading heading--white-color">Works</h2>
                <p class="works__sub-title heading-sub heading-sub--left heading-sub--sm heading--white-color">
                    制作実績
                </p>
            </div>
            <div class="works__contents">
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

                                // 2.$imageのデータから画像のURLを変数化
                                $url = $image["url"];

                                // 3.$imageのデータから画像のalt属性を変数化
                                $alt = $image["alt"];
                                ?>

                                <a href="<?php echo esc_url(get_field("custom-url")); ?>" class="work__slide-link swiper-slide work__slide">
                                    <div class="work__slide-item">
                                        <img src="<?php echo $url; ?>" alt="<?php echo $alt; ?>" class="work__slide-img">
                                        <p class="work__slide-title"><?php the_field("custom-text"); ?></p>
                                    </div>
                                </a>

                            <?php endwhile; ?>
                            <?php wp_reset_postdata(); ?>

                        <?php endif; ?>
                    </div>
                    <div class="swiper-pagination"></div>
                </div>
                <div class="swiper-button-prev"></div>
                <div class="swiper-button-next"></div>
            </div>
        </div>
    </section>

    <section id="contact" class="contact">
        <div class="contact__inner">
            <div class="contact__title-wrap">
                <h2 class="contact__title heading">Contact</h2>
                <p class="contact__sub-title heading-sub heading-sub--center">
                    お問い合わせ
                </p>
            </div>

            <div class="contact__form form">
                <dl class="form__list">
                    <div class="form__field">
                        <dt class="form__label">
                            <label for="name" class="form__label-text">お名前<span class="required-tag">必須</span></label>
                        </dt>
                        <dd class="form__input"><input type="text" class="form__input-text" name="your-name" /></dd>
                    </div>

                    <div class="form__field">
                        <dt class="form__label"><label for="email" class="form__label-text">メールアドレス<span class="required-tag">必須</span></label></dt>
                        <dd class="form__input"><input type="text" class="form__input-text" name="your-email" /></dd>
                    </div>

                    <div class="form__field">
                        <dt class="form__label"><label for="subject" class="form__label-text">件名</label></dt>
                        <dd class="form__input"><input type="text" class="form__input-text" name="your-subject" /></dd>
                    </div>

                    <div class="form__field">
                        <dt class="form__label"><label for="message" class="form__label-text">お問い合わせ内容<span class="required-tag">必須</span></label></dt>
                        <dd class="form__input"><textarea class="form__input-textarea" name="message"></textarea></dd>
                    </div>
                </dl>


                <div class="form__button">
                    <input class="form__button-text" type="submit" value="送信する" />
                </div>
            </div>
        </div>
    </section>
</main>
<?php get_footer(); ?>