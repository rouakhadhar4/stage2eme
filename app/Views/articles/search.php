
<!-- app/Views/articles/search.php -->

<div class="container mt-3">
    <div class="d-flex justify-content-end">
        <form action="<?= site_url('/articles/search'); ?>" method="get" class="form-inline">
            <div class="input-group">
                <input type="text" name="search" class="form-control form-control-sm" placeholder="Search by Name">
                <button type="submit" class="btn btn-secondary btn-sm">Search</button>
            </div>
        </form>
    </div>
</div>

<div class="container mt-5">
    <h2 class="mb-4">Search Results</h2>
    <!-- Affichez ici les résultats de la recherche -->
    <?php foreach ($searchResults as $article): ?>
        <!-- Affichez les détails de chaque article trouvé -->
        <p><?= $article['nomarticle']; ?></p>
        <!-- Ajoutez d'autres détails d'article si nécessaire -->
    <?php endforeach; ?>
</div>

