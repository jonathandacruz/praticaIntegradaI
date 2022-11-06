<?php
	require("../services/ItemService.php");
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Responsive Bootstrap4 Shop Template, Created by Imran Hossain from https://imransdesign.com/">

	<?php $PAGE = "Produtos"; ?>
	<title><?=$PAGE?></title>

	<?php
		require_once("fragments/styles.php");
	?>

</head>
<body>

	<?php 
		include_once("fragments/loader.php");
		include_once("fragments/header.php");
	?>

	<!-- products -->
	<div class="product-section mt-150 mb-150">
		<div class="container">

			<div class="row">
                <div class="col-md-12">
                    <div class="product-filters">
                        <ul>
                            <li class="active" data-filter="*">Todas</li>
                            <li data-filter=".Frutas">Frutas</li>
                            <li data-filter=".Verduras">Verduras</li>
                        </ul>
                    </div>
                </div>
            </div>
			 
			<div class="row product-lists">
				<?php	

					$result = getItemsDb();
					$items = mysqli_fetch_all($result);
					foreach($items as $item) {
						// var_dump($item);
				?>
				<div class="col-lg-4 col-md-6 text-center <?= $item[2]?>">
					<div class="single-product-item">
						<div class="product-image">
							<a href="single-product.html"><img src="<?= $item[4] ? $item[4] : 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTl93jGvfkgObvJTYey-UbcG3oRDyHXYrlFoz0-ID0JMA&s'?>" height="200px" width="200px" alt=""></a>
						</div>
						<h3 class="product-name"><?=$item[1]?></h3>
						<p class="product-price">R$<?=$item[3]?><span><?=$item[5]?></span></p>
						<div>
							<label>Quantidade</label>
							<input type="number" class="product-quantity" min="1" max="99" value="1">
						</div>
						<a class="cart-btn"><i class="fas fa-shopping-cart"></i> Adicionar ao carrinho</a>
					</div>
				</div>
			<?php	
			}
			?>
 
			</div>

			<div class="row">
				<div class="col-lg-12 text-center">
					<div class="pagination-wrap">
						<ul>
							<li><a href="#">Prev</a></li>
							<li><a href="#">1</a></li>
							<li><a class="active" href="#">2</a></li>
							<li><a href="#">3</a></li>
							<li><a href="#">Next</a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end products -->

	<?php 
		include_once("fragments/footer.php");
		include_once("fragments/copyright.php");
		require_once("fragments/scripts.php");
	?>
	
</body>
</html>