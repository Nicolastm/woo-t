<?php do_action('wp_footer'); ?>

<div class="footer">
	<p><span class="fa fa-shopping-cart"></span> Wootiendas.com | 2015</p>
</div>

<!-- Start Live Chat Code -->
<script type="text/javascript" src="http://www.wootiendas.com/soporte/assets/js/jquery.min.js"></script>
<script type="text/javascript">jQuery.noConflict();</script>
<script type="text/javascript">jQuery(document).ready(function($) {$.ajaxSetup({xhrFields: {withCredentials: true},headers: {"X-Requested-With": "XMLHttpRequest"}});$.ajax({type: "GET",url: "http://www.wootiendas.com/soporte/live_chat",dataType: "html",success: function(data) {$("body").append(data);}});});</script>
<!-- End Live Chat Code -->
</body>
</html>