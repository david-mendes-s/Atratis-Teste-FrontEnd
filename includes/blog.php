<section class="blog">
        <div class="container">
            <div class="row">
                <div class="text">
                    <div class="line"></div>
                    <h4><?php the_field('titulo_section_blog');?></h4>
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <div class="list-blog">
                    <?php
$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
$config = array(
    'posts_per_page' => 4,
    'post_type' => 'post',
    'order' => 'ASC',
    'paged' => $paged
);

$query_posts = new WP_Query($config);

if ($query_posts->have_posts()) :
    while ($query_posts->have_posts()) : $query_posts->the_post(); ?>

        <div class="item-blog">
            <a href="<?php the_permalink(); ?>">
                <div class="card-blog">
                    <div class="image">
                        <?php the_post_thumbnail(); ?>
                    </div>
                    <div class="text">
                        <h5><?php the_title(); ?></h5>
                        <p><?php the_content(); ?></p>

                        <div class="button-align">
                            <button>Saiba mais</button>
                        </div>
                    </div>
                </div>
            </a>
        </div>

    <?php endwhile;endif;wp_reset_postdata(); ?>

                    </div>
                </div>
            </div>
        </div>

    </section>