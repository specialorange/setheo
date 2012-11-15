	<!-- Javascript Libraries
	================================================== -->
	<!-- Placed at the end of the document so the pages load faster -->
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<script type="text/javascript" src="js/jquery.isotope.min.js"></script>
	<script type="text/javascript" src="js/jquery.touchSwipe.js"></script>
	<script type="text/javascript" src="js/functions.js"></script>
	
	<!-- CUSTOM
	================================================== -->
	<script type="text/javascript">	
		var page = function() {
			var hash = window.location.hash;
			if (hash.length === 0) {
				hash = "#home"
			}
			//if the has has slash and whatnot, throw that stuff out, we don't care about it here
			var slashPosition = hash.indexOf("/");
			if (slashPosition > 0) {
				hash = hash.substr(0,slashPosition);
			}
			var triangle = hash;
			hash += "-page";
			$('.page').addClass('hidden');
			$(hash).removeClass('hidden');
			//li add arrow
			$('a[href="'+triangle+'"]').parent().addClass("active");
		};

		$(document).ready(function(){
			//replace li hrefs to #*page* when JS is enabled
				// href="index.php?page=home" || href="index.php?page=divisions"
				$('.nav-li a').each(function(){
					var currentHREF = $(this).attr('href');
					var pageName = currentHREF.substr(15);
					//to href="#home" || href="#divisions"
					var newHREF = "#"+pageName;
					$(this).attr('href', newHREF);
				});
			page();
			$('.nav-li').click(function(event){
				//hide current content section
				$('.page').addClass('hidden');
				//unhide new one
				var hash = $(this).find('a').attr('href');
				$(hash+"-page").removeClass('hidden');
				//remove triangle from old page
				$(".pages .active").removeClass('active');
				//add trianlge to new page
				$(this).addClass('active');
			});

		}); // must launch CHROME with this in terminal `/Applications/Google\ Chrome.app/Contents/MacOS/Google\ Chrome --allow-file-access-from-files`



	</script>
