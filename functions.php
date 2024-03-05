<?php
function my_setup()
{
    add_theme_support('post-thumbnails'); // アイキャッチ画像を有効化
    add_theme_support('automatic-feed-links'); // 投稿とコメントのRSSフィードのリンクを有効化
    add_theme_support('title-tag'); // titleタグ自動生成
    add_theme_support('html5', array( // HTML5による出力
        'search-form',
        'comment-form',
        'comment-list',
        'gallery',
        'caption',
    ));
}
add_action('after_setup_theme', 'my_setup');

/* CSSとJavaScriptの読み込み */
function my_script_init()
{
    // WordPressに含まれているjquery.jsを読み込まない
    wp_deregister_script('jquery');

    // Googleフォントの読み込み
    wp_enqueue_style( 'googlefonts', '//fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@400..700&family=Noto+Serif+JP:wght@500;700&display=swap' );

    // jQueryの読み込み
    wp_enqueue_script('jquery', '//code.jquery.com/jquery-3.6.1.min.js', "", "1.0.1");
    wp_enqueue_script( 'swiper', '//unpkg.com/swiper@8/swiper-bundle.min.js', "", "1.0.1", true );
    wp_enqueue_script('main', get_template_directory_uri() . '/js/script.js', array('jquery'), '1.0.1', true);

    // CSSの読み込み
    wp_enqueue_style('swiper-bundle', '//cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css', "", "1.0.1");
    wp_enqueue_style('style', get_template_directory_uri() . '/css/style.css', array(), '1.0.1');
}
add_action('wp_enqueue_scripts', 'my_script_init');
