<!DOCTYPE html>
<html lang="pt-br">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Responsive Bootstrap4 Shop Template, Created by Imran Hossain from https://imransdesign.com/">

	<?php $PAGE = "Cadastro Cliente"; ?>
	<title><?= $PAGE ?></title>

	<?php
	require_once("../fragments/styles.php");
	?>

</head>

<body>

	<?php
		include_once("../fragments/loader.php");
		include_once("../fragments/header.php");
	?>

	<!-- contact form -->
	<div class="contact-from-section mt-100 mb-150">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 mb-5 mb-lg-0">
					<div class="form-title">
					</div>
					<div class="contact-form">
						<form method="POST" id="customer-form" autocomplete="off">
							<div class="row">
								<div class="col-md-4">
									<label for="name">Nome*</label>
									<input class="form-control" type="text" name="name" id="name" required>
								</div>
								<div class="col-md-5">
									<label for="email">Email*</label>
									<input class="form-control" type="email" name="email" id="email" required>
								</div>
								<div class="col-md-3">
									<label for="phone">Telefone*</label>
									<input class="form-control" type="text" name="phone" id="phone" required>
								</div>
							</div>
							<div class="row mt-3">
								<div class="col-md-3">
									<label for="zipcode">CEP*</label>
									<input class="form-control" type="text" name="zipcode" id="zipcode" required>
								</div>
								<div class="col-md-4">
									<label for="address">Logradouro*</label>
									<input class="form-control" type="text" name="address" id="address" required>
								</div>
								<div class="col-md-2">
									<label for="number">Nº*</label>
									<input class="form-control" type="number" name="number" id="number">
								</div>
								<div class="col-md-3">
									<label for="complement">Complemento</label>
									<input class="form-control" type="text" name="complement" id="complement">
								</div>
							</div>

							<div class="row mt-3 mb-5">
								<div class="col-md-4">
									<label for="district">Bairro*</label>
									<input class="form-control" type="text" name="district" id="district" required>
								</div>
								<div class="col-md-2">
									<label for="state">Estado*</label>
									<input class="form-control" type="text" name="state" id="state" required>
								</div>
								<div class="col-md-4">
									<label for="city">Cidade*</label>
									<input class="form-control" type="text" name="city" id="city" required>
								</div>
							</div>

							<p><input type="submit" value="Salvar"></p>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end contact form -->

	<?php
		include_once("../fragments/footer.php");
		include_once("../fragments/copyright.php");
		require_once("../fragments/scripts.php");
	?>

	<!-- Custom Scripts -->
	<script src="assets/custom/customer-form.js"></script>
	<script src="assets/js/jquery.inputmask.min.js"></script>

</body>

</html>