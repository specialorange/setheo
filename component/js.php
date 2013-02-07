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
			//if the hash has slash and whatnot, throw that stuff out, we don't care about it here
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
			var hideOldUnhideNew = function($this) {
				//hide current content section
				$('.page').addClass('hidden');
				//unhide new one
				var hash = $this.find('a').attr('href');
				$(hash+"-page").removeClass('hidden');
				//remove triangle from old page
				$(".pages .active").removeClass('active');
				//add trianlge to new page
				if ($this.hasClass('nav-li')){
					$this.addClass('active');
				} else {
					var slashPosition = hash.indexOf("/");
					if (slashPosition > 0) {
						hash = hash.substr(0,slashPosition);
					}
					var triangle = hash;
					$('a[href="'+triangle+'"]').parent().addClass("active");
				}
				// fixing the strange filter on the 'About' Page when accessed from another page
				if($this.find('a[href]').attr('href')=="#projects"){
					$("a[data-filter='*']").click();
				// Fix the google map rendering issue by destroying it and reloading it if accesses from another page
				} else if ($this.find('a[href]').attr('href')=="#contact"){
					var map = "<iframe width=\"100%\" height=\"350\" frameborder=\"0\" scrolling=\"no\" marginheight=\"0\" marginwidth=\"0\" src=\"https://maps.google.com/maps/ms?msa=0&amp;msid=218409705483020318852.0004d2d08baa6531e6098&amp;hl=en&amp;ie=UTF8&amp;t=m&amp;ll=9.795678,-61.171875&amp;spn=103.720297,351.5625&amp;z=2&amp;output=embed\"></iframe><br /><small>View <a href=\"https://maps.google.com/maps/ms?msa=0&amp;msid=218409705483020318852.0004d2d08baa6531e6098&amp;hl=en&amp;ie=UTF8&amp;t=m&amp;ll=9.795678,-61.171875&amp;spn=103.720297,351.5625&amp;z=2&amp;source=embed\" style=\"color:#0000FF;text-align:left\">SETHEO Holdings</a> in a larger map</small>";
					$("#map").html(map);
				};
			};

			//replace li hrefs to #*page* when JS is enabled
				// href="index.php?page=home" || href="index.php?page=divisions"
				$('.linkReplace a').each(function(){
					var currentHREF = $(this).attr('href');
					var pageName = currentHREF.substr(15);
					//to href="#home" || href="#divisions"
					var newHREF = "#"+pageName;
					$(this).attr('href', newHREF);
				});
			page();
			// replace All links with the JS version if JS is enabled
			$('.linkReplace').click(function(event){
				hideOldUnhideNew($(this));
			})

		}); // must launch CHROME with this in terminal `/Applications/Google\ Chrome.app/Contents/MacOS/Google\ Chrome --allow-file-access-from-files`

//Push/Pop State

	</script>
