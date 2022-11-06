<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Responsive Bootstrap4 Shop Template, Created by Imran Hossain from https://imransdesign.com/">

	<?php $PAGE = "404 - Not Found"; ?>
	<title><?=$PAGE?></title>

	<?php
		require_once("../fragments/styles.php");
	?>

</head>
<body>

	<?php
		include_once("../fragments/loader.php");
		include_once("../fragments/header.php");
	?>

	<!-- error section -->
	<div class="full-height-section error-section">
		<div class="full-height-tablecell">
			<div class="container">
				<div class="row">
					<div class="col-lg-8 offset-lg-2 text-center">
						<div class="error-text">
							<i class="far fa-sad-cry"></i>
							<h1>Oops! Not Found.</h1>
							<p>The page you requested for is not found.</p>
							<a href="index.html" class="boxed-btn">Back to Home</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<?php 
		include_once("../fragments/footer.php");
		include_once("../fragments/copyright.php");
		require_once("../fragments/scripts.php");
	?>
	
</body>
</html>