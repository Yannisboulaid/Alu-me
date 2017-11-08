<?php
include "./functions/functions-layout.php";
page_param("Projet", "project");

if(isset($_POST['project_submit'])){
    extract($_POST);
    insert_project($bdd, $project_nb, $project_name, $project_manager, $project_price, $project_deadline, $project_penality, $project_start, $project_end, $customer_nb);
}
?>
<html>
    <body>
        <article class="main_article">
            <center>
                <?php
                project_list($bdd);
                ?>
                <br>
                <br>
                <h2> Ajout d'un projet </h2>
                <br>
                <form method="post" action="">
                    <table border="0">
                        <tr>
                            <td> Numéro du projet : </td>
                            <td><input type="number" name="project_nb"></td>
                        </tr>
                        <tr>
                            <td> Nom du projet : </td>
                            <td><input type="text" name="project_name"></td>
                        </tr>
                        <tr>
                            <td> Chef de projet : </td>
                            <td><input type="text" name="project_manager"></td>
                        </tr>
                        <tr>
                            <td> Coût prévisionnel : </td>
                            <td><input type="number" name="project_price" maxlength="6"></td>
                        </tr>
                        <tr>
                            <td> Date d'échéance : </td>
                            <td><input type="date" name="project_deadline"></td>
                        </tr>
                        <tr>
                            <td> Pénalités : </td>
                            <td><input type="number" name="project_penality" maxlength="6"></td>
                        </tr>
                        <tr>
                            <td> Date de début de réalisation : </td>
                            <td><input type="date" name="project_start"></td>
                        </tr>
                        <tr>
                            <td> Date de fin de réalisation : </td>
                            <td><input type="date" name="project_end"></td>
                        </tr>
                        <tr>
                            <td> Identifiant du client : </td>
                            <td><input type="number" name="customer_nb"></td>
                        </tr>
                        <tr>
                            <td><input type="reset" name="project_cancel" value="Annuler"></td>
                            <td><input type="submit" name="project_submit" value="Valider"></td>
                        </tr>
                    </table>
                </form>
            </center>
        </article>
    </body>
</html>