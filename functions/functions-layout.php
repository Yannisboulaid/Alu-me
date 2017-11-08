<?php
function page_param($page_title, $page){
    include "./functions/functions-".$page.".php";
    ?>
    <head>
        <title><?php echo $page_title; ?></title>
        <link rel="stylesheet" href="./styles/style-<?php echo $page; ?>.css">
    </head>
    <?php
}
?>