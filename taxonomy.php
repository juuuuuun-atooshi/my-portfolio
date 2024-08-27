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
                $genre_slug = get_query_var('genre');
                $args = [
                    "post_type" => "works",
                    'tax_query' => [
                        [
                            // タクソノミーのスラッグを指定
                            'taxonomy' => 'genre',
                            'field'    => 'slug',
                            'terms'    => $genre_slug,
                        ],
                    ],
                    "posts_per_page" => 10
                ];
                $the_query = new WP_Query($args)
                ?>

                <div class="tab">
                    <?php
                    $current_term = get_queried_object();
                    if (isset($current_term->term_id)) {
                        $current_term_id = $current_term->term_id;
                        // ここで$current_term_idを使用する処理を追加します。
                    } else {
                        $current_term_id = null;
                    }
                    $terms = get_terms([
                        // 表示するタクソノミースラッグを記述
                        'taxonomy' => 'genre',
                        'orderby' => 'name',
                        'order'   => 'ASC',
                        // 表示するタームの数を指定
                        'number'  => 5
                    ]);

                    // カスタム投稿一覧ページへのURL
                    $home_class = (is_post_type_archive()) ? 'is-active' : '';
                    $home_link = sprintf(
                        //カスタム投稿一覧ページへのaタグに付与するクラスを指定できる
                        '<a class="tab__link %s" href="%s" alt="%s">全て</a>',
                        $home_class,
                        // カスタム投稿一覧ページのスラッグを指定
                        esc_url(home_url('/works')),
                        esc_attr(__('View all posts', 'textdomain'))
                    );
                    echo sprintf(esc_html__('%s', 'textdomain'), $home_link);

                    // タームのリンク
                    if ($terms) {
                        foreach ($terms as $term) {
                            // カレントクラスに付与するクラスを指定できる
                            $term_class = ($current_term_id === $term->term_id) ? 'is-active' : '';

                            if ($term_class === 'is-active') {
                                $term_tag = '<p class="tab__link %s" href="%s" alt="%s">%s</p>';
                            } else {
                                $term_tag = '<a class="tab__link %s" href="%s" alt="%s">%s</a>';
                            }

                            $term_link = sprintf(
                                // 各タームに付与するクラスを指定できる
                                $term_tag,
                                $term_class,
                                esc_url(get_term_link($term->term_id)),
                                esc_attr(sprintf(__('View all posts in %s', 'textdomain'), $term->name)),
                                esc_html($term->name)
                            );
                            echo sprintf(esc_html__('%s', 'textdomain'), $term_link);
                        }
                    }
                    ?>
                </div>

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

                                <div class="card__icatch">
                                    <?php if ($image) : ?>
                                        <img class="card__img" src="<?php echo $url; ?>" alt="<?php echo $alt; ?>" />
                                    <?php else : ?>
                                        <img class="card__img" src="<?php echo esc_url(get_theme_file_uri("/images/noimage.jpg")); ?>)" alt="NoImage画像" />
                                    <?php endif; ?>

                                    <a href="<?php the_permalink(); ?>" class="card__detail">詳細を見る</a>
                                    <a href="<?php echo esc_url(get_field("custom-url")); ?>" class="card__link">サイトを見る</a>
                                </div>

                                <div class="card__body">
                                    <?php
                                    $taxonomy_terms = get_the_terms($post->ID, 'genre');
                                    if (! empty($taxonomy_terms)) {
                                        foreach ($taxonomy_terms as $taxonomy_term) {
                                            $term_link = esc_url(get_term_link($taxonomy_term));
                                            echo '<span class="card__category"><a class="term_link" href="'. $term_link .'">' . esc_html($taxonomy_term->name) . '</a></span>';
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