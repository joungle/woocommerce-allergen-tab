<?php 

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

// Add a custom tab to the products data metabox
add_filter( 'woocommerce_product_data_tabs', 'add_allergen_custom_product_data_tab' , 99 , 1 );

function add_allergen_custom_product_data_tab( $product_data_tabs ) {
  $product_data_tabs['allergen-custom-tab'] = array(
    'label' => 'Allergene',
    'target' => 'allergen_custom_product_data',
  );
  return $product_data_tabs;
}

// Add custom fields to the added custom tab under products data metabox
add_action( 'woocommerce_product_data_panels', 'add_allergen_custom_product_data_fields' );

function add_allergen_custom_product_data_fields() {
  global $woocommerce, $post;
  ?>
    <!-- id below must match target registered in above add_allergen_custom_product_data_tab function -->
    <div id="allergen_custom_product_data" class="panel woocommerce_options_panel">
        <?php
        woocommerce_wp_checkbox( array(
	          'id'          => '_wc_allergen_gluten',
	          'label'       => 'Glutenhaltiges Getreide',
	          'description' => '',
	          'desc_tip'    => false,
        ) );
        woocommerce_wp_checkbox( array(
	        	'id'          => '_wc_allergen_gluten_weizen',
	        	'label'       => 'Weizen',
	        	'description' => '',
	        	'desc_tip'    => false,
        ) );
        woocommerce_wp_checkbox( array(
				    'id'          => '_wc_allergen_gluten_roggen',
				    'label'       => 'Roggen',
				    'description' => '',
				    'desc_tip'    => false,
        ) );
        woocommerce_wp_checkbox( array(
        		'id'          => '_wc_allergen_gluten_gerste',
        		'label'       => 'Gerste',
        		'description' => '',
        		'desc_tip'    => false,
        ) );
        woocommerce_wp_checkbox( array(
        		'id'          => '_wc_allergen_gluten_hafer',
        		'label'       => 'Hafer',
        		'description' => '',
        		'desc_tip'    => false,
        ) );
        woocommerce_wp_checkbox( array(
        		'id'          => '_wc_allergen_gluten_dinkel',
        		'label'       => 'Dinkel',
        		'description' => '',
        		'desc_tip'    => false,
        ) );
        woocommerce_wp_checkbox( array(
        		'id'          => '_wc_allergen_gluten_khorasan',
        		'label'       => 'Khorasan-Weizen',
        		'description' => '',
        		'desc_tip'    => false,
        ) );        
        woocommerce_wp_checkbox( array(
        		'id'          => '_wc_allergen_krebstiere',
        		'label'       => 'Krebstiere',
        		'description' => '',
        		'desc_tip'    => false,
        ) );        
        woocommerce_wp_checkbox( array(
        		'id'          => '_wc_allergen_eier',
        		'label'       => 'Eier',
        		'description' => '',
        		'desc_tip'    => false,
        ) );
        woocommerce_wp_checkbox( array(
        		'id'          => '_wc_allergen_fisch',
        		'label'       => 'Fisch',
        		'description' => '',
        		'desc_tip'    => false,
        ) );
        woocommerce_wp_checkbox( array(
        		'id'          => '_wc_allergen_erdnuss',
        		'label'       => 'Erdnuss',
        		'description' => '',
        		'desc_tip'    => false,
        ) );
        woocommerce_wp_checkbox( array(
        		'id'          => '_wc_allergen_soja',
        		'label'       => 'Soja',
        		'description' => '',
        		'desc_tip'    => false,
        ) );
        woocommerce_wp_checkbox( array(
        		'id'          => '_wc_allergen_milch',
        		'label'       => 'Milch',
        		'description' => '',
        		'desc_tip'    => false,
        ) );
        woocommerce_wp_checkbox( array(
        		'id'          => '_wc_allergen_schalen',
        		'label'       => 'Schalenfr&uuml;chte',
        		'description' => '',
        		'desc_tip'    => false,
        ) );
        woocommerce_wp_checkbox( array(
        		'id'          => '_wc_allergen_schalen_mandeln',
        		'label'       => 'Mandeln',
        		'description' => '',
        		'desc_tip'    => false,
        ) );
        woocommerce_wp_checkbox( array(
        		'id'          => '_wc_allergen_schalen_haselnuss',
        		'label'       => 'Haseln&uuml;sse',
        		'description' => '',
        		'desc_tip'    => false,
        ) );
        woocommerce_wp_checkbox( array(
        		'id'          => '_wc_allergen_schalen_walnuss',
        		'label'       => 'Waln&uuml;sse',
        		'description' => '',
        		'desc_tip'    => false,
        ) );
        woocommerce_wp_checkbox( array(
        		'id'          => '_wc_allergen_schalen_kaschunuss',
        		'label'       => 'Kaschun&uuml;sse',
        		'description' => '',
        		'desc_tip'    => false,
        ) );
        woocommerce_wp_checkbox( array(
        		'id'          => '_wc_allergen_schalen_pecannuss',
        		'label'       => 'Pecann&uuml;sse',
        		'description' => '',
        		'desc_tip'    => false,
        ) );
        woocommerce_wp_checkbox( array(
        		'id'          => '_wc_allergen_schalen_paranuss',
        		'label'       => 'Paran&uuml;sse',
        		'description' => '',
        		'desc_tip'    => false,
        ) );
        woocommerce_wp_checkbox( array(
        		'id'          => '_wc_allergen_schalen_pistazien',
        		'label'       => 'Pistazien',
        		'description' => '',
        		'desc_tip'    => false,
        ) );
        woocommerce_wp_checkbox( array(
        		'id'          => '_wc_allergen_schalen_makadamianuss',
        		'label'       => 'Makadamian&uuml;sse',
        		'description' => '',
        		'desc_tip'    => false,
        ) );
        woocommerce_wp_checkbox( array(
        		'id'          => '_wc_allergen_sellerie',
        		'label'       => 'Sellerie',
        		'description' => '',
        		'desc_tip'    => false,
        ) );
        woocommerce_wp_checkbox( array(
        		'id'          => '_wc_allergen_senf',
        		'label'       => 'Senf',
        		'description' => '',
        		'desc_tip'    => false,
        ) );
        woocommerce_wp_checkbox( array(
        		'id'          => '_wc_allergen_sesam',
        		'label'       => 'Sesam',
        		'description' => '',
        		'desc_tip'    => false,
        ) );
        woocommerce_wp_checkbox( array(
        		'id'          => '_wc_allergen_schwefel',
        		'label'       => 'Schwefeldiocid',
        		'description' => '',
        		'desc_tip'    => false,
        ) );
        woocommerce_wp_checkbox( array(
        		'id'          => '_wc_allergen_lupine',
        		'label'       => 'Lupine',
        		'description' => '',
        		'desc_tip'    => false,
        ) );
        woocommerce_wp_checkbox( array(
        		'id'          => '_wc_allergen_weichtiere',
        		'label'       => 'Weichtiere',
        		'description' => '',
        		'desc_tip'    => false,
        ) );
        ?>
    </div>
  <?php
}

