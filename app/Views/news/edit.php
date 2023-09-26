<form action="<?= site_url('news/update/' . $news['id']) ?>" method="post">
    <label for="title">Title</label>
    <input type="text" name="title" id="title" value="<?= $news['title'] ?>">
    
    <label for="slug">Slug</label>
    <input type="text" name="slug" id="slug" value="<?= $news['slug'] ?>" readonly>
    
    <label for="body">Body</label>
    <textarea name="body" id="body"><?= $news['body'] ?></textarea>
    
    <button type="submit">Update</button>
</form>
