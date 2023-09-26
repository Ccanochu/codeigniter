<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Editar Noticia</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body class="container mt-5">
    <h1>Editar Noticia</h1>

    <form action="<?= base_url('news/update') ?>" method="post">
        <input type="hidden" name="id" value="<?= $news['id'] ?>">
        
        <div class="form-group">
            <label for="title">Título</label>
            <input type="text" class="form-control" id="title" name="title" value="<?= $news['title'] ?>" required>
        </div>

        <div class="form-group">
            <label for="body">Contenido</label>
            <textarea class="form-control" id="body" name="body" required><?= $news['body'] ?></textarea>
        </div>

        <button type="submit" class="btn btn-primary">Guardar</button>
    </form>

    <a class="btn btn-secondary mt-3" href="<?= base_url('news') ?>">Cancelar</a>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.
