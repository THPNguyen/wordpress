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
    <div class="main">
        <?php if (have_posts()) : ?>
            <?php while (have_posts()) : the_post(); ?>
                <article class="post">
                    <h3>
                        <a href="<?php the_permalink(); ?>"> <?php the_title() ?></a>
                    </h3>
                    <div class="meta">
                        |Created By <?php the_author() ?> on <?php the_time('F j, Y g:i a') ?>
                    </div>
                    <?php the_content() ?>
                </article>
                <br>
                <a class="button" href="<?php the_permalink(); ?>">
                    Read More
                </a>
            <?php endwhile; ?>
        <?php else :  ?>
            <?php echo wpautop('Sory, No posts were found'); ?>
        <?php endif; ?>
    </div>
    <?php get_footer(); ?>
</body>

</html>