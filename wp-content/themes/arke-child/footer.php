<?php
$layoutClasses = get_post_meta($post->ID, 'layout', true) ?: '';
?>

<footer class="<?= $layoutClasses ?>">
	<div class="social-menu">
		<?php
		wp_nav_menu( array(
			'theme_location' => 'social-menu',
			'menu_id'        => 's-menu',
			'depth'          => 1,
			'fallback_cb'    => false,
		) );
		?>
	</div>
</footer>