<?php 

require_once('php/database.php');

?>

<?php include('php/templates/head.php');?>

	<div class="paralax">
		<div class="paralax-bg"></div>
		<main class="authorization-form">

			<form action="php/authorization.php" method="POST" class="authorization" id="authorization-form">
				<h2 class="authorization-title">Авторизация</h2>
				<input type="text" placeholder="Логин" name="login" class="login">
				<input type="password" placeholder="Пароль" name="password" class="password">
				<div class="authorization-buttons">
					<input style="width:100%;" type="submit" value="Войти" class="login-submit" name="do_login">
				</div>		
			</form>
			
		</main>
	</div>

<script src="js/jquery-3.3.1.min.js"></script>
<script src="js/paralax.js"></script>

</body>
</html>