<?php 
$home = get_page_by_title( 'home');
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="<?php bloginfo('name'); ?><?php wp_title(' - '); ?><?php the_field('descricao_seo'); ?>"
    <meta property="og:type" content="website">
    <meta property="og:title" content="<?php bloginfo('name'); ?><?php wp_title(' - '); ?>">
    <meta property="og:description" content="<?php bloginfo('name'); ?><?php wp_title(' - '); ?><?php the_field('descricao_seo'); ?>">
    <meta property="og:url" content="<?php bloginfo('url'); ?>">
    <meta property="og:image" content="<?php echo get_stylesheet_directory_uri(); ?>/og-imagem.png">

    

    <title><?php bloginfo('name'); ?> <?php wp_title(' - '); ?> <?php the_field('num_telefone', $home); ?></title>


    <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/css/materialize.min.css">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/js/materialize.min.js"></script>

    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/favicon.ico" sizes="32x32">
    
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/style.css">

    <?php wp_head(); ?>
</head>

<body>


    <header class="header" id="home">

        <nav class="menu">
            <div class="nav-wrapper">
                <!--<a href="#" class="brand-logo">Web Zone</a>-->

                <a href="#" class="sidenav-trigger" data-target="mobile-nav">
                    <i class="material-icons">menu</i>
                </a>
                <div class="container">
                    <ul class="right hide-on-med-and-down ">
                        <li><a href="#home">Home</a></li>
                        <li><a href="#especialidades">Especialidades</a></li>
                        <li><a href="#sobre">Sobre nós</a></li>
                        <li><a href="#contato">Contato</a></li>
                    </ul>
                </div>
            </div>
        </nav>


        <ul class="sidenav" id="mobile-nav">
            <li><a href="#home">Home</a></li>
            <li><a href="#especialidades">Especialidades</a></li>
            <li><a href="#sobre">Sobre nós</a></li>
            <li><a href="#contato">Contato</a></li>
        </ul>

        <div class="container">
            <img src="<?php the_field('logo', $home); ?>" alt="humam med" class="grid-5 ">
        </div>


        <!--container-->


    </header>
    <!--header-->