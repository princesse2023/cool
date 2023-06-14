<?php
//on demarre session ici
session_start();
//affiche le contenu de la session
// echo "bonjour" .$_SESSION['email'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bienvenue</title>
    <link rel="stylesheet" href="connexionnn.css">
</head>
<body>
    <?php
    //affiche le contenu de la session
echo  " <p class = 'message'> Bonjour" . $_SESSION['email'] . "</p>";
?>
    
</body>
</html>