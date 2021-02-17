<?php

function ma_list_anuncios($atts)
{
    ob_start();
    $query = new WP_Query(array(
        'post_type' => 'anuncio',
        'color' => 'blue',
        'posts_per_page' => -1,
        'order' => 'ASC',
        'orderby' => 'title',
    ));
    if ($query->have_posts()) { ?>
        <div class="home-slider">
            <div class="container">
                <?php
                while ($query->have_posts()) : $query->the_post();
                    $imgurl = get_the_post_thumbnail_url(get_the_ID(), 'full');
                    ?>
                    <div style="border: solid black 1px; margin: 5px; padding: 10px; text-align: center">
                        <?php the_post_thumbnail(); ?>
                        <h1 style="text-align: center; font-size: 40px; margin: 30px 0;"><?php the_title(); ?></h1>
                        <p style="margin-bottom: 30px"><?php the_tags(); ?></p>
                        <p style="margin-bottom: 30px"><?php the_content(); ?></p>
                    </div>

                <?php endwhile;
                wp_reset_postdata(); ?>
            </div>
        </div>
        <?php $myvariable = ob_get_clean();
        return $myvariable;
    }
}