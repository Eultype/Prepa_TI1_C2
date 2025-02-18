<?php
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?=  $title ?></title>
    <link rel="stylesheet" href="css/style.css">
</head>
        
<body>
    
    <header>
        <nav>    
            <?php
include "inc/menuIncView.php";
            ?>
        </nav>  
    </header> 

    <main>
        <h2><?= $title ?></h2>
        <img src="img/moi.png" alt="moi" width="300px" height="300px">
    </main>

    <footer>
            <?php
include "inc/footerIncView.php";
            ?>
    </footer>