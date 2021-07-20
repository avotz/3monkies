<?php

add_action('after_setup_theme', 'woocommerce_support');
function woocommerce_support()
{
    add_theme_support('woocommerce');
   
}

add_filter('woocommerce_output_related_products_args', 'jk_related_products_args');
function jk_related_products_args($args)
{
    $args['posts_per_page'] = 4; // 4 related products
    $args['columns'] = 4; // arranged in 2 columns
    return $args;
}
remove_action( 'woocommerce_after_single_product_summary', 'woocommerce_output_related_products', 20 );
remove_action('woocommerce_sidebar', 'woocommerce_get_sidebar', 10);

remove_action('woocommerce_single_product_summary', 'woocommerce_template_single_title', 5);

remove_action('woocommerce_single_product_summary', 'woocommerce_template_single_meta', 40);
add_action('woocommerce_single_product_summary', 'woocommerce_template_single_meta', 4);

remove_action('woocommerce_single_product_summary', 'woocommerce_template_single_price', 10);
remove_action('woocommerce_single_product_summary', 'woocommerce_template_single_add_to_cart', 30);

remove_action('woocommerce_single_product_summary', 'woocommerce_template_single_excerpt', 20);

add_filter('woocommerce_product_description_heading', 'remove_product_description_heading');
function remove_product_description_heading()
{
    return '';
}

add_filter('woocommerce_product_tabs', 'woo_remove_product_tabs', 98);
function woo_remove_product_tabs($tabs)
{

    //unset( $tabs['description'] );  
    unset($tabs['reviews']);          // Remove the reviews tab
    unset( $tabs['additional_information'] );   // Remove the additional information tab

    return $tabs;

}

add_filter('woocommerce_product_tabs', 'woo_rename_tabs', 98);
function woo_rename_tabs($tabs)
{

    $tabs['description']['title'] = function_exists('pll__') ? pll__('Description') : __('Description');		// Rename the description tab

    return $tabs;

}

//modificar tab description con la informacion short-description
add_filter('woocommerce_product_tabs', 'woo_custom_description_tab', 98);
function woo_custom_description_tab($tabs)
{

    $tabs['description']['callback'] = 'woo_custom_description_tab_content';  // Custom description callback

    return $tabs;
}

function woo_custom_description_tab_content()
{

    woocommerce_get_template('single-product/tabs/description.php');

    do_action('woocommerce_single_product_summary');


}

//agregar tab details con la informacio de description
add_filter('woocommerce_product_tabs', 'woo_details_tab', 99);
function woo_details_tab($tabs)
{
  
  // Adds the new tab
    if (rwmb_meta('rw_details_1') || rwmb_meta('rw_details_2') || rwmb_meta('rw_days')) {
        $tabs['details'] = array(
            'title' => __('Details', 'woocommerce'),
            'priority' => 50,
            'callback' => 'woo_details_tab_content'
        );
    }

    return $tabs;

}
function woo_details_tab_content()
{

  // The new tab content

    //echo '<h2>Details</h2>';
    if (rwmb_meta('rw_details_1') && rwmb_meta('rw_details_2')) {
        $html .= '<div class="flex-container-sb">';
        $html .= '<div class="details-container details-container-left">';
        $html .= rwmb_meta('rw_details_1');
        $html .= '</div>';
        $html .= '<div class="details-container details-container-right">';
        $html .= rwmb_meta('rw_details_2');

            if (rwmb_meta('rw_wtb_icons')) {
                $html .= '<div><strong>Equipment:</strong></div>';
                $icons = rwmb_meta('rw_wtb_icons');
                foreach ($icons as $icon) {
                    $html .= '<div class="wtb-icons '. $icon . '"></div>';
                }
            }
            
        $html .= '</div>';
        $html .= '</div>';
        if (rwmb_meta('rw_days')) {
            $days = rwmb_meta('rw_days');
            foreach ($days as $index => $day) {
                $html .= '<div id="accordion-' . $index++ . '" class="accordion-title">';
                $html .= 'Day ' . $index++;
                $html .= '</div>';
                $html .= '<div class="accordion-description">';
                $html .= $day;
                if (rwmb_meta('rw_wtb_icons_days')) {
                    $html .= '<div><strong>Equipment:</strong></div>';
                    $icons = rwmb_meta('rw_wtb_icons_days');
                    foreach ($icons[$index] as $icon) {
                        $html .= '<div class="wtb-icons ' . $icon . '"></div>';
                    }
                }
                $html .= '</div>';

            }
        }
        
    }else{
        $html .= rwmb_meta('rw_details_1');
        $html .= rwmb_meta('rw_details_2');
        $days = rwmb_meta('rw_days');
        foreach ($days as $index => $day) {
            $id = $index + 1;
            $html .= '<div id="accordion-'. $index .'" class="accordion-title">';
            $html .= 'Day '. $id;
            $html .= '</div>';
            $html .= '<div class="accordion-description">';
            $html .= $day;
            if (rwmb_meta('rw_wtb_icons_days')) {
                $html .= '<div><strong>Equipment:</strong></div>';
                $icons = rwmb_meta('rw_wtb_icons_days');
               
                foreach ($icons[$index] as $icon) {
                    $html .= '<div class="wtb-icons ' . $icon . '"></div>';
                }
            }
            $html .= '</div>';
           
        }
        //$html .= rwmb_meta('rw_days');
    }
   
    echo $html;

}

