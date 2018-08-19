<?php
wp_head();
get_header();
?>

	<div class="contact-page">
		<div class="content-area">
			<?= apply_filters('the_content', $post->post_content); ?>
		</div>
	</div>


<?php
get_footer();
wp_footer();
?>