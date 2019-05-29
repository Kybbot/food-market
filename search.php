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
	
	<main>
		<div class="container">
			<div class="row">
				<div class="search-result">
					<div class="col-xl-12">
						<h1 class="products-title">Результаты поиска</h1>
					</div>
					<div class="col-xl-12">

						<div class="product-items">

							<?php $searchResults = search($_POST['search']);?>
							<?php foreach($searchResults as $searchResult) : ?>
								<div class="product-item">
									<img src="img/<?php echo $searchResult['img']?>" alt="">
									<div class="product-item-title"><?php echo $searchResult['name']?></div>
									<div class="product-item-price"><?php echo $searchResult['price']?> грн</div>
								</div>
							<?php endforeach;?>

						</div>
							
					</div>
				</div>
		</div>
	</main>

<?php include('php/templates/footer.php');?>