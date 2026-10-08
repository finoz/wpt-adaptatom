<?php
/**
 * Title: Home - Le notizie
 * Slug: adaptatom/home-news
 * Categories: adaptatom-home
 * Description: Titolo, testo introduttivo con bottone e le ultime due notizie.
 */
?>
<!-- wp:group {"align":"wide","className":"home-news","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide home-news">
	<!-- wp:heading {"level":2,"className":"section-title","fontSize":"display"} -->
	<h2 class="wp-block-heading section-title has-display-font-size">Le notizie</h2>
	<!-- /wp:heading -->
	<!-- wp:group {"className":"home-news__row","layout":{"type":"default"}} -->
	<div class="wp-block-group home-news__row">
		<!-- wp:group {"className":"home-news__intro","layout":{"type":"default"}} -->
		<div class="wp-block-group home-news__intro">
			<!-- wp:paragraph -->
			<p>Enim dolor quis incididunt sunt reprehenderit nulla elit duis ex magna commodo tempor.</p>
			<!-- /wp:paragraph -->
			<!-- wp:buttons -->
			<div class="wp-block-buttons">
				<!-- wp:button -->
				<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="#">Leggi tutto</a></div>
				<!-- /wp:button -->
			</div>
			<!-- /wp:buttons -->
		</div>
		<!-- /wp:group -->
		<!-- wp:pattern {"slug":"adaptatom/query-posts"} /-->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->
