<?php
/**
 * Title: Home - Partner
 * Slug: adaptatom/home-partners
 * Categories: adaptatom-home
 * Description: Titolo, testo e bottone a sinistra, immagine arrotondata a destra.
 */
$ph = esc_url( get_stylesheet_directory_uri() . '/assets/images/placeholder.svg' );
?>
<!-- wp:separator {"className":"is-style-special"} -->
<hr class="wp-block-separator has-alpha-channel-opacity is-style-special"/>
<!-- /wp:separator -->

<!-- wp:group {"align":"wide","className":"home-partners","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide home-partners">
	<!-- wp:group {"className":"home-partners__text","layout":{"type":"default"}} -->
	<div class="wp-block-group home-partners__text">
		<!-- wp:heading {"level":2,"className":"section-title","fontSize":"display"} -->
		<h2 class="wp-block-heading section-title has-display-font-size">I partner</h2>
		<!-- /wp:heading -->
		<!-- wp:paragraph -->
		<p>Enim dolor quis incididunt sunt reprehenderit nulla elit duis ex magna commodo tempor.</p>
		<!-- /wp:paragraph -->
		<!-- wp:buttons -->
		<div class="wp-block-buttons">
			<!-- wp:button -->
			<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="#">Scopri il progetto</a></div>
			<!-- /wp:button -->
		</div>
		<!-- /wp:buttons -->
	</div>
	<!-- /wp:group -->
	<!-- wp:image {"sizeSlug":"large","linkDestination":"none","className":"home-partners__media"} -->
	<figure class="wp-block-image size-large home-partners__media"><img src="<?php echo $ph; ?>" alt=""/></figure>
	<!-- /wp:image -->
</div>
<!-- /wp:group -->
