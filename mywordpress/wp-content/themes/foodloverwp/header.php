<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php wp_title('|', true, 'right'); ?></title>
    <?php wp_head(); ?>
    <!-- Bootstrap and Font Awesome CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css">
   
    
</head>
<body <?php body_class(); ?>>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg  position-absolute w-100" style="z-index:10;">
    <div class="container">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="navbar-collapse collapse" id="navbarNav">
            <!-- Left Side Menu -->
            <?php
            wp_nav_menu( array(
                'theme_location' => 'left_menu',
                'container' => false,
                'menu_class' => 'navbar-nav me-auto',
                'fallback_cb' => false,
            ) );
            ?>

            <!-- Centered logo -->
            <a class="navbar-brand mx-auto" href="<?php echo home_url(); ?>">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.png" alt="Site Logo" width="80" height="70">
            </a>

            <!-- Right Side Menu -->
            <?php
            wp_nav_menu( array(
                'theme_location' => 'right_menu',
                'container' => false,
                'menu_class' => 'navbar-nav ms-auto',
                'fallback_cb' => false,
            ) );
            ?>
        </div>
    </div>
</nav>
