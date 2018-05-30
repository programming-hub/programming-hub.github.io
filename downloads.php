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
			PHub | Downloads
		</title>
	</head>
	<body>
		<header class="downloads">
			<?php include "common/header.php"; ?>
		</header>
		<nav class="downloads">
			<?php include "common/nav.php"; ?>
		</nav>
	</body>
</html>

<?php
  mysqli_close($connection);
?>