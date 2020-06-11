<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

// Add a custom tab to single product pages
add_filter( 'woocommerce_product_tabs', 'allergen_content_tab' );

function allergen_content_tab( $tabs ) {
  if (get_post_meta(get_the_ID(), '_wc_allergen_gluten', true) == True OR
    get_post_meta(get_the_ID(), '_wc_allergen_gluten_weizen', true) == True OR
    get_post_meta(get_the_ID(), '_wc_allergen_gluten_roggen', true) == True OR
    get_post_meta(get_the_ID(), '_wc_allergen_gluten_gerste', true) == True OR
    get_post_meta(get_the_ID(), '_wc_allergen_gluten_hafer', true) == True OR
    get_post_meta(get_the_ID(), '_wc_allergen_gluten_dinkel', true) == True OR
    get_post_meta(get_the_ID(), '_wc_allergen_gluten_khorasan', true) == True OR
    get_post_meta(get_the_ID(), '_wc_allergen_krebstiere', true) == True OR
    get_post_meta(get_the_ID(), '_wc_allergen_eier', true) == True OR
    get_post_meta(get_the_ID(), '_wc_allergen_fisch', true) == True OR
    get_post_meta(get_the_ID(), '_wc_allergen_erdnuss', true) == True OR
    get_post_meta(get_the_ID(), '_wc_allergen_soja', true) == True OR
    get_post_meta(get_the_ID(), '_wc_allergen_milch', true) == True OR
    get_post_meta(get_the_ID(), '_wc_allergen_schalen', true) == True OR
    get_post_meta(get_the_ID(), '_wc_allergen_schalen_mandeln', true) == True OR
    get_post_meta(get_the_ID(), '_wc_allergen_schalen_haselnuss', true) == True OR
    get_post_meta(get_the_ID(), '_wc_allergen_schalen_walnuss', true) == True OR
    get_post_meta(get_the_ID(), '_wc_allergen_schalen_kaschunuss', true) == True OR
    get_post_meta(get_the_ID(), '_wc_allergen_schalen_pecannuss', true) == True OR
    get_post_meta(get_the_ID(), '_wc_allergen_schalen_paranuss', true) == True OR
    get_post_meta(get_the_ID(), '_wc_allergen_schalen_pistazien', true) == True OR
    get_post_meta(get_the_ID(), '_wc_allergen_schalen_makadamianuss', true) == True OR
    get_post_meta(get_the_ID(), '_wc_allergen_sellerie', true) == True OR
    get_post_meta(get_the_ID(), '_wc_allergen_senf', true) == True OR
    get_post_meta(get_the_ID(), '_wc_allergen_sesam', true) == True OR
    get_post_meta(get_the_ID(), '_wc_allergen_schwefel', true) == True OR
    get_post_meta(get_the_ID(), '_wc_allergen_lupine', true) == True OR
    get_post_meta(get_the_ID(), '_wc_allergen_weichtiere', true) == True) 
  {
  $tabs['allergen'] = array(
	  'title' 	=> 'Allergene',
		'priority' 	=> 90,
		'callback' 	=> 'allergen_content_tab_display'
	);
	}
  return $tabs;
}

