<?php
function project_list($bdd){
    $req_project = $bdd->query("SELECT * FROM projet");
    ?>
    <table border="1">
        <tr>
            <td> Numéro du projet </td>
            <td> Nom du projet </td>
            <td> Chef de projet </td>
            <td> Coût prévisionnel </td>
            <td> Date d'échéance </td>
            <td> Pénalités </td>
            <td> Date de début </td>
            <td> Date de fin </td>
            <td> ID client</td>
        </tr>
        <?php
        while($fetch_project = $req_project->fetch()){
            ?>
            <tr>
                <td><?php echo $fetch_project[0] ?></td>
                <td><?php echo $fetch_project[1] ?></td>
                <td><?php echo $fetch_project[2] ?></td>
                <td><?php echo $fetch_project[3] ?></td>
                <td><?php echo $fetch_project[4] ?></td>
                <td><?php echo $fetch_project[5] ?></td>
                <td><?php echo $fetch_project[6] ?></td>
                <td><?php echo $fetch_project[7] ?></td>
                <td><?php echo $fetch_project[8] ?></td>
            </tr>
            <?php
        }
        ?>
    </table>
    <?php
}
?>