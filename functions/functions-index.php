<?php
function bdd_connect($host,$db,$user,$pwd){
    try {
        $bdd = new PDO ("mysql:host=$host;dbname=$db;charset=utf8","$user","$pwd");
        return $bdd;
    }
    catch (Exception $e){
        die("Base de données injoignable, veuillez contacter l'administrateur.");
    }
}

// A TESTER !!!
function insert_project($bdd, $val1, $val2, $val3, $val4, $val5, $val6, $val7, $val8, $val9){
    $ins_project = $bdd->prepare("INSERT INTO projet(Numero_projet, Nom_projet, Chef_de_projet, Cout_previsionnel, Date_echeance, Penalites, Debut_de_realisation, Fin_de_realisation, Numero_client) values(:project_nb, :project_name, :project_manager, :project_price, :project_deadline, :project_penality, :project_start, :project_end, :customer_nb)");
    $ins_project->bindValue(":project_nb", $val1, PDO::PARAM_INT);
    $ins_project->bindValue(":project_name", $val2, PDO::PARAM_STR);
    $ins_project->bindValue(":project_manager", $val3, PDO::PARAM_STR);
    $ins_project->bindValue(":project_price", $val4, PDO::PARAM_INT);
    $ins_project->bindValue(":project_deadline", $val5, PDO::PARAM_STR);
    $ins_project->bindValue(":project_penality", $val6, PDO::PARAM_INT);
    $ins_project->bindValue(":project_start", $val7, PDO::PARAM_STR);
    $ins_project->bindValue(":project_end", $val8, PDO::PARAM_STR);
    $ins_project->bindValue(":customer_nb", $val9, PDO::PARAM_INT);
    $ins_project->execute();
    
    //$project_id = $bdd->lastInsertId();
    //return $project_id;
}
?>