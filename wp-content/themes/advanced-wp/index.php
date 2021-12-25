<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="<? bloginfo('charset'); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php bloginfo('name'); ?></title>
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
    <?php wp_head(); ?>
</head>

<body>
    <header>
        <div class="container">
            <h1>
                <a href="index.html"><?php bloginfo('name') ?></a>
                <small><?php bloginfo('description') ?> </small>
            </h1>
            <div class="h_right">
                <form action="<?php esc_url(home_url('/')) ?>" method="get">
                    <input type="text" name="s" placeholder="Search...">
                </form>
            </div>
        </div>
    </header>
    <nav class="nav main-nav">
        <div class="container">
            <?php
            $args = array(
                'theme_location' => 'primary'
            );
            ?>
            <?php wp_nav_menu($args); ?>
        </div>
    </nav>
    <div class="container content">
        <div class="main block">
            <article class="post">
                <h2>Blog post 1</h2>
                <p class="meta">Posted at 11:00 on May 9 by Admin</p>
                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
                industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and
                scrambled it to make a type specimen book. It has
                survived not only five centuries, but also the leap into electronic typesetting, remaining essentially
                unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum
                passages, and more recently with
                desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum
            </article>
            <article class="post">
                <h2>Blog post 2</h2>
                <p class="meta">Posted at 11:00 on May 9 by Admin</p>
                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
                industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and
                scrambled it to make a type specimen book. It has
                survived not only five centuries, but also the leap into electronic typesetting, remaining essentially
                unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum
                passages, and more recently with
                desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum
            </article>
            <article class="post">
                <h2>Blog post 3</h2>
                <p class="meta">Posted at 11:00 on May 9 by Admin</p>
            </article>
            <a href="#">Read More</a>
        </div>
        <div class="side">
            <div class="block">
                <h3>Sidebar Head</h3>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                    Nam vel diam hendrerit erat fermentum aliquet sed eget arcu.>Lorem ipsum dolor sit amet, consectetur
                    adipiscing elit.
                    Nam vel diam hendrerit erat fermentum aliquet sed eget arcu.
                </p>
                <a class="button">More</a>
            </div>
        </div>
    </div>
    <footer class="main-footer">
        <div class="container">
            <div class="f_left">
                <p> &copy; 2021 - Advanced WP Theme</p>
            </div>
            <div class="f_right">
                <ul>
                    <li>
                        <a href="index.html">Home</a>
                    </li>
                    <li>
                        <a href="about.html">About</a>
                    </li>
                    <li>
                        <a href="#">Services</a>
                    </li>
                </ul>
            </div>
        </div>
    </footer>
    <?php wp_footer(); ?>
</body>

</html>

</html>