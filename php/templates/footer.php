	<footer>
		<div class="container">
			<div class="row">

				<div class="col-xl-4 col-lg-2 col-md-3 col-sm-3">				
					<nav>
						<h3 class="footer-title">Категории</h3>
						<ul>
							<?php $categories = getCategorie();?>
							<?php foreach($categories as $category) : ?>
								<li><a href="category.php?catId=<?php echo $category['id']?>"><?php echo $category['title']?></a></li>
							<?php endforeach ;?>
						</ul>
					</nav>
				</div>

				<div class="col-xl-4 col-lg-6 col-md-9 col-sm-9">
					<div class="subscription">
						<h3 class="footer-title">Подписка на рассылку</h3>
						<p>Подпишитесь на нашу рассылку и получайте актуальную информацию о выгодных товарных акциях и специальных предложениях.</p>
						<form class="subscription-form" method="POST" action="php/input-output.php">
							<input class="email" name="email" type="text" placeholder="E-mail"> 
							<button type="submit" class="submit" name="email-submit">Подписаться</button>
						</form>
					</div>
				</div>

				<div class="col-xl-4 col-lg-4 col-md-12 col-sm-12">
					<div class="contacts">
						<h3 class="footer-title">Контакты</h3>
						<p class="address"><i class="fa fa-map-marker" aria-hidden="true"></i> Севастопольская, 180е</p>
						<p class="phone"><i class="fa fa-phone" aria-hidden="true"></i><a href="tel:+380657823565">+380657823565</a></p>
					</div>
				</div>

			</div>
		</div>
	</footer>

</div>	

	<script src="js/jquery-3.3.1.min.js"></script>
	<script src="js/common.js"></script>

</body>
</html>