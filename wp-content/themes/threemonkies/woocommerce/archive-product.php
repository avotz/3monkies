<?php
/**
 * The Template for displaying product archives, including the main shop page which is a post type archive
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/archive-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see 	    https://docs.woocommerce.com/document/template-structure/
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version     3.3.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

get_header( 'shop' );

?>

<div class="main">

          <div class="banner">
              <!-- <div class="banner-container">
                <div class="banner-info">
                  
                  <h1 class="animated fadeIn">Experience Costa Rica with</h1>
                  <p>Local Specialists</p>
                </div>
                
              </div> 
               -->
          </div>
          <div class="home-container">
            <div class="home-info">
                    
                    <h1 class="animated fadeIn">Experience Costa Rica with</h1>
                    <p>Local Specialists</p>
            </div>
           </div> 

         
       </div>
<?php
get_footer('shop');
?>
