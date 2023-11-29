<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Lista de Noticias</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body>
    <div class="container mt-5">

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header d-flex justify-content-between">
                        <h2>Lista de Noticias</h2>

                        <!-- Botón Crear -->
                        <a class="btn btn-primary mt-1" href="<?= base_url('news/create') ?>">Crear Noticia</a>

                    </div>

                    <div class="card-body">

                        <table class="table">
                            <thead class="thead-dark">
                                <tr>
                                    <th scope="col">Título</th>
                                    <th scope="col">Imagen</th> <!-- Nueva columna para la imagen -->
                                    <th scope="col">Acciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($news as $item): ?>
                                    <tr>
                                        <td>
                                            <?= $item['title'] ?>
                                        </td>

                                        <td>
                                            <?php if (!empty($item['image'])): ?>
                                                <img src="<?= base_url() . '/public/uploads/' . $item['image'] ?>"
                                                    alt="Imagen de la noticia" class="img-thumbnail" height="200" width="300">

                                            <?php else: ?>
                                                <p>No hay imagen</p>
                                            <?php endif; ?>

                                        </td>

                                        <td>
                                            <a class="btn btn-info btn-sm"
                                                href="<?= base_url('news/view/' . $item['slug']) ?>">Ver</a>
                                            <a class="btn btn-warning btn-sm"
                                                href="<?= base_url('news/edit/' . $item['slug']) ?>">Editar</a>
                                            <a class="btn btn-danger btn-sm"
                                                href="<?= base_url('news/delete/' . $item['id']) ?>">Eliminar</a>
                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>

                </div>

            </div>
        </div>

    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>