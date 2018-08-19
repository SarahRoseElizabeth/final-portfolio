<?php
	wp_head();
	get_header();
	?>

		<div class="projects-container container">
		<?php
			$projects = get_field('projects');
			foreach($projects as $key => $project) {
				echo '<section class="project my-slider">';
				    echo '<div class="carousel-container">';
                        echo '<ul>';
                            foreach($project['images'] as $alsoKey => $image){
                                $gifClass = $image['project_image']['mime_type'] == "image/gif" ? "gif-class" : "";
                                $swipePrompt = $key == 0 && $alsoKey == 0 ? '<div class="swipe-left-prompt"><div class="arrow arrow1"></div><div class="arrow arrow2"></div></div>' : '';
                                if($image['background_image']){
                                    echo "<li><div class='gif-background-img' style=\"background-image: url( '{$image['background_image']['url']}')\";><div class=\"project-image $gifClass\" style=\"background-image: url('{$image['project_image']['url']}'); background-color: {$image['background_color']};\"></div></div>$swipePrompt</li>";
                                }
                                else {
                                    echo "<li><div class=\"project-image $gifClass\" style=\"background-image: url('{$image['project_image']['url']}'); background-color: {$image['background_color']};\"></div>$swipePrompt</li>";
                                }
                            }
                        echo '</ul>';
                    echo '</div>';

					echo '<div class="info-block">';
					    if ($key == 0) echo '<div class="info-icon-pulse"></div>';
			            echo '<div class ="info-icon"><img src = "' . get_theme_file_uri('/images/info-icon.png') . '" alt="info"></div>';
			            echo '<div class="info-block-text">';
				              echo "<h3>{$project['title']}</h3>";
				              echo "<h4><i>{$project['role_in_project']}</i></h4>";
				              echo $project['description'];
			            echo '</div>';
                    echo '</div>';
				echo '</section>';
			}
		?>
		</div>
	<?php
	get_footer();
	wp_footer();
?>

