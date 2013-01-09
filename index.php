<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html class="not-ie" lang="en"> <!--<![endif]-->
<head>
	<meta charset="utf-8">
	<title>Setheo Holdings</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="author" content="Setheo Holdings Copyright 2012">

	<?php include ("component/head.php"); ?> 

	<!-- Custom css -->
	<link href="css/user.css" rel="stylesheet">
	<link href="css/style.min.css" rel="stylesheet">

	<link href="css/font-awesome/font-awesome.css" rel="stylesheet">
	<!--[if IE 7]>
		<link href="css/font-awesome/font-awesome-ie7.css" rel="stylesheet">
	<![endif]-->

	<!-- Load Open sans from Google Font Directory -->
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800' rel='stylesheet' type='text/css'>
	<!-- HTML5 shim, for IE6-8 support of HTML5 elements -->

	<!--[if lt IE 9]>
		<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->

	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
	<script>!window.jQuery && document.write(unescape('%3Cscript src="js/jquery-1.7.2.min.js"%3E%3C/script%3E'))</script>

</head>
<body>

	<!-- NAVIGATION -->
	<?php include ("component/navbar.php"); ?> 

	<!-- CONTENT -->
	<div class="container">
		<?php if ($_GET["page"]=="divisions") {
				include ("component/pages/divisions.php");
			}
			elseif ($_GET["page"]=="news") {
				include ("component/pages/news.php");
			}
			elseif ($_GET["page"]=="managementTeam") {
				include ("component/pages/managementTeam.php");
			}
			elseif ($_GET["page"]=="projects") {
				include ("component/pages/projects.php");
			}
			elseif ($_GET["page"]=="contact") {
				include ("component/pages/contact.php");
			}
			elseif ($_GET["page"]=="about") {
				include ("component/pages/about.php");
			} else {
				include ("component/pages/home.php");
				include ("component/pages/divisions.php");
				include ("component/pages/news.php");
				include ("component/pages/managementTeam.php");
				include ("component/pages/projects.php");
				include ("component/pages/contact.php");
				include ("component/pages/about.php");
			}
		?>
		
	</div>

	<!-- Footer -->
	<?php include ("component/footer.php"); ?> 

	<!-- JS -->
	<?php include ("component/js.php"); ?> 

</body>

</html>