<?php
require_once('database.php');

$secreatPassword = 'admin1245';
if ( $_POST['password'] == $secreatPassword ) {
	$_SESSION['login'] = 'on';
	header('Location: ../../../dashboard.php');
} else {
	header('Location: index.php');
}
?>