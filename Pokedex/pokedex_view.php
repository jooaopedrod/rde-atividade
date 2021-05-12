<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pokedex</title>
    <link rel="stylesheet" href="css.css">

</head>

<body>


    <?php foreach ($pokemons as $poke) : ?>
        <div class="card">

            <img class="card-image" src="<?= $poke['imagem'] ?>" alt="">
            <h4><?= $poke['nome'] ?></h4>
            <p>Altura: <?= $poke['altura'] ?> cm.</p>
            <p>Peso: <?= $poke['peso'] ?> g.</p>
            <p>Habilidades: </p>

            <ul style="list-style: none; text-align: none;">
                <?php foreach ($poke['habilidade'] as $hab) : ?>
                    <li><?= $hab['ability']['name'] ?></li>
                <?php endforeach; ?>
            </ul>

        </div>
    <?php endforeach; ?>
</body>

</html>