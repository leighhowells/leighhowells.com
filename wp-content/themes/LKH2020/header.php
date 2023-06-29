<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>"/>
    <meta name="viewport" content="width=device-width"/>
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?><?php $image = get_field('banner_image');  if (!empty($image)): ?>
    style="background-image: url('<?php echo esc_url($image['url']); ?>');" <?php endif; ?>  >
<div class="image-darkener"></div>
    <header role="banner" id="header">
        <div class="image-banner">
            <div class="page-width">
                <div id="search"><?php get_search_form(); ?></div>
                <?php wp_nav_menu(array('theme_location' => 'main-menu')); ?>
                <a class="logo" href="/">
                    <svg width="88px" height="88px" viewBox="0 0 88 88">
                        <g id="logo" transform="translate(-1108.000000, -41.000000)">
                            <path d="M1151.2321,128.993161 C1126.93534,128.569059 1107.58274,108.528848 1108.00684,84.2320965 C1108.43094,59.9353448 1128.47115,40.582738 1152.7679,41.0068394 C1177.06466,41.4309408 1196.41726,61.4711518 1195.99316,85.7679035
                             C1195.56906,110.064655 1175.52885,129.417262 1151.2321,128.993161 Z M1151.49609,125.380791 C1173.68491,125.768098 1191.98647,108.094484 1192.37378,85.9056701 C1192.76109,63.7168558 1175.08747,45.4152932 1152.89866,45.027986 C1130.70984,44.6406788 1112.40828,62.3142924 1112.02097,84.5031067 C1111.63367,106.691921 1129.30728,124.993484 1151.49609,125.380791 Z M1116.19577,91.2858088 C1113.33724,75.0166614 1121.68213,59.3723921 1135.65791,52.3628899 C1136.01558,52.7046085 1136.23567,53.1483505 1136.32198,53.6396013 C1136.42388,54.219549 1136.56837,55.4646856 1136.53099,57.7884695 L1135.37636,90.9563749 C1135.24187,94.4185517 1135.01781,96.1026421 1134.35274,96.9678019 C1133.68768,97.8329617 1132.73006,98.301404 1127.95872,99.8931853 L1127.91256,101.321552 C1131.90859,100.390198 1136.2903,99.5400921 1138.23538,99.195903 C1141.98146,98.5330203 1155.04617,96.3706654 1161.88997,95.1596296 C1162.36679,95.0752548 1162.7782,94.9478775 1163.13609,94.7770013 L1163.07275,106.64146 C1163.05641,112.677185 1161.22193,116.98809 1160.55687,117.85325 C1159.8918,118.718409 1159.27546,120.441392 1155.68451,121.14206 C1136.91332,123.219897 1119.53149,110.270888 1116.19577,91.2858088 Z M1167.70606,116.008125 C1167.55323,115.141348 1167.51454,113.658627 1167.61105,111.258339 L1168.77608,78.2829472 C1168.92697,74.0856174 1169.2062,73.1426553 1169.79893,72.293366 C1170.4382,71.2869164 1171.5012,70.5781364 1175.68608,69.4678266 L1175.73213,68.0446396 C1171.88183,68.946999 1168.07807,69.692198 1166.13381,70.0350306 C1164.18956,70.3778632 1160.07228,71.0293894 1156.14556,71.4983602 L1156.09951,72.9215473 C1158.58604,72.7065265 1160.44996,72.7502461 1161.63199,73.1376349 C1162.64453,73.4059559 1163.21668,74.1243166 1163.36951,74.9910937 C1163.4714,75.5689451 1163.6159,76.8095768 1163.57866,79.1249359 L1163.07852,92.1941681 C1157.04072,93.3318712 1151.84269,94.3425772 1147.48444,95.226286 C1145.47802,95.6331199 1143.51118,95.8524172 1142.19787,95.5626548 C1141.35482,95.4134016 1140.83361,94.9839667 1140.66804,94.0449581 C1140.51521,93.178181 1140.37904,91.5636947 1140.48828,89.235638 L1141.50609,61.2822377 C1141.65698,57.0849079 1142.0129,51.4667953 1143.30444,50.3844585 C1144.59597,49.3021218 1145.36524,49.2006807 1145.45466,49.1849135 C1165.14067,45.7136582 1183.92188,58.9075093 1187.40367,78.6542047 C1190.23499,94.7118076 1182.07755,110.157859 1168.34514,117.235277 C1167.97555,116.942957 1167.79679,116.522672 1167.70606,116.008125 Z"
                                    id="logo" transform="translate(1152.000000, 85.000000) rotate(-1.000000) translate(-1152.000000, -85.000000) "></path>
                        </g>
                    </svg>
                </a>
                
                    <?php if (is_front_page()) : ?>
                        <div class="banner-text">
                            <h1><?php bloginfo('title'); ?></h1>
                            <p class="home-subtitle"><?php bloginfo('description'); ?></p>
                        </div>
                    <?php else : ?>

                    <?php endif; ?>

            </div>
        </div>
    </header>

