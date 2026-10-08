<?php
/**
 * Title: Listato Articoli
 * Slug: adaptatom/query-posts
 * Block Types: core/query
 * Categories: posts
 * Description: Query loop con le ultime due notizie in card.
 */
?>
<!-- wp:query {"queryId":1,"query":{"inherit":false,"postType":"post","perPage":2,"order":"desc","orderBy":"date"},"className":"posts-grid posts-grid--block"} -->
<div class="wp-block-query posts-grid posts-grid--block">

	<!-- wp:post-template -->
	<!-- wp:pattern {"slug":"adaptatom/post-card"} /-->
	<!-- /wp:post-template -->

	<!-- wp:query-no-results -->
	<!-- wp:paragraph -->
	<p>Nessun articolo trovato.</p>
	<!-- /wp:paragraph -->
	<!-- /wp:query-no-results -->

</div>
<!-- /wp:query -->
