<!DOCTYPE html>
<html>
<head>
    <!-- charset is a computer alphabet: utf-8 -->
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <!-- function that generates the title for the page -->
    <title><?php wp_title( '|', true, 'right' ); ?> <?php bloginfo( 'name' ); ?></title>
    <!-- URL of the style.css generate by WP -->
    <!-- <link rel="stylesheet" href="<?php echo esc_url( get_stylesheet_uri() ); ?>" type="text/css" /> -->
    <!-- require function before the closing of the head tag -->
    <?php wp_head(); ?>
</head>

<body>
    <header>
        <!-- As a link -->
        <nav class="navbar">
            <div class="container-fluid">
                <a class="navbar-brand" href="/"><?php bloginfo('name'); ?></a>
                <div><?php wp_nav_menu(['theme_location' => 'header-menu']); ?></div>
                <div><?php bloginfo( 'description' ); ?></div>
            </div>
        </nav>
    </header>

</body>
</html>

