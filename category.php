<?php include('php/templates/head.php');?>

<div class="wrapper">

	<?php include('php/templates/header.php');?>

	<section class="info">
		<div class="container">
			<div class="row">

				<nav>
					<div class="col-xl-12">
						<ul>
							<li><a href="index.php">Главная</a></li>
							<?php $categories = getCategorie();?>
							<?php foreach($categories as $category) : ?>
								<li><a href="category.php?catId=<?php echo $category['id']?>"><?php echo $category['title']?></a></li>
							<?php endforeach ;?>
						</ul>
					</div>
				</nav>				
	
			</div>
		</div>
	</section>

	<?php
		$categories = getCategorieById($_GET['catId']);
	?>
	<?php foreach($categories as $categorie) : ?>
		<section class="info-cat" style="background-image: url(../img/meal-cat/<?php echo $categorie['img']?>)">
			<h1 class="cat-title"><?php echo $categorie['title']?></h1>
		</section>
	<?php endforeach ;?>

	<main>
		<div class="container">
			<div class="row">
				<div class="featured-products">
					<div class="col-xl-12">
						<h3 class="products-title">Все товары</h3>
					</div>
					<div class="col-xl-12">

						<div class="product-items">

							<?php
								$catProducts = 	getCatProduct($_GET['catId']);
							?>
							<?php foreach($catProducts as $catProduct) : ?>
							<div class="product-item">
								<img src="img/<?php echo $catProduct['img']?>" alt="">
								<div class="product-item-title"><?php echo $catProduct['name']?></div>
								<div class="product-item-price"><?php echo $catProduct['price']?> грн</div>
							</div>
						<?php endforeach ;?>

						</div>
						
					</div>
				</div>
			</div>
		</div>
	</main>

<?php include('php/templates/footer.php');?>