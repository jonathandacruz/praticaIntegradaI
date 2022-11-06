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
						<div class="alert alert-success alert-dismissible fade show" role="alert" id="success_message">
							Produto cadastrado com sucesso!
							<button type="button" class="close" data-dismiss="alert" aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>

						</div>
						<div class="alert alert-danger alert-dismissible fade show" role="alert" id="fail_message">
							Erro ao cadastrar o produto!
							<button type="button" class="close" data-dismiss="alert" aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>

						</div>
					</div>
					<div id="form_status"></div>
					<div class="contact-form">
						<form method="POST" id="item-form">
							<div class="row">
								<div class="col-md-6">
									<label for="name">Nome do Produto*</label>
									<input class="form-control" type="text" name="name" id="name" required>
								</div>
								<div class="col-md-6">
									<label for="img_url">URL da Imagem</label>
									<input class="form-control" type="text" name="img_url" id="img_url" placeholder="http://... ou https://...">
								</div>

							</div>
							<div class="row">
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
								<div class="col-md-3">
									<label for="price">Preço*</label>
									<input class="form-control" type="number" name="price" id="price">
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

							<div class="row mb-5" id="img_row">
								<div class="col-md-6">
									<img src="" alt="" id="img_loader" height="200px" width="200px">
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
	<script src="assets/custom/items.js"></script>

</body>

</html>