// Save custom fields data of products tab
add_action( 'woocommerce_process_product_meta', 'woocommerce_process_product_meta_fields_save_allergen' );

function woocommerce_process_product_meta_fields_save_allergen( $post_id ){
  update_post_meta( $post_id, '_wc_allergen_gluten', $_POST['_wc_allergen_gluten'] );
  update_post_meta( $post_id, '_wc_allergen_gluten_weizen', stripslashes( $_POST['_wc_allergen_gluten_weizen'] ) );
  update_post_meta( $post_id, '_wc_allergen_gluten_roggen', stripslashes( $_POST['_wc_allergen_gluten_roggen'] ) );
  update_post_meta( $post_id, '_wc_allergen_gluten_gerste', stripslashes( $_POST['_wc_allergen_gluten_gerste'] ) );
  update_post_meta( $post_id, '_wc_allergen_gluten_hafer', stripslashes( $_POST['_wc_allergen_gluten_hafer'] ) );
  update_post_meta( $post_id, '_wc_allergen_gluten_dinkel', stripslashes( $_POST['_wc_allergen_gluten_dinkel'] ) );
  update_post_meta( $post_id, '_wc_allergen_gluten_khorasan', stripslashes( $_POST['_wc_allergen_gluten_khorasan'] ) );
  update_post_meta( $post_id, '_wc_allergen_krebstiere', stripslashes( $_POST['_wc_allergen_krebstiere'] ) );
  update_post_meta( $post_id, '_wc_allergen_eier', stripslashes( $_POST['_wc_allergen_eier'] ) );
  update_post_meta( $post_id, '_wc_allergen_fisch', stripslashes( $_POST['_wc_allergen_fisch'] ) );
  update_post_meta( $post_id, '_wc_allergen_erdnuss', stripslashes( $_POST['_wc_allergen_erdnuss'] ) );
  update_post_meta( $post_id, '_wc_allergen_soja', stripslashes( $_POST['_wc_allergen_soja'] ) );
  update_post_meta( $post_id, '_wc_allergen_milch', stripslashes( $_POST['_wc_allergen_milch'] ) );
  update_post_meta( $post_id, '_wc_allergen_schalen', stripslashes( $_POST['_wc_allergen_schalen'] ) );
  update_post_meta( $post_id, '_wc_allergen_schalen_mandeln', stripslashes( $_POST['_wc_allergen_schalen_mandeln'] ) );
  update_post_meta( $post_id, '_wc_allergen_schalen_haselnuss', stripslashes( $_POST['_wc_allergen_schalen_haselnuss'] ) );
  update_post_meta( $post_id, '_wc_allergen_schalen_walnuss', stripslashes( $_POST['_wc_allergen_schalen_walnuss'] ) );
  update_post_meta( $post_id, '_wc_allergen_schalen_kaschunuss', stripslashes( $_POST['_wc_allergen_schalen_kaschunuss'] ) );
  update_post_meta( $post_id, '_wc_allergen_schalen_pecannuss', stripslashes( $_POST['_wc_allergen_schalen_pecannuss'] ) );
  update_post_meta( $post_id, '_wc_allergen_schalen_paranuss', stripslashes( $_POST['_wc_allergen_schalen_paranuss'] ) );
  update_post_meta( $post_id, '_wc_allergen_schalen_pistazien', stripslashes( $_POST['_wc_allergen_schalen_pistazien'] ) );
  update_post_meta( $post_id, '_wc_allergen_schalen_makadamianuss', stripslashes( $_POST['_wc_allergen_schalen_makadamianuss'] ) );
  update_post_meta( $post_id, '_wc_allergen_sellerie', stripslashes( $_POST['_wc_allergen_sellerie'] ) );
  update_post_meta( $post_id, '_wc_allergen_senf', stripslashes( $_POST['_wc_allergen_senf'] ) );
  update_post_meta( $post_id, '_wc_allergen_sesam', stripslashes( $_POST['_wc_allergen_sesam'] ) );
  update_post_meta( $post_id, '_wc_allergen_schwefel', stripslashes( $_POST['_wc_allergen_schwefel'] ) );
  update_post_meta( $post_id, '_wc_allergen_lupine', stripslashes( $_POST['_wc_allergen_lupine'] ) );
  update_post_meta( $post_id, '_wc_allergen_weichtiere', stripslashes( $_POST['_wc_allergen_weichtiere'] ) );
}

?>