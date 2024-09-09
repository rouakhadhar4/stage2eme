<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire de Commande</title>
    
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    
    <style>
        .container {
            margin-top: 50px;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h2>Commander</h2>
                <form id="orderForm" action="/order/store" method="post">
                    <div class="form-group">
                        <label for="nomarticle">Nom de l'article:</label>
                      
                        <input type="text" class="form-control" id="nomarticle" name="nomarticle" value="<?= $article['nomarticle']; ?>" readonly>
                    </div>
                    <div class="form-group">
                        <label for="prenom">Prénom:</label>
                        <input type="text" class="form-control" id="prenom" name="prenom">
                    </div>
                    <div class="form-group">
                        <label for="ville">Ville:</label>
                        <input type="text" class="form-control" id="ville" name="ville">
                    </div>
                    <div class="form-group">
                        <label for="adresse">Adresse:</label>
                        <textarea class="form-control" id="adresse" name="adresse"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="quantite">Quantité:</label>
                        <input type="number" class="form-control" id="quantite" name="quantite">
                    </div>
                    <div class="form-group">
                        <label for="telephone">Téléphone:</label>
                        <input type="text" class="form-control" id="telephone" name="telephone">
                    </div>
                    
                    <button type="submit" class="btn btn-primary">Commander</button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>
