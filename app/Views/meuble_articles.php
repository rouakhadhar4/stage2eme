

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Articles de la catégorie Meuble</title>
  
</head>
<body>
    <h1>Articles de la catégorie Meuble</h1>

    <?php if (!empty($articles)): ?>
        <ul>
            <?php foreach ($articles as $article): ?>
                <li>
                    <h2><?php echo $article['nomarticle']; ?></h2>
                    <p>Description : <?php echo $article['description']; ?></p>
                    <p>Stock : <?php echo $article['qtestock']; ?></p>
                    <p>Prix : <?php echo $article['prix']; ?></p>
                    <?php if (!empty($article['image'])): ?>
                        <img src="/public/images/<?= $article['image']; ?>" alt="<?= $article['nomarticle']; ?>" class="card-img-top">
                    <?php endif; ?>
                </li>
            <?php endforeach; ?>
        </ul>
    <?php else: ?>
        <p>Aucun article trouvé dans la catégorie Meuble.</p>
    <?php endif; ?>
</body>
</html>
