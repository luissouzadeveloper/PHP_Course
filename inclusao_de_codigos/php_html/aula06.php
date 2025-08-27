<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    include_once "backend.php";
    ?>

    <h1>Seja bem vindo ao site</h1>
    <p>
        Olá <?= $nome ?>, os produtos são os a seguir:
    </p>

    <ul>
        <?php foreach ($produtos as $produto): ?>
            <li><?= $produto ?></li>
        <?php endforeach; ?>
    </ul>
</body>

</html>