<?php
	if(isset($_POST['valider']))
	{
		$bdd = bdd_connect("localhost", "alume", "root", "abc");
	}
?>

<header id="mainHeader">
	<h1 id="head_name"> <em> ALUME </em> </h1>
	<a href="index.php" id="nav_link_index"> <strong> Acceuil </strong> </a>
	<a href="produits.php" id="nav_link_produits"> <strong> Nos Produits </strong> </a>
	<a href="entreprise.php" id="nav_link_entreprise"> <strong> L'entreprise </strong> </a>
	<a href="contact.php" id="nav_link_contact"> <strong> Nous contacter </strong> </a>
	<?php
		echo "<a href=\"inscription.php\" id=\"nav_link_inscription\"> <strong> S'inscrire </strong> </a>";
	?>
</header>

<nav id="nav_connect">
	<form method="post">
		<H1 id="nav_espclient_title"> Espace clients </H1>
		Connexion:<br /> <input type="text" name="pseudo" id="nav_pseudo_form" placeholder="Entrez votre pseudonyme" size="30"/> <br />
		Mot de Passe:<br /> <input type="password" name="psw" id="nav_psw_form" placeholder="*****" size="30" /> <br />
		<input type="submit" value="valider" name="valider" />
	</form>
</nav>