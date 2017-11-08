<?PHP session_start(); ?>

<!DOCTYPE html>

<html>
	<head>
		<meta charset="utf-8" />
		<title> Mon compte - Intralume </title>
		<link rel="stylesheet" href="forme.css" />
		<link rel="icon" href="img/logo.png" />
	</head>

	<body>
		<?PHP include("inc/headnav.php"); ?>
		<article class="main_article">
			<h2> Mon compte </h2>
			<?PHP
				if (isset($_SESSION['connect']))
				{
					echo "<h3> Pseudonyme: </h3>";
					echo "<p class=\"account_info\">".$_SESSION['PSEUDO']." </p>";
					echo "<h3> Mot de passe </h3>";
					echo "<p class=\"account_info\"> <a href=\"changePSW.php\"> Changer de mot de passe </a>";
				}
				else
				{
					header("location: connect.php");
					exit();
				}
			?>
		</article>
	</body>
</html>