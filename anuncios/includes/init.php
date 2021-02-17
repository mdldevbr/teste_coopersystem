<?php

function ma_anuncios_init()
{

    $labels = array(
        'name' => 'Anúncios',
        'singular_name' => 'Anúncio',
        'menu_name' => 'Anúncios',
        'name_admin_bar' => 'Anúncio',
        'add_new' => 'Adicionar Novo',
        'add_new_item' => 'Adicionar Novo Anúncio',
        'new_item' => 'Novo Anúncio',
        'edit_item' => 'Editar Anúncio',
        'view_item' => 'Visualizar Anúncio',
        'all_items' => 'Todos os Anúncios',
        'search_items' => 'Procurar Anúncio',
        'parent_item_colon' => 'Anúncios Filhos:',
        'not_found' => 'Nenhum anúncio encontrado',
        'not_found' => 'Nenhum anúncio no lixo'
    );

    $array = array(
        'labels' => $labels,
        'description' => 'Uma listagem interativa de anúncios para seu site.',
        'public' => true,
        'publicy_queryable' => true,
        'query_var' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'rewrite' => array('slug', 'anuncio'),
        'capability_type' => 'post',
        'has_archive' => true,
        'hierarchical' => false,
        'menu_position' => 5,
        'supports' => array('title', 'editor', 'author', 'thumbnail'),
        'taxonomies' => array('anuncio', 'post_tag')
    );

    register_post_type('anuncio', $array);
    add_action('admin_enqueue_scripts', 'ma_enqueue');
}


















