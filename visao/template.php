<html>
    <head>
        <title>template MVC</title>
        <base href="<?= URL_BASE ?>">

        <link rel="stylesheet" href="./publico/css/app.css">
    </head>
    <body class="container">
        <?php require "visao/cabecalho.php"; ?>

        <?php alertComponentRender(); ?>

        <main class="container">
            <?php require $viewFilePath; ?>
        </main>

    </body>
</html>
