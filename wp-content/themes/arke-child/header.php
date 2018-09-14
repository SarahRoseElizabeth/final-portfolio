<?php
/**
 * Template part for displaying header
 *
 * @link       https://codex.wordpress.org/Template_Hierarchy
 *
 * @package    Arke
 * @copyright  Copyright (c) 2018, Danny Cooper
 * @license    http://opensource.org/licenses/gpl-2.0.php GNU Public License
 */

?>

<link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/favicon.ico" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<header class="site-header clear <?=  is_front_page() ? 'no-background' : '' ?>">
    <div class="site-header-container">
	    <?php if ( is_front_page() ) : ?>
            <div class="site-branding">
                <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 45.02 35.84"><title>Asset 1</title><g id="Layer_2" data-name="Layer 2"><g id="Layer_1-2" data-name="Layer 1"><path d="M5.77,14.58a5.64,5.64,0,0,0,.93.08,6.77,6.77,0,0,0,1-.09,3.75,3.75,0,0,0,1.05-.31,2.28,2.28,0,0,0,.82-.65,1.6,1.6,0,0,0,.33-1,1.46,1.46,0,0,0-.43-1.1,3.51,3.51,0,0,0-1.14-.7,11.09,11.09,0,0,0-1.59-.49C6.2,10.14,5.6,10,5,9.81a17.71,17.71,0,0,1-1.83-.57,6.44,6.44,0,0,1-1.59-.88A4.15,4.15,0,0,1,.43,7,4.07,4.07,0,0,1,0,5.06,4.35,4.35,0,0,1,.55,2.82,5.07,5.07,0,0,1,2,1.24,6.41,6.41,0,0,1,4,.3,8.7,8.7,0,0,1,6.25,0,11,11,0,0,1,8.77.29a6.3,6.3,0,0,1,2.14,1A5,5,0,0,1,12.4,2.91,5.24,5.24,0,0,1,13,5.38H9.39a3,3,0,0,0-.32-1.24,2.2,2.2,0,0,0-.71-.77,3.06,3.06,0,0,0-1-.4,6.92,6.92,0,0,0-1.25-.11A4.41,4.41,0,0,0,5.2,3a2.23,2.23,0,0,0-.81.33,2.07,2.07,0,0,0-.6.58,1.63,1.63,0,0,0-.23.89,1.46,1.46,0,0,0,.19.8,1.66,1.66,0,0,0,.73.56A10.64,10.64,0,0,0,6,6.63l2.54.65c.31.06.74.18,1.29.34a6.19,6.19,0,0,1,1.65.78,5,5,0,0,1,1.42,1.44,4.11,4.11,0,0,1,.6,2.31,5,5,0,0,1-.45,2.13A4.51,4.51,0,0,1,11.74,16a6.48,6.48,0,0,1-2.18,1.11,8.39,8.39,0,0,1-1.6.32" style="fill:#221f1f"/><path d="M23.75.55,30,17.27H26.19l-1.27-3.72H18.67l-1.31,3.72h-3.7L20,.55ZM24,10.81,21.85,4.67h0l-2.18,6.14Z" style="fill:#221f1f"/><path d="M39.64.71a5.48,5.48,0,0,1,2,.36,4.82,4.82,0,0,1,1.54,1,4.22,4.22,0,0,1,1,1.46,4.64,4.64,0,0,1,.34,1.79,4.92,4.92,0,0,1-.62,2.55,3.87,3.87,0,0,1-2,1.64v.05a2.89,2.89,0,0,1,1.12.57,3.13,3.13,0,0,1,.73.92,4.61,4.61,0,0,1,.41,1.15,11.35,11.35,0,0,1,.17,1.27c0,.26,0,.58,0,.94s0,.72.08,1.1a6.88,6.88,0,0,0,.19,1.06,2.42,2.42,0,0,0,.38.86H41.35a6.72,6.72,0,0,1-.38-1.9c0-.73-.11-1.44-.21-2.11A3.35,3.35,0,0,0,40,11.5a2.77,2.77,0,0,0-2-.61H34.3v6.54H30.63V.71ZM38.33,8.27a2.84,2.84,0,0,0,1.9-.56,2.33,2.33,0,0,0,.63-1.83,2.21,2.21,0,0,0-.63-1.76,2.83,2.83,0,0,0-1.9-.55h-4v4.7Z" style="fill:#221f1f"/><path d="M16.42,28.36l3.49-9.23h3.77l6.25,16.71H26.11l-1.26-3.72H19.32m4.57-2.74-2.11-6.13h0l-2.18,6.13Z" style="fill:#221f1f"/><path d="M34.31,19.13v6.41h6.77V19.13h3.67V35.84H41.08V28.63H34.31v7.21H30.64V19.13Z" style="fill:#221f1f"/></g></g></svg>
                </a>
            </div><!-- .site-branding -->
	    <?php endif ?>
        <?php if ( !is_front_page() ) : ?>
            <div class="site-branding">
                <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 45.02 35.84"><title>Asset 1</title><g id="Layer_2" data-name="Layer 2"><g id="Layer_1-2" data-name="Layer 1"><path d="M5.77,14.58a5.64,5.64,0,0,0,.93.08,6.77,6.77,0,0,0,1-.09,3.75,3.75,0,0,0,1.05-.31,2.28,2.28,0,0,0,.82-.65,1.6,1.6,0,0,0,.33-1,1.46,1.46,0,0,0-.43-1.1,3.51,3.51,0,0,0-1.14-.7,11.09,11.09,0,0,0-1.59-.49C6.2,10.14,5.6,10,5,9.81a17.71,17.71,0,0,1-1.83-.57,6.44,6.44,0,0,1-1.59-.88A4.15,4.15,0,0,1,.43,7,4.07,4.07,0,0,1,0,5.06,4.35,4.35,0,0,1,.55,2.82,5.07,5.07,0,0,1,2,1.24,6.41,6.41,0,0,1,4,.3,8.7,8.7,0,0,1,6.25,0,11,11,0,0,1,8.77.29a6.3,6.3,0,0,1,2.14,1A5,5,0,0,1,12.4,2.91,5.24,5.24,0,0,1,13,5.38H9.39a3,3,0,0,0-.32-1.24,2.2,2.2,0,0,0-.71-.77,3.06,3.06,0,0,0-1-.4,6.92,6.92,0,0,0-1.25-.11A4.41,4.41,0,0,0,5.2,3a2.23,2.23,0,0,0-.81.33,2.07,2.07,0,0,0-.6.58,1.63,1.63,0,0,0-.23.89,1.46,1.46,0,0,0,.19.8,1.66,1.66,0,0,0,.73.56A10.64,10.64,0,0,0,6,6.63l2.54.65c.31.06.74.18,1.29.34a6.19,6.19,0,0,1,1.65.78,5,5,0,0,1,1.42,1.44,4.11,4.11,0,0,1,.6,2.31,5,5,0,0,1-.45,2.13A4.51,4.51,0,0,1,11.74,16a6.48,6.48,0,0,1-2.18,1.11,8.39,8.39,0,0,1-1.6.32" style="fill:#221f1f"/><path d="M23.75.55,30,17.27H26.19l-1.27-3.72H18.67l-1.31,3.72h-3.7L20,.55ZM24,10.81,21.85,4.67h0l-2.18,6.14Z" style="fill:#221f1f"/><path d="M39.64.71a5.48,5.48,0,0,1,2,.36,4.82,4.82,0,0,1,1.54,1,4.22,4.22,0,0,1,1,1.46,4.64,4.64,0,0,1,.34,1.79,4.92,4.92,0,0,1-.62,2.55,3.87,3.87,0,0,1-2,1.64v.05a2.89,2.89,0,0,1,1.12.57,3.13,3.13,0,0,1,.73.92,4.61,4.61,0,0,1,.41,1.15,11.35,11.35,0,0,1,.17,1.27c0,.26,0,.58,0,.94s0,.72.08,1.1a6.88,6.88,0,0,0,.19,1.06,2.42,2.42,0,0,0,.38.86H41.35a6.72,6.72,0,0,1-.38-1.9c0-.73-.11-1.44-.21-2.11A3.35,3.35,0,0,0,40,11.5a2.77,2.77,0,0,0-2-.61H34.3v6.54H30.63V.71ZM38.33,8.27a2.84,2.84,0,0,0,1.9-.56,2.33,2.33,0,0,0,.63-1.83,2.21,2.21,0,0,0-.63-1.76,2.83,2.83,0,0,0-1.9-.55h-4v4.7Z" style="fill:#221f1f"/><path d="M16.42,28.36l3.49-9.23h3.77l6.25,16.71H26.11l-1.26-3.72H19.32m4.57-2.74-2.11-6.13h0l-2.18,6.13Z" style="fill:#221f1f"/><path d="M34.31,19.13v6.41h6.77V19.13h3.67V35.84H41.08V28.63H34.31v7.21H30.64V19.13Z" style="fill:#221f1f"/></g></g></svg>
                </a>
            </div><!-- .site-branding -->
        <?php endif ?>
        <nav id="site-navigation" class="menu-1">
                <?php
                wp_nav_menu( array(
                    'theme_location' => 'menu-1',
                    'menu_id'        => 'site-menu',
                    'depth'          => 1,
                    'fallback_cb'    => false,
                ) );
                ?>
        </nav><!-- .menu-1 -->
    </div>
</header><!-- .site-header -->

