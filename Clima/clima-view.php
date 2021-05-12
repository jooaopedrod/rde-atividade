<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css-bootstrap/style.css">
    <link rel="stylesheet" href="css-bootstrap/bootstrap.min.css">
    <style>
        h1 {
            text-transform: capitalize;
        }
    </style>
</head>

<body style="padding-left:500px; padding-top: 50px;">

    <form action="index.php" method="GET">

        <input type="text" placeholder="Nome da cidade" name="nome_cidade"> <br />
        <input type="submit">

    </form>

    <div style="padding-top: 50px;">
        <?php
        if (isset($_GET['nome_cidade'])) {
            print(' <h1>' . $nomeCidade . '</h1>');
            print('<p>Temperatura: ' . $temperatura . '°C</p>');
            print('<p>Sensação Térmica: ' . $sensacaoTermica . '°C</p>');
            print('<p>Umidade: ' . $umidade . '%</p>');
            print('<p>Velocidade do vento:' . $velocidadeVento . 'km/h</p>');
        }
        ?>
    </div>

</body>

</html>