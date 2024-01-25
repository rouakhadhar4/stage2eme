<!-- app/Views/contacts/edit.php -->

<h1>Edit Contact</h1>

<form action="<?= base_url('contacts/update') ?>" method="post">
    <input type="hidden" name="idcontact" value="<?= $contact['idcontact'] ?>">

    <label for="objet">Object:</label>
    <input type="text" name="objet" value="<?= $contact['objet'] ?>" required>

    <label for="email">Email:</label>
    <input type="email" name="email" value="<?= $contact['email'] ?>" required>

    <label for="message">Message:</label>
    <textarea name="message" required><?= $contact['message'] ?></textarea>

    <button type="submit">Update</button>
</form>
