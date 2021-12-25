<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset') ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php bloginfo('name') ?></title>
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url') ?>">
    <?php wp_head() ?>
</head>

<body>
    <header>
        <h1><?php bloginfo('name') ?></h1>
        <span><?php bloginfo('description') ?></span>
    </header>
    <nav class="main-nav">
        <div class="container">
            <?php
            $args = array(
                'theme_location' => 'primary'
            )
            ?>
        </div>
        <?php wp_nav_menu($args); ?>
    </nav>
    <div class="contaner">
        <div class="main">
            <?php if (have_posts()) : ?>
                <?php while (have_posts()) : the_post(); ?>
                    <article class="post">
                        <h3>
                            <a href="<?php the_permalink(); ?>"> <?php the_title() ?></a>
                        </h3>
                        <div class="meta">
                            |Created By
                            <a href="<?php get_author_posts_url(get_the_author_meta('ID')); ?>">
                                <?php the_author() ?>
                            </a>
                            on
                            <?php the_time('F j, Y g:i a') ?>
                        </div>
                        <?php if (has_post_thumbnail()) : ?>
                            <div class="post-thumbnail">
                                <?php the_post_thumbnail(); ?>
                            </div>
                        <?php endif; ?>
                        <?php the_excerpt() ?>
                        <br>
                        <a class="button" href="<?php the_permalink(); ?>">
                            Read More
                        </a>
                    </article>

                <?php endwhile; ?>
            <?php else :  ?>
                <?php echo wpautop('Sory, No posts were found'); ?>
            <?php endif; ?>
        </div>
        <div class="sidebar">
            <?php if (is_active_sidebar('sidebar')) : ?>
                <?php dynamic_sidebar('sidebar') ?>
            <?php endif; ?>
        </div>
        <div class="clr"></div>
    </div>

    <?php get_footer(); ?>
</body>

</html>