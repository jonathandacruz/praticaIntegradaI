<!DOCTYPE html>
<html lang="pt-br">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Responsive Bootstrap4 Shop Template, Created by Imran Hossain from https://imransdesign.com/">

	<?php $PAGE = "Cadastro Produto"; ?>
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
						<form method="POST" id="item-form" autocomplete="off">
							<div class="row">
								<div class="col-md-4">
									<label for="name">Nome do Produto*</label>
									<input class="form-control" type="text" name="name" id="name" required>
								</div>
								<div class="col-md-7">
									<label for="img_url">URL da Imagem</label>
									<input class="form-control" type="text" name="img_url" id="img_url" placeholder="http://... ou https://...">
								</div>
							</div>
							<div class="row mt-3">
								<div class="form-group col-md-3">
									<label for="category">Unidade de Medida*</label>
									<select class="form-control form-select-lg" id="unit" required>
										<option disabled selected value="">Selecionar...</option>
										<option value="BDJ">Bandeja</option>
										<option value="KG">Kilo</option>
										<option value="PCT">Pacote</option>
										<option value="UN">Unidade</option>
									</select>
								</div>
								<div class="col-md-2">
									<label for="price">Preço*</label>
									<input class="form-control" type="text" name="price" id="price" placeholder="1.00">
								</div>
								<div class="form-group col-md-3">
									<label for="category">Categoria*</label>
									<select class="form-control form-select-lg" id="category" required>
										<option disabled selected value="">Selecionar...</option>
										<option value="Frutas">Frutas</option>
										<option value="Legumes">Legumes</option>
										<option value="Verduras">Verduras</option>
									</select>
								</div>
							</div>

							<div class="row mt-3 mb-5">
								<div class="col-md-6">
									<label for="description">Descrição</label>
									<textarea class="form-control" name="description" id="description" cols="30" rows="5"></textarea>
								</div>
								<div class="col-md-4" id="img_row">
									<img src="" alt="" id="img_loader" height="200px" width="200px">
								</div>
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
	<script src="assets/custom/item-form.js"></script>

</body>

</html>