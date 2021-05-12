<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">


    <title>Home</title>
    <link rel="stylesheet" href="css-bootstrap/style.css">
    <link rel="stylesheet" href="css-bootstrap/bootstrap.min.css">
</head>

<body style="background-color: #77DD77;">
    <div id="conteudo" class="itens">
        <header style="padding-bottom: 50px; text-align: center;">
            <h1 class="titulo">Safadometro</h1>
        </header>

        <div class="container">

            <div class="row content-wrapper justify-content-center">

                <form method="get" action="index.php">
                    <div class="col-lg-12 col-md col-12 form-group">
                        <input type="number" name="dia" placeholder="Dia" class="form-control" min="1" max="31">
                    </div>
                    <div class="col-lg-12 col-md col-12 form-group">
                        <input type="number" name="mes" placeholder="Mês" class="form-control" min="1" max="12">
                    </div>
                    <div class="col-lg-12 col-md col-12 form-group">
                        <input type="number" name="ano" placeholder="Ano" class="form-control" min="1" max="99">
                    </div>
                    <div class="col-12 col-md-auto mbr-section-btn">
                        <button type="submit" class="btn btn-secondary display-4">CALCULAR</button>
                    </div>

                </form>
            </div>
            <div style="text-align: center; padding-top: 50px;">
                <?php
                if (isset($_GET['dia'])) {
                    safadao($dia, $mes, $ano);
                }
                ?>
            </div>
        </div>
    </div>
</body>

</html>