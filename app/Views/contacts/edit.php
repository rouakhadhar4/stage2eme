

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Contact</title>
   
</head>
<body>
    <h1>Edit Contact</h1>
    <form action="<?= site_url('contacts/update'); ?>" method="post">
        <input type="hidden" name="id" value="<?= $contact['id']; ?>">
        <div>
            <label for="objet">Object:</label>
            <input type="text" id="objet" name="objet" value="<?= $contact['objet']; ?>" required>
        </div>
        <div>
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" value="<?= $contact['email']; ?>" required>
        </div>
        <div>
            <label for="message">Message:</label>
            <textarea id="message" name="message" required><?= $contact['message']; ?></textarea>
        </div>
        <button type="submit">Update</button>
    </form>
</body>
</html>
