<!-- list_images.php -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>List of Images</title>
</head>

<body>

<div class="container mt-5">
    <h2 class="mb-4">List of Images</h2>

    <?php foreach ($imageList as $imageName): ?>
        <img src="<?= base_url('uploads/' . $imageName); ?>" alt="<?= $imageName; ?>" style="max-width: 300px; margin-bottom: 10px;">
    <?php endforeach; ?>

</div>

</body>

</html>
