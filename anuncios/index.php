<?php
/*
 * Plugin Name: Anuncios
 * Description: Plugin para resolução de teste para vaga de PHP pleno em CooperSystem
 * Version: 1.0
 * Author URI: https://linkedin.com/in/maysondlucas/
 * Text Domain: anuncios
 * */

if (!function_exists('add_action')) {
    echo 'Opa! Eu sou apenas um plugin, não posso ser chamado diretamente!';
    exit;
}

// Setup
define('ANUNCIO_PLUGIN_URL', __FILE__);

// Includes
include('includes/activate.php');
include('includes/init.php');
include('includes/admin/admin_init.php');
include('includes/list-anuncios.php');

// Hooks
register_activation_hook(ANUNCIO_PLUGIN_URL, 'ma_activate_plugin');
add_action('init', 'ma_anuncios_init');
add_action('admin_init', 'ma_anuncios_admin_init');

// Shortcodes
add_shortcode( 'list-anuncios', 'ma_list_anuncios' );



















