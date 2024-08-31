<?php get_header(); ?>
<main>
    <div class="works-detail">
        <article class="works-detail__body">
            <h1 class="works-detail__title"><?php the_title(); ?></h1>
            <?php
            $taxonomy_terms = get_the_terms($post->ID, 'genre');
            if (! empty($taxonomy_terms)) {
                foreach ($taxonomy_terms as $taxonomy_term) {
                    echo '<span class="card__category">' . esc_html($taxonomy_term->name) . '</span>';
                }
            }
            ?>
            <div class="works-detail__content">
                <?php the_content(); ?>
            </div>
        </article>
    </div>
</main>
<?php get_footer(); ?>