<?PHP session_start(); ?>

<!DOCTYPE html>

<html>
	<head>
		<meta charset="utf-8" />
		<title> Forum - Intralume </title>
		<link rel="stylesheet" href="forme.css" />
		<link rel="logo" href="img/logo.png" />
	</head>

	<body>
		<?PHP include("inc/headnav.php"); ?>
		<article class="main_article">
			<center>
				<h2> Liste des topics </h2>
				<?php
					$connect = mysqli_connect("localhost", "root", "abc", "alume");
					$aff = "select * from topics order by idTop DESC;";
					$afficher = mysqli_query($connect, $aff);
					echo "<table id=\"topics\">";
					echo "<tr> <td class=\"topic_text\"> id </td> <td class=\"topic_text\"> nom </td> <td class=\"topic_text\"> de </td> 
							<td class=\"topic_text\"> date </td> <td class=\"topic_text\"> heure </td>";
					while ($ligne = mysqli_fetch_assoc($afficher))
					{
						echo "<tr> <td class=\"topic_text\"> ".$ligne['idTop']." </td>";
						echo " <td> <a href=\"\" id=\"topic_name\"> ".$ligne['nomTop']." </a> </td>";
						echo "<td class=\"topic_text\"> </td>";
						echo "<td class=\"topic_text\"> </td>";
						echo "<td class=\"topic_text\"> </td> </tr>";
					}
					echo "</table>";
				?>
			</center>
		</article>
	</body>
</html>