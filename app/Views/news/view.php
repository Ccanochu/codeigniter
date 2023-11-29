<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>
        <?= $news['title'] ?>
    </title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body class="container mt-5">
    <h1>
        <?= $news['title'] ?>
    </h1>
    <p class="lead">
        <?= $news['body'] ?>
    </p>

    <div class="form-group">
        <img src="<?= base_url() . '/public/uploads/' . $news['image'] ?>" alt="Imagen actual de la noticia"
            class="img-thumbnail" height="200" width="300">
    </div>
    <a class="btn btn-primary" href="<?= base_url('news') ?>">Volver a la Lista de Noticias</a>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>