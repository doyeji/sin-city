<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">

	<title>Gallery|Frank Miller | Sin city : A dame to kill for</title>
	<link rel="stylesheet" type="text/css" href="asset/css/normalize.css">
	<link rel="stylesheet" type="text/css" href="asset/css/main.css">
	<link rel="stylesheet" type="text/css" href="asset/css/roundabout.css">
	<link rel="stylesheet" type="text/css" href="asset/css/roundabout-style.css">

</head>
<body>

	<?php include("asset/include/navigation.inc.php"); ?>

	<div class="content">
		<div class="slider">
			<ul>
				<li><div class="fill marv-gallery"></div></li>
				<li><div class="fill ava-gallery"></div></li>
				<li><div class="fill jonny-gallery"></div></li>
				<li><div class="fill nancy-gallery"></div></li>
				<li><div class="fill dwight-gallery"></div></li>
			</ul>
		</div>
	</div>


	<script src="http://code.jquery.com/jquery-1.10.1.min.js"></script>
	<script type="text/javascript" src="asset/js/roundabout.js"></script>



	<script type="text/javascript">
		$(document).ready(function(){
		$('.slider').roundabout({infinite: true, speed: 200});
		});

	</script>


</body>