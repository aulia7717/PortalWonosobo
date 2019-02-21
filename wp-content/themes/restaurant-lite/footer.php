<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package SKT Restaurant
 */
?>
<div id="footer-wrapper">
    	<div class="container">
             <div class="cols-4 widget-column-1">            	
               <h5><?php echo get_theme_mod('menu_title',__('Supported By','restaurant')); ?></h5>
                <div class="menu">
                  <p>Iconplus SBU Semarang</p>
                <!-- <img src="<?php echo get_template_directory_uri(); ?>/images/icon+.png"/></div> -->
                <!-- <?php wp_nav_menu(array('theme_location' => 'primary')); ?> -->
                  
                </div>
            </div>                  
			         
             
             <div class="cols-4 widget-column-2">            	
               <h5><?php echo get_theme_mod('about_title',__('Our Philosophy','restaurant')); ?></h5>            	
				<p><?php echo get_theme_mod('about_description',__('Consectetur, adipisci velit, sed quiaony on numquam eius modi tempora incidunt, ut laboret dolore agnam aliquam quaeratine voluptatem. ut enim ad minima veniamting suscipit lab','restaurant')); ?></p>            	
              </div>     
                      
               <div class="cols-4 widget-column-3">
                   <h5><?php echo get_theme_mod('social_title',__('Follow Us','restaurant')); ?></h5>  
                             	
					<div class="clear"></div>                
                  <div class="social-icons">
					<?php if ( get_theme_mod('fb_link') != "") { ?>
                    <a title="facebook" class="fb" target="_blank" href="<?php echo esc_url(get_theme_mod('fb_link','#facebook')); ?>"></a> 
                    <?php } else { ?>
                    <?php echo '<a href="https://www.facebook.com/" target="_blank" class="fb" title="facebook"></a>'; } ?>
                    
                    <?php if ( get_theme_mod('youtube_link') != "") { ?>
                    <a title="youtube" class="tw" target="_blank" href="<?php echo esc_url(get_theme_mod('youtube_link','#youtube')); ?>"></a>
                    <?php } else { ?>
                    <?php echo '<a href="https://www.youtube.com/" target="_blank" class="tw" title="youtube"></a>'; } ?> 
                    
                    <?php if ( get_theme_mod('gplus_link') != "") { ?>
                    <a title="google-plus" class="gp" target="_blank" href="<?php echo esc_url(get_theme_mod('gplus_link','#gplus')); ?>"></a>
                    <?php } else { ?>
                    <?php echo '<a href="https://plus.google.com/" target="_blank" class="gp" title="google-plus"></a>'; } ?>
                    
                    <?php if ( get_theme_mod('instagram_link') != "") { ?> 
                    <a title="instagram" class="in" target="_blank" href="<?php echo esc_url(get_theme_mod('instagram_link','#instagram')); ?>"></a>
                    <?php } else { ?>
                    <?php echo '<a href="https://www.instagram.com/" target="_blank" class="in" title="instagram"></a>'; } ?>
					  
					          
                  </div>   
                </div>
                
                <div class="cols-4 widget-column-4">
                   <h5><?php echo get_theme_mod('contact_title',__('Contact Us','restaurant')); ?></h5> 
                   <p><?php echo get_theme_mod('contact_add',__('100 King St, Melbourne PIC 4000,<br /> Australia','restaurant')); ?></p>
              <div class="phone-no"><?php echo get_theme_mod('contact_no',__('<strong>Phone:</strong> (0286) 321341','restaurant')); ?>
              <div class="phone-no"><?php echo get_theme_mod('contact_no',__('<strong>Fax:</strong> (0286) 321341','restaurant')); ?> <br  />
           <strong> Email:</strong> <a href="mailto:<?php echo get_theme_mod('contact_mail','contact@company.com'); ?>"><?php echo get_theme_mod('contact_mail','contact@company.com'); ?></a></div>
              
                   
                </div><!--end .widget-column-4-->
                
                
            <div class="clear"></div>
        </div><!--end .container-->
        
        <!-- <div class="copyright-wrapper"> -->
        	<!-- <div class="container"> -->
            	<!-- <div class="copyright-txt"><?php echo restaurant_credit(); ?></div> -->
                <!-- <div class="Supported By"><?php echo restaurant_themebytext("Iconplus SBU Semarang"); ?></div> -->
                <!-- <div class="Supported By">Supproted By : Iconplus SBU Semarang</div> -->
              <!-- </div> -->
            <!-- <div class="clear"></div> -->
        <!-- </div> -->
    </div>
<?php wp_footer(); ?>

</body>
</html>