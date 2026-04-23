<?php
// LISTAS DE PRODUTOS

$lanches = [
    ["nome" => "X-Salada", "img" => "img/x salada.png", "preco" => "R$18,00"],
    ["nome" => "Sweet Burger", "img" => "img/X burguer.png", "preco" => "R$25,00"],
    ["nome" => "Hot Dog", "img" => "img/hot dog.png", "preco" => "R$30,00"]
];

$acompanhamentos = [
    ["nome" => "Batata Cute", "img" => "img/batata.png", "preco" => "R$10,00"],
    ["nome" => "Donuts", "img" => "img/donut.png", "preco" => "R$15,00"],
    ["nome" => "Waffle", "img" => "img/waffle.png", "preco" => "R$16,00"]
];

$refrigerantes = [
    ["nome" => "Coca Pink", "img" => "img/coca.png", "preco" => "R$10,00"],
    ["nome" => "Suco de Laranja", "img" => "img/suco.png", "preco" => "R$15,00"],
    ["nome" => "Sprite", "img" => "img/sprite.png", "preco" => "R$15,00"]
];
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>MeuLanchão</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <header>
        <h1>Hello Yummy!</h1>
        <img src="img/ChatGPT Image 23 de abr. de 2026, 14_05_51.png" alt="Logo">
    </header>

    <!-- LANCHES -->
    <section>
        <h2>Lanches</h2>
        <div class="container">
            <?php foreach ($lanches as $item): ?>
                <div class="card">
                    <img src="<?= $item['img'] ?>">
                    <p><?= $item['nome'] ?></p>
                    <p><?= $item['preco'] ?></p>
                    <button>Comprar</button>
                </div>
            <?php endforeach; ?>
        </div>
    </section>

    <!-- ACOMPANHAMENTOS -->
    <section>
        <h2>Acompanhamentos</h2>
        <div class="container">
            <?php foreach ($acompanhamentos as $item): ?>
                <div class="card">
                    <img src="<?= $item['img'] ?>">
                    <p><?= $item['nome'] ?></p>
                    <p><?= $item['preco'] ?></p>
                    <button>Comprar</button>
                </div>
            <?php endforeach; ?>
        </div>
    </section>

    <!-- REFRIGERANTES -->
    <section>
        <h2>Refrigerantes</h2>
        <div class="container">
            <?php foreach ($refrigerantes as $item): ?>
                <div class="card">
                    <img src="<?= $item['img'] ?>">
                    <p><?= $item['nome'] ?></p>
                    <p><?= $item['preco'] ?></p>

                    <button>Comprar</button>
                </div>
            <?php endforeach; ?>
        </div>
    </section>

</body>

</html>