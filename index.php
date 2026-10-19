<?php

require_once 'src/Planta.php';

$planta = new Planta(
    "Suculenta",
    "Echeveria elegans",
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

            <h2>
                <h2>Nome Popular</h2>
            <p>
                <?= $planta->getNome(); ?>
            </p>
            </h2>

        </section>

        <section>
            <div class="informacao">
                <span class="rotulo"></span>

                <h2>Espécie científica</h2>
                <span class="valor">
                    <p>
                        <?= $planta->getEspecie(); ?>
                    </p>
                </span>
            </div>

            <div class="informacao">
                <h2><span class="rotulo">Água recomendada por dia</span></h2>

                <span class="valor">
                    <p>
                        <?= $planta->getAguaPorDia(); ?> L
                    </p>
                </span>
            </div>

            <div class="destaque">
                <h2><strong>Recomendação para sete dias</strong></h2>

                <p>
                    <?= $planta->calcularAguaSemanal(); ?> L
                </p>
            </div>
        </section>

        <h2><footer>Projeto desenvolvido com PHP e Programação Orientada a Objetos.</footer></h2>
    </main>
</body>
</html>
