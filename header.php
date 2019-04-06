<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package HW-18
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"
          integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
</head>
<body>
<div class="top-section">
    <header class="header">
        <div class="container">
            <nav class="navbar navbar-expand-lg navi">
                <div>
                    <div class="logo-btn">
                        <button class="navbar-toggler" type="button" data-toggle="collapse"
                                data-target="#navbarNavDropdown"
                                aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                            <i class="fas fa-bars"></i>
                        </button>
                    </div>
                    <div class="collapse navbar-collapse nav-list-div" id="navbarNavDropdown">
                        <?php
                        wp_nav_menu(array(
                            'theme_location' => 'head_menu',
                            'depth' => 2,
                            'container' => 'div',
                            'menu_class' => 'nav navbar-nav ml-auto',
                            'fallback_cb' => 'WP_Bootstrap_Navwalker::fallback',
                            'walker' => new WP_Bootstrap_Navwalker()
                        ));
                        ?>
                    </div>
                </div>
                <a class="logo" href="<?php echo get_site_url(); ?>"> <img src="<?php echo S_IMG_DIR; ?>/logo.png"
                                                                           alt="Logo"></a>
                <i class="fas fa-search"></i>
            </nav>
        </div>
    </header>
</div>
