<!-- app/Views/articles/create.php -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Add Article</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

</head>

<body>
    <div class="container mt-5">
        <div class="card mx-auto" style="max-width: 500px;">
            <div class="card-header bg-primary text-white text-center">
                <h2>Add Article</h2>
            </div>
            <div class="card-body">

                <form action="/articles/store" method="post" enctype="multipart/form-data">
                    <div class="mb-3">
                        <label for="idcategory" class="form-label">Category</label>
                        <select name="idcategory" class="form-control">
                            <?php foreach ($categories as $category): ?>
                                <option value="<?= $category['idcategory']; ?>"><?= $category['nomcategory']; ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>

                    <div class="mb-3">
                        <label for="nomarticle" class="form-label">Article Name</label>
                        <input type="text" class="form-control" name="nomarticle" required>
                    </div>

                    <div class="mb-3">
                        <label for="description" class="form-label">Description</label>
                        <textarea class="form-control" name="description" rows="3"></textarea>
                    </div>

                    <div class="mb-3">
                        <label for="qtestock" class="form-label">Quantity in Stock</label>
                        <input type="number" class="form-control" name="qtestock" required>
                    </div>

                    <div class="mb-3">
                        <label for="prix" class="form-label">Price</label>
                        <input type="text" class="form-control" name="prix" required>
                    </div>

                    <div class="mb-3">
                        <label for="image" class="form-label">Image</label>
                        <input type="file" class="form-control" name="image" id="imageInput" onchange="previewImage()">
                        <img id="imagePreview" src="#" alt="Image Preview" style="max-width: 100%; display: none;">
                    </div>

                    <div class="d-grid">
                        <button type="submit" class="btn btn-primary btn-sm me-2">Add Article</button>
                    </div>
                </form>

            </div>
        </div>
    </div>

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
