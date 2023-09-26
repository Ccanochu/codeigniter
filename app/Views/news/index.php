<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Lista de Noticias</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h1>Lista de Noticias</h1>

        <table class="table">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">Título</th>
                    <th scope="col">Acciones</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($news as $item): ?>
                    <tr>
                        <td><?= $item['title'] ?></td>
                        <td>
                            <a class="btn btn-info btn-sm" href="<?= base_url('news/view/' . $item['slug']) ?>">Ver</a>
                            <a class="btn btn-warning btn-sm" href="<?= base_url('news/edit/' . $item['slug']) ?>">Editar</a>
                            <a class="btn btn-danger btn-sm" href="<?= base_url('news/delete/' . $item['id']) ?>">Eliminar</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>

        <a class="btn btn-primary" href="<?= base_url('news/create') ?>">Crear Noticia</a>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
