<?php
session_start();

if (!isset($_SESSION['login'])) {
    header("Location: login.php");
    exit;
}

/*qestion 4 : Se connecter avec un login : le message de bienvenue s’affiche dans profil.php.
Cliquer sur « Se déconnecter » : redirection vers login.php.
Accéder directement à profil.php sans être connecté : redirection automatique vers login.php*/
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Mon profil</title>
</head>
<body>

    <h2>Bienvenue <?= htmlspecialchars($_SESSION['login']) ?> !</h2>

    <a href="deconnexion.php">Se déconnecter</a>
    

</body>
</html>