<?php
/**
 * Title: Omdömen
 * Slug: vvsbrodernasverige/reviews
 * Categories: vvsbrodernasverige-sections
 * Description: Google-betyget stort, tre omdömen bredvid. Texterna är platshållare och byts mot företagets riktiga omdömen.
 */
$reviews = (array) vv_lead( 'omdomen_lista', array() );
?>
<!-- wp:group {"align":"full","className":"vv-sec-reviews","backgroundColor":"sand","style":{"spacing":{"padding":{"top":"var:preset|spacing|70","bottom":"var:preset|spacing|70"}}},"layout":{"type":"constrained","contentSize":"1180px"}} -->
<div class="wp-block-group alignfull vv-sec-reviews has-sand-background-color has-background" style="padding-top:var(--wp--preset--spacing--70);padding-bottom:var(--wp--preset--spacing--70)"><!-- wp:columns {"align":"wide","verticalAlignment":"top","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|70"}}}} -->
<div class="wp-block-columns alignwide are-vertically-aligned-top"><!-- wp:column {"verticalAlignment":"top","width":"30%"} -->
<div class="wp-block-column is-vertically-aligned-top" style="flex-basis:30%"><!-- wp:group {"className":"vv-rating","layout":{"type":"default"}} -->
<div class="wp-block-group vv-rating"><!-- wp:paragraph {"className":"vv-rating-num"} -->
<p class="vv-rating-num"><?php echo esc_html( vv_lead( 'betyg' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"vv-stars vv-stars-lg"} -->
<p class="vv-stars vv-stars-lg"></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"textColor":"ink-soft"} -->
<p class="has-ink-soft-color has-text-color"><?php echo esc_html( vv_lead( 'omdomen' ) ); ?> omdömen på Google</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"fontSize":"small"} -->
<p class="has-small-font-size"><a href="<?php echo esc_url( vv_lead( 'google_url', '#' ) ); ?>" rel="nofollow">Läs alla omdömen på Google →</a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"top","width":"70%"} -->
<div class="wp-block-column is-vertically-aligned-top" style="flex-basis:70%"><?php
foreach ( $reviews as $r ) :
	?><!-- wp:group {"className":"vv-review","layout":{"type":"default"}} -->
<div class="wp-block-group vv-review"><!-- wp:paragraph {"className":"vv-stars"} -->
<p class="vv-stars"></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><?php echo esc_html( $r[0] ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"vv-review-by","fontSize":"small","textColor":"ink-soft"} -->
<p class="vv-review-by has-ink-soft-color has-text-color"><strong><?php echo esc_html( $r[1] ); ?></strong> · <?php echo esc_html( $r[3] ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<?php endforeach; ?></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->
