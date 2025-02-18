<?php
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title ?></title>
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
        <h2>Voici notre histoire en photo</h2>
        <img src="img/images.jpeg" alt="Cat1" width="200px" height="200px">
        
    </main>
    <footer>
        <?php
include "inc/footerIncView.php";
        ?>
    </footer>
</body>
</html>