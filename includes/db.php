<?php

	$dsn = "mysql:host=localhost;dbname=php_categories_based_blog";

	try {
		$pdo = new PDO($dsn, 'root', '');
	}
	catch(PDOException $e) {
		echo $e->getMessage();
	}

?>