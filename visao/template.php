<html>
    <head>
        <title>template MVC</title>
        <base href="<?= URL_BASE ?>"><!--Esta instrução é super importante e não deve ser mudada!-->

        <link rel="stylesheet" href="./publico/css/app.css">
    </head>
    <body class="container">
        <?php include 'cabecalho.php';?>

        <main class="container">
            <?php require $viewFilePath; ?>
        </main>
        <?php include 'rodape.php';?>
    </body>
</html>
