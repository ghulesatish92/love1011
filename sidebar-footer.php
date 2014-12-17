<?php
/* 	Design Theme's Footer Sidebar Area
	Copyright: 2012-2014, D5 Creation, www.d5creation.com
	Based on the Simplest D5 Framework for WordPress
	Since Design 1.0
*/
	
	if (esc_html(of_get_option ( 'fsidebar', '1')) != '1'):	
	if (   ! is_active_sidebar( 'sidebar-2'  )
		&& ! is_active_sidebar( 'sidebar-3' )
		&& ! is_active_sidebar( 'sidebar-4' )
		&& ! is_active_sidebar( 'sidebar-5'  )
	   )
		return;
	endif;
		
	// If we get this far, we have widgets. Let do this.
?>
<div id="footer-sidebar">
	<div id="first-footer-widget" class="widget">
	<?php if ( is_active_sidebar( 'sidebar-2' ) ) : dynamic_sidebar( 'sidebar-2' ); else: if (esc_html(of_get_option ( 'fsidebar', '1')) == '1'):?>
        
        <aside id="archives" class="widget">
					<h3 class="widget-title">RECENT NEWS</h3>
					
						<ul>
<li><a href="#"->> many desktop publishing packages and web page<a></li>
<li><a href="#"->> loren ipsum has been publishing packages and web page<a></li>
<li><a href="#"->> many desktop publishing packages and web page<a></li>
</ul>
					
		</aside>
        <?php endif; endif;?>
        </div><!-- #first .widget-area -->
        

	<div id="footer-widgets" class="widget">
    <?php if ( is_active_sidebar( 'sidebar-3' ) ) : dynamic_sidebar( 'sidebar-3' ); else: if (esc_html(of_get_option ( 'fsidebar', '1')) == '1'):?>
        <aside class="widget widget_text"><h3 class="widget-title">RECENT PROJECT</h3><div class="textwidget"><img src="satish/wordpress/1.jpg" height="42" alt="project1" width="104"></img></div></aside>
       <?php endif; endif;?>
	</div><!-- #second .widget-area -->
	
	
	<div id="footer-widgets" class="widget">
    <?php if ( is_active_sidebar( 'sidebar-4' ) ) : dynamic_sidebar( 'sidebar-4' ); else: if (esc_html(of_get_option ( 'fsidebar', '1')) == '1'):?>
        <aside class="widget">
					<h3 class="widget-title">STAY IN TOUCH</h3>
					<ul>
						<li><a href="#">-> Facebook</a></li>
                                                 <li><a href="#">-> twitter</a></li>
                                                 <li><a href="#">-> linked In</a></li>
                                                  <li><a href="#">-> RSS</a></li> 
					</ul>
		</aside>
        <?php endif; endif;?>
	</div><!-- #third .widget-area -->
    
    <div id="footer-widgets" class="widget">
    <?php if ( is_active_sidebar( 'sidebar-5' ) ) : dynamic_sidebar( 'sidebar-5' ); else: if (esc_html(of_get_option ( 'fsidebar', '1')) == '1'):?>
        <aside id="meta" class="widget">
  

					<h3 class="widget-title">SECURITY&POLICY
</h3>
					<ul>
						<?php wp_register(); ?>
						
						<?php wp_meta(); ?>
                        <li>Security</li>
                        <li>Privacy policy</li>
                        <li>Term of Services</li>
					</ul>
		</aside>
        <?php endif; endif;?>
	</div><!-- #third .widget-area -->
</div><!-- #footerwidget -->

