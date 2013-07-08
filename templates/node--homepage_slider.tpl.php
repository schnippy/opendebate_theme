<div class="slideset">
	<div class="slide">
		<?php if (isset($node->field_slide_link[$node->language][0]['url'])) { 
			print "<a href='".$node->field_slide_link[$node->language][0]['url']."'>";
		}?>
		<?php print render($content['field_homepage_image']); ?>
		<?php if (isset($node->field_slide_link[$node->language][0]['url'])) { print "</a>"; } ?>
		<div class="caption">
			<?php if (isset($node->field_slide_link[$node->language][0]['url'])) { 
				print "<a href='".$node->field_slide_link[$node->language][0]['url']."'>"; 
			}	?>
			<em class="time"><?php print $node->field_slide_top_title[$node->language][0]['value']; ?></em>
			<?php if (isset($node->field_slide_link[$node->language][0]['url'])) { print "</a>"; } ?>
			
			<?php if (isset($node->field_slide_link[$node->language][0]['url'])) { 
				print "<a href='".$node->field_slide_link[$node->language][0]['url']."'>"; 
			}	?>
			<strong class="title"><?php print $node->field_slide_bottom_title[$node->language][0]['value']; ?></strong>
			<?php if (isset($node->field_slide_link[$node->language][0]['url'])) { print "</a>"; } ?>

		</div>
	</div>
</div>
