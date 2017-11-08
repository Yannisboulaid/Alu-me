<?php
if(isset($_POST['login'])){
    extract($_POST);
    if(preg_match('~[=+-/()@#[{}\];]~', $username) || preg_match('~[=+-/()@#[{}\];]~', $password)){
        ?>
        <label style="color:#fff;">Caractères non autorisés !</label>
        <?php
    }
    else{
        //$password = sha1($password);
        $password = $password;
        $req_log = $bdd->query("SELECT Pseudonyme, Adresse_mail, Id FROM utilisateurs WHERE Pseudonyme = '$username' AND Mot_de_passe = '$password'");
        if($fetch_log = $req_log->fetch()){
            $_SESSION['username'] = $fetch_log['Pseudonyme'];
            $_SESSION['mail'] = $fetch_log['Adresse_mail'];
            $_SESSION['id_user'] = $fetch_log['Id'];
            $_SESSION['session'] = true;
            header('Location:index.php');
        }
        else{
            ?>
            <label style="color:#fff;">Identifiants incorrect</label>
            <?php
        }
    }
}
?>
<html>
    <center>
        <h2 class="nav_title"> Connection  </h2>
        <form id="nav_connect" method="post" action="">
            <p class="nav_text"> Nom d'utilisateur: </p>
            <input type="text" name="username" placeholder="Nom d'utilisateur" required>
            <p class="nav_text"> Mot de passe: </p>
            <input type="password" name="password" placeholder="Mot de passe" required>
            <br>
            <br>
            <input type="submit" name="login" value="Connection" required>
            <br>
            <br>
        </form>
    </center>
</html>