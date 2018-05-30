<?php
  require "config.php";
  require "dbconnection.php";
  $navigation = mysqli_query($connection, "SELECT * FROM `navigation`");
  $news = mysqli_query($connection, "SELECT * FROM `news` ORDER by `id` DESC LIMIT 0, 3");
?>

<!DOCTYPE html>
<html lang="en">
	<head>
        <?php include "common/head.php"; ?>
        <link href="/styles/news-hp.css" type="text/css" rel="stylesheet">
        <link href="/styles/products-hp.css" type="text/css" rel="stylesheet">
		<title>
			PHub | Home Page
		</title>
	</head>
	<body>
		<header class="home">
			<?php include "common/header.php"; ?>
		</header>
		<nav class="home">
			<?php include "common/nav.php"; ?>
		</nav>
		<article>
			<p class="ln-title">Latest News</p>
			<?php include "news-script.php"; ?>
			<div class="empty-div">...</div>
			<hr class="hr-btw-ln-lrp" color="#000000" size="2px" noshade>
			<p class="lrp-title">Last Released Products</p>
		</article>
	</body>
</html>

<?php
  mysqli_close($connection);
?>