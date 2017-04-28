<?php
	include("code/config.php");
	include("code/DataAccess.php");
	
	$da = DataAccess::Instance();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Student Management</title>
	<link rel="stylesheet" type="text/css" href="content/style.css">
</head>
<body>
<div id="banner">
	Banner
</div>
<div id="content">
	<div id="left">
		<?php include("menu.php") ?>
	</div>
	<div id="main">
		<?php
			define("DEFAULT_PAGE", "student.php");
			$p = DEFAULT_PAGE;

			if(isset($_GET["p"])) {
				$p = $_GET["p"];
			}

			include_once($p);
		?>
	</div>
</div>
<div id="footer">
	copyright 2016....
</div>
</body>
</html>