<?php
if(isset($_POST['logout'])){
    session_destroy();
    header("Location:index.php");
}
?>
<html>
    <form id="head_disconnect_button" method="post" action="">
        <input type="submit" name="logout" value="Déconnection">
    </form>
</html>