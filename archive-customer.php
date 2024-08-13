<?php get_header(); ?>
<main>
    <div class="customer">
        <div class="customer__inner inner">
            <div class="customer__title-wrap">
                <h2 class="customer__title heading">Customer</h2>
                <p class="service__sub-title heading-sub heading-sub--center">
                    お客様の声
                </p>
            </div>
            <div class="customer__container">
                <?php
                $args = [
                    "post_type" => "customer",
                    "posts_per_page" => 10
                ];
                $the_query = new WP_Query($args);
                ?>
                <?php if ($the_query->have_posts()) : ?>
                    <ul class="customer__items">
                        <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
                            <li class="customer__item">
                                <p class="customer__name"><?php the_title(); ?></p>
                                <?php the_content(); ?>
                            </li>
                        <?php endwhile; ?>
                        <?php wp_reset_postdata(); ?>
                    </ul>
                <?php else : ?>
                    <p>お客様の声が投稿されていません</p>
                <?php endif;  ?>
            </div>
            <?php
            $args = [
                'mid_size' => 1,
                'prev_text' => '前へ',
                'next_text' => '次へ',
            ];
            the_posts_pagination($args);
            ?>
        </div>
    </div>
</main>
<?php get_footer(); ?>