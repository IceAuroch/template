<?php
function feedback_post_type()
{
    $labels = [
        'name' => _x('Отзывы', 'Post Type General Name', 'template'),
        'singular_name' => _x('Отзыв', 'Post Type Singular Name', 'template'),
        'menu_name' => __('Отзывы', 'template'),
        'name_admin_bar' => __('Отзывы', 'template'),
        'all_items' => __('Все отзывы', 'template'),
        'add_new_item' => __('Добавить новый отзыв', 'template'),
        'add_new' => __('Добавить отзыв', 'template'),
        'new_item' => __('Новый отзыв', 'template'),
        'edit_item' => __('Редактировать отзыв', 'template'),
        'update_item' => __('Обновить отзыв', 'template'),
        'view_item' => __('Просмотреть', 'template'),
        'view_items' => __('Просмотреть все', 'template'),
        'search_items' => __('Найти отзыв', 'template'),
    ];
    $args = [
        'label' => __('Отзыв', 'template'),
        'labels' => $labels,
        'supports' => ['title', 'editor', 'thumbnail'],
        'taxonomies' => [],
        'hierarchical' => false,
        'public' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'menu_position' => 5,
        'show_in_admin_bar' => true,
        'show_in_nav_menus' => true,
        'can_export' => true,
        'has_archive' => false,
        'exclude_from_search' => false,
        'publicly_queryable' => true,
        'capability_type' => 'page',
        'menu_icon' => 'dashicons-clipboard',
    ];
    register_post_type('feedback', $args);
}
add_action('init', 'feedback_post_type', 0);