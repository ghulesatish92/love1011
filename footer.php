<?php
/* Design Theme's Footer
	Copyright: 2012-2014, D5 Creation, www.rtpanel.com
	Based on the Simplest D5 Framework for rtpanel
	Since Design 1.0
*/
?>




</div> <!-- conttainer -->
<div id="footer">

<?php
   	get_sidebar( 'footer' );
?>
</div> <!-- footer -->
<div id="footer-menu">
<ul>
<li><a href="#">Home</a></li>
<li><a href="#">News</a></li>
<li><a href="#">Gallery</a></li>
<li><a href="#">Pages</a></li>
<li><a href="#">Layout</a></li>
<li><a href="#">Features</a></li>
<li><a href="#">Blogs</a></li>
<li><a href="#">Contact</a></li>
</ul>
</div>

<div id="creditline">&copy;&nbsp;<?php echo date("Y") ?>&nbsp;<?php bloginfo( 'name' ); design_credit(); ?></div>

<?php wp_footer(); ?>
</body>
</html>
