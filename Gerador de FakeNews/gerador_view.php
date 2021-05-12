<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

</head>

<body style="padding-left: 500px; padding-top: 50px;">
    <section>
        <form method="get" action="Index.php">
            <select name="letra">
                <?php
                foreach ($vetor1 as $letra => $frase1) {
                    print('<option value="' . $frase1 . '">' . $letra . '</option>');
                }
                ?>
            </select>

            <select name="mes">
                <p>mes</p>
                <?php
                foreach ($vetor2 as $mes => $frase2) {
                    print('<option value="' . $frase2 . '" >' . $mes . '</option>');
                }
                ?>
            </select>

            <select name="dia">
                <?php
                foreach ($vetor3 as $dia => $frase3) {
                    print('<option value="' . $frase3 . '">' . $dia . '</option>');
                }
                ?>
            </select>
            <input type="submit" value="Gerar noticia" />
        </form>
    </section>

    <section style="padding-top: 55px; ">
        <?php
        if (isset($_GET['letra'])) {
            $letra = $_GET['letra'];
            $mes = $_GET['mes'];
            $dia = $_GET['dia'];
            mostar($letra, $mes, $dia);
        }
        ?>
    </section>
</body>

</html>