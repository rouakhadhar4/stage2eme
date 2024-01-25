<!-- app/Views/articles/edit.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Edit Article</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-5">
   

    <div class="container mt-5 content">
    <form action="/articles/update/<?= $article['idArticle']; ?>" method="post" enctype="multipart/form-data">
        <div class="card mx-auto" style="max-width: 600px;">
            <div  style="background-color: #3498db; color: white; text-align: center;">
                <h2 class="mb-0">Update Article</h2>
            </div>
            <div class="card-body">
                <div class="mb-3">
                    <label for="idcategory" class="form-label">Category</label>
                    <select name="idcategory" class="form-select">
                        <?php foreach ($categories as $category): ?>
                            <option value="<?= $category['idcategory']; ?>" <?= ($category['idcategory'] == $article['idcategory']) ? 'selected' : ''; ?>>
                                <?= $category['nomcategory']; ?>
                            </option>
                        <?php endforeach; ?>
                    </select>
                </div>

                <div class="mb-3">
                    <label for="nomarticle" class="form-label">Article Name</label>
                    <input type="text" class="form-control" name="nomarticle" value="<?= $article['nomarticle']; ?>" required>
                </div>

                <div class="mb-3">
                    <label for="description" class="form-label">Description</label>
                    <textarea class="form-control" name="description" rows="3"><?= $article['description']; ?></textarea>
                </div>

                <div class="mb-3">
                    <label for="qtestock" class="form-label">Quantity in Stock</label>
                    <input type="number" class="form-control" name="qtestock" value="<?= $article['qtestock']; ?>" required>
                </div>

                <div class="mb-3">
                    <label for="prix" class="form-label">Price</label>
                    <input type="text"  name="prix" value="<?= $article['prix']; ?>" required>
                </div>

                <!-- Existing image display -->
                <?php if (!empty($article['image'])): ?>
                    <?php $imageUrl = base_url($article['image']); ?>
                    <img src="<?= $imageUrl; ?>" alt="Current Image" class="img-fluid mb-3">
                    <p class="text-muted">Image URL: <?= $imageUrl; ?></p>
                <?php else: ?>
                    <p class="text-muted">No image available</p>
                <?php endif; ?>

                <div class="mb-3">
                    <label for="image" class="form-label">New Image</label>
                    <input type="file" class="form-control" name="image" id="imageInput" onchange="previewImage()">
                    <img id="imagePreview" src="#" alt="Image Preview" style="max-width: 100%; display: none;" class="mt-3">
                </div>

                <div class="d-grid">
                    <button type="submit" class="btn btn-primary">Update Article</button>
                </div>
            </div>
        </div>
    </form>
</div>

<!-- Ajouter le script JavaScript pour prévisualiser l'image -->
<script>
    function previewImage() {
        var preview = document.getElementById('imagePreview');
        var input = document.getElementById('imageInput');
        
        preview.style.display = 'block';
        preview.src = URL.createObjectURL(input.files[0]);
    }
</script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script>
        function previewImage() {
            var input = document.getElementById('imageInput');
            var preview = document.getElementById('imagePreview');

            var reader = new FileReader();

            reader.onload = function (e) {
                preview.src = e.target.result;
                preview.style.display = 'block';
            };

            reader.readAsDataURL(input.files[0]);
        }
    </script>


</body>
</html>
