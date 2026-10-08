<?php
/**
 * Title: Home - Finanziamento
 * Slug: adaptatom/home-funding
 * Categories: adaptatom-home
 * Description: Loghi dei finanziatori e note legali in piccolo.
 */
$ph = esc_url( get_stylesheet_directory_uri() . '/assets/images/placeholder.svg' );
?>
<!-- wp:group {"align":"full","className":"home-funding","layout":{"type":"default"}} -->
<div class="wp-block-group alignfull home-funding">
	<!-- wp:image {"sizeSlug":"large","linkDestination":"none","className":"home-funding__logos"} -->
	<figure class="wp-block-image size-large home-funding__logos"><img src="<?php echo $ph; ?>" alt="Loghi dei finanziatori"/></figure>
	<!-- /wp:image -->
	<!-- wp:paragraph {"className":"home-funding__note","fontSize":"xxs"} -->
	<p class="home-funding__note has-xxs-font-size">Iniziativa finanziata dal Fondo Europeo Agricolo per lo Sviluppo Rurale (FEASR) attraverso il Complemento di Sviluppo Rurale del Piano Strategico della PAC della Regione Lombardia 2023-2027. Info e bandi: <a href="https://psr.regione.lombardia.it/" target="_blank" rel="noreferrer noopener">https://psr.regione.lombardia.it</a>.</p>
	<!-- /wp:paragraph -->
	<!-- wp:paragraph {"className":"home-funding__text","fontSize":"xxs"} -->
	<p class="home-funding__text has-xxs-font-size">Non ullamco irure do laborum enim reprehenderit ut id dolore aliqua ipsum. Aliquip laborum qui dolor nisi. Quis mollit ex culpa laborum sunt dolor voluptate esse nulla duis deserunt est nulla minim commodo. Officia sint pariatur aliquip aute nisi.</p>
	<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