//agregar tab rates con la informacio de rates
add_filter('woocommerce_product_tabs', 'woo_rates_tab', 100);
function woo_rates_tab($tabs)
{
  
  // Adds the new tab
    if (rwmb_meta('rw_rates_regular') || rwmb_meta('rw_rates_private')) {
        $tabs['rates'] = array(
            'title' => __('Rates', 'woocommerce'),
            'priority' => 50,
            'callback' => 'woo_rates_tab_content'
        );
    }



    return $tabs;

}
function woo_rates_tab_content()
{

  // The new tab content

    echo '<h2>Rates</h2>';
    if (rwmb_meta('rw_rates_regular') && rwmb_meta('rw_rates_private')) {
        $html .= '<div class="flex-container-sb">';
        $html .= '<div class="details-container details-container-left">';
        $html .= rwmb_meta('rw_rates_regular');
        $html .= '</div>';
        $html .= '<div class="details-container details-container-right">';
        $html .= rwmb_meta('rw_rates_private');
        $html .= '</div>';
        $html .= '</div>';
    }else{
        $html .= rwmb_meta('rw_rates_regular');
        $html .= rwmb_meta('rw_rates_private');
    }

    echo $html;


}


add_filter('woocommerce_product_tabs', 'woo_video_tab', 101);
function woo_video_tab($tabs)
{
  
  // Adds the new tab

    $nameTab = __('Video', 'woocommerce');
   
    if(rwmb_meta('rw_video') != 'Embed HTML not available.'){

        $tabs['video'] = array(
            'title' => $nameTab,
            'priority' => 70,
            'callback' => 'woo_video_tab_content'
        );

    }

    

    return $tabs;

}
function woo_video_tab_content()
{

    echo rwmb_meta('rw_video');


}


//agregar tab book tour 
add_filter('woocommerce_product_tabs', 'woo_book_tab', 102);
function woo_book_tab($tabs)
{
  
  // Adds the new tab
    $nameTab = __('Book Now', 'woocommerce');
    if (is_product() && has_term('Tour', 'product_cat')) {
       
        $tabs['book'] = array(
            'title' => $nameTab,
            'priority' => 70,
            'callback' => 'woo_book_tab_content'
        );
    } elseif (is_product() && has_term('Transportation', 'product_cat')) {
    
        $tabs['book_shuttle'] = array(
            'title' => $nameTab,
            'priority' => 70,
            'callback' => 'woo_book_tab_content'
        );
    }
   
   

    

    return $tabs;

}
function woo_book_tab_content()
{

  // The new tab content

  //echo '<h2>New Product Tab</h2>';
  //echo '<p>Here\'s your new product tab.</p>';
   // woocommerce_get_template('single-product/price.php');
   // do_action('woocommerce_single_product_summary');

    echo '<h2>Rates</h2>';

    $html .= '<div class="flex-container-sb">';
    $html .= '<div class="details-container details-container-left">';
    $html .= rwmb_meta('rw_rates_regular');
    $html .= '</div>';
    $html .= '<div class="details-container details-container-right">';
    $html .= rwmb_meta('rw_rates_private');
    $html .= '</div>';
    $html .= '</div>';

    echo $html;

}

add_filter('woocommerce_product_tabs', 'woo_extra_tab', 101);
function woo_extra_tab($tabs)
{
  
  // Adds the new tab
    if (rwmb_meta('rw_optional_info_title')) {
        $tabs['extra'] = array(
            'title' => __('Optional', 'woocommerce'),
            'priority' => 50,
            'callback' => 'woo_extra_tab_content'
        );
    }

    return $tabs;

}
function woo_extra_tab_content()
{

  // The new tab content
        echo '<h3>'. rwmb_meta('rw_optional_info_title') .'</h3>';
        
        $itemsTitle = rwmb_meta('rw_optional_info_item_title');
        $itemsDescription = rwmb_meta('rw_optional_info_item_description');
       

        foreach ($itemsTitle as $index => $title) {
            $id = $index + 1;
            $html .= '<div id="accordion-' . $index . '" class="accordion-title small">';
            $html .= $title;
            $html .= '</div>';
            $html .= '<div class="accordion-description">';
            $html .= $itemsDescription[$index];
            $html .= '</div>';
            //echo var_dump($act);
    
        }
        //$html .= rwmb_meta('rw_days');
   

    echo $html;

}





