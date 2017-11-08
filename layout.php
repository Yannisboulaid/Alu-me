<?php
// Liste des redirections des boutons du <nav>
if(isset($_POST['index'])){ header("Location:index.php"); }
if(isset($_POST['compte'])){ header("Location:index.php?p=account"); }
if(isset($_POST['projet'])){ header("Location:index.php?p=project"); }
if(isset($_POST['administration'])){ header("Location:index.php?p=administration"); }
if(isset($_POST['forum'])){ header("Location:index.php?p=forum"); }
?>
<!DOCTYPE html>

<html>
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="./styles/style-layout.css">
    </head>
    <body>
        <header> <!-- Le fichier layout.php contient à la fois le header, le nav et le $content du index.php -->
            <img src="./images/logo.png" id="head_logo">
	        <h1 id="head_title_01"> Intr </h1>
	        <h1 id="head_title_02"> Alume </h1>
	        <?php
            if(isset($_SESSION['session'])){
                ?>
                <p class="head_connect_text"> Bienvenue, <?php echo $_SESSION['username']; ?></p>
                <?php
            }
            else{
                ?>
                <p class="head_connect_text"> Vous n'êtes pas connecté. Connectez vous !</p>
                <?php
            }
            ?>
        </header>
        <nav>
            <?php
            if (isset($_SESSION['session'])){ // Les fonctions ET formulaires de connection et déconnection sont séparés de cette page pour des raisons de sécurité
                include './functions/functions-logout.php';
            }
            else{
                include './functions/functions-login.php';
            }
            ?>
            <center>
                <h2 class="nav_title"> Navigation </h2>
            </center>
            <form method="post">
                <input type="submit" name="index" value="Index" class="php_link">
                <br>
                <?php
                if(isset($_SESSION['session'])){
                    ?>
                    <input type="submit" name="compte" value="compte" class="php_link">
                    <br>
                    <input type="submit" name="projet" value="projet" class="php_link">
                    <br>
                    <input type="submit" name="administration" value="administration" class="php_link">
                    <br>
                    <?php
                }
                ?>
                <input type="submit" name="forum" value="Forum" class="php_link">
                <br>
            </form>
        </nav>
        <div class="content">
            <?php
            echo $content; // Affichage dans une <div> du contenu de la page selectionnée par les redirections
            ?>
        </div>
        <footer></footer>
    </body>
</html>