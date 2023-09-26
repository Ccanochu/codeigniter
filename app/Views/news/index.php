<table>
    <tr>
        <th>Title</th>
        <th>Actions</th>
    </tr>
    <?php foreach ($news as $item) : ?>
    <tr>
        <td><?= $item['title'] ?></td>
        <td>
            <a href="<?= site_url('news/edit/' . $item['id']) ?>">Edit</a>
            <a href="<?= site_url('news/delete/' . $item['id']) ?>">Delete</a>
        </td>
    </tr>
    <?php endforeach; ?>
</table>
<a href="<?= site_url('news/create') ?>">Create New</a>
