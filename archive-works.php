<?php get_header(); ?>
<main>
    <div class="a-works">
        <div class="a-works__inner inner">
            <div class="a-works__title-wrap">
                <h2 class="a-works__title heading">Works</h2>
                <p class="a-works__sub-title heading-sub heading-sub--center">
                    制作実績
                </p>
            </div>
            <div class="a-works__container">
                <?php
                $args = [
                    "post_type" => "works",
                    "posts_per_page" => 10
                ];
                $the_query = new WP_Query($args)
                ?>

                <?php if ($the_query->have_posts()) : ?>
                    <ul class="a-works-cards">
                        <?php while ($the_query->have_posts()) : $the_query->the_post();  ?>
                            <li class="a-works-cards__item card">

                                <?php
                                // 1.フィールド名「custom-img」のデータを取得
                                $image = get_field("custom-img");

                                $url = $image["url"];

                                $alt = $image["alt"];
                                ?>

                                <?php if ( $image ) : ?>
                                    <img class="card__img" src="<?php echo $url; ?>" alt="<?php echo $alt; ?>" />
                                <?php else : ?>
                                    <img class="card__img" src="<?php echo esc_url(get_theme_file_uri("/images/noimage.jpg")); ?>)" alt="NoImage画像" />
                                <?php endif; ?>

                                <div class="card__body">
                                    <?php
                                    $taxonomy_terms = get_the_terms($post->ID, 'genre');
                                    if (! empty($taxonomy_terms)) {
                                        foreach ($taxonomy_terms as $taxonomy_term) {
                                            echo '<span class="card__category">' . esc_html($taxonomy_term->name) . '</span>';
                                        }
                                    }
                                    ?>
                                    <p class="card__title"><?php the_title(); ?></p>
                                </div>
                            </li>
                        <?php endwhile; ?>
                        <?php wp_reset_postdata(); ?>
                    </ul>
                <?php else : ?>
                    <p>公開できる制作実績がありません</p>
                <?php endif; ?>
            </div>
        </div>
    </div>
</main>
<?php get_footer(); ?>