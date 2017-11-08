<?PHP session_start(); ?>

<!DOCTYPE html>

<html>
	<head>
		<meta charset="utf-8" />
		<title> Deconnexion en cours...</title>
	</head>

	<body>
		<p> Ceci est une page de deconnection, merci de patienter. </p>
		<?PHP
			session_unset();
			session_destroy(oid);
			header("location: connect.php");
		?>
		<p> Pas de redirection automatique ? Cliquez <a href="connect.php"> ici. </a> </p>
	</body>
</html>