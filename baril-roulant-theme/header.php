<!DOCTYPE html>
<html lang="fr">

<head>
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-ZBTM2V6YCK"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-ZBTM2V6YCK');
</script>

    <meta charset="<?php bloginfo('charset'); ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title><?php bloginfo('name'); ?></title>

    <link rel="stylesheet" href="<?php bloginfo('template_url') ?>/styles/main.css">
    <script src="<?php bloginfo('template_url') ?>/scripts/main.js" defer></script>

    <?php wp_head(); ?>
</head>

<body data-component="Cursor">
    <div class="site-container" data-component="Scrolly">
        <div class="cursor"></div>
        <header class="header" data-component="Header" data-scroll-limit=".1" data-auto-hide="true">
            <div class="header-wrapper">
                <a href="<?php bloginfo('url'); ?>"><img class="logo"
                        src="<?php echo the_field('options_logo', 'option') ?>" alt="logo" /></a>
                <?php wp_nav_menu(array(
                        'theme_location' => 'menu_principal',
                        'menu_class' => 'header__menu')
                        ); ?>
                <button class="header__toggle js-toggle">
                    <span></span>
                    <span></span>
                    <span></span>
                </button>
            </div>
        </header>