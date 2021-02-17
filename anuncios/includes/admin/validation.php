<?php

function ma_admin_validate()
{
    global $typenow;
    global $pagenow;

    if ($typenow == "anuncio" && $pagenow == 'post-new.php') {
        return;
    }

    if (empty($_POST['content'])) {
        wp_die('Conteúdo precisa ser preenchido!');
    }

    if (empty($_POST['tax_input']['post_tag'])) {
        wp_die('Tag precisa ser preenchido!');
    }

    if ($_POST['_thumbnail_id'] == '-1') {
        wp_die('Não possui imagem destacada!');
    }
}