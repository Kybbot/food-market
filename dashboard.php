<?php 

include('php/input-output.php');
require_once('php/database.php');

if ( isset($_SESSION['login']) && $_SESSION['login'] == 'on' ) {
} else {
	header('Location: index.php');
}

?>
<!DOCTYPE html>
<html lang="ru">

<head>

	<meta charset="utf-8">
	<!-- <base href="/"> -->

	<title>Food market</title>
	<meta name="description" content="">

	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	
	<!-- Template Basic Images Start -->
	<meta property="og:image" content="path/to/image.jpg">
	<link rel="icon" href="img/favicon/favicon.ico">
	<link rel="apple-touch-icon" sizes="180x180" href="img/favicon/apple-touch-icon-180x180.png">
	<!-- Template Basic Images End -->
	
	<!-- Custom Browsers Color Start -->
	<meta name="theme-color" content="#000">
	<!-- Custom Browsers Color End -->

	<link rel="stylesheet" href="./css/main.min.css">

</head>

<body class="dashboard-body">

	<header class="dashboard-header">
		<div class="container">
			<div class="row">
				<div class="col-xl-6 col-lg-6 col-md-6">
					<div class="logo">
						<i class="fa fa-shopping-cart" aria-hidden="true"></i>
						<h2 class="logo-name">Спась<span class="yellow">кий</span></h2>
					</div>
				</div>
				<div class="col-xl-4 offset-xl-2 col-lg-4 col-md-4 offset-lg-0 d-flex align-items-center">
					<h2 class="header-title">Админ-панель</h2>
				</div>
			</div>
		</div>
	</header>

	<section class="dashboard-info">
		<div class="container">
			

			<div class="row">

				<div class="nav-items">
					<div class="col-xl-12 d-flex justify-content-center align-items-center flex-wrap">

						<div class="dashboard-item add" id="add-btn">
							<h2 class="dashboard-item-title">Добаваить товар</h2>
						</div>
						<div class="dashboard-item view" id="view-btn">
							<h2 class="dashboard-item-title">Просмотрть товары</h2>
						</div>

					</div>
				</div>

			</div>

			<!-- <div class="row">

				<nav>
					<div class="col-xl-12">
						<ul>
							<li><a href="#">Выпечка</a></li>
							<li><a href="#">Кондитерка</a></li>
							<li><a href="#">Напитки</a></li>
							<li><a href="#">Морепродукты</a></li>
							<li><a href="#">Фрукты</a></li>
							<li><a href="#">Мясо</a></li>
							<li><a href="#">Молочка</a></li>
							<li><a href="#">Овощи</a></li>
						</ul>
					</div>
				</nav>				

			</div> -->

		</div>
	</section>

	<main class="dashboard-add" style="padding-bottom: 50px;">
		<div class="container">
			<div class="row">

				<div class="col-xl-12">
					<div class="dashboard-main">

						<div class="row">
							<div class="col-xl-12">
								<h2 class="dashboard-main-title">Добавить товар</h2>
							</div>
						</div>

						<div class="row">
							<div class="col-xl-12">
								<form class="add-product-form" action="php/input-output.php" method="POST" enctype="multipart/form-data">
									<fieldset class="form-group">
										<input name="name" type="text" placeholder="Название">
										<input name="price" type="text" placeholder="Цена">
										<input name="category" list="category" placeholder="Категория">
										<datalist id="category">
											<option>1</option>
											<option>2</option>
											<option>3</option>
											<option>4</option>
											<option>5</option>
											<option>6</option>
											<option>7</option>
											<option>8</option>
										</datalist>
									</fieldset>									
									<fieldset  class="form-checkbox">
										<input name="featured" type="checkbox" id="featured" value="1">
										<label for="featured">Рекомендуемые</label>
									</fieldset>
									<fieldset  class="form-photo">
										<label for="photo">Фото:</label>
										<input type="hidden" name="MAX_FILE_SIZE" value="5242880">
										<input name="img" type="file" id="photo">
									</fieldset>
									<input name="submit" type="submit" value="Добавть" class="submit-btn">						
									<input name="reset" type="reset" value="Очистить" class="reset-btn">						
								</form>
							</div>
						</div>

					</div>
				</div>

			</div>
		</div>
	</main>

	<main class="dashboard-view hide" style="padding-bottom: 50px;">
		<div class="container">
			<div class="row">

				<div class="col-xl-12">
					<div class="dashboard-main">

						<div class="row">
							<div class="col-xl-6">
								<h2 class="dashboard-main-title">Просмотрть товары</h2>
							</div>
							<div class="col-xl-6">
								<div class="items-style d-flex justify-content-end align-items-center h-100 d-inline-block">
									<button class="items-style-btn" id="large-items"><i class="fa fa-th-large" aria-hidden="true"></i></button>
									<button class="items-style-btn" id="small-items"><i class="fa fa-th" aria-hidden="true"></i></button>
								</div>
							</div>
						</div>
						
						<div class="row">
							<div class="col-xl-12">
								
									<div class="product-items">

									<?php $products = getAllProducts();						
									foreach( $products as $product) : ?>
										<div class="product-item dashboard-product-item">
											<img src="img/<?php echo $product['img']?>" alt="">
											<div class="product-item-title"><?php echo $product['name']?></div>
											<div class="product-item-price"><?php echo $product['price']?> грн</div>
										</div>											
									<?php endforeach;?>
												
									</div>

							</div>
						</div>

					</div>
				</div>
				

			</div>
		</div>
	</main>

	<script src="js/jquery-3.3.1.min.js"></script>
	<script src="js/common.js"></script>

</body>
</html>