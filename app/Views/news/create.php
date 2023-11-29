<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Crear Noticia</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body class="container mt-5">
    <h2>Crear Noticia</h2>

    <form action="<?= base_url('news/store') ?>" method="post" enctype="multipart/form-data">
        <div class="form-group">
            <label for="title">Título</label>
            <input type="text" class="form-control" id="title" name="title" required>
        </div>

        <div class="form-group">
            <label for="body">Contenido</label>
            <textarea class="form-control" id="body" name="body" required></textarea>
        </div>

        <!-- Nuevo campo para el archivo de entrada -->
        <div class="form-group">
            <label for="image">Imagen</label>
            <input type="file" class="form-control-file" id="image" name="image">
        </div>

        <button type="submit" class="btn btn-primary">Guardar</button>
    </form>

    <a class="btn btn-secondary mt-3" href="<?= base_url('news') ?>">Cancelar</a>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
