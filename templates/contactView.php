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

    <section class="contact-form">
		<div class="form">
			<h4>Contactez-nous</h4>
			<p>Nous sommes toujours là pour vous aider</p>

			<div class="row-form">
				<input type="text" name="nom" placeholder="Votre Nom">
				<input type="text" name="email" placeholder="Votre Email">
			</div>
			<div class="row-col-form">
				<input type="text" name="sujet" placeholder="Sujet">
			</div>
			<div class="row-col-form">
				<textarea cols="40" rows="10" placeholder="Comment pouvons-nous vous aider?"></textarea>
			</div>
			<div class="row-col-form">
				<button>Envoyer</button>
			</div>
			
		</div>
	</section>

    <footer>
        <?php
include "inc/footerIncView.php";
        ?>
    </footer>
</body>
</html>