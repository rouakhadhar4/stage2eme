<!DOCTYPE html>
<html lang="en">
<head>
    <style>
        /* Add your custom styles here */

body {
    background-color: #f8f9fa;
}

.card {
    transition: transform 0.2s;
}

.card:hover {
    transform: scale(1.05);
}
</style>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Décoration Shop</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="styles.css">
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
        <a class="navbar-brand" href="#">DécoShop</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Shop</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Contact</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<div class="container mt-5">
    <h2 class="mb-4">Latest Decorative Items</h2>
    <div class="row">
        <div class="col-md-4 mb-4">
            <div class="card">
                <img src="item1.jpg" class="card-img-top" alt="Item 1">
                <div class="card-body">
                    <h5 class="card-title">Elegant Vase</h5>
                    <p class="card-text">Beautiful vase to enhance your home decor.</p>
                    <a href="item1.html" class="btn btn-primary">Details</a>
                </div>
            </div>
        </div>
        <div class="col-md-4 mb-4">
            <div class="card">
                <img src="item2.jpg" class="card-img-top" alt="Item 2">
                <div class="card-body">
                    <h5 class="card-title">Artistic Wall Clock</h5>
                    <p class="card-text">Unique wall clock for a stylish interior.</p>
                    <a href="item2.html" class="btn btn-primary">Details</a>
                </div>
            </div>
        </div>
        <!-- Add more item cards as needed -->
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
