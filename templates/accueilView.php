<?php
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title?></title>
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

        
        <main class="Accueil">
            <h1>Bienvenue sur notre page d'acceuil</h1>
        </main>

        <footer>
            <?php
include "inc/footerIncView.php";
            ?>
        </footer>

</body>
</html>