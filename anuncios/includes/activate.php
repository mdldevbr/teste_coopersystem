<?php
function ma_activate_plugin() {
    if (version_compare(get_bloginfo('version'), '5.0', '<')) {
        wp_die(__('Você precisa atualizar o WordPress para usar este plugin', 'anuncios'));
    }
}