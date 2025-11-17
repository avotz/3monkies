<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package threemonkies
 */

get_header();
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
                    
                    <span class="animated fadeIn">Experience Costa Rica with</span>
                    <p>Local Specialists</p>

                    <div>
                      <?php dynamic_sidebar( 'home-search' ); ?>
                    </div>
            </div>
           </div> 

         
       </div>

<?php
//get_sidebar();
get_footer();
