<?php

	include('database.php');

	// OUTPUT

	function getFeatured() {
		global $db;

		$sql = " SELECT * FROM `products` WHERE `featured` = 1  ";
		$statement = $db->prepare($sql);
		$statement->execute();

		return $statement->fetchAll(PDO::FETCH_ASSOC);
	}

	function getCategorie() {
		global $db;

		$sql = " SELECT * FROM `categories`  ";
		$statement = $db->prepare($sql);
		$statement->execute();

		return  $statement->fetchAll(PDO::FETCH_ASSOC);
	}

	function getCategorieById( $catId ) {
		global $db;

		$sql = " SELECT * FROM `categories` WHERE `id` = {$catId} ";
		$statement = $db->prepare($sql);
		$statement->execute();

		return  $statement->fetchAll(PDO::FETCH_ASSOC);
	}

	function getCatProduct( $catId ) {
		global $db;
		
		$sql = " SELECT * FROM `products` WHERE `category_id` = {$catId} ";	
		$statement = $db->prepare($sql);
		$statement->execute();

		return  $statement->fetchAll(PDO::FETCH_ASSOC);
	}

	function search( $productName ) {
		global $db;

		$sql = " SELECT * FROM `products` WHERE `name` LIKE '%$productName%' ";	
		$statement = $db->prepare($sql);
		$statement->execute();

		return  $statement->fetchAll(PDO::FETCH_ASSOC);
	}

	function getAllProducts() {
		global $db;

		$sql = " SELECT * FROM `products` ";
		$statement = $db->prepare($sql);
		$statement->execute();

		return $statement->fetchAll(PDO::FETCH_ASSOC);
	}

	// INPUT

	function sendEmail() {
		global $db;

		$sql = " INSERT INTO `newsletter` (emails) VALUES (:emails) ";
		$statement = $db->prepare($sql);
		$statement->bindValue(':emails', $_POST['email']);
		$statement->execute();
	}

	if ( isset($_POST['email']) ) {
		sendEmail();
	}

	function addProduct() {
		global $db;

		if ( isset($_FILES['img']) && $_FILES['img']['tmp_name'] != '' ) {
			move_uploaded_file($_FILES['img']['tmp_name'], '../img/' . $_FILES['img']['name'] );
			$fileName = $_FILES['img']['name'];
		} else {
			$fileName = 'nophoto.png';
		}

		$name = $_POST['name'];
		$price = $_POST['price'];
		$category = $_POST['category'];
		$featured = $_POST['featured'];

		$sql = " INSERT INTO `products` ( img, name, price, category_id, featured ) VALUES ( :img, :name, :price, :category_id, :featured ) ";
		$statement = $db->prepare($sql);
		$statement->bindValue(':img', $fileName);
		$statement->bindValue(':name', $name);
		$statement->bindValue(':price', $price);
		$statement->bindValue(':category_id', $category);
		$statement->bindValue(':featured', $featured);	
		$statement->execute();

	}

	if ( isset($_POST['submit']) ) {
		addProduct();
		header('Location: ../dashboard.php');
	}

?>