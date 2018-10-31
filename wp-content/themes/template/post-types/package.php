<?php
function package_post_type()
{
    $labels = [
        'name' => _x('Форматы', 'Post Type General Name', 'template'),
        'singular_name' => _x('Формат', 'Post Type Singular Name', 'template'),
        'menu_name' => __('Форматы', 'template'),
        'name_admin_bar' => __('Форматы', 'template'),
        'all_items' => __('Все форматы', 'template'),
        'add_new_item' => __('Добавить новый формат', 'template'),
        'add_new' => __('Добавить формат', 'template'),
        'new_item' => __('Новый формат', 'template'),
        'edit_item' => __('Редактировать формат', 'template'),
        'update_item' => __('Обновить формат', 'template'),
        'view_item' => __('Просмотреть', 'template'),
        'view_items' => __('Просмотреть все', 'template'),
    ];
    $args = [
        'label' => __('Формат', 'template'),
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
    register_post_type('package', $args);
}
add_action('init', 'package_post_type', 0);