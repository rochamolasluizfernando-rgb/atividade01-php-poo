<?php

require_once 'src/Planta.php';

$planta = new Planta(
    "Orquídea",
    "Phalaenopsis",
    1
);

?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Catálogo de Plantas</title>
    <link rel="stylesheet" href="estilos.css">
</head>

<body>

    <main class="container">

        <h1>Catálogo de Plantas</h1>

        <p class="subtitulo">
            Cuidados simples para cultivar em casa.
        </p>

        <section class="cartao">

            <h2>Nome Popular</h2>

            <div class="informacao">
                <span class="valor">
                    <?= $planta->getNome(); ?>
                </span>
            </div>

            <div class="informacao">
                <span class="rotulo">Espécie científica</span>
                <span class="valor">
                    <?= $planta->getEspecie(); ?>
                </span>
            </div>

            <div class="informacao">
                <span class="rotulo">Água recomendada por dia</span>
                <span class="valor">
                    <?= $planta->getAguaPorDia(); ?> L
                </span>
            </div>

            <div class="destaque">
                <strong>Recomendação para 7 dias</strong>
                
                <p>
                    <?= $planta->calcularAguaSemanal(); ?> L
                </p>
            </div>

        </section>

        <footer>
            Projeto desenvolvido com PHP e Programação Orientada a Objetos.
        </footer>

    </main>

</body>

</html>