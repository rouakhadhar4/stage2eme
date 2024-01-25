<!-- logout.php -->

<?php
// Démarrez la session (si elle n'est pas déjà démarrée)
session_start();

// Détruisez toutes les variables de session
session_unset();

// Détruisez la session
session_destroy();

// Redirigez l'utilisateur vers la page d'accueil ou une autre page après la déconnexion
header("Location: admin.php");
exit();
?>