function allergen_content_tab_display() {
	echo '<h2>' . 'Allergene' . '</h2>';
  ?>
  <table>
  <thead>
    <tr>
      <th></th>
      <th></th>
    </tr>
  </thead>
  <tbody>
    <?php if (get_post_meta(get_the_ID(), '_wc_allergen_gluten', true)) { ?>
    <tr>
      <td>Glutenhaltiges Getreide</td>
      <td><i class="fa fa-check fa-1x"></i></td>
    </tr>
    <?php }; if (get_post_meta(get_the_ID(), '_wc_allergen_gluten_weizen', true)) { ?>
    <tr>
      <td>Weizen</td>
      <td><i class="fa fa-check fa-1x"></i></td>
    </tr>
    <?php }; if (get_post_meta(get_the_ID(), '_wc_allergen_gluten_roggen', true)) { ?>
    <tr>
      <td>Roggen</td>
      <td><i class="fa fa-check fa-1x"></i></td>
    </tr>
    <?php }; if (get_post_meta(get_the_ID(), '_wc_allergen_gluten_gerste', true)) { ?>
    <tr>
      <td>Gerste</td>
      <td><i class="fa fa-check fa-1x"></i></td>
    </tr>            
    <?php }; if (get_post_meta(get_the_ID(), '_wc_allergen_gluten_hafer', true)) { ?>
    <tr>
      <td>Hafer</td>
      <td><i class="fa fa-check fa-1x"></i></td>
    </tr> 
    <?php }; if (get_post_meta(get_the_ID(), '_wc_allergen_gluten_dinkel', true)) { ?>
    <tr>
      <td>Dinkel</td>
      <td><i class="fa fa-check fa-1x"></i></td>
    </tr> 
    <?php }; if (get_post_meta(get_the_ID(), '_wc_allergen_gluten_khorasan', true)) { ?>
    <tr>
      <td>Khorasan-Weizen</td>
      <td><i class="fa fa-check fa-1x"></i></td>
    </tr>
    <?php }; if (get_post_meta(get_the_ID(), '_wc_allergen_krebstiere', true)) { ?>
    <tr>
      <td>Krebstiere</td>
      <td><i class="fa fa-check fa-1x"></i></td>
    </tr>            
    <?php }; if (get_post_meta(get_the_ID(), '_wc_allergen_eier', true)) { ?>
    <tr>
      <td>Eier</td>
      <td><i class="fa fa-check fa-1x"></i></td>
    </tr> 
    <?php }; if (get_post_meta(get_the_ID(), '_wc_allergen_fisch', true)) { ?>
    <tr>
      <td>Fisch</td>
      <td><i class="fa fa-check fa-1x"></i></td>
    </tr> 
    <?php }; if (get_post_meta(get_the_ID(), '_wc_allergen_erdnuss', true)) { ?>
    <tr>
      <td>Erdnuss</td>
      <td><i class="fa fa-check fa-1x"></i></td>
    </tr>
    <?php }; if (get_post_meta(get_the_ID(), '_wc_allergen_soja', true)) { ?>
    <tr>
      <td>Soja</td>
      <td><i class="fa fa-check fa-1x"></i></td>
    </tr>            
    <?php }; if (get_post_meta(get_the_ID(), '_wc_allergen_milch', true)) { ?>
    <tr>
      <td>Milch</td>
      <td><i class="fa fa-check fa-1x"></i></td>
    </tr> 
    <?php }; if (get_post_meta(get_the_ID(), '_wc_allergen_schalen', true)) { ?>
    <tr>
      <td>Schalenfr&uuml;chte</td>
      <td><i class="fa fa-check fa-1x"></i></td>
    </tr> 
    <?php }; if (get_post_meta(get_the_ID(), '_wc_allergen_schalen_mandeln', true)) { ?>
    <tr>
      <td>Mandeln</td>
      <td><i class="fa fa-check fa-1x"></i></td>
    </tr>
    <?php }; if (get_post_meta(get_the_ID(), '_wc_allergen_schalen_haselnuss', true)) { ?>
    <tr>
      <td>Haseln&uuml;sse</td>
      <td><i class="fa fa-check fa-1x"></i></td>
    </tr>            
    <?php }; if (get_post_meta(get_the_ID(), '_wc_allergen_schalen_walnuss', true)) { ?>
    <tr>
      <td>Waln&uuml;sse</td>
      <td><i class="fa fa-check fa-1x"></i></td>
    </tr> 
    <?php }; if (get_post_meta(get_the_ID(), '_wc_allergen_schalen_kaschunuss', true)) { ?>
    <tr>
      <td>Kaschun&uuml;sse</td>
      <td><i class="fa fa-check fa-1x"></i></td>
    </tr> 
    <?php }; if (get_post_meta(get_the_ID(), '_wc_allergen_schalen_pecannuss', true)) { ?>
    <tr>
      <td>Pecann&uuml;sse</td>
      <td><i class="fa fa-check fa-1x"></i></td>
    </tr> 
    <?php }; if (get_post_meta(get_the_ID(), '_wc_allergen_schalen_paranuss', true)) { ?>
    <tr>
      <td>Paran&uuml;sse</td>
      <td><i class="fa fa-check fa-1x"></i></td>
    </tr>
    <?php }; if (get_post_meta(get_the_ID(), '_wc_allergen_schalen_pistazien', true)) { ?>
    <tr>
      <td>Pistazien</td>
      <td><i class="fa fa-check fa-1x"></i></td>
    </tr>            
    <?php }; if (get_post_meta(get_the_ID(), '_wc_allergen_schalen_makadamianuss', true)) { ?>
    <tr>
      <td>Makadamian&uuml;sse</td>
      <td><i class="fa fa-check fa-1x"></i></td>
    </tr> 
    <?php }; if (get_post_meta(get_the_ID(), '_wc_allergen_sellerie', true)) { ?>
    <tr>
      <td>Sellerie</td>
      <td><i class="fa fa-check fa-1x"></i></td>
    </tr>
    <?php }; if (get_post_meta(get_the_ID(), '_wc_allergen_senf', true)) { ?>
    <tr>
      <td>Senf</td>
      <td><i class="fa fa-check fa-1x"></i></td>
    </tr> 
    <?php }; if (get_post_meta(get_the_ID(), '_wc_allergen_sesam', true)) { ?>
    <tr>
      <td>Sesam</td>
      <td><i class="fa fa-check fa-1x"></i></td>
    </tr>
    <?php }; if (get_post_meta(get_the_ID(), '_wc_allergen_schwefel', true)) { ?>
    <tr>
      <td>Schwefeldiocid</td>
      <td><i class="fa fa-check fa-1x"></i></td>
    </tr>            
    <?php }; if (get_post_meta(get_the_ID(), '_wc_allergen_lupine', true)) { ?>
    <tr>
      <td>Lupine</td>
      <td><i class="fa fa-check fa-1x"></i></td>
    </tr> 
    <?php }; if (get_post_meta(get_the_ID(), '_wc_allergen_weichtiere', true)) { ?>
    <tr>
      <td>Weichtiere</td>
      <td><i class="fa fa-check fa-1x"></i></td>
    </tr>     
    <?php }; ?>
  </tbody>
  </table>
  <?php 
} 

?>