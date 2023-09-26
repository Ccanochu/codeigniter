<form action="<?= site_url('news/store') ?>" method="post">
    <label for="title">Title</label>
    <input type="text" name="title" id="title" placeholder="Title">
    
    <label for="slug">Slug</label>
    <input type="text" name="slug" id="slug" placeholder="Slug" readonly>
    
    <label for="body">Body</label>
    <textarea name="body" id="body" placeholder="Body"></textarea>
    
    <button type="submit">Save</button>
</form>
