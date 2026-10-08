<?php
/**
 * Title: Card Articolo
 * Slug: adaptatom/post-card
 * Categories: posts
 * Block Types: core/post-template
 * Description: Card notizia: categoria e data, immagine 4:3, titolo.
 */
?>
<!-- wp:group {"className":"post-card","layout":{"type":"default"}} -->
<div class="wp-block-group post-card">
	<!-- wp:group {"className":"post-card__meta","layout":{"type":"default"}} -->
	<div class="wp-block-group post-card__meta">
		<!-- wp:post-terms {"term":"category"} /-->
		<!-- wp:post-date {"format":"F Y"} /-->
	</div>
	<!-- /wp:group -->
	<!-- wp:post-featured-image {"isLink":true,"aspectRatio":"4/3"} /-->
	<!-- wp:post-title {"isLink":true,"level":3,"className":"post-card__title"} /-->
</div>
<!-- /wp:group -->
