<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Editar Noticia</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body class="container mt-5">
    <div class="row">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header d-flex justify-content-between">
                    <h2>Editar y actualizar datos de la noticia</h2>

                    <!-- Botón Cancelar -->
                    <a class="btn btn-secondary mt-1" href="<?= base_url('news') ?>">Cancelar</a>
                </div>


                <div class="card-body">
                    <form action="<?= base_url('news/update') ?>" method="post" enctype="multipart/form-data">
                        <input type="hidden" name="id" value="<?= $news['id'] ?>">

                        <div class="form-group">
                            <label for="title">Título</label>
                            <input type="text" class="form-control" id="title" name="title"
                                value="<?= $news['title'] ?>" required>
                        </div>

                        <div class="form-group">
                            <label for="body">Contenido</label>
                            <textarea class="form-control" id="body" name="body"
                                required><?= $news['body'] ?></textarea>
                        </div>

                        <!-- Input para seleccionar nueva imagen -->
                        <div class="form-group">
                            <label for="new_image">Seleccionar Nueva Imagen</label>
                            <input type="file" class="form-control-file" id="new_image" name="new_image">
                        </div>

                        <!-- Botón Guardar alineado a la derecha -->
                        <div class="text-right">
                            <button type="submit" class="btn btn-primary">Guardar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <!-- Col-md-4 con la imagen actual (si existe) -->
        <div class="col-md-4">
            <?php if (!empty($news['image'])): ?>
                <div class="form-group">
                    <img src="<?= base_url() . '/public/uploads/' . $news['image'] ?>" alt="Imagen actual de la noticia"
                        class="img-thumbnail" height="200" width="300">
                </div>
            <?php endif; ?>
        </div>
    </div>


    <!-- Scripts de Bootstrap y jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>