<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Détails de la commande</title>
</head>
<body>
    <h1>Détails de la commande</h1>
    <ul>
        <li>Nom de l'article : <?= $commande['nomarticle']; ?></li>
        <li>Nom : <?= $commande['nom']; ?></li>
        <li>Prénom : <?= $commande['prenom']; ?></li>
        <li>Ville : <?= $commande['ville']; ?></li>
        <li>Adresse : <?= $commande['adresse']; ?></li>
        <li>Quantité : <?= $commande['quantite']; ?></li>
        <li>Téléphone : <?= $commande['telephone']; ?></li>
        <li>Date de création : <?= $commande['created_at']; ?></li>
     
    </ul>
</body>
</html>
