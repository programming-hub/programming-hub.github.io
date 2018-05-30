<?php
  require "config.php";
  require "dbconnection.php";
  $navigation = mysqli_query($connection, "SELECT * FROM `navigation`");
?>

<!DOCTYPE html>
<html lang="en">
	<head>
        <?php include "common/head.php"; ?>
		<title>
			PHub | News
		</title>
	</head>
	<body>
		<header class="news">
			<?php include "common/header.php"; ?>
		</header>
		<nav class="news">
			<?php include "common/nav.php"; ?>
		</nav>
	</body>
</html>

<?php
  mysqli_close($connection);
?>