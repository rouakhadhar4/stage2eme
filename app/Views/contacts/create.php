<!-- app/Views/contacts/create.php -->

<h1>Create New Contact</h1>

<form action="<?= base_url('contacts/store') ?>" method="post">
    <label for="objet">Object:</label>
    <input type="text" name="objet" required>

    <label for="email">Email:</label>
    <input type="email" name="email" required>

    <label for="message">Message:</label>
    <textarea name="message" required></textarea>

    <button type="submit">Submit</button>
</form>
