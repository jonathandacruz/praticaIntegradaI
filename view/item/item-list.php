<?php include('../../services/ItemList.php'); ?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="description" content="Responsive Bootstrap4 Shop Template">

	<?php $PAGE = "Produtos"; ?>
	<title>
		<?= $PAGE ?>
	</title>

	<?php
		require_once("../fragments/styles.php");
	?>

</head>

<body>

	<?php
		include_once("../fragments/header.php");
	?>

	<!-- contact form -->
	<div class="contact-from-section mt-100 mb-150">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 mb-5 mb-lg-0">
					<table class="table table-sm">
						<a href="cadastro-produto" class="btn btn-success btn-sm">Cadastrar</a>
						<thead>
							<tr>
								<th scope="col">#</th>
								<th scope="col">Produto</th>
								<th scope="col">Imagem</th></th>
								<th scope="col">Unidade Venda</th>
								<th scope="col">Preço</th>
								<th scope="col">Categoria</th>
								<th scope="col">Ações</th>
							</tr>
						</thead>
						<tbody>
							<?php
								$results = getResults(); 
								while($row = $results->fetch_assoc()) { ?>
							<tr>
								<th scope="row"><?= $row['id'] ?></th>
								<td><?= $row['name'] ?></td>
								<td><img src="<?= $row['img_url'] ?>" width="50px" height="50px"></td>
								<td><?= $row['unit'] ?></td>
								<td><?= 'R$' . $row['price'] ?></td>
								<td><?= $row['category'] ?></td>
								<td>
									<a href="editar-produto?id=<?= $row['id'] ?>" class="btn btn-primary btn-sm">Editar</a>
									<a href="service/produtoDelete?id=<?= $row['id'] ?>" class="btn btn-danger btn-sm">Excluir</a>
								</td>
							</tr>
							<?php } closeConnection(); ?>
						</tbody>
					</table>
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