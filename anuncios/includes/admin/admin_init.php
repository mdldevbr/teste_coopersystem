<?php
include 'validation.php';

function ma_anuncios_admin_init() {
    add_action('save_post', 'ma_admin_validate');
}