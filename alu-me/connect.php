<?PHP session_start(); ?>

<!DOCTYPE html>

<html>
	<head>
		<meta charset="utf-8" />
		<title> Se connecter - Intralume </title>
		<link rel="stylesheet" href="forme.css" />
		<link rel="icon" href="img/logo.png" />
	</head>

	<body>
		<?PHP include("inc/headnav.php"); ?>
		<article class="main_article">
			<center>
				<form method="post" target="connect.php" id="connexion">
					<p> Identifiant </p> <br /> <input type="text" name="pseudo" />
					<p> Mot de passe </p> <br /> <input type="password" name="password" />
					<br /> <br /> <input type="submit" name="connect" value="connexion" /><br />
				</form>
				<?PHP
					if (isset($_POST['connect']))
					{
						$connect = mysqli_connect("localhost", "root", "abc", "alume");
						$verif = "select Id from utilisateurs where pseudo = :pseudo AND password = :password";
						$_SESSION['connect'] = TRUE;
						$_SESSION['PSEUDO'] = $_POST['pseudo'];
						$_SESSION['ADMIN'] = "NON";
						$_SESSION['PROJET'] = "NON";
						$_SESSION['MODERATEUR'] = "NON";
					}
				?>
			</center>
		</article>
	</body>
</html>