<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="icon" href="<?php echo get_template_directory_uri(  )?>/favicon.jpg" type="image/png">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">


    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/css/main.css">

    <title><?php bloginfo('name'); wp_title('-'); ?></title>
    
    <meta name="title" content="Landing Page - Atratis" />
    <meta name="description" content="Este projeto foi criado com o objeto de testar as capacidades do candidato a respeito de algumas tecnologias, como, wordpress, gulp, bootstrap grid e muito mais." />

    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website" />
    <meta property="og:url" content="https://atratis.com" />
    <meta property="og:title" content="Landing Page - Atratis" />
    <meta property="og:description" content="Este projeto foi criado com o objeto de testar as capacidades do candidato a respeito de algumas tecnologias, como, wordpress, gulp, bootstrap grid e muito mais." />
    <meta property="og:image" content="https://metatags.io/images/meta-tags.png" />

    <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image" />
    <meta property="twitter:url" content="https://atratis.com" />
    <meta property="twitter:title" content="Landing Page - Atratis" />
    <meta property="twitter:description" content="Este projeto foi criado com o objeto de testar as capacidades do candidato a respeito de algumas tecnologias, como, wordpress, gulp, bootstrap grid e muito mais." />
    <meta property="twitter:image" content="https://metatags.io/images/meta-tags.png" />

    <?php wp_head( )?>
</head>

<body>

    <header class="menu">
        <nav class="navbar navbar-expand-lg fixed-top">
            <div class="container">

                <a href="#">
                    <img src="<?php the_field('image_logo') ?>" id="logo-header" alt="atratis-logo">
                </a>

                <button class="navbar-toggler" id="menu-button" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon "></span>
                </button>

                <div class="collapse navbar-collapse align-nav nav-backgraund-responsive" id="navbarNav">
                    
                        <?php
                            $args = array(
                            'menu' => 'Header Principal',
                            'theme_location' => 'header-principal',
                            'container' => false,
                            'menu_class' => 'navbar-nav'
                            );
                            wp_nav_menu( $args );
                        ?>
                </div>
        </nav>
    </header>