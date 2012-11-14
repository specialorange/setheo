	<!-- Javascript Libraries
	================================================== -->
	<!-- Placed at the end of the document so the pages load faster -->
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<script type="text/javascript" src="js/jquery.isotope.min.js"></script>
	<script type="text/javascript" src="js/jquery.touchSwipe.js"></script>
	<script type="text/javascript" src="js/functions.min.js"></script>
	
	<!-- CUSTOM
	================================================== -->
	<script type="text/javascript">	
		$(document).ready(function(){
				var active = document.location.href.match(/[^\/]+$/)[0];
console.log(active);
				if (active === "") { 
					active = "index.php";
					$('a[href^="' + active + '"]').parent().addClass('active');
				} else {
					$('a[href^="' + active + '"]').parent().addClass('active');					
				}
			}); // must launch CHROME with this in terminal `/Applications/Google\ Chrome.app/Contents/MacOS/Google\ Chrome --allow-file-access-from-files`
	</script>
