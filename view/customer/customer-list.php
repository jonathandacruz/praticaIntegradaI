<?php include('../../services/CustomerService.php'); ?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="description" content="Responsive Bootstrap4 Shop Template">

	<?php $PAGE = "Clientes"; ?>
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
						<a href="cadastro-cliente" class="btn btn-success btn-sm">Cadastrar</a>
						<thead>
							<tr>
								<th scope="col">#</th>
								<th scope="col">Nome</th>
								<th scope="col">E-mail</th>
								<th scope="col">Telefone</th>
								<th scope="col">Endereço</th>
								<th scope="col">Bairro</th>
								<th scope="col">Cidade</th>
								<th scope="col">Estado</th>
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
								<td><?= $row['email'] ?></td>
								<td><?= $row['phone'] ?></td>
								<td><?= $row['address'] . ", Nº " . $row['number']?></td>
								<td><?= $row['district'] ?></td>
								<td><?= $row['city'] ?></td>
								<td><?= $row['state'] ?></td>
								<td>
									<a href="editar-cliente?id=<?= $row['id'] ?>" class="btn btn-primary btn-sm">Editar</a>
									<a href="service/clienteDelete?id=<?= $row['id'] ?>" class="btn btn-danger btn-sm" id="btnExcluir">Excluir</a>
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