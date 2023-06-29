<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>"/>
    <meta name="viewport" content="width=device-width"/>
    <?php wp_head(); ?>

    <style>
        body {
            display: none;
        }

        .header {
            background: black url('<?php echo get_template_directory_uri(); ?>/img/jungle2020.gif') center top no-repeat;
            background-size: cover;
            height: 25vh;
            min-height: 200px;
            margin: 0 0 0 0;
            padding: 0;
            position: relative
        }

        .about .header {
            background: black center top no-repeat
        }

        .home .header, .about .header {
            height: 50vh;
            min-height: 360px
        }

        #topbar {
            z-index: 999;
            position: fixed;
            background: rgba(20, 0, 0, .5);
            color: white;
            float: left;
            width: 100%;
            padding: 0 0 0 0
        }

        #topbar .container {
            margin: 0 auto 0 auto
        }

        #topbar h1 {
            margin: 0;
            font-size: 2.8em
        }

        #topbar h1 a {
            width: 150px;
            text-decoration: none;
            color: white;
            background: black;
            padding: 5px 20px 0 20px;
            letter-spacing: -1px;
            text-align: center;
            line-height: 1.8em;
            float: left
        }

        #topbar h1 a:hover {
            background: white;
            color: black
        }

        #topbar h2 {
            color: white;
            font-weight: 600;
            font-size: .9em;
            margin: 0;
            padding: 22.5px 0 0 0;
            line-height: 1.6em
        }

        #topbar h2 a {
            color: white;
            text-decoration: none
        }

        #topbar h3 {
            color: white;
            font-size: .8em;
            margin: 0;
            padding: 0;
            font-weight: 400;
            line-height: 1em
        }

        #topbar h3 a {
            color: white;
            text-decoration: underline
        }

        .topbarRight {
            float: right;
            text-align: right
        }


        .page-id-108 .header {
            background: black url('<?php echo get_template_directory_uri(); ?>/img/bridge.gif') center top no-repeat; background-size: cover;
        }

        footer {
            background: #000 url('<?php echo get_template_directory_uri(); ?>/img/footer.gif') center bottom fixed no-repeat;
        }
    </style>

    
</head>

<body <?php body_class(); ?>  >


<header role="banner" class="header">

    <div id="topbar">
        <div class="page-width">
            <div class="topbarRight">
                <a class="logo" href="/"><?php readfile(get_theme_file_uri() . '/img/logo.svg'); ?></a>
                <h2><a href="/about">LEIGH KENTON HOWELLS</a></h2>
                <h3>Explorer of design and sound. <a class="more-link" href="/about">MORE</a></h3>

            </div>
            <h1><a href="/">Leigh</a></h1>
        </div>
    </div>

    <div id="herocontain">
        <div id="hero">
            <img src="<?php echo get_template_directory_uri(); ?>/img/me-home.png" id="heroimage" alt="leigh">
        </div>
    </div>


    <nav role="navigation" class="main">
        <nav class="main">
            <?php wp_nav_menu(array('theme_location' => 'main-menu')); ?>
        </nav>
    </nav>
   

</header>




