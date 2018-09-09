<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 *
 * @link       https://codex.wordpress.org/Template_Hierarchy
 *
 * @package    Arke
 * @copyright  Copyright (c) 2018, Danny Cooper
 * @license    http://opensource.org/licenses/gpl-2.0.php GNU Public License
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1">
        <meta property="og:title" content="Sarah Bartley Design Portfolio" />
        <meta property="og:description" content="sarahbartley.design is the homepage of Sarah Bartley, a visual interaction designer. Features identity & branding, UI/UX design, web design, and development." />
        <meta property="og:image" content="<?php echo get_theme_file_uri('/images/homepage.png')?>" />
		<link rel="profile" href="http://gmpg.org/xfn/11">
        <link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/favicon.ico" />
		<?php wp_head(); ?>
	</head>
	<body <?php body_class(); ?>>
        <?php get_template_part( 'header' ); ?>

        <?php if ( is_front_page() ) : ?>
        <div class="artwork-svg-container">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 383.37 375.85"><title>Asset 1</title><g id="Layer_2" data-name="Layer 2"><g id="Layer_1-2" data-name="Layer 1"><path id="S" d="M66.79,90.19a24.47,24.47,0,0,0,4,.33,31.57,31.57,0,0,0,4.58-.36A16.08,16.08,0,0,0,80,88.78,9.91,9.91,0,0,0,83.56,86,7,7,0,0,0,85,81.45a6.37,6.37,0,0,0-1.89-4.79,15,15,0,0,0-4.94-3.06,50,50,0,0,0-6.93-2.14q-3.87-.92-7.84-2a68.57,68.57,0,0,1-8-2.49,27.6,27.6,0,0,1-6.93-3.82,18.12,18.12,0,0,1-4.94-5.86,17.77,17.77,0,0,1-1.88-8.51A19,19,0,0,1,44.08,39a21.73,21.73,0,0,1,6.27-6.88,27.3,27.3,0,0,1,8.76-4.07,37,37,0,0,1,9.78-1.33,46.24,46.24,0,0,1,11,1.28,27.41,27.41,0,0,1,9.33,4.12,20.93,20.93,0,0,1,6.47,7.29A22.41,22.41,0,0,1,98,50.17H82.54a12.74,12.74,0,0,0-1.37-5.4,9,9,0,0,0-3.11-3.37,13.27,13.27,0,0,0-4.43-1.73,27.29,27.29,0,0,0-5.45-.51,18.78,18.78,0,0,0-3.87.41A10.24,10.24,0,0,0,60.79,41a8.87,8.87,0,0,0-2.6,2.54,6.85,6.85,0,0,0-1,3.88A6.47,6.47,0,0,0,58,50.88a7.28,7.28,0,0,0,3.21,2.45,41.72,41.72,0,0,0,6.62,2.24c2.82.74,6.5,1.7,11.06,2.85,1.35.27,3.24.76,5.65,1.48a27,27,0,0,1,7.18,3.41,21.59,21.59,0,0,1,6.17,6.27,17.83,17.83,0,0,1,2.6,10,22.3,22.3,0,0,1-1.94,9.28,20.1,20.1,0,0,1-5.76,7.38,27.37,27.37,0,0,1-9.47,4.84,37.91,37.91,0,0,1-7,1.41" style="fill:#221f1f"/><g id="A"><path d="M145.06,29.14l27.2,72.75H155.65l-5.5-16.2H122.94l-5.7,16.2h-16.1l27.51-72.75ZM146,73.77,136.8,47.08h-.2l-9.48,26.69Z" style="fill:#221f1f"/></g><g id="R"><path d="M214.21,29.82A23.44,23.44,0,0,1,223,31.4a20.46,20.46,0,0,1,6.73,4.33A18.92,18.92,0,0,1,234,42.1a20.5,20.5,0,0,1,1.48,7.79A22,22,0,0,1,232.81,61,17,17,0,0,1,224,68.13v.21a12.29,12.29,0,0,1,4.89,2.49,13.76,13.76,0,0,1,3.16,4,18.26,18.26,0,0,1,1.78,5,43.3,43.3,0,0,1,.77,5.5c.07,1.16.13,2.52.2,4.08s.19,3.16.36,4.79a32.57,32.57,0,0,0,.81,4.63,10.72,10.72,0,0,0,1.69,3.72h-16A27.86,27.86,0,0,1,220,94.32c-.21-3.19-.51-6.25-.92-9.17-.54-3.8-1.7-6.59-3.46-8.36S211,74.14,207,74.14H191v28.43H175V29.82ZM208.5,62.73q5.5,0,8.26-2.44t2.75-7.95c0-3.53-.92-6.1-2.75-7.69s-4.59-2.4-8.26-2.4H191V62.73Z" style="fill:#221f1f"/></g><path id="A-2" data-name="A" d="M113.14,150.17,128.34,110h16.4l27.2,72.75h-16.6l-5.51-16.2H125.78m19.88-11.92-9.17-26.7h-.21l-9.47,26.7Z" style="fill:#221f1f"/><g id="H"><path d="M191,110V137.9h29.45V110h16v72.75h-16V151.35H191v31.38H175V110Z" style="fill:#221f1f"/></g><g id="B"><path d="M278.29,110a45.37,45.37,0,0,1,9.47.91,20.65,20.65,0,0,1,7.34,3,13.93,13.93,0,0,1,4.74,5.55,19.55,19.55,0,0,1,1.68,8.56,15.88,15.88,0,0,1-2.5,9.17,18,18,0,0,1-7.38,6,17.47,17.47,0,0,1,10,6.78,22.24,22.24,0,0,1,1.17,21.19,18.48,18.48,0,0,1-5.75,6.58,25.88,25.88,0,0,1-8.26,3.77,37.37,37.37,0,0,1-9.52,1.22H244.05V110Zm-2,29.44a11.49,11.49,0,0,0,7-2q2.75-2,2.75-6.63a8.33,8.33,0,0,0-.92-4.17,6.73,6.73,0,0,0-2.44-2.55,10.38,10.38,0,0,0-3.52-1.28,24,24,0,0,0-4.12-.35h-15v17Zm.92,30.88a21.74,21.74,0,0,0,4.48-.46,11.15,11.15,0,0,0,3.77-1.53,7.69,7.69,0,0,0,2.6-2.9,10.1,10.1,0,0,0,1-4.69c0-3.74-1.06-6.4-3.16-8a13.53,13.53,0,0,0-8.36-2.39H260.05v20Z" style="fill:#221f1f"/></g><g id="A-3" data-name="A"><path d="M81.92,189.45l27.2,72.75H92.51L87,246H59.81L54.1,262.2H38l27.51-72.75Zm.92,44.63-9.18-26.7h-.2L64,234.08Z" style="fill:#221f1f"/></g><g id="L"><path d="M260.89,189.45v59.3h35.46V262.2H244.89V189.45Z" style="fill:#221f1f"/></g><g id="E"><path d="M166.48,272.32v13.45H128.06v15.59h35.26v12.43H128.06v17.83h39.23v13.45H112.07V272.32Z" style="fill:#221f1f"/></g><path id="R-2" data-name="R" d="M171.43,253.84c-.17-1.63-.29-3.22-.35-4.79s-.14-2.91-.21-4.07a43.27,43.27,0,0,0-.76-5.5,18.88,18.88,0,0,0-1.78-5,14,14,0,0,0-3.16-4,12.43,12.43,0,0,0-4.89-2.5v-.2a17.62,17.62,0,0,0,8.13-6.06l0,0-24.78-32.22H111.27V262.2h16V233.77h16c4,0,6.89.88,8.66,2.65s2.92,4.55,3.47,8.36c.4,2.92.71,6,.91,9.17a28.51,28.51,0,0,0,1.63,8.25h16a10.61,10.61,0,0,1-1.68-3.72A31.34,31.34,0,0,1,171.43,253.84ZM153,219.91q-2.74,2.44-8.25,2.45H127.26V201.88h17.53q5.51,0,8.25,2.39c1.84,1.6,2.75,4.17,2.75,7.7S154.88,218.28,153,219.91Z" style="fill:#221f1f"/><polygon id="Y" points="217.35 284.9 207.85 301.05 190.83 272.32 172.9 272.32 199.59 316.75 199.59 345.07 215.59 345.07 215.59 317.15 227.23 297.83 217.35 284.9" style="fill:#221f1f"/><polygon id="T" points="176.77 189.45 176.77 202.9 198.57 202.9 198.57 260.77 199.66 262.2 214.57 262.2 214.57 202.9 236.37 202.9 236.37 189.45 176.77 189.45" style="fill:#221f1f"/><polyline id="line" points="0.4 0.3 66.79 90.19 237.65 310.8 291.71 375.53" style="fill:none;stroke:#f2f2f2;stroke-miterlimit:10"/><g id="tagline"><path d="M247.48,280.93l-2.77-8.57h1.93l1.91,6h0l1.93-6h1.94l-2.84,8.57Z"/><path d="M255.07,272.36v8.57h-1.89v-8.57Z"/><path d="M258.16,278.82a1.31,1.31,0,0,0,.42.48,1.66,1.66,0,0,0,.6.28,2.84,2.84,0,0,0,.72.09,5.29,5.29,0,0,0,.54,0,2,2,0,0,0,.54-.17,1.14,1.14,0,0,0,.42-.33.82.82,0,0,0,.17-.53.73.73,0,0,0-.22-.56,1.59,1.59,0,0,0-.58-.36,6.62,6.62,0,0,0-.82-.26l-.92-.24a7.32,7.32,0,0,1-.94-.29,3.59,3.59,0,0,1-.82-.45,2.06,2.06,0,0,1-.58-.69,2.08,2.08,0,0,1-.22-1,2.25,2.25,0,0,1,.28-1.15,2.73,2.73,0,0,1,.74-.81,3.48,3.48,0,0,1,1-.48,4.6,4.6,0,0,1,1.15-.15,5.43,5.43,0,0,1,1.29.15,3.23,3.23,0,0,1,1.1.48,2.42,2.42,0,0,1,.76.86,2.62,2.62,0,0,1,.29,1.27h-1.83a1.47,1.47,0,0,0-.16-.64,1,1,0,0,0-.37-.4,1.61,1.61,0,0,0-.52-.2,3.16,3.16,0,0,0-.64-.06,2.49,2.49,0,0,0-.46.05,1.15,1.15,0,0,0-.41.17,1.11,1.11,0,0,0-.31.3.9.9,0,0,0,0,.86.87.87,0,0,0,.38.29,5,5,0,0,0,.78.26l1.3.34c.16,0,.38.09.67.17a3.56,3.56,0,0,1,.84.4,2.71,2.71,0,0,1,.73.74,2.13,2.13,0,0,1,.3,1.18,2.67,2.67,0,0,1-.22,1.1,2.58,2.58,0,0,1-.68.87,3.37,3.37,0,0,1-1.12.57,5.48,5.48,0,0,1-1.54.2,5.65,5.65,0,0,1-1.37-.17,3.47,3.47,0,0,1-1.18-.55,2.67,2.67,0,0,1-.81-.95,2.8,2.8,0,0,1-.29-1.37H258A1.65,1.65,0,0,0,258.16,278.82Z"/><path d="M270.81,280.27a4.7,4.7,0,0,1-5.38,0,3.26,3.26,0,0,1-1-2.59v-5.33h1.89v5.33a3.82,3.82,0,0,0,.06.68,1.4,1.4,0,0,0,.25.6,1.5,1.5,0,0,0,.53.42,2.34,2.34,0,0,0,.92.16,1.75,1.75,0,0,0,1.39-.45,2.12,2.12,0,0,0,.39-1.41v-5.33h1.88v5.33A3.22,3.22,0,0,1,270.81,280.27Z"/><path d="M277.67,272.36l3.21,8.57h-2l-.65-1.91h-3.2l-.67,1.91h-1.9l3.24-8.57Zm.11,5.26-1.08-3.15h0l-1.12,3.15Z"/><path d="M283.51,272.36v7h4.17v1.59h-6.06v-8.57Z"/><path d="M297.88,277.26v1.28h-2.39v2.39h-1.28v-2.39h-2.39v-1.28h2.39v-2.39h1.28v2.39Z" style="fill:#ff00cf"/><path d="M304.49,272.36v8.57h-1.88v-8.57Z"/><path d="M308,272.36l3.58,5.75h0v-5.75h1.77v8.57H311.5l-3.56-5.74h0v5.74h-1.76v-8.57Z"/><path d="M314.37,273.94v-1.58h7v1.58h-2.57v7h-1.88v-7Z"/><path d="M328.78,272.36v1.58h-4.52v1.84h4.15v1.46h-4.15v2.1h4.62v1.59h-6.51v-8.57Z"/><path d="M334.77,272.36a2.68,2.68,0,0,1,1,.19,2.24,2.24,0,0,1,.79.51,2,2,0,0,1,.5.75,2.31,2.31,0,0,1,.18.91A2.59,2.59,0,0,1,337,276a2,2,0,0,1-1,.84v0a1.44,1.44,0,0,1,.58.29,1.71,1.71,0,0,1,.37.47,2,2,0,0,1,.21.59c0,.22.07.43.09.65s0,.3,0,.48,0,.37.05.56a4.21,4.21,0,0,0,.09.55,1.37,1.37,0,0,0,.2.44h-1.88a3.32,3.32,0,0,1-.2-1c0-.38-.06-.74-.1-1.08a1.75,1.75,0,0,0-.41-1,1.4,1.4,0,0,0-1-.31H332v3.35h-1.88v-8.57Zm-.67,3.88a1.44,1.44,0,0,0,1-.29,1.19,1.19,0,0,0,.32-.94,1.11,1.11,0,0,0-.32-.9,1.44,1.44,0,0,0-1-.29H332v2.42Z"/><path d="M343.09,272.36l3.2,8.57h-2l-.64-1.91h-3.21l-.67,1.91h-1.9l3.24-8.57Zm.1,5.26-1.08-3.15h0L341,277.62Z"/><path d="M352.53,274.65a1.91,1.91,0,0,0-.42-.48,2.27,2.27,0,0,0-.57-.32,2.09,2.09,0,0,0-.67-.11,2.16,2.16,0,0,0-1.08.25,2.07,2.07,0,0,0-.72.66,3.07,3.07,0,0,0-.4.94,4.86,4.86,0,0,0-.12,1.09,4.57,4.57,0,0,0,.12,1.05,3.06,3.06,0,0,0,.4.92,2.07,2.07,0,0,0,1.8.9,1.74,1.74,0,0,0,1.35-.53,2.4,2.4,0,0,0,.6-1.39h1.82a4.42,4.42,0,0,1-.37,1.45,3.4,3.4,0,0,1-.79,1.1,3.29,3.29,0,0,1-1.15.7,4.26,4.26,0,0,1-1.46.24,4.4,4.4,0,0,1-1.77-.34,3.83,3.83,0,0,1-1.32-.94,4.14,4.14,0,0,1-.83-1.41,5.27,5.27,0,0,1-.29-1.75,5.4,5.4,0,0,1,.29-1.78,4.28,4.28,0,0,1,.83-1.44,4,4,0,0,1,1.32-1,4.4,4.4,0,0,1,1.77-.34,4.18,4.18,0,0,1,1.34.2,3.69,3.69,0,0,1,1.13.59,3.21,3.21,0,0,1,.82,1,3.41,3.41,0,0,1,.41,1.32h-1.82A1.68,1.68,0,0,0,352.53,274.65Z"/><path d="M355.25,273.94v-1.58h7v1.58h-2.56v7h-1.89v-7Z"/><path d="M365.14,272.36v8.57h-1.88v-8.57Z"/><path d="M366.71,274.9a4.45,4.45,0,0,1,.83-1.44,4,4,0,0,1,1.33-1,4.78,4.78,0,0,1,3.54,0,4,4,0,0,1,1.32,1,4.28,4.28,0,0,1,.83,1.44,5.4,5.4,0,0,1,.29,1.78,5.27,5.27,0,0,1-.29,1.75,4.14,4.14,0,0,1-.83,1.41,3.83,3.83,0,0,1-1.32.94,4.78,4.78,0,0,1-3.54,0,3.77,3.77,0,0,1-1.33-.94,4.31,4.31,0,0,1-.83-1.41,5.26,5.26,0,0,1-.28-1.75A5.4,5.4,0,0,1,366.71,274.9Zm1.73,2.83a2.63,2.63,0,0,0,.4.92,2,2,0,0,0,.72.65,2.11,2.11,0,0,0,1.08.25,2.07,2.07,0,0,0,1.8-.9,2.83,2.83,0,0,0,.4-.92,4.57,4.57,0,0,0,.13-1.05,4.85,4.85,0,0,0-.13-1.09,2.84,2.84,0,0,0-.4-.94,2.07,2.07,0,0,0-.72-.66,2.16,2.16,0,0,0-1.08-.25,2.11,2.11,0,0,0-1.08.25,1.91,1.91,0,0,0-.72.66,2.65,2.65,0,0,0-.4.94,4.34,4.34,0,0,0-.13,1.09A4.08,4.08,0,0,0,368.44,277.73Z"/><path d="M378,272.36l3.57,5.75h0v-5.75h1.76v8.57h-1.88l-3.57-5.74h0v5.74h-1.77v-8.57Z"/><path d="M249.32,286.76a4.57,4.57,0,0,1,1.54.26,3.32,3.32,0,0,1,1.24.8,3.51,3.51,0,0,1,.81,1.32,5.18,5.18,0,0,1,.3,1.86,5.86,5.86,0,0,1-.24,1.72,3.83,3.83,0,0,1-.73,1.37A3.34,3.34,0,0,1,251,295a4.14,4.14,0,0,1-1.71.33h-3.7v-8.57Zm-.13,7a2.38,2.38,0,0,0,.79-.13,1.73,1.73,0,0,0,.68-.44,2.2,2.2,0,0,0,.48-.79,3.53,3.53,0,0,0,.18-1.2,5.14,5.14,0,0,0-.12-1.17,2.5,2.5,0,0,0-.42-.9,1.76,1.76,0,0,0-.76-.57,3.11,3.11,0,0,0-1.17-.2h-1.34v5.4Z"/><path d="M260.92,286.76v1.58H256.4v1.84h4.15v1.46H256.4v2.1H261v1.59h-6.51v-8.57Z"/><path d="M263.73,293.22a1.28,1.28,0,0,0,.41.48,1.79,1.79,0,0,0,.61.28,2.84,2.84,0,0,0,.72.09,5.29,5.29,0,0,0,.54,0,2,2,0,0,0,.54-.17,1.14,1.14,0,0,0,.42-.33.82.82,0,0,0,.17-.53.77.77,0,0,0-.22-.56,1.56,1.56,0,0,0-.59-.36,6.45,6.45,0,0,0-.81-.26l-.93-.24a7.17,7.17,0,0,1-.93-.29,3.39,3.39,0,0,1-.82-.45,2.06,2.06,0,0,1-.58-.69,2.08,2.08,0,0,1-.22-1,2.25,2.25,0,0,1,.28-1.15,2.6,2.6,0,0,1,.74-.81,3.48,3.48,0,0,1,1-.48,4.54,4.54,0,0,1,1.15-.15,5.43,5.43,0,0,1,1.29.15,3.23,3.23,0,0,1,1.1.48,2.52,2.52,0,0,1,.76.86,2.62,2.62,0,0,1,.28,1.27h-1.82a1.62,1.62,0,0,0-.16-.64,1.1,1.1,0,0,0-.37-.4,1.61,1.61,0,0,0-.52-.2,3.24,3.24,0,0,0-.64-.06,2.4,2.4,0,0,0-.46.05,1.15,1.15,0,0,0-.41.17,1,1,0,0,0-.31.3.79.79,0,0,0-.12.45.71.71,0,0,0,.1.41.87.87,0,0,0,.38.29,4.68,4.68,0,0,0,.78.26l1.3.34c.16,0,.38.09.66.17a3.45,3.45,0,0,1,.85.4,2.71,2.71,0,0,1,.73.74,2.13,2.13,0,0,1,.3,1.18,2.67,2.67,0,0,1-.22,1.1,2.58,2.58,0,0,1-.68.87,3.47,3.47,0,0,1-1.12.57,5.48,5.48,0,0,1-1.54.2,5.79,5.79,0,0,1-1.38-.17,3.51,3.51,0,0,1-1.17-.55,2.67,2.67,0,0,1-.81-.95,2.8,2.8,0,0,1-.29-1.37h1.83A1.65,1.65,0,0,0,263.73,293.22Z"/><path d="M272,286.76v8.57h-1.88v-8.57Z"/><path d="M278.7,295.26a3.25,3.25,0,0,1-1.24.26,4.33,4.33,0,0,1-1.77-.34,3.77,3.77,0,0,1-1.33-.94,4.12,4.12,0,0,1-.82-1.41,5,5,0,0,1-.29-1.75,5.15,5.15,0,0,1,.29-1.78,4.26,4.26,0,0,1,.82-1.44,4,4,0,0,1,1.33-1,4.33,4.33,0,0,1,1.77-.34,4.22,4.22,0,0,1,1.28.19,3.7,3.7,0,0,1,1.11.59,3.09,3.09,0,0,1,.82.94,3.2,3.2,0,0,1,.4,1.3h-1.8a1.8,1.8,0,0,0-.65-1.08,1.88,1.88,0,0,0-1.16-.36,2.13,2.13,0,0,0-1.08.25,1.91,1.91,0,0,0-.72.66,2.65,2.65,0,0,0-.4.94,4.34,4.34,0,0,0-.13,1.09,4.08,4.08,0,0,0,.13,1.05,2.63,2.63,0,0,0,.4.92,2,2,0,0,0,.72.65,2.13,2.13,0,0,0,1.08.25,2.06,2.06,0,0,0,1.45-.48,2.1,2.1,0,0,0,.59-1.37h-1.9v-1.4h3.6v4.63H280l-.19-1A2.87,2.87,0,0,1,278.7,295.26Z"/><path d="M284.6,286.76l3.57,5.75h0v-5.75H290v8.57h-1.88l-3.57-5.74h0v5.74h-1.76v-8.57Z"/></g></g></g></svg>
        </div>

        <?php else: ?>
        <div class="site-content">
            <div class="content-area">
                <?php
				if ( have_posts() ) :

					while ( have_posts() ) :

						the_post();

						get_template_part( 'content' );

						// If comments are open or we have at least one comment, load up the comment template.
						if ( comments_open() || get_comments_number() ) :
							comments_template();
						endif;

					endwhile;

				else :

					get_template_part( 'content', 'none' );

				endif;
				?>

            </div><!-- .content-area -->
		</div><!-- .site-content -->
        <?php endif ?>
        <?php get_template_part('footer'); ?>
		<?php wp_footer(); ?>
	</body>
</html>
