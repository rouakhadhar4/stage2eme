<!-- app/Views/contacts/index.php -->

<h1>Contact List</h1>

<a href="<?= base_url('contacts/create') ?>">Create New Contact</a>

<table>
    <thead>
        <tr>
            <th>ID</th>
            <th>Object</th>
            <th>Email</th>
            <th>Message</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($contacts as $contact): ?>
            <tr>
                <td><?= $contact['idcontact'] ?></td>
                <td><?= $contact['objet'] ?></td>
                <td><?= $contact['email'] ?></td>
                <td><?= $contact['message'] ?></td>
                <td>
                    <a href="<?= base_url('contacts/edit/' . $contact['idcontact']) ?>">Edit</a>
                    <a href="<?= base_url('contacts/delete/' . $contact['idcontact']) ?>">Delete</a>
                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>
