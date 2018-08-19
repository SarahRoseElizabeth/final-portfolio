<?php
wp_head();
?>
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<div class="case-studies-template">
        <a href="<?= get_permalink(14)?>" class="case-study-close-button">X CLOSE</a>
		<div class="content-area">
			<?= apply_filters('the_content', $post->post_content); ?>
            <a href="<?= get_permalink(14)?>" class="back-button">&#8592 WORK</a>
		</div>
	</div>


<?php
get_footer('unfixed');
wp_footer();
?>