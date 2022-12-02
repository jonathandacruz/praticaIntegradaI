<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Responsive Bootstrap4 Shop Template, Created by Imran Hossain from https://imransdesign.com/">

	<?php $PAGE = "Carrinho"; ?>
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

	<!-- cart -->
	<div class="cart-section mt-150 mb-150">
 
		<div class="container">
		<a class="cart-clear-shop"><i class="fas fa-shopping-cart"></i> Esvaziar carrinho</a>

			<div class="row">
				<div class="col-lg-8 col-md-12">
					<div class="cart-table-wrap">
						<table class="cart-table">
							<thead class="cart-table-head">
								<tr class="table-head-row">
									<th class="product-remove"></th>
									<th class="product-image"></th>
									<th class="product-name">Produto</th>
									<th class="product-price">Valor</th>
									<th class="product-quantity">Quantidade</th>
									<th class="product-total">Total</th>
								</tr>
							</thead>
							<tbody>
								 
								 
							</tbody>
						</table>
					</div>
				</div>

				


				<div class="col-lg-4">
					 

					<div class="coupon-section">
						<h3>Aplicar cupom</h3>
						<div class="coupon-form-wrap">
							<form action="pagamento">
								<p><input type="text" placeholder="Cupom de Desconto"></p>
								<p><input type="submit" value="Pagar agora"></p>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end cart -->

	<?php 
		include_once("../fragments/footer.php");
		include_once("../fragments/copyright.php");
		require_once("../fragments/scripts.php");
		require_once("../fragments/shop.php");
	?>
	
</body>
</html>
