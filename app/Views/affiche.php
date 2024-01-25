<!-- app/Views/affiche.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Affichage des Contacts</title>
</head>
<body>
    <h2>Affichage des Contacts</h2>

    <!-- Afficher la liste des contacts à partir de la base de données -->
    <?php foreach ($contacts as $contact): ?>
        <p>
            <strong>Object:</strong> <?= $contact['objet'] ?><br>
            <strong>Email:</strong> <?= $contact['email'] ?><br>
            <strong>Message:</strong> <?= $contact['message'] ?><br>
        </p>
    <?php endforeach; ?>

</body>
</html>
