<?php include('php/templates/head.php');?>

<div class="wrapper">

<?php include('php/templates/header.php');?>

	<section class="info">
		<div class="container">
			<div class="row">

				<nav>
					<div class="col-xl-12">
						<ul>
							<?php $categories = getCategorie();?>
							<?php foreach($categories as $category) : ?>
								<li><a href="category.php?catId=<?php echo $category['id']?>"><?php echo $category['title']?></a></li>
							<?php endforeach ;?>
						</ul>
					</div>
				</nav>				

			</div>

			<div class="row">

				<div class="nav-items">
					<div class="col-xl-12 d-flex justify-content-center align-items-center flex-wrap">

						<?php $categories = getCategorie();?>
						<?php foreach($categories as $category) : ?>
							<div class="nav-item" style="background-image: url(img/meal-cat/<?php echo $category['img']?>)">
								<h2 class="nav-item-title"><a href="category.php?catId=<?php echo $category['id']?>"><?php echo $category['title']?></a></h2>
							</div>
						<?php endforeach ;?>
					</div>
				</div>

			</div>			
		</div>
	</section>

	<main>
		<div class="container">
			<div class="row">
				<div class="featured-products">
					<div class="col-xl-12">
						<h1 class="products-title">Рекомендуемые товары</h1>
					</div>
					<div class="col-xl-12">

						<div class="product-items">

						<?php $products = getFeatured();						
						foreach( $products as $product) : ?>
							<div class="product-item">
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
	</main>

<?php include('php/templates/footer.php');?>