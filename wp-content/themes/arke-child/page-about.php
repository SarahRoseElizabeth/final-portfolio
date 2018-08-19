<?php
wp_head();
get_header();
?>

<div class="about-page">
	<div class="content-area">
		<?= $post->post_content ?>
	</div>
</div>


<?php
get_footer();
wp_footer();
?>